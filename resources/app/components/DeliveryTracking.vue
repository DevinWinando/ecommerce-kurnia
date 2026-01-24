<template>
  <div class="delivery-tracking">
    <!-- Loading State -->
    <div v-if="loading" class="text-center py-5">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <p class="mt-2">Loading delivery tracking...</p>
    </div>

    <!-- Error State -->
    <div v-else-if="error" class="alert alert-danger">
      <i class="fas fa-exclamation-triangle me-2"></i>
      {{ error }}
    </div>

    <!-- No Delivery State -->
    <div v-else-if="!deliveryTracking || !deliveryTracking.success" class="alert alert-warning">
      <i class="fas fa-info-circle me-2"></i>
      <strong>No delivery tracking available</strong>
      <p class="mb-2">This order hasn't been assigned for delivery yet.</p>
      <button @click="requestDelivery" class="btn btn-primary btn-sm">
        <i class="fas fa-truck me-1"></i>
        Request Delivery
      </button>
    </div>

    <!-- Delivery Tracking Card -->
    <div v-else class="card mb-4">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0">
          <i class="fas fa-shipping-fast me-2"></i>
          Delivery Tracking
        </h5>
      </div>
      <div class="card-body ms-2">
        <!-- Delivery Status -->
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Status:</strong>
            <span :class="getStatusClass(deliveryTracking.delivery.status)" class="ms-2 badge">
              {{ formatStatus(deliveryTracking.delivery.status) }}
            </span>
          </div>
          <div class="col-md-6" v-if="deliveryTracking.delivery.driver_name">
            <strong>Driver:</strong> {{ deliveryTracking.delivery.driver_name }}
            <span v-if="deliveryTracking.delivery.driver_phone" class="ms-2 text-muted">
              ({{ deliveryTracking.delivery.driver_phone }})
            </span>
          </div>
        </div>

        <!-- Timeline -->
        <div class="delivery-timeline mb-4">
          <div class="timeline-item" :class="{ active: deliveryTracking.delivery.assigned_at }">
            <i class="fas fa-user-check"></i>
            <div>
              <strong>Assigned</strong>
              <p v-if="deliveryTracking.delivery.assigned_at">
                {{ formatDate(deliveryTracking.delivery.assigned_at) }}
              </p>
            </div>
          </div>
          <div class="timeline-item" :class="{ active: deliveryTracking.delivery.started_at }">
            <i class="fas fa-truck"></i>
            <div>
              <strong>On Delivery</strong>
              <p v-if="deliveryTracking.delivery.started_at">
                {{ formatDate(deliveryTracking.delivery.started_at) }}
              </p>
            </div>
          </div>
          <div class="timeline-item" :class="{ active: deliveryTracking.delivery.delivered_at }">
            <i class="fas fa-check-circle"></i>
            <div>
              <strong>Delivered</strong>
              <p v-if="deliveryTracking.delivery.delivered_at">
                {{ formatDate(deliveryTracking.delivery.delivered_at) }}
              </p>
            </div>
          </div>
        </div>

        <!-- Delivery Info -->
        <div class="row mb-3" v-if="deliveryTracking.tracking">
          <div class="col-md-3">
            <small class="text-muted">Distance</small>
            <div>{{ deliveryTracking.tracking.distance_text || 'N/A' }}</div>
          </div>
          <div class="col-md-3">
            <small class="text-muted">Duration</small>
            <div>{{ deliveryTracking.tracking.duration_text || 'N/A' }}</div>
          </div>
          <div class="col-md-3">
            <small class="text-muted">From</small>
            <div>{{ deliveryTracking.tracking.origin_name || 'Warehouse' }}</div>
          </div>
          <div class="col-md-3">
            <small class="text-muted">To</small>
            <div>{{ deliveryTracking.tracking.destination_name || 'Customer' }}</div>
          </div>
        </div>

        <!-- Live Map Tracking -->
        <div v-if="deliveryTracking.delivery.status === 'on_delivery' || deliveryTracking.delivery.status === 'delivered'"
             class="map-container mb-3">
          <div id="delivery-map" style="height: 400px; border-radius: 8px;"></div>

          <!-- Tracking Stats -->
          <div class="mt-2 d-flex justify-content-between text-muted small mb-2 ms-1">
            <span v-if="deliveryTracking.tracking_history && deliveryTracking.tracking_history.length > 0">
              <i class="fas fa-route me-1"></i>
              {{ deliveryTracking.tracking_history.length }} tracking points recorded
            </span>
            <span v-if="deliveryTracking.delivery.latest_location">
              <i class="fas fa-clock me-1"></i>
              Last updated: {{ formatTimeAgo(deliveryTracking.delivery.latest_location.tracked_at) }}
            </span>
          </div>
        </div>

        <!-- Status Logs -->
        <div v-if="deliveryTracking.status_logs && deliveryTracking.status_logs.length > 0" class="mt-4">
          <h6><i class="fas fa-list me-2"></i>Status Updates</h6>
          <div class="status-logs">
            <div v-for="(log, index) in deliveryTracking.status_logs" :key="index" class="status-entry mb-2">
              <span :class="getStatusClass(log.status)" class="badge">{{ formatStatus(log.status) }}</span>
              <small class="text-muted ms-2">{{ formatDate(log.created_at) }}</small>
              <p class="mb-0 ms-2" v-if="log.notes">{{ log.notes }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, onMounted, onUnmounted, nextTick } from 'vue';
