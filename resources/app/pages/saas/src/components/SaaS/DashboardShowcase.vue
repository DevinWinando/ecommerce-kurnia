<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div class="text-center">
          <img
            src="@/assets/images/saas/dashboard.jpg"
            class="inline-block rounded-[15px]"
            alt="dashboard-preview"
          />
        </div>

        <div class="ltr:xl:pl-[105px] rtl:xl:pr-[105px]">
          <span
            class="inline-block rounded-[30px] bg-primary-500 text-white py-[4.5px] px-[14px] mb-[12px] md:mb-[15px]"
          >
            {{ dashboardData.tagline }}
          </span>
          <h2
            class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px]"
          >
            {{ dashboardData.title }}
          </h2>
          <p class="md:text-[15px] lg:text-md">
            {{ dashboardData.description }}
          </p>
          <div class="mt-[20px] md:mt-[25px] lg:mt-[35px] xl:mt-[45px]">
            <div
              v-for="(feature, index) in dashboardFeatures"
              :key="index"
              class="mb-[15px] md:mb-[20px] lg:mb-[25px] last:mb-0 flex items-center font-medium !text-[#06201B] dark:!text-white text-[14px] md:text-md lg:text-lg gap-[12px]"
            >
              <span
                class="flex items-center justify-center w-[25px] md:w-[30px] h-[25px] md:h-[30px] rounded-full bg-[#00ba00] text-white text-[18px] md:text-[22px]"
              >
                <i class="ri-check-fill"></i>
              </span>
              {{ feature }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

interface DashboardData {
  tagline: string;
  title: string;
  description: string;
}

export default defineComponent({
  name: "DashboardShowcase",
  setup() {
    const dashboardData: DashboardData = {
      tagline: "Dashboard",
      title:
        "Stay Ahead with Trezo: Live Metrics, Instant Reports, Smarter Actions",
      description:
        "A real-time look at how teams monitor progress, collaborate, and make data-driven decisions",
    };

    const dashboardFeatures = [
      "Visualize key metrics on one screen",
      "Monitor live team activity and workflows",
      "Customize views by role or department",
      "Pin essential widgets for fast access",
    ];

    return {
      dashboardData,
      dashboardFeatures,
    };
  },
});
</script>
