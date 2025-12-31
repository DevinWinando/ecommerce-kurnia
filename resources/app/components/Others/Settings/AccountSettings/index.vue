<template>
  <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md mt-[15vh]">
    <div class="trezo-card-content">
      <div class="w-full p-4 mb-4 rounded-xl shadow bg-white">
        <div class="flex flex-col md:flex-row items-center md:justify-between justify-center">
          <div>
            <h2 class="text-lg font-semibold text-gray-800">{{ authStore?.user?.first_name }} {{ authStore?.user?.last_name }}</h2>
            <div class="mt-1 flex items-center text-sm text-green-600 font-medium">
              <svg class="w-4 h-4 mr-1 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3-11a1 1 0 10-2 0v1H9V7a1 1 0 10-2 0v1a1 1 0 00-1 1v2a1 1 0 001 1v1a1 1 0 102 0v-1h2v1a1 1 0 102 0v-1a1 1 0 001-1V9a1 1 0 00-1-1V7z" />
              </svg>
              New Member
            </div>
          </div>

          <div>
            <svg ref="barcode"></svg>
          </div>

          <div class="text-center">
            <div class="text-lg font-semibold text-yellow-600">{{ authStore?.user?.point || 0 }}</div>
            <a href="#" class="text-sm text-gray-600 link">Tukar Poin</a>
          </div>
        </div>
      </div>

      <SettingsNav />

      <form @submit.prevent="updateProfile">
        <h5 class="text-lg mb-[6px]">Profil</h5>
        <div class="sm:grid sm:grid-cols-2 sm:gap-[25px]">
          <div class="mb-[20px] sm:mb-0">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Nama Depan <span class="text-red-500">*</span>
            </label>
            <input type="text"
              v-model="form.first_name"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              placeholder="Nama Depan" />
          </div>
          <div class="mb-[20px] sm:mb-0">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Nama Belakang <span class="text-red-500">*</span>
            </label>
            <input type="text"
              v-model="form.last_name"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              placeholder="Nama Belakang" />
          </div>
          <div class="mb-[20px] sm:mb-0">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Email <span class="text-red-500">*</span>
            </label>
            <input type="email"
              v-model="form.email"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              placeholder="Email" />
          </div>
          <div class="mb-[20px] sm:mb-0">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Telepon
            </label>
            <input type="text"
              v-model="form.phone"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              placeholder="Telepon" />
          </div>
          <div class="mb-[20px] sm:mb-0">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Kota
            </label>
            <input type="text"
              v-model="form.city"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              placeholder="Kota" />
          </div>
          <div class="mb-[20px] sm:mb-0">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Negara
            </label>
            <input type="text"
              v-model="form.country"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              placeholder="Negara" />
          </div>
          <div class="mb-[20px] sm:mb-0 sm:col-span-2">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Alamat
            </label>
            <textarea
              v-model="form.address"
              rows="3"
              class="rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] py-[15px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              placeholder="Alamat Lengkap"></textarea>
          </div>
        </div>

        <!-- Location Map Section -->
        <div class="mt-[20px] md:mt-[25px]">
          <h5 class="text-lg mb-[6px]">Lokasi</h5>
          <p class="mb-[20px] text-sm text-gray-600 dark:text-gray-400">
            Pilih lokasi Anda di peta atau cari alamat untuk mengatur koordinat lokasi.
          </p>

          <!-- Search Location Input -->
          <div class="mb-3 relative">
            <div class="flex gap-2">
              <input
                v-model="searchLocation"
                @input="onSearchInput"
                @keyup.enter="searchLocationOnMap"
                @focus="showSuggestions = true"
                type="text"
                class="flex-1 h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                placeholder="Cari lokasi..." />
              <button
                type="button"
                @click="searchLocationOnMap"
                :disabled="searchingLocation"
                class="px-4 h-[55px] rounded-md bg-primary-500 text-white hover:bg-primary-600 disabled:opacity-50 disabled:cursor-not-allowed">
                <span v-if="searchingLocation">...</span>
                <span v-else>Cari</span>
              </button>
            </div>

            <!-- Suggestions Dropdown -->
            <div
              v-if="showSuggestions && locationSuggestions.length > 0"
              class="location-suggestions"
            >
              <div
                v-for="(suggestion, index) in locationSuggestions"
                :key="index"
                class="suggestion-item"
                @click="selectSuggestion(suggestion)"
              >
                <div class="suggestion-icon">
                  <i class="ri-map-pin-line"></i>
                </div>
                <div class="suggestion-content">
                  <div class="suggestion-name">{{ suggestion.name || suggestion.display_name?.split(',')[0] }}</div>
                  <div class="suggestion-address">{{ suggestion.display_name }}</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Map -->
          <div id="map" class="map-container"></div>

          <!-- Coordinates Display -->
          <div v-if="form.latitude && form.longitude" class="mt-2 text-sm text-gray-600 dark:text-gray-400">
            <strong>Koordinat:</strong> {{ form.latitude }}, {{ form.longitude }}
          </div>
        </div>

        <!-- Profile Image Upload -->
        <div class="mt-[20px] md:mt-[25px]">
          <h5 class="text-lg mb-[6px]">Foto Profil</h5>
          <p class="mb-[20px] text-sm text-gray-600 dark:text-gray-400">
            Unggah foto profil Anda. Ukuran maksimal 2MB, format JPG/PNG.
          </p>
          <div class="relative">
            <div
              class="relative flex items-center justify-center overflow-hidden rounded-md py-[88px] px-[20px] border border-gray-200 dark:border-[#172036]">
              <div v-if="!previewImage && !authStore?.user?.avatar_url" class="flex items-center justify-center">
                <div
                  class="w-[35px] h-[35px] border border-gray-100 dark:border-[#15203c] flex items-center justify-center rounded-md text-primary-500 text-lg ltr:mr-[12px] rtl:ml-[12px]">
                  <i class="ri-upload-2-line"></i>
                </div>
                <p class="leading-[1.5]">
                  <strong class="text-black dark:text-white">Klik untuk mengunggah</strong><br />
                  file Anda di sini
                </p>
              </div>
              <div v-else class="flex flex-col items-center">
                <img
                  :src="previewImage || authStore?.user?.avatar_url"
                  alt="Profile Preview"
                  class="max-w-[200px] max-h-[200px] rounded-md mb-2" />
                <button
                  type="button"
                  @click="removeImage"
                  class="text-sm text-red-500 hover:text-red-700">
                  Hapus Gambar
                </button>
              </div>
              <input
                type="file"
                ref="fileInput"
                @change="handleFileSelect"
                accept="image/jpeg,image/png,image/jpg"
                class="absolute top-0 left-0 right-0 bottom-0 rounded-md z-[1] opacity-0 cursor-pointer" />
            </div>
          </div>
        </div>

        <div class="mt-[20px] md:mt-[25px]">
          <button
            type="button"
            @click="cancelUpdate"
            class="font-medium inline-block transition-all rounded-md md:text-md ltr:mr-[15px] rtl:ml-[15px] py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-danger-500 text-white hover:bg-danger-400">
            Batal
          </button>
          <button
            type="submit"
            :disabled="isSubmitting"
            class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-[#7d0909] text-white hover:bg-[#a00c0c] disabled:opacity-50 disabled:cursor-not-allowed">
            <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
              <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                check
              </i>
              {{ isSubmitting ? 'Menyimpan...' : 'Perbarui Profil' }}
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive, onMounted, onBeforeUnmount, nextTick } from "vue";
import SettingsNav from "../SettingsNav.vue";
import JsBarcode from "jsbarcode";
import { useAuthStore } from "@/stores/auth";
import axios from "axios";

