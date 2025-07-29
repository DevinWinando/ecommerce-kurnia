<template>
  <div
    class="dark:bg-[#0a0e19] pt-[150px] md:pt-[190px] lg:pt-[220px] relative z-[1]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="text-center mx-auto max-w-[848px]">
        <div
          class="py-[8px] px-[13px] inline-block bg-white dark:bg-dark rounded-[30px] mb-[10px] md:mb-[15px]"
        >
          Trusted by more than
          <span
            class="font-medium inline-block rounded-[30px] text-white px-[15px] py-[2.5px]"
            style="
              background: linear-gradient(180deg, #ffaa72 0%, #ee3e08 100%);
            "
            >75k+ Clients</span
          >
        </div>
        <h1
          class="!font-medium !text-3xl md:!text-[45px] lg:!text-[55px] xl:!text-[60px] !leading-[1.2] !mb-[12px] md:!mb-[15px] lg:!mb-[20px]"
        >
          Turn Store Traffic Into Sales With
          <span class="text-primary-500 italic">AI-Powered</span> Insights
        </h1>
        <p class="md:text-[15px] lg:text-md xl:text-lg mx-auto max-w-[630px]">
          Get real-time data on sales, foot traffic, and customer behavior — all
          from one sleek dashboard.
        </p>
        <div class="mt-[25px] md:mt-[35px] xl:mt-[40px]">
          <a
            href="https://trezo-twcss.envytheme.com/"
            class="group inline-block font-medium md:text-base rounded-[30px] bg-primary-500 text-white py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] relative z-[1] mx-[5px]"
            target="_blank"
          >
            Get Demo - <span class="font-normal">It’s Free</span>
            <span
              class="absolute top-0 left-0 w-full h-full -z-[1] rounded-[30px] transition-all group-hover:opacity-0"
              style="
                background: linear-gradient(180deg, #9caaff 0%, #4936f5 100%);
              "
            ></span>
          </a>
          <a
            href="https://trezo-twcss.envytheme.com/"
            class="group inline-block font-medium md:text-base rounded-[30px] text-primary-500 hover:text-white py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] relative z-[1] mx-[5px] transition-all"
            target="_blank"
            style="
              background: linear-gradient(180deg, #9caaff 0%, #4936f5 100%);
            "
          >
            See Sample Report
            <span
              class="absolute top-0 left-0 right-0 bottom-0 m-px -z-[1] rounded-[30px] transition-all bg-[#dbeefd] dark:bg-[#0a0e19] group-hover:opacity-0"
            ></span>
          </a>
        </div>
      </div>
      <div
        class="text-center mt-[30px] md:mt-[50px] lg:mt-[80px] xl:mt-[110px]"
      >
        <img
          src="@/assets/images/store-analysis/banner.png"
          class="inline-block"
          alt="banner-image"
        />
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
  name: "MainBanner",
});
</script>
