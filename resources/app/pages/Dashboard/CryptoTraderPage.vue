<template>
  <Stats />

  <div class="grid grid-cols-1 xl:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="xl:col-span-2">
      <PriceMovementChart />
    </div>
    <div class="xl:col-span-1">
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 gap-[25px]">
        <TradingVolumeChart />

        <PortfolioDistributionChart />
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-[25px] mb-[25px]">
        <ProfitLossChart />

        <RiskExposureChart />
      </div>

      <RecentTransactions />
    </div>
    <div class="lg:col-span-1">
      <LivePriceTracker />

      <TradesPerMonthChart />
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <AssetAllocationChart />

    <GainersLosers />

    <MarketSentimentIndicatorChart />
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Stats from "../../components/Dashboard/CryptoTrader/Stats.vue";
import PriceMovementChart from "../../components/Dashboard/CryptoTrader/PriceMovementChart.vue";
import TradingVolumeChart from "../../components/Dashboard/CryptoTrader/TradingVolumeChart.vue";
import PortfolioDistributionChart from "../../components/Dashboard/CryptoTrader/PortfolioDistributionChart.vue";
import ProfitLossChart from "../../components/Dashboard/CryptoTrader/ProfitLossChart.vue";
import RiskExposureChart from "../../components/Dashboard/CryptoTrader/RiskExposureChart.vue";
import RecentTransactions from "../../components/Dashboard/CryptoTrader/RecentTransactions.vue";
import LivePriceTracker from "../../components/Dashboard/CryptoTrader/LivePriceTracker.vue";
import TradesPerMonthChart from "../../components/Dashboard/CryptoTrader/TradesPerMonthChart.vue";
import AssetAllocationChart from "../../components/Dashboard/CryptoTrader/AssetAllocationChart.vue";
import GainersLosers from "../../components/Dashboard/CryptoTrader/GainersLosers.vue";
import MarketSentimentIndicatorChart from "../../components/Dashboard/CryptoTrader/MarketSentimentIndicatorChart.vue";

export default defineComponent({
  name: "CryptoTraderPage",
  components: {
    Stats,
    PriceMovementChart,
    TradingVolumeChart,
    PortfolioDistributionChart,
    ProfitLossChart,
    RiskExposureChart,
    RecentTransactions,
    LivePriceTracker,
    TradesPerMonthChart,
    AssetAllocationChart,
    GainersLosers,
    MarketSentimentIndicatorChart,
  },
});
</script>
