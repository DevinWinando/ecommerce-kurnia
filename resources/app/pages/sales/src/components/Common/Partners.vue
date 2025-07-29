<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <span
      class="block text-center font-medium md:text-[15px] lg:text-md text-[#7a857d] mb-[25px] md:mb-[35px]"
    >
      Sales teams from startups to enterprises trust Trezo
    </span>

    <div
      class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-[25px] items-center"
    >
      <div v-for="partner in partners" :key="partner.id" class="text-center">
        <img :src="partner.logo" class="inline-block" :alt="partner.alt" />
      </div>
    </div>

    <div
      class="h-[1px] w-full bg-[#ebebe0] dark:bg-[#202c4b] mt-[30px] md:mt-[40px] lg:mt-[50px] xl:mt-[60px]"
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import logo1 from "@/assets/images/sales/partners/partner1.svg";
import logo2 from "@/assets/images/sales/partners/partner2.svg";
import logo3 from "@/assets/images/sales/partners/partner3.svg";
import logo4 from "@/assets/images/sales/partners/partner4.svg";
import logo5 from "@/assets/images/sales/partners/partner5.svg";
import logo6 from "@/assets/images/sales/partners/partner6.svg";

export default defineComponent({
  name: "Partners",
  setup() {
    const partners = [
      { id: 1, logo: logo1, alt: "Partner 1" },
      { id: 2, logo: logo2, alt: "Partner 2" },
      { id: 3, logo: logo3, alt: "Partner 3" },
      { id: 4, logo: logo4, alt: "Partner 4" },
      { id: 5, logo: logo5, alt: "Partner 5" },
      { id: 6, logo: logo6, alt: "Partner 6" },
    ];

    return { partners };
  },
});
</script>
