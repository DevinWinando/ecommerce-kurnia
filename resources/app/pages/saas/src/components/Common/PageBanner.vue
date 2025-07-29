<template>
  <div
    class="dark:bg-[#0a0e19] relative z-[1] pt-[150px] md:pt-[195px] lg:pt-[230px] xl:pt-[250px] pb-[60px] md:pb-[85px] lg:pb-[95px] xl:pb-[100px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="text-center mx-auto lg:max-w-[850px]">
        <h1
          class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-0"
        >
          {{ pageTitle }}
        </h1>
      </div>
    </div>
    <div
      class="absolute top-0 left-0 right-0 bottom-0 lg:rounded-[30px] -z-[1] bg-center bg-no-repeat bg-cover lg:mx-[15px] xl:mx-[30px] lg:mt-[15px] xl:mt-[30px] dark:hidden"
      :style="{ backgroundImage: `url(${bgImage})` }"
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import bgImage from "@/assets/images/saas/banner-bg.jpg";

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
