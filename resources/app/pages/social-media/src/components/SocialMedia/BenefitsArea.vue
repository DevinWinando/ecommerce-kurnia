<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div class="text-center rounded-[15px]">
          <img
            :src="benefitsData.image"
            class="inline-block rounded-[15px]"
            :alt="benefitsData.imageAlt"
          />
        </div>

        <div class="ltr:xl:pl-[110px] rtl:xl:pr-[110px]">
          <span
            class="inline-block rounded-[30px] bg-white dark:bg-dark text-purple-600 border border-purple-200 dark:border-gray-800 py-[3.5px] px-[13px] mb-[12px] md:mb-[15px]"
          >
            {{ benefitsData.subtitle }}
          </span>
          <h2
            class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px] md:!mb-[15px]"
          >
            {{ benefitsData.title }}
          </h2>
          <p class="md:text-[15px] lg:text-md">
            {{ benefitsData.description }}
          </p>

          <div
            class="mt-[25px] md:mt-[30px] xl:mt-[40px] mb-[25px] md:mb-[30px] xl:mb-[50px]"
          >
            <div
              v-for="(benefit, index) in benefitsData.benefits"
              :key="index"
              class="mb-[15px] md:mb-[20px] md:mb-[25px] last:mb-0 relative ltr:pl-[45px] rtl:pr-[45px]"
            >
              <div
                class="absolute ltr:left-0 rtl:right-0 -top-[3px] text-[32px] text-orange-600 leading-none"
              >
                <i :class="benefit.icon"></i>
              </div>
              <h3 class="!font-medium !text-md md:!text-lg !mb-[7px]">
                {{ benefit.title }}
              </h3>
              <p class="md:max-w-[325px]">
                {{ benefit.description }}
              </p>
            </div>
          </div>

          <a
            :href="benefitsData.cta.link"
            class="group inline-block font-medium md:text-base rounded-[7px] bg-purple-500 text-white py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] relative z-[1]"
            target="_blank"
          >
            {{ benefitsData.cta.text }}
            <span
              class="absolute top-0 left-0 w-full h-full -z-[1] rounded-[7px] transition-all group-hover:opacity-0"
              :style="gradientStyle"
            ></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import benefitImage from "@/assets/images/social-media/benefits.jpg";

interface BenefitItem {
  title: string;
  description: string;
  icon: string;
}

interface BenefitsData {
  subtitle: string;
  title: string;
  description: string;
  image: string;
  imageAlt: string;
  benefits: BenefitItem[];
  cta: {
    text: string;
    link: string;
  };
}

export default defineComponent({
  name: "BenefitsArea",
  setup() {
    const benefitsData: BenefitsData = {
      subtitle: "Benefits Area",
      title: "Who Benefits Most from Trezo Social",
      description:
        "From startups to agencies, Trezo Social empowers teams to streamline scheduling, boost engagement, and make data-driven decisions—no matter your industry or audience size.",
      image: benefitImage,
      imageAlt: "benefits-image",
      benefits: [
        {
          title: "Brands & Businesses",
          description:
            "Promote your brand, schedule posts, and engage audiences across all channels.",
          icon: "ri-check-double-line",
        },
        {
          title: "Social Media Managers",
          description:
            "Plan, publish, and track social campaigns from one centralized dashboard.",
          icon: "ri-check-double-line",
        },
        {
          title: "Influencers & Creators",
          description:
            "Grow your audience with smart tools and effortless content management.",
          icon: "ri-check-double-line",
        },
      ],
      cta: {
        text: "Get 7 Days - Free Trial",
        link: "https://trezo-twcss.envytheme.com/",
      },
    };

    const gradientStyle = {
      background: "linear-gradient(180deg, #bf85fb 0%, #9135e8 100%)",
    };

    return {
      benefitsData,
      gradientStyle,
    };
  },
});
</script>
