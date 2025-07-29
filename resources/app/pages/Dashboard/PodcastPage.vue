<template>
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <Featured />
    </div>

    <div class="lg:col-span-1">
      <PopularHosts />
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <RecentlyPlayed />
    </div>
    <div class="lg:col-span-1">
      <Player />
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <MostPopular />
    </div>
    <div class="lg:col-span-1">
      <UpcomingEpisodes />

      <TodaysEarnings />
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">
    <ListenerAnalyticsChart />

    <TopPodcasters />
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Featured from "../../components/Dashboard/Podcast/Featured.vue";
import PopularHosts from "../../components/Dashboard/Podcast/PopularHosts.vue";
import RecentlyPlayed from "../../components/Dashboard/Podcast/RecentlyPlayed.vue";
import Player from "../../components/Dashboard/Podcast/Player.vue";
import MostPopular from "../../components/Dashboard/Podcast/MostPopular.vue";
import UpcomingEpisodes from "../../components/Dashboard/Podcast/UpcomingEpisodes.vue";
import TodaysEarnings from "../../components/Dashboard/Podcast/TodaysEarningsChart.vue";
import ListenerAnalyticsChart from "../../components/Dashboard/Podcast/ListenerAnalyticsChart.vue";
import TopPodcasters from "../../components/Dashboard/Podcast/TopPodcasters.vue";

export default defineComponent({
  name: "PodcastPage",
  components: {
    Featured,
    PopularHosts,
    RecentlyPlayed,
    Player,
    MostPopular,
    UpcomingEpisodes,
    TodaysEarnings,
    ListenerAnalyticsChart,
    TopPodcasters,
  },
});
</script>
