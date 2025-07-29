<template>
  <div
    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[25px] lg:gap-[25px] mb-[25px]"
  >
    <TotalSales />

    <TotalTransactions />

    <AverageOrderValue />

    <TotalDiscount />
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <SalesAnalytics />
    </div>
    <div class="lg:col-span-1">
      <CustomerSegmentationChart />
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <Categories />
    </div>
    <div class="lg:col-span-1">
      <OrderDetails />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import TotalSales from "../../components/Dashboard/POSSystem/TotalSales.vue";
import TotalTransactions from "../../components/Dashboard/POSSystem/TotalTransactions.vue";
import AverageOrderValue from "../../components/Dashboard/POSSystem/AverageOrderValue.vue";
import TotalDiscount from "../../components/Dashboard/POSSystem/TotalDiscount.vue";
import SalesAnalytics from "../../components/Dashboard/POSSystem/SalesAnalytics.vue";
import CustomerSegmentationChart from "../../components/Dashboard/POSSystem/CustomerSegmentationChart.vue";
import Categories from "../../components/Dashboard/POSSystem/Categories.vue";
import OrderDetails from "../../components/Dashboard/POSSystem/OrderDetails.vue";

export default defineComponent({
  name: "POSSystemPage",
  components: {
    TotalSales,
    TotalTransactions,
    AverageOrderValue,
    TotalDiscount,
    SalesAnalytics,
    CustomerSegmentationChart,
    Categories,
    OrderDetails,
  },
});
</script>
