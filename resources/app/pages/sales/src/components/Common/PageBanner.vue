<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="bg-[#06201b] rounded-[20px] md:rounded-[30px] py-[70px] px-[20px] md:py-[90px] md:px-[50px] lg:py-[100px] lg:px-[80px] xl:px-[100px] bg-cover bg-no-repeat bg-bottom text-center"
      :style="{ backgroundImage: `url(${bgImage})` }"
    >
      <h1
        class="!text-[#ebebe0] md:-tracking-[1px] !font-medium !text-2xl md:!text-3xl lg:!text-4xl !leading-[1.2] !mb-0"
      >
        {{ pageTitle }}
      </h1>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import bgImage from "@/assets/images/sales/funfacts-bg.jpg";

export default defineComponent({
  name: "PageBanner",
  props: ["pageTitle"],
  setup() {
    return {
      bgImage,
    };
  },
});
</script>
