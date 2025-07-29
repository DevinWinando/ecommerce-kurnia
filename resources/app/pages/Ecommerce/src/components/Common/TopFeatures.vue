<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[150px] 2xl:py-[180px] bg-[#f7f7f7] dark:bg-[#0a0e19]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="text-center mb-[35px] md:mb-[45px] lg:mb-[55px] xl:mb-[65px]">
        <span
          class="inline-block py-[4.5px] px-[15px] text-primary-600 bg-primary-50 dark:bg-gray-900 rounded-[100px] mb-[12px]"
        >
          {{ header.tag }}
        </span>
        <h2
          class="!font-medium md:-tracking-[2px] !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl lg:max-w-[480px] xl:max-w-[540px] mx-auto !leading-[1.2] !mb-[11px] md:!mb-[13px] lg:!mb-[15px]"
        >
          {{ header.title }}
        </h2>
        <p>
          {{ header.description }}
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[25px]">
        <div v-for="(feature, index) in features" :key="index">
          <div
            class="bg-white dark:bg-gray-900 rounded-[15px] md:p-[15px] lg:p-0 xl:p-[15px] group"
            :class="{ 'lg:mt-[35px]': feature.offset }"
          >
            <div
              class="group-hover:bg-[#f7f7f7] group-hover:dark:bg-gray-800 rounded-[12px] px-[20px] py-[25px] md:py-[40px] relative z-[1] transition-all"
            >
              <div
                class="opacity-0 transition-all group-hover:opacity-100 absolute -z-[1] top-[20px] ltr:right-[20px] rtl:left-[20px]"
              >
                <img :src="feature.shapeImage" alt="shape" />
              </div>
              <img :src="feature.icon" :alt="feature.title.toLowerCase()" />
              <h3
                class="!font-medium !text-lg md:!text-[20px] lg:!text-[22px] xl:!text-xl !leading-[1.2] !mb-[15px] md:!mb-[20px] lg:!mb-[25px] mt-[25px] md:mt-[40px] lg:mt-[65px]"
              >
                {{ feature.title }}
              </h3>
              <p>
                {{ feature.description }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

import icon1 from "@/assets/images/ecommerce/icons/creativity.svg";
import icon2 from "@/assets/images/ecommerce/icons/bar-chart.svg";
import icon3 from "@/assets/images/ecommerce/icons/edit.svg";
import icon4 from "@/assets/images/ecommerce/icons/connect.svg";

import shape5 from "@/assets/images/ecommerce/shapes/shape5.png";

export default defineComponent({
  name: "TopFeatures",
  setup() {
    const header = ref({
      tag: "Top Features",
      title: "Your eCommerce Toolkit — All in One Place",
      description:
        "Trezo equips you with intelligent tools to run a high-performing online store.",
    });

    const features = ref([
      {
        title: "Sales Insights",
        description:
          "Get a clear view of what's selling, when, and to whom — all in real time.",
        icon: icon1,
        shapeImage: shape5,
        offset: true,
      },
      {
        title: "Customer Analytics",
        description:
          "Uncover buyer behavior, repeat purchases, and lifetime value effortlessly.",
        icon: icon2,
        shapeImage: shape5,
        offset: false,
      },
      {
        title: "Product Manager",
        description:
          "Bulk edit items, update inventory, and categorize with just a few clicks.",
        icon: icon3,
        shapeImage: shape5,
        offset: true,
      },
      {
        title: "Smart Connect",
        description:
          "Connect to Shopify, Stripe, Meta Ads, and more in seconds.",
        icon: icon4,
        shapeImage: shape5,
        offset: false,
      },
    ]);

    return {
      header,
      features,
    };
  },
});
</script>
