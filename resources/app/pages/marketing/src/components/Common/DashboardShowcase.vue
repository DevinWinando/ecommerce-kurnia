<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
      <div class="xl:max-w-[521px]">
        <img :src="dashboardImage" class="rounded-[25px]" :alt="imageAlt" />
      </div>
      <div>
        <span
          class="inline-block py-[4.5px] px-[15px] rounded-[100px] bg-orange-100 dark:bg-[#0a0e19] text-orange-700 mb-[12px]"
        >
          {{ sectionTag }}
        </span>
        <h2
          class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl xl:max-w-[545px] !leading-[1.2] !mb-[10px] lg:!mb-[17px]"
        >
          {{ sectionTitle }}
        </h2>
        <p>
          {{ sectionDescription }}
        </p>
        <div class="my-[20px] md:my-[30px] xl:my-[40px]">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-[15px]">
            <div
              v-for="(feature, index) in features"
              :key="'feature-' + index"
              class="flex items-center md:text-md xl:text-lg font-medium text-gray-700 dark:text-gray-100 gap-[10px] md:gap-[12px]"
            >
              <div
                class="rounded-full w-[23px] h-[23px] md:w-[29px] md:h-[29px] flex items-center justify-center bg-success-600 text-white"
              >
                <i class="ri-check-fill"></i>
              </div>
              {{ feature }}
            </div>
          </div>
        </div>
        <p
          class="text-gray-700 dark:text-gray-100 font-medium md:text-[15px] lg:text-md"
        >
          {{ closingStatement }}
        </p>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import dbImage from "@/assets/images/marketing/dashboard.jpg";

export default defineComponent({
  name: "DashboardShowcase",
  setup() {
    const dashboardImage = dbImage;
    const imageAlt = "dashboard";
    const sectionTag = "Dashboard Showcase";
    const sectionTitle =
      "Experience Trezo in Action — No Guesswork, Just Results";
    const sectionDescription =
      "Get a firsthand look at how Trezo transforms your marketing workflow. From real-time performance tracking to campaign management and team collaboration — our interactive dashboard puts the power of data and strategy at your fingertips.";
    const closingStatement =
      "Try the live demo and see why marketers love Trezo.";

    const features = [
      "Real-time analytics",
      "Customizable widgets",
      "Drag-and-drop simplicity",
      "No setup required",
    ];

    return {
      dashboardImage,
      imageAlt,
      sectionTag,
      sectionTitle,
      sectionDescription,
      features,
      closingStatement,
    };
  },
});
</script>
