<template>
  <div class="grid grid-cols-1 xl:grid-cols-2 gap-[25px] mb-[25px]">
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-[25px]">
      <InstagramFollowers />

      <LinkedInFollowers />

      <TikTokFollowers />

      <FacebookFollowers />

      <XFollowers />

      <YouTubeSubscribers />
    </div>

    <LinkedInNetFollowersChart />
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <Suggestions />

    <FollowersByGenderChart />

    <RecentInstagramFollowers />
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <FacebookCampaignOverviewChart />
    </div>
    <div class="lg:col-span-1">
      <UpgradeYourPlan />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import InstagramFollowers from "../../components/Dashboard/SocialMedia/InstagramFollowers.vue";
import LinkedInFollowers from "../../components/Dashboard/SocialMedia/LinkedInFollowers.vue";
import TikTokFollowers from "../../components/Dashboard/SocialMedia/TikTokFollowers.vue";
import FacebookFollowers from "../../components/Dashboard/SocialMedia/FacebookFollowers.vue";
import XFollowers from "../../components/Dashboard/SocialMedia/XFollowers.vue";
import YouTubeSubscribers from "../../components/Dashboard/SocialMedia/YouTubeSubscribers.vue";
import LinkedInNetFollowersChart from "../../components/Dashboard/SocialMedia/LinkedInNetFollowersChart.vue";
import Suggestions from "../../components/Dashboard/SocialMedia/Suggestions.vue";
import FollowersByGenderChart from "../../components/Dashboard/SocialMedia/FollowersByGenderChart.vue";
import RecentInstagramFollowers from "../../components/Dashboard/SocialMedia/RecentInstagramFollowers.vue";
import FacebookCampaignOverviewChart from "../../components/Dashboard/SocialMedia/FacebookCampaignOverviewChart.vue";
import UpgradeYourPlan from "../../components/Dashboard/SocialMedia/UpgradeYourPlan.vue";

export default defineComponent({
  name: "SocialMediaPage",
  components: {
    InstagramFollowers,
    LinkedInFollowers,
    TikTokFollowers,
    FacebookFollowers,
    XFollowers,
    YouTubeSubscribers,
    LinkedInNetFollowersChart,
    Suggestions,
    FollowersByGenderChart,
    RecentInstagramFollowers,
    FacebookCampaignOverviewChart,
    UpgradeYourPlan,
  },
});
</script>
