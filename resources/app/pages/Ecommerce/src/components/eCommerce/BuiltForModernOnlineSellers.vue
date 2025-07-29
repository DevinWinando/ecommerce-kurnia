<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[150px] 2xl:py-[180px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div class="ltr:lg:-mr-[10px] rtl:lg:-ml-[10px] text-center">
          <img
            :src="image"
            class="inline-block rtl:-scale-x-100"
            :alt="imageAlt"
          />
        </div>
        <div>
          <span
            class="inline-block py-[4.5px] px-[15px] text-primary-600 bg-primary-50 dark:bg-gray-900 rounded-[100px] mb-[12px] md:!mb-[15px]"
          >
            {{ tagline }}
          </span>
          <h2
            class="!font-medium md:-tracking-[3px] !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl xl:max-w-[545px] !leading-[1.2] !mb-[11px] md:!mb-[13px] lg:!mb-[15px]"
          >
            {{ title }}
          </h2>
          <p>{{ description }}</p>
          <div
            class="grid grid-cols-2 gap-[20px] md:gap-[30px] lg:gap-[40px] xl:gap-[50px] mt-[20px] md:mt-[30px] lg:mt-[40px] xl:mt-[60px]"
          >
            <div v-for="(stat, index) in stats" :key="index">
              <div
                class="leading-none text-black dark:text-white text-[40px] md:text-[54px] lg:text-[64px]"
              >
                {{ stat.value }}
              </div>
              <div
                class="h-px w-full bg-gray-100 dark:bg-gray-800 -mt-[7px] md:-mt-[9px] md:max-w-[200px]"
              ></div>
              <span class="block mt-[10px]">{{ stat.label }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import imageSrc from "@/assets/images/eCommerce/why-trezo.png";

export default defineComponent({
  name: "BuiltForModernOnlineSellers",
  setup() {
    const componentData = {
      image: imageSrc,
      imageAlt: "why-trezo-image",
      tagline: "Why Trezo?",
      title: "Built for Modern Online Sellers",
      description:
        "Every feature of Trezo is crafted to help you sell smarter, not harder.",
      stats: [
        { value: "2x", label: "Faster Sales Monitoring" },
        { value: "98%", label: "Inventory Accuracy" },
        { value: "3x", label: "Better Conversion Insights" },
        { value: "5k+", label: "Orders Automated Weekly" },
      ],
    };

    return {
      ...componentData,
    };
  },
});
</script>