import axios from 'axios';
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

export default {
  name: 'DeliveryTracking',
  props: {
    transactionId: {
      type: Number,
      required: true
    }
  },
  setup(props) {
    const deliveryTracking = ref(null);
    const loading = ref(true);
    const error = ref(null);
    const refreshInterval = ref(null);
    const map = ref(null);
    const markers = ref({
      origin: null,
      destination: null,
      driver: null
    });
    const routeLine = ref(null);

    // Initialize map
    const initMap = async () => {
      await nextTick();

      if (map.value) {
        map.value.remove();
      }

      const mapElement = document.getElementById('delivery-map');
      if (!mapElement) return;

      // Create map centered on Indonesia
      map.value = L.map('delivery-map').setView([-2.5, 118.0], 5);

      // Add OpenStreetMap tiles
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 19
      }).addTo(map.value);

      updateMapMarkers();
    };

    // Update map markers and route
    const updateMapMarkers = () => {
      if (!map.value || !deliveryTracking.value) return;

      const delivery = deliveryTracking.value.delivery;
      const bounds = [];

      // Clear existing markers and route
      if (markers.value.origin) markers.value.origin.remove();
      if (markers.value.destination) markers.value.destination.remove();
      if (markers.value.driver) markers.value.driver.remove();
      if (routeLine.value) routeLine.value.remove();

      // Custom icons
      const originIcon = L.divIcon({
        className: 'custom-marker',
        html: '<div style="background: #0d6efd; color: white; width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 2px solid white; box-shadow: 0 2px 5px rgba(0,0,0,0.3);"><i class="fas fa-warehouse"></i></div>',
        iconSize: [32, 32],
        iconAnchor: [16, 16]
      });

      const destinationIcon = L.divIcon({
        className: 'custom-marker',
        html: '<div style="background: #dc3545; color: white; width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 2px solid white; box-shadow: 0 2px 5px rgba(0,0,0,0.3);"><i class="fas fa-map-marker-alt"></i></div>',
        iconSize: [32, 32],
        iconAnchor: [16, 32]
      });

      const driverIcon = L.divIcon({
        className: 'custom-marker',
        html: '<div style="background: #28a745; color: white; width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 3px solid white; box-shadow: 0 3px 8px rgba(0,0,0,0.4); animation: pulse 2s infinite;"><i class="fas fa-truck"></i></div>',
        iconSize: [36, 36],
        iconAnchor: [18, 18]
      });

      // Add origin marker (warehouse)
      if (delivery.origin_warehouse && delivery.origin_warehouse.latitude && delivery.origin_warehouse.longitude) {
        const originLat = parseFloat(delivery.origin_warehouse.latitude);
        const originLng = parseFloat(delivery.origin_warehouse.longitude);

        markers.value.origin = L.marker([originLat, originLng], { icon: originIcon })
          .addTo(map.value)
          .bindPopup(`<strong>Origin: ${delivery.origin_warehouse.name}</strong>`);

        bounds.push([originLat, originLng]);
      }

      // Add destination marker (customer)
      if (delivery.destination_client) {
        const destLat = delivery.destination_client.latitude
          ? parseFloat(delivery.destination_client.latitude)
          : null;
        const destLng = delivery.destination_client.longitude
          ? parseFloat(delivery.destination_client.longitude)
          : null;

        if (destLat && destLng) {
          markers.value.destination = L.marker([destLat, destLng], { icon: destinationIcon })
            .addTo(map.value)
            .bindPopup(`<strong>Destination: ${delivery.destination_client.name}</strong><br>${delivery.destination_client.address || ''}`);

          bounds.push([destLat, destLng]);
        }
      }

      // Add driver current location marker
      if (delivery.latest_location && delivery.latest_location.latitude && delivery.latest_location.longitude) {
        const driverLat = parseFloat(delivery.latest_location.latitude);
        const driverLng = parseFloat(delivery.latest_location.longitude);

        markers.value.driver = L.marker([driverLat, driverLng], { icon: driverIcon })
          .addTo(map.value)
          .bindPopup(`<strong>Driver Location</strong><br>Last updated: ${formatDate(delivery.latest_location.tracked_at)}`);

        bounds.push([driverLat, driverLng]);
      }

      // Draw route from tracking history
      if (deliveryTracking.value.tracking_history && deliveryTracking.value.tracking_history.length > 0) {
        const routePoints = deliveryTracking.value.tracking_history
          .filter(t => t.latitude && t.longitude)
          .map(t => [parseFloat(t.latitude), parseFloat(t.longitude)])
          .reverse(); // Reverse to show oldest to newest

        if (routePoints.length > 0) {
          routeLine.value = L.polyline(routePoints, {
            color: '#0d6efd',
            weight: 3,
            opacity: 0.7,
            smoothFactor: 1
          }).addTo(map.value);
        }
      }

      // Fit map to show all markers
      if (bounds.length > 0) {
        map.value.fitBounds(bounds, { padding: [50, 50] });
      }
    };

    // Fetch delivery tracking data
    const fetchTrackingData = async () => {
      try {
        const wasLoading = loading.value;
        if (!wasLoading) loading.value = false; // Don't show loading on refresh

        const response = await axios.get(`/api/transactions/${props.transactionId}/delivery-tracking`);
        deliveryTracking.value = response.data;
        error.value = null;

        // Initialize or update map if delivery is active
        if (response.data.success && (response.data.delivery.status === 'on_delivery' || response.data.delivery.status === 'delivered')) {
          if (!map.value) {
            await initMap();
          } else {
            updateMapMarkers();
          }
        }
      } catch (err) {
        error.value = err.response?.data?.message || 'Failed to load delivery tracking';
      } finally {
        loading.value = false;
      }
    };

    // Request delivery if not exists
    const requestDelivery = async () => {
      try {
        loading.value = true;
        await axios.post(`/api/transactions/${props.transactionId}/request-delivery`);
        await fetchTrackingData();
      } catch (err) {
        error.value = err.response?.data?.message || 'Failed to request delivery';
      } finally {
        loading.value = false;
      }
    };

    // Format status for display
    const formatStatus = (status) => {
      const statusMap = {
        'pending': 'Pending',
        'assigned': 'Assigned',
        'on_delivery': 'On Delivery',
        'delivered': 'Delivered',
        'cancelled': 'Cancelled'
      };
      return statusMap[status] || status;
    };

    // Get status badge class
    const getStatusClass = (status) => {
      const classMap = {
        'pending': 'bg-secondary',
        'assigned': 'bg-info',
        'on_delivery': 'bg-warning',
        'delivered': 'bg-success',
        'cancelled': 'bg-danger'
      };
      return classMap[status] || 'bg-secondary';
    };

    // Format date
    const formatDate = (dateString) => {
      if (!dateString) return '';
      const date = new Date(dateString);
      return date.toLocaleString('en-US', {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
      });
    };

    // Format time ago (relative time)
    const formatTimeAgo = (dateString) => {
      if (!dateString) return '';
      const date = new Date(dateString);
      const now = new Date();
      const diff = Math.floor((now - date) / 1000); // seconds

      if (diff < 60) return 'just now';
      if (diff < 3600) return `${Math.floor(diff / 60)} minutes ago`;
      if (diff < 86400) return `${Math.floor(diff / 3600)} hours ago`;
      return `${Math.floor(diff / 86400)} days ago`;
    };

    // Lifecycle hooks
    onMounted(() => {
      fetchTrackingData();

      // Auto-refresh every 30 seconds
      refreshInterval.value = setInterval(() => {
        fetchTrackingData();
      }, 30000);
    });

    onUnmounted(() => {
      if (refreshInterval.value) {
        clearInterval(refreshInterval.value);
      }
      if (map.value) {
        map.value.remove();
      }
    });

    return {
      deliveryTracking,
      loading,
      error,
      requestDelivery,
      formatStatus,
      getStatusClass,
      formatDate,
      formatTimeAgo
    };
  }
};
</script>

