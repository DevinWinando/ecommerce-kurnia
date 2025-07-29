<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="bg-[#06201b] rounded-[20px] md:rounded-[35px] py-[70px] px-[20px] md:py-[90px] md:px-[50px] lg:py-[100px] xl:py-[110px] xl:px-[110px]"
      >
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
          <div class="text-center ltr:xl:mr-[25px] rtl:xl:ml-[25px]">
            <img
              :src="content.image.src"
              class="inline-block"
              :alt="content.image.alt"
            />
          </div>
          <div class="ltr:xl:pl-[90px] rtl:xl:pr-[90px]">
            <span
              class="inline-block font-medium text-lime-500 rounded-[30px] border border-lime-500 py-[5.5px] px-[18px] mb-[12px] md:mb-[15px]"
            >
              {{ content.tagline }}
            </span>
            <h2
              class="!text-[#ebebe0] md:-tracking-[1px] !font-medium !text-2xl md:!text-3xl lg:!text-4xl !leading-[1.2] !mb-[12px] md:!mb-[15px]"
            >
              {{ content.title }}
            </h2>
            <p
              class="md:text-[15px] lg:text-md text-[#ebebe0] md:max-w-[415px]"
            >
              {{ content.description }}
            </p>
            <div class="my-[20px] md:my-[25px] lg:my-[35px] xl:my-[45px]">
              <div
                v-for="(feature, index) in content.features"
                :key="index"
                class="mb-[15px] md:mb-[20px] lg:mb-[25px] last:mb-0 flex items-center font-medium text-[#ebebe0] text-[14px] md:text-md lg:text-lg gap-[12px]"
              >
                <span
                  class="flex items-center justify-center w-[25px] md:w-[30px] h-[25px] md:h-[30px] rounded-full bg-[#00ba00] text-black text-[18px] md:text-[22px]"
                >
                  <i class="ri-check-fill"></i>
                </span>
                {{ feature }}
              </div>
            </div>
            <a
              :href="content.cta.link"
              class="inline-block font-medium md:text-base rounded-[7px] bg-lime-500 text-black py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all hover:bg-lime-600 mt-[5px] md:mt-[10px] xl:mt-[15px]"
              :target="content.cta.target"
            >
              {{ content.cta.text }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

import dashboardImage from "@/assets/images/sales/dashboard-showcase.png";

interface Content {
  tagline: string;
  title: string;
  description: string;
  image: {
    src: string;
    alt: string;
  };
  features: string[];
  cta: {
    text: string;
    link: string;
    target: string;
  };
}

export default defineComponent({
  name: "DashboardShowcase",
  setup() {
    const content = ref<Content>({
      tagline: "Dashboard Showcase",
      title: "See Trezo in Action",
      description:
        "Monitor KPIs, track deals, and get actionable insights — all in one powerful sales dashboard.",
      image: {
        src: dashboardImage,
        alt: "dashboard-showcase",
      },
      features: [
        "Drag-and-drop pipeline",
        "Sales leaderboard",
        "Forecasting view",
        "Real-time notifications",
      ],
      cta: {
        text: "Get Your Free 14-Day Trial",
        link: "https://trezo-twcss.envytheme.com/",
        target: "_blank",
      },
    });

    return {
      content,
    };
  },
});
</script>
