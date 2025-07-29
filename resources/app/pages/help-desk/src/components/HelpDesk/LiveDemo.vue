<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="rounded-[15px] bg-cover bg-center bg-no-repeat py-[70px] md:py-[90px] lg:py-[110px] px-[20px] md:px-[40px]"
      :style="`background-image: url(${backgroundImage})`"
    >
      <div
        class="grid grid-cols-1 lg:grid-cols-2 gap-[30px] lg:gap-[25px] items-center"
      >
        <div
          class="ltr:xl:pl-[45px] rtl:xl:pr-[45px] ltr:lg:pr-[50px] rtl:lg:pl-[50px]"
        >
          <h2
            class="!text-white md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[10px] lg:!mb-[12px]"
          >
            {{ title }}
          </h2>
          <p class="md:text-[15px] lg:text-md text-gray-50">
            {{ description }}
          </p>
          <ul
            class="mt-[25px] md:mt-[35px] lg:mt-[45px] xl:mt-[55px] xl:max-w-[410px]"
          >
            <li
              v-for="(feature, index) in features"
              :key="index"
              class="relative ltr:pl-[40px] ltr:md:pl-[45px] rtl:pr-[40px] rtl:md:pr-[45px] border-b border-black pb-[20px] mb-[20px] last:pb-0 last:mb-0 last:border-b-0"
            >
              <i
                class="ri-checkbox-circle-fill text-purple-300 absolute top-0 ltr:left-0 rtl:right-0 text-[25px]"
              ></i>
              <h3
                class="!text-white !font-medium !text-lg md:!text-[20px] !mb-[9px]"
              >
                {{ feature.title }}
              </h3>
              <p class="text-gray-50">
                {{ feature.description }}
              </p>
            </li>
          </ul>
        </div>
        <div class="text-center ltr:lg:-ml-[50px] rtl:lg:-mr-[50px]">
          <img :src="demoImage" class="inline-block" :alt="demoImageAlt" />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import bgImage from "@/assets/images/helpdesk/live-demo-bg.jpg";
import demoImage from "@/assets/images/helpdesk/live-demo.png";

interface FeatureItem {
  title: string;
  description: string;
}

interface LiveDemoProps {
  title: string;
  description: string;
  backgroundImage: string;
  demoImage: string;
  demoImageAlt: string;
  features: FeatureItem[];
}

export default defineComponent({
  name: "LiveDemo",
  setup(): LiveDemoProps {
    return {
      title: "See Trezo in Action",
      description:
        "Track conversations, monitor SLAs, and resolve faster — all from one clean dashboard.",
      backgroundImage: bgImage,
      demoImage: demoImage,
      demoImageAlt: "live-demo-image",

      features: [
        {
          title: "Real-Time Metrics",
          description: "Always know how your team is performing at a glance.",
        },
        {
          title: "SLA Tracking",
          description: "Always know how your team is performing at a glance.",
        },
        {
          title: "Custom Views",
          description:
            "Filter by agent, channel, priority, or customer segment.",
        },
      ],
    };
  },
});
</script>