const authStore = useAuthStore();

const barcode = ref(null);
const fileInput = ref(null);
const previewImage = ref(null);
const selectedFile = ref(null);
const isSubmitting = ref(false);

// Map related
const map = ref(null);
const marker = ref(null);
const searchLocation = ref("");
const searchingLocation = ref(false);
const locationSuggestions = ref([]);
const showSuggestions = ref(false);
const searchTimeout = ref(null);

// Form data
const form = reactive({
  first_name: "",
  last_name: "",
  email: "",
  phone: "",
  address: "",
  city: "",
  country: "",
  latitude: null,
  longitude: null,
});

// Initialize form with user data
onMounted(async () => {
  // Ensure user data is loaded
  if (!authStore?.user) {
    await authStore.getCurrentUser();
  }

  if (authStore?.user) {
    form.first_name = authStore.user.first_name ? String(authStore.user.first_name) : "";
    form.last_name = authStore.user.last_name ? String(authStore.user.last_name) : "";
    form.email = authStore.user.email ? String(authStore.user.email) : "";
    form.phone = authStore.user.phone ? String(authStore.user.phone) : "";
    form.address = authStore.user.address ? String(authStore.user.address) : "";
    form.city = authStore.user.city ? String(authStore.user.city) : "";
    form.country = authStore.user.country ? String(authStore.user.country) : "";
    form.latitude = authStore.user.latitude ? parseFloat(authStore.user.latitude) : null;
    form.longitude = authStore.user.longitude ? parseFloat(authStore.user.longitude) : null;
  }

  // Initialize barcode
  if (barcode.value) {
    const barcodeText = authStore?.user?.code || authStore?.user?.id?.toString() || "000000";
    JsBarcode(barcode.value, barcodeText, {
      format: 'CODE128',
      lineColor: '#000',
      width: 2,
      height: 40,
      displayValue: false,
    });
  }

  // Initialize map
  nextTick(() => {
    initMap();
  });

  // Close suggestions when clicking outside
  document.addEventListener('click', handleClickOutside);
});

