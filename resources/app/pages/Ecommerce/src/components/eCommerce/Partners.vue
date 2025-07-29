<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <span
      class="block text-[16px] md:text-[18px] lg:text-[20px] font-medium text-center text-black dark:text-white mb-[30px] md:mb-[40px] lg:mb-[50px]"
    >
      Trezo is the platform behind some of the fastest-growing online brands.
    </span>

    <div
      class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 xl:flex gap-[20px] md:gap-[25px] items-center justify-between"
    >
      <img
        v-for="partner in partners"
        :key="partner.id"
        :src="partner.image"
        :alt="partner.alt"
        class="inline-block dark:invert"
      />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/ecommerce/partners/partner1.svg";
import image2 from "@/assets/images/ecommerce/partners/partner2.svg";
import image3 from "@/assets/images/ecommerce/partners/partner3.svg";
import image4 from "@/assets/images/ecommerce/partners/partner4.svg";
import image5 from "@/assets/images/ecommerce/partners/partner5.svg";
import image6 from "@/assets/images/ecommerce/partners/partner6.svg";

interface Partner {
  id: number;
  image: string;
  alt: string;
}

export default defineComponent({
  name: "Partners",
  setup() {
    const partners: Partner[] = [
      { id: 1, image: image1, alt: "Partner 1 company logo" },
      { id: 2, image: image2, alt: "Partner 2 company logo" },
      { id: 3, image: image3, alt: "Partner 3 company logo" },
      { id: 4, image: image4, alt: "Partner 4 company logo" },
      { id: 5, image: image5, alt: "Partner 5 company logo" },
      { id: 6, image: image6, alt: "Partner 6 company logo" },
    ];

    return { partners };
  },
});
</script>
