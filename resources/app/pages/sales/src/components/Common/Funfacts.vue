<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="bg-[#06201b] rounded-[20px] md:rounded-[30px] py-[70px] px-[20px] md:py-[90px] lg:py-[100px] lg:px-[50px] bg-cover bg-no-repeat bg-bottom"
        :style="{ backgroundImage: `url(${backgroundImage})` }"
      >
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-[25px]">
          <div
            v-for="(stat, index) in funfacts"
            :key="index"
            class="text-center"
          >
            <h3
              class="!leading-none !text-lime-500 !font-medium !text-3xl md:!text-4xl lg:!text-5xl !mb-[10px] md:-tracking-[1px]"
            >
              {{ stat.value }}
            </h3>
            <span
              class="block font-medium text-[#ebebe0] mx-auto md:max-w-[145px]"
            >
              {{ stat.label }}
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import bgImage from "@/assets/images/sales/funfacts-bg.jpg";

export default defineComponent({
  name: "Funfacts",
  setup() {
    const backgroundImage = bgImage;

    const funfacts = [
      { value: "4.8/5", label: "Avg. User Rating" },
      { value: "12K+", label: "Sales Teams Powered" },
      { value: "30%", label: "Avg. Increase in Conversions" },
      { value: "100+", label: "Integrations Available" },
    ];

    return {
      backgroundImage,
      funfacts,
    };
  },
});
</script>
