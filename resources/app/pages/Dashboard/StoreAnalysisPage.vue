<template>
  <div class="grid grid-cols-1 xl:grid-cols-4 gap-[25px] mb-[25px]">
    <div class="xl:col-span-3">
      <WelcomeToStore />

      <Stats />
    </div>
    <div class="xl:col-span-1">
      <CustomerVisits />
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-1">
      <TopSellingProducts />
    </div>
    <div class="lg:col-span-2">
      <GrossRevenueChart />
    </div>
  </div>

  <div class="grid grid-cols-1 xl:grid-cols-4 gap-[25px] mb-[25px]">
    <div class="xl:col-span-3">
      <RecentSales />
    </div>
    <div class="xl:col-span-1">
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-1 gap-[25px]">
        <SalesByGenderChart />

        <SalesThisMonthChart />
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-1">
      <SalesByCategoryChart />
    </div>
    <div class="lg:col-span-2">
      <StockAlerts />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import WelcomeToStore from "../../components/Dashboard/StoreAnalysis/WelcomeToStore.vue";
import Stats from "../../components/Dashboard/StoreAnalysis/Stats.vue";
import CustomerVisits from "../../components/Dashboard/StoreAnalysis/CustomerVisits.vue";
import TopSellingProducts from "../../components/Dashboard/StoreAnalysis/TopSellingProducts.vue";
import GrossRevenueChart from "../../components/Dashboard/StoreAnalysis/GrossRevenueChart.vue";
import RecentSales from "../../components/Dashboard/StoreAnalysis/RecentSales.vue";
import SalesByGenderChart from "../../components/Dashboard/StoreAnalysis/SalesByGenderChart.vue";
import SalesThisMonthChart from "../../components/Dashboard/StoreAnalysis/SalesThisMonthChart.vue";
import SalesByCategoryChart from "../../components/Dashboard/StoreAnalysis/SalesByCategoryChart.vue";
import StockAlerts from "../../components/Dashboard/StoreAnalysis/StockAlerts.vue";

export default defineComponent({
  name: "StoreAnalysisPage",
  components: {
    WelcomeToStore,
    Stats,
    CustomerVisits,
    TopSellingProducts,
    GrossRevenueChart,
    RecentSales,
    SalesByGenderChart,
    SalesThisMonthChart,
    SalesByCategoryChart,
    StockAlerts,
  },
});
</script>
