<template>
  <div
    class="relative z-[1] pt-[120px] md:pt-[150px] lg:pt-[190px] xl:pt-[220px] pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[120px] overflow-hidden"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="lg:max-w-[740px] relative z-[1]">
        <h1
          class="md:-tracking-[1.5px] !font-medium !text-5xl md:!text-[50px] lg:!text-[72px] !leading-[1.2] !mb-[15px]"
        >
          Simplify <span class="text-purple-600 italic">Support</span> with
          Trezo HelpDesk
        </h1>
        <p class="md:text-[15px] lg:text-md">
          Manage tickets, respond faster, and keep customers happy — all from
          one intuitive platform.
        </p>
        <div class="mt-[22px] md:mt-[30px] lg:mt-[45px]">
          <a
            href="https://trezo-twcss.envytheme.com/"
            class="inline-block font-medium rounded-[100px] bg-purple-600 border border-purple-600 text-base text-white py-[9px] md:py-[10.5px] px-[25px] md:px-[30px] transition-all hover:bg-purple-500 hover:border-purple-500 ltr:mr-[10px] rtl:ml-[10px]"
            target="_blank"
          >
            Start Your Free Trial
          </a>
          <lightgallery
            :settings="{ speed: 500, plugins }"
            class="inline-block font-medium rounded-[100px] border border-purple-600 text-base text-purple-600 py-[9px] md:py-[10.5px] px-[25px] md:px-[30px] transition-all hover:text-white hover:bg-purple-500 hover:border-purple-500"
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
          class="mt-[25px] md:mt-[30px] lg:mt-[45px] xl:mt-[65px] flex items-center gap-[15px] md:gap-[20px]"
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
            <span class="block md:text-[15px] lg:text-md"> 15k+ reviews </span>
          </div>
          <div class="flex items-center">
            <img
              src="@/assets/images/helpdesk/users/user1.jpg"
              class="rounded-full border-[2px] border-white dark:border-black w-[56px] ltr:-mr-[15px] rtl:-ml-[15px]"
              alt="user-image"
            />
            <img
              src="@/assets/images/helpdesk/users/user4.jpg"
              class="rounded-full border-[2px] border-white dark:border-black w-[56px] ltr:-mr-[15px] rtl:-ml-[15px]"
              alt="user-image"
            />
            <img
              src="@/assets/images/helpdesk/users/user3.jpg"
              class="rounded-full border-[2px] border-white dark:border-black w-[56px] ltr:-mr-[15px] rtl:-ml-[15px]"
              alt="user-image"
            />
          </div>
        </div>
      </div>
      <div
        class="text-center ltr:md:text-right rtl:md:text-left mt-[25px] lg:-mt-[150px] xl:-mt-[470px] relative"
      >
        <img
          src="@/assets/images/helpdesk/trophy.gif"
          class="absolute w-[108px] top-[50px] lg:top-[80px] ltr:right-[400px] rtl:left-[400px] hidden md:inline-block"
          alt="trophy"
        />
        <img
          src="@/assets/images/helpdesk/man-with-laptop.png"
          class="inline-block rtl:-scale-x-[1]"
          alt="man-with-laptop"
        />
      </div>
    </div>
    <div
      class="absolute top-0 left-0 right-0 bottom-0 -z-[1] bg-bottom bg-no-repeat bg-cover dark:hidden"
      :style="{
        backgroundImage: `url('${bgImage}')`,
      }"
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import Lightgallery from "lightgallery/vue";
import lgVideo from "lightgallery/plugins/video";

import "lightgallery/css/lightgallery.css";
import "lightgallery/css/lg-video.css";

import bgImage from "@/assets/images/helpdesk/banner-bg.jpg";

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
