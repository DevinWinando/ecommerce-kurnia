<template>
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[110px] xl:pt-[130px] 2xl:pt-[160px]"
  >
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
            :src="partner.image"
            class="inline-block max-h-[60px] md:max-h-[80px] object-contain"
            :alt="partner.name + ' logo'"
            :title="partner.name"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/social-media/partners/partner1.svg";
import image2 from "@/assets/images/social-media/partners/partner2.svg";
import image3 from "@/assets/images/social-media/partners/partner3.svg";
import image4 from "@/assets/images/social-media/partners/partner4.svg";
import image5 from "@/assets/images/social-media/partners/partner5.svg";
import image6 from "@/assets/images/social-media/partners/partner6.svg";

interface Partner {
  name: string;
  image: string;
}

export default defineComponent({
  name: "Partners",
  setup() {
    const partners: Partner[] = [
      { name: "Partner 1", image: image1 },
      { name: "Partner 2", image: image2 },
      { name: "Partner 3", image: image3 },
      { name: "Partner 4", image: image4 },
      { name: "Partner 5", image: image5 },
      { name: "Partner 6", image: image6 },
    ];

    return {
      partners,
    };
  },
});
</script>
