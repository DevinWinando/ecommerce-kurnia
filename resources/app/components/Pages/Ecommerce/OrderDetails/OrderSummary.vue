<template>
  <div
    class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md"
  >
    <div
      class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between"
    >
      <div class="trezo-card-title">
        <h5 class="!mb-0">Order Summary</h5>
      </div>
    </div>

    <div class="trezo-card-content" v-if="transaction">
      <div class="table-responsive overflow-x-auto">
        <table class="w-full">
          <thead class="text-black dark:text-white">
            <tr>
              <th
                class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md"
              >
                Description
              </th>
              <th
                class="font-medium ltr:text-right rtl:text-left px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md"
              >
                Amount
              </th>
            </tr>
          </thead>
          <tbody class="text-black dark:text-white">
            <tr v-for="item in (transaction.items || [])" :key="item.id">
              <td
                class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]"
              >
                {{ item.product?.name || 'Product Name' }} (x{{ item.qty || 0 }})
              </td>
              <td
                class="text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]"
              >
                {{ formatCurrency((item.product?.price || 0) * (item.qty || 0)) }}
              </td>
            </tr>
            <tr v-if="!transaction.items || transaction.items.length === 0">
              <td colspan="2" class="text-center text-gray-500 px-[20px] py-[15px]">
                No items found
              </td>
            </tr>
            <tr>
              <td
                class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]"
              >
                Shipping Cost :
              </td>
              <td
                class="text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]"
              >
                {{ formatCurrency(transaction.shipping_cost || 0) }}
              </td>
            </tr>
            <tr>
              <td
                class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]"
              >
                Total Amount :
              </td>
              <td
                class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]"
              >
                {{ formatCurrency(transaction.total_amount) }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "OrderSummary",
  props: {
    transaction: {
      type: Object,
      default: null
    }
  },
  setup() {
    const formatCurrency = (amount: number) => {
      if (!amount) return 'Rp 0';
      return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
      }).format(amount);
    };

    return {
      formatCurrency
    };
  }
});
</script>
