<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[150px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] text-center mx-auto md:max-w-[630px]"
      >
        <h2
          class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[10px] lg:!mb-[12px]"
        >
          Effortless Integrations
        </h2>
        <p class="md:text-[15px] lg:text-md">
          Connect Trezo with your favorite tools — no code, no hassle.
        </p>
        <a
          href="https://trezo-twcss.envytheme.com/"
          class="mt-[5px] md:mt-[15px] lg:mt-[25px] inline-block font-medium rounded-[100px] bg-purple-600 border border-purple-600 text-base text-white py-[9px] md:py-[10.5px] px-[25px] md:px-[30px] transition-all hover:bg-purple-500 hover:border-purple-500"
          target="_blank"
        >
          Start Your Free Trial
        </a>
      </div>

      <div
        class="text-center relative md:max-w-[659px] mx-auto md:pb-[30px] flex flex-wrap justify-center gap-[25px] md:block"
      >
        <div
          class="w-[659px] h-[659px] rounded-full border border-dashed border-purple-300 mx-auto hidden md:block"
        ></div>
        <div
          class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[421px] h-[421px] rounded-full border border-dashed border-purple-300 mx-auto hidden md:block"
        ></div>
        <div
          class="bg-white dark:bg-dark w-[80px] h-[80px] md:w-[100px] md:h-[100px] rounded-full flex items-center justify-center md:absolute shadow-3xl md:top-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2"
        >
          <img src="@/assets/images/helpdesk/icons/ico.svg" alt="ico" />
        </div>
        <div
          class="bg-white dark:bg-dark w-[80px] h-[80px] rounded-full flex items-center justify-center md:absolute shadow-3xl md:top-[160px] ltr:md:-left-[13px] rtl:md:-right-[13px]"
        >
          <img src="@/assets/images/helpdesk/icons/shopify.svg" alt="shopify" />
        </div>
        <div
          class="bg-white dark:bg-dark w-[80px] h-[80px] rounded-full flex items-center justify-center md:absolute shadow-3xl md:top-[32px] ltr:md:right-[83px] rtl:md:left-[83px]"
        >
          <img src="@/assets/images/helpdesk/icons/drive.svg" alt="drive" />
        </div>
        <div
          class="bg-white dark:bg-dark w-[80px] h-[80px] rounded-full flex items-center justify-center md:absolute shadow-3xl md:bottom-0 md:left-1/2 md:-translate-x-1/2 ltr:md:-ml-[20px] rtl:md:-mr-[20px]"
        >
          <img src="@/assets/images/helpdesk/icons/teams.svg" alt="teams" />
        </div>
        <div
          class="bg-white dark:bg-dark w-[80px] h-[80px] rounded-full flex items-center justify-center md:absolute shadow-3xl md:top-[262px] ltr:md:-right-[35px] rtl:md:-left-[35px]"
        >
          <img
            src="@/assets/images/helpdesk/icons/whatsapp.svg"
            alt="whatsapp"
          />
        </div>
        <div
          class="bg-white dark:bg-dark w-[80px] h-[80px] rounded-full flex items-center justify-center md:absolute shadow-3xl md:bottom-[220px] ltr:md:left-[100px] rtl:md:right-[100px]"
        >
          <img src="@/assets/images/helpdesk/icons/zendesk.svg" alt="zendesk" />
        </div>
        <div
          class="bg-white dark:bg-dark w-[80px] h-[80px] rounded-full flex items-center justify-center md:absolute shadow-3xl md:bottom-[180px] ltr:md:right-[120px] rtl:md:left-[120px]"
        >
          <img src="@/assets/images/helpdesk/icons/slack.svg" alt="slack" />
        </div>
        <div
          class="bg-white dark:bg-dark w-[80px] h-[80px] rounded-full flex items-center justify-center md:absolute shadow-3xl md:top-[100px] ltr:md:left-[250px] rtl:md:right-[250px]"
        >
          <img src="@/assets/images/helpdesk/icons/hubspot.svg" alt="hubspot" />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "EffortlessIntegrations",
});
</script>
