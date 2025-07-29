<template>
  <Breadcrumb />

  <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">
    <PerformancePerInvestmentChart />

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">
      <PortfolioValue />

      <CryptoMarketCap />

      <div class="sm:col-span-2">
        <TransactionsHistory />
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-5 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <MarketPerformanceChart />
    </div>
    <div class="lg:col-span-3">
      <PerformanceMetricsChart />
    </div>
  </div>

  <IndividualAssetPerformance />

  <div class="grid grid-cols-1 xl:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="xl:col-span-1">
      <RiskStabilityIndicatorsChart />
    </div>

    <div class="xl:col-span-2">
      <ComparativeAnalysisChart />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Breadcrumb from "../../components/Dashboard/CryptoPerformance/Breadcrumb.vue";
import PerformancePerInvestmentChart from "../../components/Dashboard/CryptoPerformance/PerformancePerInvestmentChart.vue";
import PortfolioValue from "../../components/Dashboard/CryptoPerformance/PortfolioValue.vue";
import CryptoMarketCap from "../../components/Dashboard/CryptoPerformance/CryptoMarketCap.vue";
import TransactionsHistory from "../../components/Dashboard/CryptoPerformance/TransactionsHistory.vue";
import MarketPerformanceChart from "../../components/Dashboard/CryptoPerformance/MarketPerformanceChart.vue";
import PerformanceMetricsChart from "../../components/Dashboard/CryptoPerformance/PerformanceMetricsChart.vue";
import IndividualAssetPerformance from "../../components/Dashboard/CryptoPerformance/IndividualAssetPerformance.vue";
import RiskStabilityIndicatorsChart from "../../components/Dashboard/CryptoPerformance/RiskStabilityIndicatorsChart.vue";
import ComparativeAnalysisChart from "../../components/Dashboard/CryptoPerformance/ComparativeAnalysisChart.vue";

export default defineComponent({
  name: "CryptoPerformancePage",
  components: {
    Breadcrumb,
    PerformancePerInvestmentChart,
    PortfolioValue,
    CryptoMarketCap,
    TransactionsHistory,
    MarketPerformanceChart,
    PerformanceMetricsChart,
    IndividualAssetPerformance,
    RiskStabilityIndicatorsChart,
    ComparativeAnalysisChart,
  },
});
</script>
