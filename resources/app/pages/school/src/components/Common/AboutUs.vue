<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
      <!-- Left Column -->
      <div class="xl:max-w-[521px]">
        <span
          class="inline-block rounded-[30px] bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 py-[3.5px] px-[14px] mb-[12px] md:mb-[15px]"
        >
          {{ aboutData.tagline }}
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px] xl:max-w-[415px]"
        >
          {{ aboutData.title.part1 }}
          <span class="italic gradient-color">{{
            aboutData.title.highlight
          }}</span>
          {{ aboutData.title.part2 }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ aboutData.subtitle }}
        </p>

        <!-- Features List -->
        <div class="mt-[20px] md:mt-[30px] xl:mt-[40px]">
          <div
            v-for="(feature, index) in aboutData.features"
            :key="index"
            class="flex items-center gap-[15px] md:gap-[20px] mb-[20px] md:mb-[25px] lg:mb-[30px] last:mb-0"
          >
            <div
              class="leading-none -tracking-[1.5px] font-medium italic text-gray-200 dark:text-gray-700 text-[50px] md:text-[60px]"
            >
              {{ index + 1 }}
            </div>
            <div>
              <h3
                class="!font-medium !text-md md:!text-lg lg:!text-[20px] !mb-[8px]"
              >
                {{ feature.title }}
              </h3>
              <p>{{ feature.description }}</p>
            </div>
          </div>
        </div>

        <a
          :href="aboutData.cta.link"
          class="inline-block font-medium md:text-base rounded-[7px] bg-primary-500 text-white py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all hover:bg-primary-600 mt-[25px] md:mt-[30px] xl:mt-[40px]"
          target="_blank"
        >
          {{ aboutData.cta.text }}
        </a>
      </div>

      <!-- Right Column (Image) -->
      <div class="rounded-[15px] text-center">
        <img
          :src="aboutData.image.src"
          class="inline-block rounded-[15px]"
          :alt="aboutData.image.alt"
        />
      </div>
    </div>

    <div
      class="h-[1px] w-full bg-gray-100 dark:bg-gray-900 mt-[70px] md:mt-[90px] lg:mt-[100px] xl:mt-[120px] 2xl:mt-[140px] mb-[25px] md:mb-[30px] lg:mb-[35px]"
    ></div>

    <!-- Stats -->
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-[25px]">
      <div
        v-for="(stat, index) in aboutData.stats"
        :key="index"
        class="sm:flex items-center gap-[15px]"
      >
        <img :src="stat.icon" class="mb-[15px] sm:mb-0" :alt="stat.alt" />
        <div>
          <h3
            class="!leading-none !font-medium -tracking-[1px] !text-[3xl] md:!text-4xl lg:!text-5xl !mb-[8px]"
          >
            {{ stat.value }}
          </h3>
          <span class="block">{{ stat.label }}</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image from "@/assets/images/school/about.jpg";

import icon1 from "@/assets/images/school/icons/graduation2.svg";
import icon2 from "@/assets/images/school/icons/teacher.svg";
import icon3 from "@/assets/images/school/icons/building.svg";
import icon4 from "@/assets/images/school/icons/timer.svg";

interface AboutData {
  tagline: string;
  title: {
    part1: string;
    highlight: string;
    part2: string;
  };
  subtitle: string;
  features: {
    title: string;
    description: string;
  }[];
  cta: {
    text: string;
    link: string;
  };
  image: {
    src: string;
    alt: string;
  };
  stats: {
    value: string;
    label: string;
    icon: string;
    alt: string;
  }[];
}

export default defineComponent({
  name: "AboutUs",
  setup() {
    const aboutData: AboutData = {
      tagline: "About Trezo",
      title: {
        part1: "Built to",
        highlight: "Power",
        part2: "Every School Day",
      },
      subtitle: "An all-in-one school management system",
      features: [
        {
          title: "Centralized Management",
          description:
            "Easily handle admissions, classes, staff, and finances — all from one secure dashboard.",
        },
        {
          title: "Real-Time Performance",
          description:
            "Track academic progress and operational metrics to make faster",
        },
        {
          title: "Student Engagement",
          description: "Connect with students through portals, assignments",
        },
        {
          title: "Paperless Workflows",
          description:
            "Digitize attendance, grading, and reporting to save time",
        },
      ],
      cta: {
        text: "Start Your Free Trial",
        link: "https://trezo-twcss.envytheme.com/",
      },
      image: {
        src: image,
        alt: "about-image",
      },
      stats: [
        {
          value: "50k+",
          label: "Students Managed",
          icon: icon1,
          alt: "graduation",
        },
        {
          value: "10k+",
          label: "Teachers Supported",
          icon: icon2,
          alt: "teacher",
        },
        {
          value: "1,200+",
          label: "Institutions",
          icon: icon3,
          alt: "building",
        },
        {
          value: "99.9%",
          label: "Real-Time Sync",
          icon: icon4,
          alt: "timer",
        },
      ],
    };

    return {
      aboutData,
    };
  },
});
</script>
