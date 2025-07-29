<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <span
      class="block text-center font-medium md:text-[15px] lg:text-md mb-[25px] md:mb-[35px]"
    >
      Trusted by Progressive Schools Worldwide
    </span>
    <div
      class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-[25px] items-center"
    >
      <div
        v-for="(partner, index) in partners"
        :key="index"
        class="text-center"
      >
        <img :src="partner.image" class="inline-block" :alt="partner.altText" />
      </div>
    </div>
    <div
      class="h-[1px] w-full bg-gray-100 dark:bg-gray-900 mt-[30px] md:mt-[40px] lg:mt-[50px] xl:mt-[60px]"
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/school/partners/partner1.svg";
import image2 from "@/assets/images/school/partners/partner2.svg";
import image3 from "@/assets/images/school/partners/partner3.svg";
import image4 from "@/assets/images/school/partners/partner4.svg";
import image5 from "@/assets/images/school/partners/partner5.svg";
import image6 from "@/assets/images/school/partners/partner6.svg";

interface Partner {
  image: string;
  altText: string;
}

export default defineComponent({
  name: "Partners",
  data() {
    return {
      partners: [
        {
          image: image1,
          altText: "Partner 1",
        },
        {
          image: image2,
          altText: "Partner 2",
        },
        {
          image: image3,
          altText: "Partner 3",
        },
        {
          image: image4,
          altText: "Partner 4",
        },
        {
          image: image5,
          altText: "Partner 5",
        },
        {
          image: image6,
          altText: "Partner 6",
        },
      ] as Partner[],
    };
  },
});
</script>
