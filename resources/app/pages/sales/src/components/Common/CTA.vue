<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="bg-[#06201b] rounded-[20px] md:rounded-[35px] py-[70px] px-[20px] md:py-[90px] md:px-[50px] lg:py-[100px] lg:px-[80px] xl:py-[110px] xl:px-[110px] relative z-[1]"
    >
      <div class="md:max-w-[415px]">
        <h2
          class="!text-[#ebebe0] !font-medium !text-2xl md:!text-3xl lg:!text-4xl !leading-[1.2] md:-tracking-[1px] !mb-[15px] md:!mb-[18px]"
        >
          Ready to <span class="text-lime-500">Supercharge</span> Your Sales?
        </h2>
        <p class="md:text-[15px] lg:text-md text-[#ebebe0]">
          Join thousands of sales professionals who close more deals, faster —
          with Trezo.
        </p>
        <div
          class="mt-[20px] md:mt-[25px] flex items-center gap-[11px] font-medium text-[#ebebe0]"
        >
          <span
            class="block rounded-full w-[18px] h-[18px] bg-lime-500 text-black flex items-center justify-center"
          >
            <i class="ri-check-fill"></i>
          </span>
          No credit card required. Get started in minutes.
        </div>
        <a
          href="https://trezo-twcss.envytheme.com/"
          class="inline-block font-medium md:text-base rounded-[7px] bg-lime-500 text-black py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all hover:bg-lime-600 mt-[25px] md:mt-[45px]"
          target="_blank"
        >
          Get Your Free 14-Day Trial
        </a>
        <div
          class="md:absolute md:top-[180px] lg:top-[130px] xl:top-[75px] ltr:right-0 rtl:left-0 -z-[1] mt-[30px] md:mt-0 -mx-[20px] md:mx-0 ltr:md:ml-[100px] ltr:xl:ml-0 rtl:md:mr-[100px] rtl:xl:mr-0 rtl:-scale-x-100"
        >
          <img
            src="@/assets/images/sales/free-trial.png"
            alt="free-trial-image"
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
