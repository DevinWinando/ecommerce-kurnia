<template>
  <div class="xl:max-w-[1680px] mx-auto text-center">
    <div
      class="dark:bg-[#0a0e19] py-[70px] xl:px-[75px] relative z-[1] xl:rounded-[30px]"
    >
      <div
        class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-full mx-auto px-[12px]"
      >
        <h2
          class="md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-0"
        >
          {{ pageTitle }}
        </h2>
      </div>
      <div
        class="absolute top-0 left-0 right-0 bottom-0 -z-[1] bg-cover bg-no-repeat bg-center xl:rounded-[30px] dark:hidden"
        :style="{ backgroundImage: `url(${bgImage})` }"
      ></div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import bgImage from "@/assets/images/shipment/banner-bg.jpg";

export default defineComponent({
  name: "PageBanner",
  props: ["pageTitle"],
  setup() {
    return {
      bgImage: bgImage,
    };
  },
});
</script>
