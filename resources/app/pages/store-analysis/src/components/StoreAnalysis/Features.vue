<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px] text-center mx-auto md:max-w-[475px]"
    >
      <span
        class="inline-block rounded-[30px] text-white py-[6.5px] px-[19px] mb-[15px]"
        :style="headerBadgeStyle"
      >
        {{ header.badge }}
      </span>
      <h2
        class="!font-medium md:-tracking-[1px] !text-xl md:!text-2xl lg:!text-3xl xl:!text-5xl !leading-[1.2] !mb-[13px]"
      >
        {{ header.title }}
      </h2>
      <p class="md:text-[15px] lg:text-md">
        {{ header.description }}
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-[25px]">
      <div v-for="(feature, index) in topFeatures" :key="'top-' + index">
        <img
          :src="feature.image"
          class="inline-block rounded-[15px]"
          :alt="feature.alt"
        />
        <h3
          class="!font-medium !text-lg md:!text-[20px] !mb-[8px] mt-[17px] md:mt-[23px] lg:mt-[27px]"
        >
          {{ feature.title }}
        </h3>
        <p class="md:text-[15px] lg:text-md">
          {{ feature.description }}
        </p>
      </div>
    </div>

    <div
      class="mt-[25px] lg:mt-[50px] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]"
    >
      <div v-for="(feature, index) in bottomFeatures" :key="'bottom-' + index">
        <img
          :src="feature.image"
          class="inline-block rounded-[15px]"
          :alt="feature.alt"
        />
        <h3
          class="!font-medium !text-lg md:!text-[20px] !mb-[8px] mt-[17px] md:mt-[23px] lg:mt-[27px]"
        >
          {{ feature.title }}
        </h3>
        <p class="md:text-[15px] lg:text-md">
          {{ feature.description }}
        </p>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import feature1 from "@/assets/images/store-analysis/features/feature1.jpg";
import feature2 from "@/assets/images/store-analysis/features/feature2.jpg";
import feature3 from "@/assets/images/store-analysis/features/feature3.jpg";
import feature4 from "@/assets/images/store-analysis/features/feature4.jpg";
import feature5 from "@/assets/images/store-analysis/features/feature5.jpg";

interface Feature {
  image: string;
  title: string;
  description: string;
  alt: string;
}

interface Header {
  badge: string;
  title: string;
  description: string;
}

export default defineComponent({
  name: "Features",
  setup() {
    const headerBadgeStyle = {
      background: "linear-gradient(180deg, #ffaa72 0%, #ee3e08 100%)",
    };

    const header: Header = {
      badge: "Key Features",
      title: "Unlock Data-Driven Retail Decisions",
      description:
        "Explore the powerful features that help you monitor store performance, optimize inventory, and enhance the in-store experience — all in real time.",
    };

    const topFeatures: Feature[] = [
      {
        image: feature1,
        title: "Customer Behavior Tracking",
        description:
          "See exactly where shoppers stop, dwell and convert with our AI vision system",
        alt: "Customer behavior tracking feature",
      },
      {
        image: feature2,
        title: "Conversion Hotspots",
        description:
          "Identify your most profitable zones and replicate their success",
        alt: "Conversion hotspots feature",
      },
    ];

    const bottomFeatures: Feature[] = [
      {
        image: feature3,
        title: "Staff Optimization",
        description: "Align team schedules with proven peak traffic periods",
        alt: "Staff optimization feature",
      },
      {
        image: feature4,
        title: "Multi-Store View",
        description: "Manage all locations from one dashboard.",
        alt: "Multi-store view feature",
      },
      {
        image: feature5,
        title: "Real-Time Alerts",
        description: "Get notified about sales dips or surges.",
        alt: "Real-time alerts feature",
      },
    ];

    return {
      headerBadgeStyle,
      header,
      topFeatures,
      bottomFeatures,
    };
  },
});
</script>
