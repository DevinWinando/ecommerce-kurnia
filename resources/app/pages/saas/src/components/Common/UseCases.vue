<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div class="xl:max-w-[520px]">
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
            {{ header.description }}
          </p>
          <div
            class="mt-[20px] md:mt-[25px] lg:mt-[35px] xl:mt-[55px] flex flex-wrap gap-[10px] md:gap-[15px] lg:gap-[20px]"
          >
            <div
              v-for="(useCase, index) in useCases"
              :key="index"
              class="relative z-[1] flex items-center dark:bg-[#0a0e19] dark:border dark:border-gray-900 rounded-[30px] text-base md:text-md lg:text-lg text-black dark:text-white font-medium gap-[10px] md:gap-[15px] py-[12px] md:py-[14px] lg:py-[16px] px-[20px] md:px-[25px] lg:px-[30px]"
            >
              <img src="@/assets/images/saas/icons/check.svg" alt="check" />
              {{ useCase }}
              <div
                class="absolute top-0 left-0 right-0 bottom-0 rounded-[30px] -z-[1] border border-gray-200 dark:border-gray-900 dark:hidden"
                :style="gradientBackground"
              ></div>
            </div>
          </div>
        </div>

        <div class="text-center xl:max-w-[521px] ltr:ml-auto rtl:mr-auto">
          <img
            src="@/assets/images/saas/use-cases.jpg"
            class="rounded-[15px]"
            alt="use-cases-image"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

interface HeaderData {
  tagline: string;
  title: string;
  description: string;
}

export default defineComponent({
  name: "UseCases",
  setup() {
    const header: HeaderData = {
      tagline: "Use Cases",
      title: "Made for Every Team",
      description:
        "Whether you're building, managing, or scaling — Trezo adapts to your needs.",
    };

    const useCases = [
      "Startups",
      "Project Managers",
      "SaaS Teams",
      "Product & Engineering",
      "HR & Ops",
      "Agencies",
    ];

    const gradientBackground = {
      background: "linear-gradient(180deg, #eef6ff 0%, #ffe6fa 100%)",
    };

    return {
      header,
      useCases,
      gradientBackground,
    };
  },
});
</script>