<style scoped>
.delivery-timeline {
  display: flex;
  justify-content: space-between;
  position: relative;
  padding: 20px 0;
}

.delivery-timeline::before {
  content: '';
  position: absolute;
  top: 35px;
  left: 0;
  right: 0;
  height: 2px;
  background: #dee2e6;
  z-index: 0;
}

.timeline-item {
  flex: 1;
  text-align: center;
  position: relative;
  z-index: 1;
}

.timeline-item i {
  font-size: 20px;
  background: white;
  padding: 10px;
  border-radius: 50%;
  color: #dee2e6;
  width: 44px;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 3px solid #dee2e6;
  margin: 0 auto;
}

.timeline-item.active i {
  color: white;
  background: #0d6efd;
  border-color: #0d6efd;
}

.timeline-item strong {
  display: block;
  margin-top: 10px;
  font-size: 14px;
}

.timeline-item p {
  font-size: 12px;
  color: #6c757d;
  margin: 5px 0 0;
}

.map-container {
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.tracking-history, .status-logs {
  background: #ffffff;
  padding: 12px;
  border-radius: 6px;
}

.tracking-entry, .status-entry {
  padding: 8px;
  border-bottom: 1px solid #dee2e6;
}

.tracking-entry:last-child, .status-entry:last-child {
  border-bottom: none;
}

/* Pulse animation for driver marker */
:deep(.custom-marker) {
  animation: none;
}

@keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.7);
  }
  70% {
    box-shadow: 0 0 0 10px rgba(40, 167, 69, 0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(40, 167, 69, 0);
  }
}
</style>