onBeforeUnmount(() => {
  if (map.value) {
    map.value.remove();
  }
  document.removeEventListener('click', handleClickOutside);
  if (searchTimeout.value) {
    clearTimeout(searchTimeout.value);
  }
});

// File handling
const handleFileSelect = (event) => {
  const file = event.target.files[0];
  if (file) {
    // Validate file size (2MB)
    if (file.size > 2 * 1024 * 1024) {
      alert("Ukuran file maksimal 2MB");
      return;
    }

    // Validate file type
    if (!file.type.match(/^image\/(jpeg|jpg|png)$/)) {
      alert("Format file harus JPG atau PNG");
      return;
    }

    selectedFile.value = file;
    const reader = new FileReader();
    reader.onload = (e) => {
      previewImage.value = e.target.result;
    };
    reader.readAsDataURL(file);
  }
};

const removeImage = () => {
  selectedFile.value = null;
  previewImage.value = null;
  if (fileInput.value) {
    fileInput.value.value = "";
  }
};

// Map functions
const initMap = () => {
  nextTick(() => {
    // Wait for Leaflet to be available
    if (typeof L === 'undefined' || typeof window.L === 'undefined') {
      console.warn('Leaflet is not loaded, retrying in 100ms...');
      setTimeout(() => {
        if (typeof L !== 'undefined' || typeof window.L !== 'undefined') {
          initMap();
        } else {
          console.error('Leaflet failed to load. Please ensure Leaflet CSS and JS are included.');
        }
      }, 100);
      return;
    }

    // Use window.L if L is not available in current scope
    const Leaflet = typeof L !== 'undefined' ? L : window.L;

    // Remove existing map if any
    if (map.value) {
      map.value.remove();
      map.value = null;
      marker.value = null;
    }

    const lat = form.latitude ? parseFloat(form.latitude) : -2.548926;
    const lng = form.longitude ? parseFloat(form.longitude) : 118.0148634;
    const defaultZoom = (form.latitude && form.longitude) ? 13 : 5;

    map.value = Leaflet.map('map').setView([lat, lng], defaultZoom);

    Leaflet.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      maxZoom: 19,
    }).addTo(map.value);

    // Add marker if location exists
    if (form.latitude && form.longitude) {
      marker.value = Leaflet.marker([lat, lng], {
        draggable: false
      }).addTo(map.value);

      marker.value.bindPopup(`Lat: ${lat.toFixed(6)}, Lng: ${lng.toFixed(6)}`);
    }

    // Click event to set location
    map.value.on('click', (e) => {
      const { lat, lng } = e.latlng;
      form.latitude = lat;
      form.longitude = lng;

      if (marker.value) {
        marker.value.setLatLng([lat, lng]);
        marker.value.bindPopup(`Lat: ${lat.toFixed(6)}, Lng: ${lng.toFixed(6)}`).openPopup();
      } else {
        marker.value = Leaflet.marker([lat, lng], {
          draggable: false
        }).addTo(map.value);
        marker.value.bindPopup(`Lat: ${lat.toFixed(6)}, Lng: ${lng.toFixed(6)}`).openPopup();
      }
    });

    // Fix map size issue
    setTimeout(() => {
      map.value.invalidateSize();
    }, 400);
  });
};

