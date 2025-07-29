<template>
  <div
    class="pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[130px] 2xl:pb-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="text-center mb-[25px] md:mb-[35px] relative z-1">
        <span
          class="inline-block text-center font-medium md:text-[15px] lg:text-md border border-gray-100 dark:border-gray-900 bg-white dark:bg-dark rounded-[100px] py-[8px] px-[17px]"
        >
          Backed by Teams Across Industries
        </span>
        <div
          class="absolute h-px left-0 right-0 -z-[1] bg-gray-100 dark:bg-gray-900 top-1/2 translate-y-1/2"
        ></div>
      </div>

      <div
        class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-[25px] items-center"
      >
        <div
          class="text-center"
          v-for="(partner, index) in partners"
          :key="index"
        >
          <img
            :src="partner.image"
            class="inline-block max-h-12 hover:opacity-80 transition-opacity"
            :alt="partner.alt"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/shipment/partners/partner1.svg";
import image2 from "@/assets/images/shipment/partners/partner2.svg";
import image3 from "@/assets/images/shipment/partners/partner3.svg";
import image4 from "@/assets/images/shipment/partners/partner4.svg";
import image5 from "@/assets/images/shipment/partners/partner5.svg";
import image6 from "@/assets/images/shipment/partners/partner6.svg";

interface Partner {
  image: string;
  alt: string;
}

export default defineComponent({
  name: "Partners",
  setup() {
    const partners: Partner[] = [
      { image: image1, alt: "Partner 1" },
      { image: image2, alt: "Partner 2" },
      { image: image3, alt: "Partner 3" },
      { image: image4, alt: "Partner 4" },
      { image: image5, alt: "Partner 5" },
      { image: image6, alt: "Partner 6" },
    ];

    return {
      partners,
    };
  },
});
</script>
