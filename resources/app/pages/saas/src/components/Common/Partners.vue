<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <span
      class="block text-center font-medium md:text-[15px] lg:text-md mb-[25px] md:mb-[35px]"
    >
      Backed by Teams Across Industries
    </span>
    <div
      class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-[25px] items-center"
    >
      <div
        v-for="(partner, index) in partners"
        :key="index"
        class="text-center"
      >
        <img
          :src="partner.logo"
          class="inline-block"
          :alt="`${partner.name} logo`"
          :title="partner.name"
          loading="lazy"
        />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import logo1 from "@/assets/images/saas/partners/partner1.svg";
import logo2 from "@/assets/images/saas/partners/partner2.svg";
import logo3 from "@/assets/images/saas/partners/partner3.svg";
import logo4 from "@/assets/images/saas/partners/partner4.svg";
import logo5 from "@/assets/images/saas/partners/partner5.svg";
import logo6 from "@/assets/images/saas/partners/partner6.svg";

interface Partner {
  name: string;
  logo: string;
}

export default defineComponent({
  name: "Partners",
  setup() {
    const partners: Partner[] = [
      {
        name: "TechCorp",
        logo: logo1,
      },
      {
        name: "InnovateX",
        logo: logo2,
      },
      {
        name: "Digital Solutions",
        logo: logo3,
      },
      {
        name: "FutureTech",
        logo: logo4,
      },
      {
        name: "CloudNine",
        logo: logo5,
      },
      {
        name: "DataSystems",
        logo: logo6,
      },
    ];

    return {
      partners,
    };
  },
});
</script>
