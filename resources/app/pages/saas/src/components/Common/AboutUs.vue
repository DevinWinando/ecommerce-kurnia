<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-[25px]">
        <div
          class="mb-[30px] md:mb-[40px] lg:mb-0 ltr:lg:-mr-[100px] rtl:lg:-ml-[100px] ltr:xl:-mr-[25px] rtl:xl:-ml-[25px] lg:pt-[40px]"
        >
          <span
            class="inline-block rounded-[30px] bg-primary-500 text-white py-[4.5px] px-[14px] mb-[12px] md:mb-[15px]"
          >
            About Trezo
          </span>
          <h2
            class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px]"
          >
            Smart Software Backed by Real-World Solutions
          </h2>
          <p class="md:text-[15px] lg:text-md">
            Designed for scale. Built for simplicity.
          </p>
        </div>
        <div
          class="lg:col-span-2 ltr:lg:-ml-[80px] rtl:lg:-mr-[80px] ltr:xl:-ml-[110px] rtl:xl:-mr-[110px]"
        >
          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] lg:gap-0"
          >
            <div class="hidden lg:block"></div>
            <div
              class="border border-primary-200 dark:border-gray-800 px-[20px] md:px-[40px] xl:px-[65px] py-[25px] md:py-[50px] lg:py-[65px] xl:py-[75px] md:-mb-px"
            >
              <img
                src="@/assets/images/saas/icons/thumbs-up.svg"
                class="mb-[20px] md:mb-[35px]"
                alt="thumbs-up"
              />
              <h3
                class="!leading-none !text-primary-500 !font-medium -tracking-[1.5px] !text-[3xl] md:!text-4xl lg:!text-5xl xl:!text-[48px] !mb-[10px]"
              >
                12K+
              </h3>
              <span class="block md:text-[15px] lg:text-md">
                Businesses Empowered
              </span>
            </div>
            <div class="hidden lg:block"></div>
            <div
              class="border border-primary-200 dark:border-gray-800 px-[20px] md:px-[40px] xl:px-[65px] py-[25px] md:py-[50px] lg:py-[65px] xl:py-[75px]"
            >
              <h3
                class="!leading-none !text-primary-500 !font-medium -tracking-[1.5px] !text-[3xl] md:!text-4xl lg:!text-5xl xl:!text-[48px] !mb-[10px] md:!mb-[95px] lg:!mb-[100px]"
              >
                3x
              </h3>
              <span class="block md:text-[15px] lg:text-md">
                Faster Workflows
              </span>
            </div>
            <div class="hidden lg:block"></div>
            <div
              class="border border-primary-200 dark:border-gray-800 px-[20px] md:px-[40px] xl:px-[65px] py-[25px] md:py-[50px] lg:py-[65px] xl:py-[75px]"
            >
              <h3
                class="!leading-none !text-primary-500 !font-medium -tracking-[1.5px] !text-[3xl] md:!text-4xl lg:!text-5xl xl:!text-[48px] !mb-[10px] md:!mb-[95px] lg:!mb-[100px]"
              >
                98%
              </h3>
              <span class="block md:text-[15px] lg:text-md">
                User Satisfaction Rate
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "AboutUs",
});
</script>
