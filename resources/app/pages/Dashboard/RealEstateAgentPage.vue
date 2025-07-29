<template>
  <WelcomeBack />

  <div class="mt-[25px] xl:-mt-[67px]">
    <Stats />

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
      <div class="lg:col-span-2">
        <TotalRevenueChart />
      </div>
      <div class="lg:col-span-1">
        <TopChannels />
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
      <div class="lg:col-span-1">
        <RecentClients />
      </div>
      <div class="lg:col-span-2">
        <MyFeaturedListings />
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
      <div class="lg:col-span-2">
        <RevenueGoalProgressChart />
      </div>
      <div class="lg:col-span-1">
        <PropertiesByCountry />
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-[25px] mb-[25px]">
      <div class="lg:col-span-1">
        <DownloadApp />
      </div>
      <div class="lg:col-span-3">
        <LatestTransactions />
      </div>
    </div>

    <ClientRatings />
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import WelcomeBack from "../../components/Dashboard/RealEstateAgent/WelcomeBack.vue";
import Stats from "../../components/Dashboard/RealEstateAgent/Stats.vue";
import TotalRevenueChart from "../../components/Dashboard/RealEstateAgent/TotalRevenueChart.vue";
import TopChannels from "../../components/Dashboard/RealEstateAgent/TopChannels.vue";
import RecentClients from "../../components/Dashboard/RealEstateAgent/RecentClients.vue";
import MyFeaturedListings from "../../components/Dashboard/RealEstateAgent/MyFeaturedListings.vue";
import RevenueGoalProgressChart from "../../components/Dashboard/RealEstateAgent/RevenueGoalProgressChart.vue";
import PropertiesByCountry from "../../components/Dashboard/RealEstateAgent/PropertiesByCountry.vue";
import DownloadApp from "../../components/Dashboard/RealEstateAgent/DownloadApp.vue";
import LatestTransactions from "../../components/Dashboard/RealEstateAgent/LatestTransactions.vue";
import ClientRatings from "../../components/Dashboard/RealEstateAgent/ClientRatings.vue";

export default defineComponent({
  name: "RealEstateAgentPage",
  components: {
    WelcomeBack,
    Stats,
    TotalRevenueChart,
    TopChannels,
    RecentClients,
    MyFeaturedListings,
    RevenueGoalProgressChart,
    PropertiesByCountry,
    DownloadApp,
    LatestTransactions,
    ClientRatings,
  },
});
</script>
