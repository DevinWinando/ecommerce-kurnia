<template>
  <div class="grid grid-cols-1 xl:grid-cols-2 gap-[25px] mb-[25px]">
    <div>
      <RestaurantStatsToday />

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">
        <TotalOrders />

        <PendingOrders />
      </div>
    </div>
    <div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px] mb-[25px]">
        <RevenueChart />

        <ExpenseChart />
      </div>

      <TopSellingItems />
    </div>
  </div>

  <RecentOrdersList />

  <div
    class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-4 gap-[25px] mb-[25px]"
  >
    <div class="2xl:col-span-1 md:order-1 2xl:order-1">
      <OrderSummaryChart />
    </div>
    <div class="md:col-span-2 2xl:col-span-2 md:order-3 2xl:order-2">
      <RevenueExpenseChart />
    </div>
    <div class="2xl:col-span-1 md:order-2 2xl:order-2">
      <LowStockAlerts />
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <StaffPerformanceScores />

    <RevenueByBranches />

    <Tickets />
  </div>

  <CustomerRatings />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import RestaurantStatsToday from "../../components/Dashboard/Restaurant/RestaurantStatsToday.vue";
import TotalOrders from "../../components/Dashboard/Restaurant/TotalOrders.vue";
import PendingOrders from "../../components/Dashboard/Restaurant/PendingOrders.vue";
import RevenueChart from "../../components/Dashboard/Restaurant/RevenueChart.vue";
import ExpenseChart from "../../components/Dashboard/Restaurant/ExpenseChart.vue";
import TopSellingItems from "../../components/Dashboard/Restaurant/TopSellingItems.vue";
import RecentOrdersList from "../../components/Dashboard/Restaurant/RecentOrdersList.vue";
import OrderSummaryChart from "../../components/Dashboard/Restaurant/OrderSummaryChart.vue";
import RevenueExpenseChart from "../../components/Dashboard/Restaurant/RevenueExpenseChart.vue";
import LowStockAlerts from "../../components/Dashboard/Restaurant/LowStockAlerts.vue";
import StaffPerformanceScores from "../../components/Dashboard/Restaurant/StaffPerformanceScores.vue";
import RevenueByBranches from "../../components/Dashboard/Restaurant/RevenueByBranches.vue";
import Tickets from "../../components/Dashboard/Restaurant/Tickets.vue";
import CustomerRatings from "../../components/Dashboard/Restaurant/CustomerRatings.vue";

export default defineComponent({
  name: "RestaurantPage",
  components: {
    RestaurantStatsToday,
    TotalOrders,
    PendingOrders,
    RevenueChart,
    ExpenseChart,
    TopSellingItems,
    RecentOrdersList,
    OrderSummaryChart,
    RevenueExpenseChart,
    LowStockAlerts,
    StaffPerformanceScores,
    RevenueByBranches,
    Tickets,
    CustomerRatings,
  },
});
</script>
