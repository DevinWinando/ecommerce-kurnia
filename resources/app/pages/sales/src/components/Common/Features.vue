<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <!-- Header Section -->
    <div
      class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] text-center mx-auto md:max-w-[415px]"
    >
      <span
        class="inline-block font-medium text-[#7a857d] rounded-[30px] border border-[#ebebe0] dark:border-gray-800 py-[5.5px] px-[18px] mb-[12px] md:mb-[15px]"
      >
        {{ featureData.header.badge }}
      </span>
      <h2
        class="!text-[#06201B] dark:!text-white md:-tracking-[1px] !font-medium !text-2xl md:!text-3xl lg:!text-4xl !leading-[1.2] !mb-[12px] md:!mb-[15px]"
      >
        {{ featureData.header.title }}
      </h2>
      <p class="md:text-[15px] lg:text-md text-[#7a857d]">
        {{ featureData.header.description }}
      </p>
    </div>

    <!-- Features Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[25px]">
      <div
        v-for="(feature, index) in featureData.features"
        :key="index"
        class="rounded-[15px] md:rounded-[30px] bg-[#ebebe0] dark:bg-[#0a0e19] py-[30px] md:py-[40px] lg:py-[55px] px-[25px] md:px-[30px] lg:px-[20px] xl:px-[40px]"
      >
        <div
          class="flex items-center justify-center w-[65px] h-[65px] rounded-full bg-[#06201b] mb-[40px] md:mb-[100px]"
        >
          <img :src="feature.icon" :alt="feature.title" />
        </div>
        <h3
          class="!text-[#06201B] dark:!text-white !font-medium !text-md md:!text-lg lg:!text-[20px] !mb-[15px] md:!mb-[20px]"
        >
          {{ feature.title }}
        </h3>
        <p class="text-[#7a857d]">
          {{ feature.description }}
        </p>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import icon1 from "@/assets/images/sales/icons/group.svg";
import icon2 from "@/assets/images/sales/icons/handshake.svg";
import icon3 from "@/assets/images/sales/icons/paper-plane.svg";
import icon4 from "@/assets/images/sales/icons/dollar-bag.svg";

export default defineComponent({
  name: "Features",
  setup() {
    const featureData = {
      header: {
        badge: "Trezo Features",
        title: "Supercharge Your Sales Workflow",
        description:
          "From lead capture to revenue insights — Trezo equips your sales team with the tools to close smarter.",
      },
      features: [
        {
          title: "Lead Capture",
          description:
            "Instantly collect and qualify leads with smart forms and integrations.",
          icon: icon1,
        },
        {
          title: "Deal Pipeline",
          description:
            "Visualize, track, and manage every deal from open to won.",
          icon: icon2,
        },
        {
          title: "Email Sequences",
          description: "Send timely, personalized follow-ups that convert.",
          icon: icon3,
        },
        {
          title: "Revenue Insights",
          description:
            "Know what's working with dashboards for forecasting, goals, and team performance.",
          icon: icon4,
        },
      ],
    };

    return { featureData };
  },
});
</script>
