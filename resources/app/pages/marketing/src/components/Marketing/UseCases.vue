<template>
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[110px] xl:pt-[150px] 2xl:pt-[180px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="text-center mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px]"
      >
        <span
          class="inline-block py-[4.5px] px-[15px] rounded-[100px] bg-orange-100 dark:bg-[#0a0e19] text-orange-700 mb-[12px]"
        >
          {{ sectionTag }}
        </span>
        <h2
          class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl xl:max-w-[570px] mx-auto !leading-[1.2] !mb-[10px] lg:!mb-[12px]"
        >
          {{ sectionTitle }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ sectionDescription }}
        </p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          v-for="(useCase, index) in useCases"
          :key="'use-case-' + index"
          class="bg-white dark:bg-[#0a0e19] rounded-[15px] px-[20px] py-[30px] md:px-[25px] md:py-[50px] lg:px-[35px] lg:py-[60px] xl:px-[60px] relative z-[1]"
        >
          <div
            class="rounded-[15px] absolute top-0 left-0 right-0 bottom-0 -z-[1] dark:hidden"
            :style="{ background: useCase.backgroundGradient }"
          ></div>
          <div
            class="ltr:pl-[22px] rtl:pr-[22px] relative z-[1] mb-[30px] md:mb-[50px] lg:mb-[90px] xl:mb-[155px]"
          >
            <img :src="useCase.icon" :alt="useCase.title" />
            <div
              class="absolute top-[5px] ltr:left-0 rtl:right-0 bg-orange-50 dark:bg-dark w-[55px] h-[55px] rounded-full -z-[1]"
            ></div>
          </div>
          <h3
            class="!font-medium !text-lg md:!text-[20px] lg:!text-xl !mb-[15px] md:!mb-[20px] lg:!mb-[25px]"
          >
            {{ useCase.title }}
          </h3>
          <p>
            {{ useCase.description }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import icon1 from "@/assets/images/marketing/icons/chart.svg";
import icon2 from "@/assets/images/marketing/icons/management.svg";
import icon3 from "@/assets/images/marketing/icons/start-up.svg";
import icon4 from "@/assets/images/marketing/icons/leader.svg";
import icon5 from "@/assets/images/marketing/icons/saas.svg";
import icon6 from "@/assets/images/marketing/icons/conversion.svg";
interface UseCase {
  icon: string;
  title: string;
  description: string;
  backgroundGradient: string;
}

export default defineComponent({
  name: "UseCases",
  setup() {
    const sectionTag = "Use Cases & Ideal Users";
    const sectionTitle =
      "Built for Modern Marketers. Trusted by Teams of All Sizes.";
    const sectionDescription =
      "Trezo is flexible, powerful, and ready to scale with you.";

    const useCases: UseCase[] = [
      {
        icon: icon1,
        title: "Freelance Marketers",
        description:
          "Plan, launch, and report on campaigns faster. Spend more time creating and less time managing tools.",
        backgroundGradient: "linear-gradient(0deg, #fff8f1 0%, #f7f9ff 100%)",
      },
      {
        icon: icon2,
        title: "Agencies & Teams",
        description:
          "Collaborate seamlessly, manage multiple clients with ease, and keep every campaign on track—from planning to reporting.",
        backgroundGradient: "linear-gradient(0deg, #fff8f1 0%, #f7f9ff 100%)",
      },
      {
        icon: icon3,
        title: "Startups",
        description:
          "Move fast, stay lean, and launch impactful campaigns without the overhead. Everything you need to grow in one place.",
        backgroundGradient: "linear-gradient(0deg, #fff8f1 0%, #f7f9ff 100%)",
      },
      {
        icon: icon4,
        title: "Marketing Leaders",
        description:
          "Gain full visibility, align your team, and drive growth with data-backed decisions—all from one centralized platform.",
        backgroundGradient: "linear-gradient(0deg, #fff8f1 0%, #f7f9ff 100%)",
      },
      {
        icon: icon5,
        title: "SaaS & Tech Companies",
        description:
          "Accelerate growth with streamlined campaigns, real-time analytics, and tools built for scale—all in one unified platform.",
        backgroundGradient: "linear-gradient(0deg, #fff8f1 0%, #f7f9ff 100%)",
      },
      {
        icon: icon6,
        title: "Customizable Widgets",
        description:
          "Tailor every element to match your brand and workflow. Drag, drop, and design your perfect dashboard experience.",
        backgroundGradient: "linear-gradient(0deg, #fff8f1 0%, #f7f9ff 100%)",
      },
    ];

    return {
      sectionTag,
      sectionTitle,
      sectionDescription,
      useCases,
    };
  },
});
</script>
