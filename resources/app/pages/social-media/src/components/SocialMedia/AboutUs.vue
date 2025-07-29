<template>
  <div
    class="bg-[#f7f7f7] dark:bg-[#0a0e19] py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px] relative z-[1]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <!-- Image Section -->
        <div class="text-center ltr:xl:mr-[85px] rtl:xl:ml-[85px]">
          <img
            :src="aboutData.image"
            class="inline-block rounded-[15px]"
            :alt="aboutData.imageAlt"
          />
        </div>

        <!-- Content Section -->
        <div>
          <span
            class="inline-block rounded-[30px] bg-white dark:bg-dark text-purple-600 border border-purple-200 dark:border-gray-800 py-[3.5px] px-[13px] mb-[11px] md:mb-[13px]"
          >
            {{ aboutData.subtitle }}
          </span>
          <h2
            class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[10px] md:!mb-[16px] md:max-w-[415px]"
          >
            {{ aboutData.title }}
          </h2>
          <p class="md:text-[15px] lg:text-md md:max-w-[515px]">
            {{ aboutData.description }}
          </p>

          <!-- Features List -->
          <div
            class="mt-[20px] md:mt-[30px] xl:mt-[35px] mb-[25px] md:mb-[30px] xl:mb-[40px] grid grid-cols-1 md:grid-cols-2 gap-[15px] md:gap-[20px] xl:gap-[25px]"
          >
            <div
              v-for="(feature, index) in aboutData.features"
              :key="index"
              class="flex items-center font-medium text-gray-700 dark:text-white text-[14px] md:text-md lg:text-lg gap-[12px]"
            >
              <span
                class="flex items-center justify-center w-[26px] h-[26px] rounded-full bg-[#00ba00] text-white text-[18px]"
              >
                <i class="ri-check-fill"></i>
              </span>
              {{ feature }}
            </div>
          </div>

          <!-- CTA Button -->
          <a
            :href="aboutData.cta.link"
            class="group inline-block font-medium md:text-base rounded-[7px] bg-purple-500 text-white py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] relative z-[1]"
            target="_blank"
          >
            {{ aboutData.cta.text }}
            <span
              class="absolute top-0 left-0 w-full h-full -z-[1] rounded-[7px] transition-all group-hover:opacity-0"
              :style="gradientStyle"
            ></span>
          </a>

          <!-- Stats -->
          <div
            class="mt-[25px] md:mt-[35px] xl:mt-[45px] grid grid-cols-2 md:grid-cols-3 gap-[25px]"
          >
            <div v-for="(stat, index) in aboutData.stats" :key="index">
              <h3
                class="!leading-none !font-medium md:-tracking-[1px] !text-3xl md:!text-4xl lg:!text-5xl !mb-[7px]"
              >
                {{ stat.value }}
              </h3>
              <span class="block md:text-[15px] lg:text-md">
                {{ stat.label }}
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Decorative Element -->
    <div
      class="absolute top-[17%] ltr:right-[15%] rtl:left-[15%] -z-[1] hidden xl:block"
    >
      <img :src="aboutData.decorativeImage" alt="decorative-element" />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import aboutImage from "@/assets/images/social-media/about.jpg";
import decorativeImage from "@/assets/images/social-media/icons/red-play-button2.png";

interface AboutData {
  subtitle: string;
  title: string;
  description: string;
  image: string;
  imageAlt: string;
  features: string[];
  cta: {
    text: string;
    link: string;
  };
  stats: {
    value: string;
    label: string;
  }[];
  decorativeImage: string;
}

export default defineComponent({
  name: "AboutUs",
  setup() {
    const aboutData: AboutData = {
      subtitle: "About Trezo",
      title: "Discover What Sets Trezo Social Apart",
      description:
        "Designed for creators, brands, and agencies who want to simplify and scale their social media presence.",
      image: aboutImage,
      imageAlt: "about-image",
      features: [
        "All-in-One Platform",
        "Built for Teams",
        "AI-Powered Insights",
        "Real-Time Engagement",
      ],
      cta: {
        text: "Get 7 Days - Free Trial",
        link: "https://trezo-twcss.envytheme.com/",
      },
      stats: [
        { value: "15+", label: "Platforms Connected" },
        { value: "98%", label: "Faster Scheduling" },
        { value: "500M+", label: "Posts Published" },
      ],
      decorativeImage: decorativeImage,
    };

    const gradientStyle = {
      background: "linear-gradient(180deg, #bf85fb 0%, #9135e8 100%)",
    };

    return {
      aboutData,
      gradientStyle,
    };
  },
});
</script>
