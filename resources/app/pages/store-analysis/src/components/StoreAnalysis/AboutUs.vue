<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
      <div class="text-center">
        <img
          :src="aboutImage"
          class="inline-block rounded-[15px] w-full max-w-[600px]"
          :alt="imageAlt"
        />
      </div>
      <div class="ltr:xl:pl-[108px] rtl:xl:pr-[108px]">
        <span
          class="inline-block rounded-[30px] text-white py-[6.5px] px-[19px] mb-[15px]"
          :style="badgeStyle"
        >
          {{ badgeText }}
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-xl md:!text-2xl lg:!text-3xl xl:!text-5xl !leading-[1.2] !mb-[13px] md:max-w-[415px]"
        >
          {{ heading }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ subheading }}
        </p>
        <div
          class="mt-[20px] md:mt-[30px] xl:mt-[40px] mb-[25px] md:mb-[35px] xl:mb-[45px]"
        >
          <div
            v-for="(feature, index) in features"
            :key="index"
            class="mb-[12px] md:mb-[17px] lg:mb-[23px] last:mb-0 flex items-center font-medium text-black dark:text-white text-[14px] md:text-md lg:text-lg gap-[12px] md:gap-[20px]"
          >
            <img :src="checkIcon" alt="check" />
            {{ feature }}
          </div>
        </div>
        <a
          :href="ctaLink"
          class="group inline-block font-medium md:text-base rounded-[30px] bg-primary-500 text-white py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] relative z-[1]"
          target="_blank"
        >
          {{ ctaText }} - <span class="font-normal">{{ ctaSubtext }}</span>
          <span
            class="absolute top-0 left-0 w-full h-full -z-[1] rounded-[30px] transition-all group-hover:opacity-0"
            :style="ctaHoverStyle"
          ></span>
        </a>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import aboutImage from "@/assets/images/store-analysis/about.jpg";
import checkIcon from "@/assets/images/store-analysis/icons/check-primary.svg";

interface AboutUsData {
  badgeText: string;
  badgeStyle: { background: string };
  heading: string;
  subheading: string;
  features: string[];
  ctaText: string;
  ctaSubtext: string;
  ctaLink: string;
  ctaHoverStyle: { background: string };
  aboutImage: string;
  imageAlt: string;
}

export default defineComponent({
  name: "AboutUs",
  setup() {
    const aboutData: AboutUsData = {
      badgeText: "About Trezo",
      badgeStyle: {
        background: "linear-gradient(180deg, #ffaa72 0%, #ee3e08 100%)",
      },
      heading: "The Analytics Engine Behind Retail Growth",
      subheading: "Empowering retailers with smart, actionable insights",
      features: [
        "Track performance metrics in real-time",
        "Spot trends before competitors",
        "Simplify data into visual reports",
        "Understand customer behavior",
      ],
      ctaText: "Get Started",
      ctaSubtext: "It's Free",
      ctaLink: "https://trezo-twcss.envytheme.com/",
      ctaHoverStyle: {
        background: "linear-gradient(180deg, #9caaff 0%, #4936f5 100%)",
      },
      aboutImage: aboutImage,
      imageAlt: "Trezo analytics dashboard overview",
    };

    return {
      ...aboutData,
      checkIcon,
    };
  },
});
</script>