const onSearchInput = () => {
  if (searchTimeout.value) {
    clearTimeout(searchTimeout.value);
  }

  if (searchLocation.value.trim().length < 3) {
    locationSuggestions.value = [];
    showSuggestions.value = false;
    return;
  }

  searchTimeout.value = setTimeout(() => {
    fetchLocationSuggestions();
  }, 500);
};

const fetchLocationSuggestions = async () => {
  if (!searchLocation.value || searchLocation.value.trim() === '') {
    return;
  }

  searchingLocation.value = true;

  try {
    // Use backend proxy endpoint to avoid CORS issues
    const response = await axios.get('/api/geocode/search', {
      params: {
        q: searchLocation.value,
        limit: 5,
      },
    });

    if (response.data.success && response.data.data && response.data.data.length > 0) {
      locationSuggestions.value = response.data.data;
      showSuggestions.value = true;
    } else {
      locationSuggestions.value = [];
      showSuggestions.value = false;
    }
  } catch (error) {
    console.error('Error fetching suggestions:', error);
    locationSuggestions.value = [];
    showSuggestions.value = false;
  } finally {
    searchingLocation.value = false;
  }
};

const selectSuggestion = (suggestion) => {
  const lat = parseFloat(suggestion.lat);
  const lng = parseFloat(suggestion.lon);

  form.latitude = lat;
  form.longitude = lng;
  searchLocation.value = suggestion.display_name;
  showSuggestions.value = false;
  locationSuggestions.value = [];

  if (map.value) {
    map.value.setView([lat, lng], 15);

      // Use window.L if L is not available in current scope
      const Leaflet = typeof L !== 'undefined' ? L : window.L;

      if (marker.value) {
        marker.value.setLatLng([lat, lng]);
        marker.value.bindPopup(suggestion.display_name).openPopup();
      } else {
        marker.value = Leaflet.marker([lat, lng], {
          draggable: false
        }).addTo(map.value);
        marker.value.bindPopup(suggestion.display_name).openPopup();
      }
  }
};

const searchLocationOnMap = async () => {
  if (!searchLocation.value || searchLocation.value.trim() === '') {
    return;
  }

  searchingLocation.value = true;

  try {
    if (locationSuggestions.value.length > 0) {
      selectSuggestion(locationSuggestions.value[0]);
      return;
    }

    // Use backend proxy endpoint to avoid CORS issues
    const response = await axios.get('/api/geocode/search', {
      params: {
        q: searchLocation.value,
        limit: 1,
      },
    });

    if (response.data.success && response.data.data && response.data.data.length > 0) {
      selectSuggestion(response.data.data[0]);
    } else {
      alert("Lokasi tidak ditemukan");
    }
  } catch (error) {
    console.error('Geocoding error:', error);
    alert("Error saat mencari lokasi");
  } finally {
    searchingLocation.value = false;
  }
};

const handleClickOutside = (event) => {
  const suggestionsEl = document.querySelector('.location-suggestions');
  const inputEl = event.target.closest('.relative');

  if (suggestionsEl && !suggestionsEl.contains(event.target) && !inputEl) {
    showSuggestions.value = false;
  }
};

