<template>
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[100px] xl:pt-[120px] 2xl:pt-[140px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div class="xl:max-w-[485px]">
          <h2
            class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[15px] lg:!mb-[20px]"
          >
            Ready to Elevate Your
            <span class="italic gradient-color">School</span>?
          </h2>
          <p class="md:text-[15px] lg:text-md">
            Let Trezo handle the operations, so you can focus on education
          </p>
          <span
            class="mt-[17px] md:mt-[20px] lg:mt-[25px] flex items-center font-medium text-gray-900 dark:text-white gap-[10px]"
          >
            <i
              class="ri-check-fill flex items-center justify-center w-[18px] h-[18px] rounded-full bg-[#00ba00] text-white"
            ></i>
            No credit card required. Get started in minutes.
          </span>
          <a
            href="https://trezo-twcss.envytheme.com/"
            class="inline-block font-medium md:text-base rounded-[7px] bg-primary-500 text-white py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all hover:bg-primary-600 mt-[20px] md:mt-[30px] xl:mt-[45px]"
            target="_blank"
          >
            Get Your Free 14-Day Trial
          </a>
        </div>
        <div class="text-center ltr:lg:-ml-[25px] rtl:lg:-mr-[25px]">
          <img
            src="@/assets/images/school/cta.png"
            class="inline-block"
            alt="cta-image"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "CTA",
});
</script>
