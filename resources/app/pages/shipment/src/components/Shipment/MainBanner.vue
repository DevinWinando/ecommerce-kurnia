<template>
  <div class="xl:max-w-[1680px] mx-auto">
    <div
      class="dark:bg-[#0a0e19] py-[70px] xl:px-[75px] relative z-[1] xl:rounded-[30px]"
    >
      <div
        class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-full mx-auto px-[12px]"
      >
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
          <div class="xl:max-w-[640px] relative lg:top-[20px] xl:top-[40px]">
            <div class="inline-block mb-[12px] md:mb-[15px]">
              <span
                class="flex items-center gap-[10px] text-[#E36925] rounded-[30px] bg-white dark:bg-gray-900 border border-[#E36925] dark:border-gray-800 py-[3.5px] px-[14px]"
              >
                <img
                  src="@/assets/images/shipment/icons/fast-truck.svg"
                  alt="fast-truck"
                />
                Deliver smarter, faster, and easier.
              </span>
            </div>
            <h1
              class="!text-4xl md:!text-[50px] lg:!text-[55px] xl:!text-[60px] md:-tracking-[1.5px] !leading-[1.2] !mb-[10px] md:!mb-[15px] lg:!mb-[20px]"
            >
              Power Your Logistics with Trezo Shipment
            </h1>
            <p class="md:text-[15px] lg:text-md">
              Real-time tracking, seamless coordination, and smarter deliveries
              — all managed from one easy platform.
            </p>
            <div class="mt-[25px] md:mt-[35px] xl:mt-[50px]">
              <a
                href="https://trezo-twcss.envytheme.com/"
                class="inline-block font-medium md:text-base rounded-[7px] bg-[#275b96] text-white py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] transition-all hover:bg-orange-500"
                target="_blank"
              >
                Get Started Free
              </a>
              <a
                href="https://trezo-twcss.envytheme.com/"
                class="inline-block font-medium md:text-base rounded-[7px] text-[#275b96] hover:text-white py-[10.5px] md:py-[12.5px] lg:py-[14.5px] px-[22px] md:px-[25px] transition-all border border-[#275b96] hover:bg-orange-500 hover:border-orange-500 ltr:ml-[10px] rtl:mr-[10px]"
                target="_blank"
              >
                Request a Demo
              </a>
            </div>
            <div
              class="mt-[25px] md:mt-[35px] lg:mt-[35px] xl:mt-[80px] flex items-center gap-[15px] md:gap-[20px] border border-gray-200 dark:border-gray-900 max-w-[295px] py-[13px] ltr:pr-[10px] rtl:pl-[10px] justify-center rounded-[100px] relative"
            >
              <div class="text-center">
                <div
                  class="flex items-center text-gray-700 dark:text-white -tracking-[0.5px] font-medium text-2xl md:text-3xl gap-[5px]"
                >
                  <i
                    class="ri-star-fill leading-none -mt-[8px] text-orange-400"
                  ></i>
                  4.9
                </div>
                <span class="block md:text-[15px] lg:text-md">
                  15k+ reviews
                </span>
              </div>
              <div class="flex items-center">
                <img
                  src="@/assets/images/shipment/users/user3.jpg"
                  class="rounded-full border-[2px] border-white dark:border-black w-[56px] ltr:-mr-[15px] rtl:-ml-[15px]"
                  alt="user-image"
                />
                <img
                  src="@/assets/images/shipment/users/user4.jpg"
                  class="rounded-full border-[2px] border-white dark:border-black w-[56px] ltr:-mr-[15px] rtl:-ml-[15px]"
                  alt="user-image"
                />
                <img
                  src="@/assets/images/shipment/users/user5.jpg"
                  class="rounded-full border-[2px] border-white dark:border-black w-[56px] ltr:-mr-[15px] rtl:-ml-[15px]"
                  alt="user-image"
                />
              </div>
            </div>
            <div
              class="lg:-mt-[100px] xl:-mt-[150px] ltr:lg:-mr-[150px] rtl:lg:-ml-[150px] ltr:xl:-mr-[75px] rtl:xl:-ml-[75px] text-center ltr:lg:text-right rtl:lg:text-left"
            >
              <img
                src="@/assets/images/shipment/plane.png"
                class="inline-block rtl:-scale-x-[1]"
                alt="plane"
              />
            </div>
          </div>

          <div
            class="text-center ltr:lg:-ml-[80px] rtl:lg:-mr-[80px] ltr:xl:-ml-[112px] rtl:xl:-mr-[112px]"
          >
            <img
              src="@/assets/images/shipment/banner.png"
              class="inline-block"
              alt="banner-image"
            />
          </div>
        </div>
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
  name: "MainBanner",
  setup() {
    return {
      bgImage,
    };
  },
});
</script>
