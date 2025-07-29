<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="bg-[#06201b] rounded-[20px] md:rounded-[30px] py-[70px] px-[20px] md:py-[90px] md:px-[40px] lg:py-[100px] lg:px-[50px] xl:py-[75px] xl:px-[110px] bg-cover bg-no-repeat bg-center"
      :style="`background-image: url(${bgImage})`"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div>
          <h1
            class="!font-medium !text-[#ebebe0] !text-4xl md:!text-[50px] lg:!text-[56px] xl:!text-[62px] !leading-[1.2] md:-tracking-[1.5px] !mb-[15px] lg:!mb-[20px]"
          >
            Accelerate Your
            <span class="italic text-lime-500">Sales</span> Strategy
          </h1>
          <p
            class="text-[#ebebe0] md:text-[15px] lg:text-md xl:text-lg xl:max-w-[400px]"
          >
            Trezo gives your sales team the tools to close more deals, faster —
            with smart automation, lead insights, and performance tracking.
          </p>
          <div class="mt-[22px] md:mt-[30px] lg:mt-[40px]">
            <a
              href="https://trezo-twcss.envytheme.com/"
              class="inline-block font-medium md:text-base rounded-[7px] bg-lime-500 text-black py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all hover:bg-lime-600 ltr:mr-[15px] rtl:ml-[15px]"
              target="_blank"
            >
              Get Your Free 14-Day Trial
            </a>
            <lightgallery
              :settings="{ speed: 500, plugins }"
              class="inline-block font-medium rounded-[7px] border border-lime-500 text-base text-lime-500 py-[8.5px] md:py-[10.5px] px-[22px] md:px-[25px] transition-all hover:text-black hover:bg-lime-500 hover:border-lime-500"
            >
              <a href="https://www.youtube.com/watch?v=WDlEBXD2I2k">
                <span class="inline-block relative ltr:pl-[20px] rtl:pr-[20px]">
                  <i
                    class="ri-play-fill text-lg absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2"
                  ></i>
                  Watch Demo
                </span>
              </a>
            </lightgallery>
          </div>
          <div
            class="mt-[22px] md:mt-[35px] lg:mt-[50px] xl:mt-[80px] rounded-[7px] border border-[#7a857d] max-w-[220px] md:max-w-[235px] flex items-center gap-[20px] md:gap-[25px] pt-[5px] pb-[10px] px-[15px]"
          >
            <div>
              <span class="block mb-[5px] md:mb-[8px] text-[#ebebe0]">
                Review on
              </span>
              <img
                src="@/assets/images/sales/clutch.svg"
                class="inline-block"
                alt="clutch"
              />
            </div>
            <div class="relative top-[3px]">
              <div
                class="flex items-center text-[#ef4335] leading-none gap-[2px] text-md md:text-lg"
              >
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
              </div>
              <span class="block mt-[5px] text-[#ebebe0]"> 1500+ reviews </span>
            </div>
          </div>
        </div>
        <div
          class="text-center ltr:lg:-ml-[70px] rtl:lg:-mr-[70px] ltr:xl:-ml-[120px] rtl:xl:-mr-[120px]"
        >
          <img
            src="@/assets/images/sales/banner.png"
            class="inline-block"
            alt="banner-image"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import Lightgallery from "lightgallery/vue";
import lgVideo from "lightgallery/plugins/video";

import "lightgallery/css/lightgallery.css";
import "lightgallery/css/lg-video.css";

import bgImage from "@/assets/images/sales/banner-bg.jpg";

export default defineComponent({
  name: "MainBanner",
  components: {
    Lightgallery,
  },
  setup() {
    const plugins = ref([lgVideo]);

    return {
      plugins,
      bgImage,
    };
  },
});
</script>
