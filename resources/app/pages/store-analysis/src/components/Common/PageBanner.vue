<template>
  <div
    class="dark:bg-[#0a0e19] pt-[150px] md:pt-[190px] lg:pt-[225px] pb-[80px] md:pb-[105px] lg:pb-[115px] relative z-[1]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="text-center mx-auto max-w-[848px]">
        <h2
          class="!font-medium md:-tracking-[1px] !text-xl md:!text-2xl lg:!text-3xl xl:!text-5xl !leading-[1.2] !mb-[20px] md:!mb-[25px]"
        >
          {{ pageTitle }}
        </h2>

        <div
          class="py-[8px] px-[13px] inline-block bg-white dark:bg-dark rounded-[30px] mb-[10px] md:mb-[15px]"
        >
          {{ shortDesc }}
          <span
            class="font-medium inline-block rounded-[30px] text-white px-[15px] py-[2.5px]"
            style="
              background: linear-gradient(180deg, #ffaa72 0%, #ee3e08 100%);
            "
          >
            {{ shortDesc2 }}
          </span>
        </div>
      </div>
    </div>
    <div
      class="absolute rounded-[15px] top-0 left-0 w-full h-full bg-no-repeat bg-center bg-cover -z-[1] dark:hidden"
      style="background: linear-gradient(180deg, #e9f1ff 0%, #c2e9fb 100%)"
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "PageBanner",
  props: ["pageTitle", "shortDesc", "shortDesc2"],
});
</script>
