<template>
  <div
    class="bg-[#f7f7f7] dark:bg-[#0a0e19] pt-[125px] md:pt-[150px] lg:pt-[175px] pb-[60px] md:pb-[80px] lg:pb-[90px] text-center"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <h2
        class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-0"
      >
        {{ pageTitle }}
      </h2>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "PageBanner",
  props: ["pageTitle"],
});
</script>
