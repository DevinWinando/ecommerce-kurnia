<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="dark:bg-[#0a0e19] rounded-[15px] md:rounded-[30px] relative z-[1] pt-[50px] px-[20px] md:px-[40px] ltr:xl:pl-[110px] rtl:xl:pr-[110px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px]">
        <div class="md:max-w-[485px] xl:pt-[20px] lg:-mt-[10px] xl:mt-0">
          <h2
            class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px] md:!mb-[15px] xl:!mb-[20px]"
          >
            Ready to Take Control of Your Workflow?
          </h2>
          <p class="md:text-[15px] lg:text-md">
            Start your free trial today and experience Trezo for yourself.
          </p>
          <span
            class="mt-[17px] md:mt-[20px] xl:mt-[25px] flex items-center font-medium text-gray-900 dark:text-white gap-[10px]"
          >
            <i
              class="ri-check-fill flex items-center justify-center w-[18px] h-[18px] rounded-full bg-[#00ba00] text-white flex-none"
            ></i>
            No credit card required. Get started in minutes.
          </span>
          <a
            href="https://trezo-twcss.envytheme.com/"
            class="inline-block font-medium md:text-base rounded-[7px] bg-primary-500 text-white py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all hover:bg-primary-600 mt-[20px] md:mt-[25px] xl:mt-[45px]"
            target="_blank"
          >
            Get Your Free 14-Day Trial
          </a>
        </div>
        <div
          class="text-center ltr:lg:-ml-[50px] rtl:lg:-mr-[50px] ltr:xl:-ml-[10px] rtl:xl:-mr-[10px]"
        >
          <img
            src="@/assets/images/saas/free-trial.png"
            class="inline-block rounded-br-[15px] md:rounded-br-[30px]"
            alt="free-trial-image"
          />
        </div>
      </div>
      <div
        class="absolute top-0 left-0 right-0 bottom-0 rounded-[15px] md:rounded-[30px] -z-[1] bg-center bg-no-repeat bg-cover dark:hidden"
        :style="`background-image: url(${bgImage})`"
      ></div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import bgImage from "@/assets/images/saas/free-trial-bg.jpg";

export default defineComponent({
  name: "FreeTrail",
  setup() {
    return {
      bgImage,
    };
  },
});
</script>
