<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="dark:bg-[#0a0e19] rounded-[15px] md:rounded-[30px] py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px] px-[20px] md:px-[40px] xl:px-[110px] relative z-[1]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px] text-center mx-auto md:max-w-[455px]"
      >
        <span
          class="inline-block rounded-[30px] bg-primary-500 text-white py-[4.5px] px-[14px] mb-[12px] md:mb-[15px]"
        >
          {{ header.tagline }}
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px]"
        >
          {{ header.title }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ header.subtitle }}
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div class="xl:max-w-[415px]">
          <div
            v-for="(feature, index) in features"
            :key="index"
            class="dark:bg-dark transition-all hover:bg-white hover:dark:bg-black flex items-center gap-[15px] mb-[20px] last:mb-0 relative z-[1] rounded-[15px] px-[15px] md:px-[20px] py-[15px]"
          >
            <img :src="feature.icon" :alt="feature.title" />
            <div>
              <h3
                class="!font-medium !text-md md:!text-lg lg:!text-[20px] !mb-[5px]"
              >
                {{ feature.title }}
              </h3>
              <p>{{ feature.description }}</p>
            </div>
            <div
              class="absolute top-0 left-0 right-0 bottom-0 rounded-[15px] -z-[1] dark:hidden"
              :style="gradientBackground"
            ></div>
          </div>
        </div>

        <div
          class="text-center pt-[15px] md:pt-[20px] pb-[5px] ltr:pl-[15px] rtl:pr-[15px] ltr:md:pl-[20px] rtl:md:pr-[20px] bg-white/38 dark:bg-dark/38 border border-white/10 rounded-tl-[15px] rounded-bl-[15px]"
        >
          <img
            src="@/assets/images/saas/features.jpg"
            class="inline-block rounded-[5px]"
            alt="features-image"
          />
        </div>
      </div>

      <div
        class="absolute top-0 left-0 right-0 bottom-0 rounded-[15px] md:rounded-[30px] -z-[1] dark:hidden"
        style="background: linear-gradient(180deg, #eef6ff 0%, #ffe6fa 100%)"
      ></div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import icon from "@/assets/images/saas/icons/settings.svg";

interface FeatureItem {
  title: string;
  description: string;
  icon: string;
}

interface HeaderData {
  tagline: string;
  title: string;
  subtitle: string;
}

export default defineComponent({
  name: "Features",
  setup() {
    const header: HeaderData = {
      tagline: "Useful Features",
      title: "Built for Modern Teams",
      subtitle: "Streamline work, boost productivity, and deliver results.",
    };

    const features: FeatureItem[] = [
      {
        title: "Task Automation",
        description: "Eliminate manual processes with smart triggers",
        icon: icon,
      },
      {
        title: "Smart Insights",
        description: "Track KPIs and team performance effortlessly",
        icon: icon,
      },
      {
        title: "User Roles",
        description: "Manage permissions and workflows at scale",
        icon: icon,
      },
      {
        title: "Secure Access",
        description: "Industry-grade data security, always on",
        icon: icon,
      },
    ];

    const gradientBackground = {
      background:
        "linear-gradient(180deg, rgba(255, 255, 255, 0.3) 0%, #fff 100%)",
    };

    return {
      header,
      features,
      gradientBackground,
    };
  },
});
</script>
