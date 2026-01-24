<template>
  <!-- Loading State -->
  <div v-if="loading" class="text-center py-5">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <p class="mt-2">Loading order details...</p>
  </div>

  <!-- Error State -->
  <div v-else-if="error" class="alert alert-danger">
    <i class="fas fa-exclamation-triangle me-2"></i>
    {{ error }}
  </div>

  <!-- Order Details -->
  <div v-else-if="transaction">
    <div class="lg:grid lg:grid-cols-3 gap-[25px]">
      <div class="lg:col-span-2">
        <!-- Transaction Info -->
        <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
          <div class="trezo-card-header mb-[20px]">
            <h5 class="text-xl font-semibold">Order #{{ transaction.transaction_number }}</h5>
            <p class="text-sm text-gray-500 mt-1">{{ formatDate(transaction.transaction_date) }}</p>
          </div>
          <div class="trezo-card-content">
            <div class="mb-3">
              <span class="font-medium">Status: </span>
              <span :class="getStatusClass(transaction.status)" class="badge ms-2">
                {{ transaction.status }}
              </span>
            </div>
            <div class="mb-3">
              <span class="font-medium">Total Amount: </span>
              <span class="text-lg">{{ formatCurrency(transaction.total_amount) }}</span>
            </div>
          </div>
        </div>

        <!-- Order Items -->
        <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
          <div class="trezo-card-header mb-[20px]">
            <h5 class="text-lg font-semibold">Order Items</h5>
          </div>
          <div class="trezo-card-content">
            <div v-if="transaction.items && transaction.items.length > 0">
              <div v-for="item in transaction.items" :key="item.id" class="flex items-center justify-between border-b py-3">
                <div class="flex-1">
                  <p class="font-medium">{{ item.product?.name || 'Product Name' }}</p>
                  <p class="text-sm text-gray-500">Qty: {{ item.qty || 0 }}</p>
                </div>
                <div class="text-right">
                  <p class="font-medium">{{ formatCurrency((item.product?.price || 0) * (item.qty || 0)) }}</p>
                  <p class="text-sm text-gray-500">{{ formatCurrency(item.product?.price || 0) }} x {{ item.qty || 0 }}</p>
                </div>
              </div>
            </div>
            <div v-else class="text-center text-gray-500 py-4">
              No items found in this order
            </div>
            <div class="flex items-center justify-between border-b py-3">
              <span class="font-medium">Shipping Cost</span>
              <span>{{ formatCurrency(transaction.shipping_cost || 0) }}</span>
            </div>
            <div class="flex items-center justify-between pt-3">
              <span class="font-bold text-lg">Total</span>
              <span class="font-bold text-lg">{{ formatCurrency(transaction.total_amount) }}</span>
            </div>
          </div>
        </div>

        <!-- Delivery Tracking Component -->
        <div class="mb-[25px]">
          <DeliveryTracking :transaction-id="transactionId" />
        </div>
      </div>

      <div class="lg:col-span-1">
        <OrderSummary :transaction="transaction" />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted } from "vue";
import { useRoute } from "vue-router";
import OrderSummary from "./OrderSummary.vue";
import DeliveryTracking from "@/components/DeliveryTracking.vue";
import axios from "axios";

export default defineComponent({
  name: "OrderDetails",
  components: {
    OrderSummary,
    DeliveryTracking,
  },
  setup() {
    const route = useRoute();
    const transactionId = ref<number>(0);
    const transaction = ref<any>(null);
    const loading = ref(true);
    const error = ref<string | null>(null);

    const fetchTransaction = async () => {
      try {
        loading.value = true;
        console.log('Fetching transaction ID:', transactionId.value);
        const response = await axios.get(`/api/transactions/${transactionId.value}`);
        transaction.value = response.data.transaction;
        error.value = null;
        console.log('Transaction loaded:', transaction.value);
      } catch (err: any) {
        console.error('Error fetching transaction:', err);

        // Try to get list of available transactions for debugging
        try {
          const listResponse = await axios.get('/api/transactions');
          console.log('Available transactions:', listResponse.data);
          error.value = `Transaction #${transactionId.value} not found. Available transactions: ${listResponse.data.map((t: any) => t.id).join(', ')}`;
        } catch (listErr) {
          error.value = err.response?.data?.message || 'Failed to load order details';
        }
      } finally {
        loading.value = false;
      }
    };

    const formatDate = (dateString: string) => {
      if (!dateString) return '';
      const date = new Date(dateString);
      return date.toLocaleString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
      });
    };

    const formatCurrency = (amount: number) => {
      if (!amount) return 'Rp 0';
      return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
      }).format(amount);
    };

    const getStatusClass = (status: string) => {
      const classMap: Record<string, string> = {
        'completed': 'bg-green-100 text-green-600',
        'pending': 'bg-yellow-100 text-yellow-600',
        'paid': 'bg-green-400 text-white',
        'canceled': 'bg-red-100 text-red-600'
      };
      return classMap[status] || 'bg-gray-100 text-gray-600';
    };

    onMounted(() => {
      // Get transaction ID from route params
      if (route.params.id) {
        transactionId.value = parseInt(route.params.id as string);
        fetchTransaction();
      } else {
        error.value = 'Transaction ID not found';
        loading.value = false;
      }
    });

    return {
      transactionId,
      transaction,
      loading,
      error,
      formatDate,
      formatCurrency,
      getStatusClass,
    };
  },
});
</script>

<style scoped>
.badge {
  padding: 0.25rem 0.75rem;
  border-radius: 0.375rem;
  font-weight: 500;
  font-size: 0.875rem;
}
</style>
