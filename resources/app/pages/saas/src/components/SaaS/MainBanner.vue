<template>
  <div
    class="dark:bg-[#0a0e19] relative z-[1] pt-[155px] md:pt-[200px] lg:pt-[230px] xl:pt-[250px] pb-[70px] md:pb-[80px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="text-center mx-auto lg:max-w-[850px]">
        <div class="inline-block mb-[12px] md:mb-[15px]">
          <span
            class="flex items-center gap-[10px] rounded-[30px] bg-white dark:bg-gray-900 border border-primary-100 dark:border-gray-800 py-[3.5px] px-[14px]"
          >
            <img
              src="@/assets/images/saas/icons/doc-settings.svg"
              alt="doc-settings"
            />
            One Platform to Run It All
          </span>
        </div>
        <h1
          class="!font-medium !text-4xl md:!text-[50px] lg:!text-[60px] md:-tracking-[1.5px] !leading-[1.2] !mb-[10px] md:!mb-[15px] lg:!mb-[20px]"
        >
          Modern Workflow Meets
          <span class="text-primary-500">Powerful Simplicity</span>
        </h1>
        <p class="md:text-[15px] lg:text-md">
          A powerful SaaS solution to manage, automate, and scale your business
          — all from one unified platform.
        </p>
        <div class="mt-[25px] md:mt-[35px] lg:mt-[50px]">
          <a
            href="https://trezo-twcss.envytheme.com/"
            class="inline-block font-medium md:text-base rounded-[7px] bg-primary-500 text-white py-[11.5px] md:py-[13.5px] px-[22px] md:px-[25px] transition-all hover:bg-primary-600 mx-[5px]"
            target="_blank"
          >
            Start Your Free Trial
          </a>
          <lightgallery
            :settings="{ speed: 500, plugins }"
            class="inline-block font-medium md:text-base rounded-[7px] text-primary-500 border border-primary-500 py-[10.5px] md:py-[12.5px] px-[22px] md:px-[25px] transition-all hover:bg-primary-600 hover:border-primary-600 hover:text-white mx-[5px]"
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
      </div>
      <div
        class="mt-[30px] md:mt-[50px] lg:mt-[65px] xl:mt-[85px] text-center mx-auto xl:max-w-[1104px] p-[10px] md:p-[15px] bg-white/28 dark:bg-dark/28 border border-white/30 dark:border-white/15 rounded-[20px]"
      >
        <img
          src="@/assets/images/saas/banner.jpg"
          class="inline-block rounded-[15px]"
          alt="banner-image"
        />
      </div>
    </div>
    <div
      class="absolute top-0 left-0 right-0 bottom-0 lg:rounded-[30px] -z-[1] bg-center bg-no-repeat bg-cover lg:mx-[15px] xl:mx-[30px] lg:mt-[15px] xl:mt-[30px] dark:hidden"
      :style="`background-image: url(${bgImage})`"
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import Lightgallery from "lightgallery/vue";
import lgVideo from "lightgallery/plugins/video";

import "lightgallery/css/lightgallery.css";
import "lightgallery/css/lg-video.css";

import bgImage from "@/assets/images/saas/banner-bg.jpg";

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
