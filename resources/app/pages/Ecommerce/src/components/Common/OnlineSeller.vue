<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[150px] 2xl:py-[180px] relative z-[1]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="text-center mb-[35px] md:mb-[45px] lg:mb-[55px] xl:mb-[65px]">
        <span
          class="inline-block py-[4.5px] px-[15px] text-primary-600 bg-primary-50 dark:bg-gray-900 rounded-[100px] mb-[12px]"
        >
          {{ tagline }}
        </span>
        <h2
          class="!font-medium md:-tracking-[2.5px] !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl lg:max-w-[480px] xl:max-w-[540px] mx-auto !leading-[1.2] !mb-[11px] md:!mb-[13px] lg:!mb-[15px]"
        >
          {{ title }}
        </h2>
        <p>
          {{ description }}
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-[25px]">
        <div v-for="(seller, index) in sellers" :key="index">
          <div
            class="text-center mx-auto lg:max-w-[195px] relative"
            :class="{
              'lg:mt-[50px] xl:mt-[95px]': seller.hasTopArrow,
              'xl:mt-[25px]': seller.hasBottomArrow,
            }"
          >
            <div
              v-if="seller.arrow"
              class="absolute hidden lg:block"
              :class="{
                '-top-[50px] ltr:-right-[158px] rtl:-left-[158px]':
                  seller.arrow.position === 'top',
                'top-[80px] ltr:-right-[158px] rtl:-left-[158px]':
                  seller.arrow.position === 'bottom',
              }"
            >
              <img
                :src="seller.arrow.src"
                :alt="seller.arrow.alt"
                class="rtl:-scale-x-100"
              />
            </div>
            <div
              class="w-[120px] h-[120px] mx-auto bg-gray-50 md:bg-white dark:bg-[#0a0e19] rounded-full flex items-center justify-center mb-[20px] md:mb-[25px] lg:mb-[28px]"
            >
              <img
                :src="seller.icon"
                class="inline-block"
                :alt="seller.iconAlt"
              />
            </div>
            <h3 class="!font-medium !text-lg !leading-[1.2] !mb-[10px]">
              {{ seller.title }}
            </h3>
            <p>{{ seller.description }}</p>
          </div>
        </div>
      </div>
    </div>

    <div
      class="absolute top-[20px] lg:top-0 xl:-top-[100px] 2xl:-top-[200px] left-0 right-0 -z-[1] hidden md:block"
    >
      <img :src="backgroundImage" alt="mesh-grad" />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import bgImage from "@/assets/images/ecommerce/mesh-grad.png";

import icon1 from "@/assets/images/ecommerce/icons/brand.svg";
import icon2 from "@/assets/images/ecommerce/icons/shopify.svg";
import icon3 from "@/assets/images/ecommerce/icons/industry.svg";
import icon4 from "@/assets/images/ecommerce/icons/shopping-store.svg";

import arrowTopRight from "@/assets/images/ecommerce/arrow-top-right.svg";
import arrowBottomRight from "@/assets/images/ecommerce/arrow-bottom-right.svg";

export default defineComponent({
  name: "OnlineSeller",
  setup() {
    const data = {
      tagline: "It's Built For",
      title: "Perfect for Every Kind of Online Seller",
      description:
        "Whether you're just starting or scaling big — Trezo fits your store.",
      backgroundImage: bgImage,
      sellers: [
        {
          title: "D2C Brands",
          description: "Control the full customer journey and drive loyalty.",
          icon: icon1,
          iconAlt: "brand",
          hasTopArrow: true,
          arrow: {
            position: "top",
            src: arrowTopRight,
            alt: "arrow-top-right",
          },
        },
        {
          title: "Shopify Sellers",
          description:
            "Plug Trezo into your existing setup and enhance capabilities.",
          icon: icon2,
          iconAlt: "shopify",
          hasBottomArrow: true,
          arrow: {
            position: "bottom",
            src: arrowBottomRight,
            alt: "arrow-bottom-right",
          },
        },
        {
          title: "Niche Stores",
          description: "Run smarter with insights tailored to your audience.",
          icon: icon3,
          iconAlt: "industry",
          hasTopArrow: true,
          arrow: {
            position: "top",
            src: arrowTopRight,
            alt: "arrow-top-right",
          },
        },
        {
          title: "Multi-Channel Retailers",
          description: "Track sales from all platforms, seamlessly.",
          icon: icon4,
          iconAlt: "shopping-store",
          hasBottomArrow: false,
        },
      ],
    };

    return {
      ...data,
    };
  },
});
</script>
