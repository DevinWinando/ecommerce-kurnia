<template>
  <div
    class="pt-[145px] md:pt-[175px] lg:pt-[190px] xl:pt-[175px] pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[140px] relative z-[1] overflow-hidden"
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
          {{ sectionTagline }}
        </span>
        <h2
          class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl xl:max-w-[520px] mx-auto !leading-[1.2] !mb-[10px] lg:!mb-[12px]"
        >
          {{ sectionTitle }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ sectionDescription }}
        </p>
      </div>
      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] mb-[25px]"
      >
        <div
          v-for="(feature, index) in topFeatures"
          :key="'top-feature-' + index"
          class="bg-white dark:bg-[#0a0e19] rounded-[15px] px-[20px] py-[30px] md:px-[25px] md:py-[50px] lg:px-[35px] lg:py-[70px] xl:px-[60px]"
        >
          <div
            class="ltr:pl-[22px] rtl:pr-[22px] relative z-[1] mb-[30px] md:mb-[50px] lg:mb-[90px]"
          >
            <img :src="feature.icon" :alt="feature.title" />
            <div
              class="absolute top-[5px] ltr:left-0 rtl:right-0 bg-orange-50 dark:bg-dark w-[55px] h-[55px] rounded-full -z-[1]"
            ></div>
          </div>
          <h3
            class="!font-medium !text-lg md:!text-[20px] lg:!text-xl !mb-[15px] md:!mb-[20px] lg:!mb-[25px]"
          >
            {{ feature.title }}
          </h3>
          <p>
            {{ feature.description }}
          </p>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px]">
        <div
          v-for="(feature, index) in bottomFeatures"
          :key="'bottom-feature-' + index"
          class="bg-white dark:bg-[#0a0e19] rounded-[15px] px-[20px] py-[30px] md:px-[25px] md:py-[50px] lg:px-[35px] lg:py-[70px] xl:px-[60px] relative overflow-hidden"
        >
          <div class="md:max-w-[290px]">
            <div
              class="ltr:pl-[22px] rtl:pr-[22px] relative z-[1] mb-[30px] md:mb-[50px] lg:mb-[90px]"
            >
              <img :src="feature.icon" :alt="feature.title" />
              <div
                class="absolute top-[5px] ltr:left-0 rtl:right-0 bg-orange-50 dark:bg-dark w-[55px] h-[55px] rounded-full -z-[1]"
              ></div>
            </div>
            <h3
              class="!font-medium !text-lg md:!text-[20px] lg:!text-xl !mb-[15px] md:!mb-[20px] lg:!mb-[25px]"
            >
              {{ feature.title }}
            </h3>
            <p>
              {{ feature.description }}
            </p>
          </div>
          <img
            :src="feature.image"
            class="inline-block md:absolute md:top-1/2 ltr:md:right-0 rtl:md:left-0 md:-translate-y-1/2 mt-[25px] md:mt-0 lg:max-w-[160px] xl:max-w-full rtl:-scale-x-100"
            :alt="feature.imageAlt"
          />
        </div>
      </div>
    </div>
    <div
      class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-no-repeat bg-top -z-[1] dark:hidden"
      style="background: linear-gradient(180deg, #ffefe1 0%, #fff 100%)"
    ></div>
    <div
      class="absolute top-[70px] md:top-[84px] lg:top-[91px] left-0 right-0 -z-[1]"
    >
      <img
        src="@/assets/images/marketing/perspective-grid.png"
        class="inline-block"
        alt="perspective-grid"
      />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import icon1 from "@/assets/images/marketing/icons/chart.svg";
import icon2 from "@/assets/images/marketing/icons/global.svg";
import icon3 from "@/assets/images/marketing/icons/conversion.svg";
import icon4 from "@/assets/images/marketing/icons/network.svg";
import icon5 from "@/assets/images/marketing/icons/technology.svg";

import image1 from "@/assets/images/marketing/team-workspace.png";
import image2 from "@/assets/images/marketing/seamless-integrations.png";

interface Feature {
  icon: string;
  title: string;
  description: string;
  image?: string;
  imageAlt?: string;
}

export default defineComponent({
  name: "EverythingYouNeed",
  setup() {
    const sectionTagline = "Why Trezo";
    const sectionTitle = "Everything You Need to Grow Faster";
    const sectionDescription =
      "From campaign tracking to performance insights — we've got you covered.";

    const topFeatures: Feature[] = [
      {
        icon: icon1,
        title: "Campaign Insights",
        description:
          "Track real-time performance, spot trends instantly, and optimize campaigns based on smart, visualized data",
      },
      {
        icon: icon2,
        title: "Channel Control",
        description:
          "Manage all your marketing channels — email, social, ads — from one streamlined platform without switching",
      },
      {
        icon: icon3,
        title: "Funnel Tracking",
        description:
          "Visualize how leads flow through your funnel, identify drop-offs, and improve conversions with clear, actionable data.",
      },
    ];

    const bottomFeatures: Feature[] = [
      {
        icon: icon4,
        title: "Team Workspace",
        description:
          "Collaborate with your team in real time using tasks, comments, and shared views to keep everyone aligned.",
        image: image1,
        imageAlt: "team-workspace",
      },
      {
        icon: icon5,
        title: "Seamless Integrations",
        description:
          "Connect with your favorite tools through our growing ecosystem of integrations",
        image: image2,
        imageAlt: "seamless-integrations",
      },
    ];

    return {
      sectionTagline,
      sectionTitle,
      sectionDescription,
      topFeatures,
      bottomFeatures,
    };
  },
});
</script>
