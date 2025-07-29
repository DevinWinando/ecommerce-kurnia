<template>
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <MyCards />
    </div>
    <div class="lg:col-span-1">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-[25px]">
        <TotalBalance />

        <TotalExpense />
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-2 gap-[25px]">
        <CardsWithAmountChart />

        <DailyLimit />
      </div>
    </div>
    <div class="lg:col-span-1">
      <QuickTransfer />
    </div>
  </div>

  <div class="grid grid-cols-1 2xl:grid-cols-4 gap-[25px] mb-[25px]">
    <div class="2xl:col-span-3">
      <RecentTransactions />
    </div>
    <div class="2xl:col-span-1">
      <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-1 gap-[25px]">
        <CreditUtilizationRatio />

        <MonthlySpending />
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 2xl:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="2xl:col-span-1">
      <SpendingBreakdownChart />
    </div>
    <div class="2xl:col-span-2">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-[25px]">
        <InterestChargeFeesChart />

        <StatisticsChart />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MyCards from "../../components/Dashboard/CreditCard/MyCards.vue";
import TotalBalance from "../../components/Dashboard/CreditCard/TotalBalance.vue";
import TotalExpense from "../../components/Dashboard/CreditCard/TotalExpense.vue";
import CardsWithAmountChart from "../../components/Dashboard/CreditCard/CardsWithAmountChart.vue";
import DailyLimit from "../../components/Dashboard/CreditCard/DailyLimit.vue";
import QuickTransfer from "../../components/Dashboard/CreditCard/QuickTransfer.vue";
import RecentTransactions from "../../components/Dashboard/CreditCard/RecentTransactions.vue";
import CreditUtilizationRatio from "../../components/Dashboard/CreditCard/CreditUtilizationRatio.vue";
import MonthlySpending from "../../components/Dashboard/CreditCard/MonthlySpending.vue";
import SpendingBreakdownChart from "../../components/Dashboard/CreditCard/SpendingBreakdownChart.vue";
import InterestChargeFeesChart from "../../components/Dashboard/CreditCard/InterestChargeFeesChart.vue";
import StatisticsChart from "../../components/Dashboard/CreditCard/StatisticsChart.vue";

export default defineComponent({
  name: "CreditCardPage",
  components: {
    MyCards,
    TotalBalance,
    TotalExpense,
    CardsWithAmountChart,
    DailyLimit,
    QuickTransfer,
    RecentTransactions,
    CreditUtilizationRatio,
    MonthlySpending,
    SpendingBreakdownChart,
    InterestChargeFeesChart,
    StatisticsChart,
  },
});
</script>