// Form submission
const updateProfile = async () => {
  isSubmitting.value = true;

  try {
    // Required fields - ensure they are strings and not null/undefined
    const firstName = (form.first_name || '').toString().trim();
    const lastName = (form.last_name || '').toString().trim();
    const email = (form.email || '').toString().trim();

    // Validation
    if (!firstName) {
      alert("Nama Depan harus diisi");
      isSubmitting.value = false;
      return;
    }
    if (!lastName) {
      alert("Nama Belakang harus diisi");
      isSubmitting.value = false;
      return;
    }
    if (!email) {
      alert("Email harus diisi");
      isSubmitting.value = false;
      return;
    }

    const formData = new FormData();

    // Required fields - always send
    formData.append('first_name', firstName);
    formData.append('last_name', lastName);
    formData.append('email', email);

    // Optional fields
    if (form.phone) {
      formData.append('phone', form.phone.toString().trim());
    }
    if (form.address) {
      formData.append('address', form.address.toString().trim());
    }
    if (form.city) {
      formData.append('city', form.city.toString().trim());
    }
    if (form.country) {
      formData.append('country', form.country.toString().trim());
    }

    // Location fields
    if (form.latitude !== null && form.latitude !== undefined && form.latitude !== '') {
      formData.append('latitude', form.latitude.toString());
    }
    if (form.longitude !== null && form.longitude !== undefined && form.longitude !== '') {
      formData.append('longitude', form.longitude.toString());
    }

    // Avatar
    if (selectedFile.value) {
      formData.append('avatar', selectedFile.value);
    }

    console.log('Sending form data:', {
      first_name: firstName,
      last_name: lastName,
      email: email,
      phone: form.phone,
      address: form.address,
      city: form.city,
      country: form.country,
      latitude: form.latitude,
      longitude: form.longitude,
    });

    // Log FormData contents
    for (let pair of formData.entries()) {
      console.log(pair[0] + ': ' + pair[1]);
    }

    // Use POST with _method=PUT for FormData (Laravel requirement)
    formData.append('_method', 'PUT');

    const response = await axios.post(`/api/users/${authStore.user.id}`, formData, {
      headers: {
        'Content-Type': 'multipart/form-data',
      },
    });

    if (response.status === 200) {
      // Update auth store
      await authStore.getCurrentUser();
      alert("Profil berhasil diperbarui");
      cancelUpdate();
    } else {
      alert("Gagal memperbarui profil");
    }
  } catch (error) {
    console.error('Error updating profile:', error);
    if (error.response?.data?.errors) {
      const errors = error.response.data.errors;
      const errorMessages = Object.values(errors).flat().join(', ');
      alert(`Gagal memperbarui profil: ${errorMessages}`);
    } else {
      alert(error.response?.data?.message || "Gagal memperbarui profil");
    }
  } finally {
    isSubmitting.value = false;
  }
};

const cancelUpdate = () => {
  // Reset form to original values
  if (authStore?.user) {
    form.first_name = authStore.user.first_name || "";
    form.last_name = authStore.user.last_name || "";
    form.email = authStore.user.email || "";
    form.phone = authStore.user.phone || "";
    form.address = authStore.user.address || "";
    form.city = authStore.user.city || "";
    form.country = authStore.user.country || "";
    form.latitude = authStore.user.latitude || null;
    form.longitude = authStore.user.longitude || null;
  }
  removeImage();
  searchLocation.value = "";
  if (map.value && form.latitude && form.longitude) {
    map.value.setView([form.latitude, form.longitude], 13);
  }
};
</script>

<style scoped>
.map-container {
  height: 300px;
  width: 100%;
  border-radius: 8px;
  border: 1px solid #e5e7eb;
  z-index: 1;
}

.location-suggestions {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  background: white;
  border: 1px solid #e5e7eb;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  max-height: 300px;
  overflow-y: auto;
  z-index: 1000;
  margin-top: 2px;
}

.suggestion-item {
  display: flex;
  align-items: flex-start;
  padding: 12px 15px;
  cursor: pointer;
  border-bottom: 1px solid #f0f0f0;
  transition: background-color 0.2s;
}

.suggestion-item:last-child {
  border-bottom: none;
}

.suggestion-item:hover {
  background-color: #f8f9fa;
}

.suggestion-icon {
  margin-right: 12px;
  color: #007bff;
  font-size: 18px;
  margin-top: 2px;
}

.suggestion-content {
  flex: 1;
}

.suggestion-name {
  font-weight: 600;
  color: #333;
  margin-bottom: 4px;
  font-size: 14px;
}

.suggestion-address {
  font-size: 12px;
  color: #666;
  line-height: 1.4;
}
</style>
