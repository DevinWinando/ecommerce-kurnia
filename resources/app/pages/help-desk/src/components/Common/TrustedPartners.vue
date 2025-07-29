<template>
  <div
    class="pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[130px] 2xl:pb-[150px] bg-gray-900"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="relative z-[1] mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px]"
      >
        <div
          class="absolute top-1/2 -translate-y-1/2 -z-[1] left-0 w-full h-[1px] bg-gray-600"
        ></div>
        <span
          class="inline-block md:text-md lg:text-lg text-white bg-gray-700 border border-gray-600 rounded-[100px] py-[4px] px-[20px]"
        >
          {{ title }}
        </span>
      </div>

      <div
        class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-[25px] items-center"
      >
        <img
          v-for="(partner, index) in partners"
          :key="index"
          :src="partner.image"
          class="inline-block"
          :alt="partner.alt"
        />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

import image1 from "@/assets/images/helpdesk/partners/partner1.svg";
import image2 from "@/assets/images/helpdesk/partners/partner2.svg";
import image3 from "@/assets/images/helpdesk/partners/partner3.svg";
import image4 from "@/assets/images/helpdesk/partners/partner4.svg";
import image5 from "@/assets/images/helpdesk/partners/partner5.svg";

interface Partner {
  image: string;
  alt: string;
}

export default defineComponent({
  name: "TrustedPartners",
  setup() {
    const title = ref<string>("Trusted by Teams Worldwide");
    const partners = ref<Partner[]>([
      { image: image1, alt: "partner-1" },
      { image: image2, alt: "partner-2" },
      { image: image3, alt: "partner-3" },
      { image: image4, alt: "partner-4" },
      { image: image5, alt: "partner-5" },
    ]);

    return {
      title,
      partners,
    };
  },
});
</script>
