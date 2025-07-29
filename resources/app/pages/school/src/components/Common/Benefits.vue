<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
      <!-- Image Column -->
      <div class="rounded-[15px] text-center">
        <img
          :src="benefitsData.image.src"
          class="inline-block rounded-[15px]"
          :alt="benefitsData.image.alt"
        />
      </div>

      <!-- Content Column -->
      <div class="xl:max-w-[521px] ltr:xl:ml-auto rtl:xl:mr-auto">
        <span
          class="inline-block rounded-[30px] bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 py-[3.5px] px-[14px] mb-[12px] md:mb-[15px]"
        >
          {{ benefitsData.tagline }}
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px]"
        >
          {{ benefitsData.title.part1 }}
          <span class="italic gradient-color">{{
            benefitsData.title.highlight
          }}</span>
        </h2>
        <p class="md:text-[15px] lg:text-md lg:max-w-[415px]">
          {{ benefitsData.subtitle }}
        </p>

        <!-- Benefits List -->
        <div class="mt-[20px] md:mt-[30px] xl:mt-[40px]">
          <div
            v-for="(benefit, index) in benefitsData.benefits"
            :key="index"
            class="mb-[20px] md:mb-[25px] lg:mb-[30px] last:mb-0"
          >
            <h3
              class="!font-medium !text-md md:!text-lg lg:!text-[20px] !mb-[8px]"
            >
              ✅ {{ benefit.title }}
            </h3>
            <p>{{ benefit.description }}</p>
          </div>
        </div>

        <!-- CTA Button -->
        <a
          :href="benefitsData.cta.link"
          class="inline-block font-medium md:text-base rounded-[7px] bg-primary-500 text-white py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all hover:bg-primary-600 mt-[25px] md:mt-[30px] xl:mt-[40px]"
          target="_blank"
        >
          {{ benefitsData.cta.text }}
        </a>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image from "@/assets/images/school/benefits.jpg";

interface Benefit {
  title: string;
  description: string;
}

interface BenefitsData {
  tagline: string;
  title: {
    part1: string;
    highlight: string;
  };
  subtitle: string;
  benefits: Benefit[];
  cta: {
    text: string;
    link: string;
  };
  image: {
    src: string;
    alt: string;
  };
}

export default defineComponent({
  name: "Benefits",
  setup() {
    const benefitsData: BenefitsData = {
      tagline: "Benefits",
      title: {
        part1: "Benefits That Make a",
        highlight: "Difference",
      },
      subtitle:
        "Discover how Trezo simplifies school management while improving productivity, transparency",
      benefits: [
        {
          title: "Save Time Daily",
          description:
            "Automate administrative tasks like attendance, scheduling, and reporting.",
        },
        {
          title: "Improve Communication",
          description:
            "Keep staff, students, and parents in sync through smart notifications",
        },
        {
          title: "Boost Academic Performance",
          description:
            "Access data-driven insights to support student progress",
        },
        {
          title: "Enhance Transparency",
          description: "Track everything from fees to grades in real-time",
        },
      ],
      cta: {
        text: "Start Your Free Trial",
        link: "https://trezo-twcss.envytheme.com/",
      },
      image: {
        src: image,
        alt: "benefits-image",
      },
    };

    return {
      benefitsData,
    };
  },
});
</script>
