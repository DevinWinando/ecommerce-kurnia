<template>
  <div class="pt-[130px] md:pt-[155px] lg:pt-[185px] relative z-[1]">
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="text-center mx-auto lg:max-w-[850px]">
        <div class="inline-block mb-[12px] md:mb-[15px]">
          <span
            class="flex items-center gap-[10px] rounded-[30px] bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 py-[3.5px] px-[14px]"
          >
            <img
              src="@/assets/images/school/icons/graduation3.svg"
              alt="graduation"
            />
            Built for Schools, Trusted by Educators
          </span>
        </div>
        <h1
          class="!font-medium !text-4xl md:!text-[50px] lg:!text-[60px] md:-tracking-[1.5px] !leading-[1.2] !mb-[10px] md:!mb-[15px] lg:!mb-[20px]"
        >
          Smarter School Management,
          <span class="italic gradient-color">All in One</span> Place
        </h1>
        <p class="md:text-[15px] lg:text-md">
          From attendance to academics, Trezo helps schools manage everything
          efficiently, track progress in real time, and connect better with
          students — without the paper trail.
        </p>
        <div class="mt-[25px] md:mt-[35px] lg:mt-[50px]">
          <a
            href="https://trezo-twcss.envytheme.com/"
            class="inline-block font-medium md:text-base rounded-[7px] bg-primary-500 text-white py-[11.5px] md:py-[13.5px] px-[22px] md:px-[25px] transition-all hover:bg-primary-600 mx-[5px]"
            target="_blank"
          >
            Request a Demo
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
        class="mx-auto xl:max-w-[1110px] mt-[35px] md:mt-[60px] lg:mt-[90px] xl:mt-[110px] rounded-[5px] bg-white/28 p-[15px] md:p-[22px] border border-white/30"
      >
        <img
          src="@/assets/images/school/banner.jpg"
          class="inline-block rounded-[5px]"
          alt="banner-image"
        />
      </div>
    </div>
    <div
      class="absolute top-0 left-0 right-0 bottom-0 -z-[1]"
      style="
        background: linear-gradient(
          180deg,
          rgba(255, 255, 255, 0) 25%,
          #757dff 113.36%
        );
      "
    ></div>
    <div
      class="absolute left-0 right-0 -z-[1] top-[300px] xl:top-[255px] text-center dark:opacity-20 hidden lg:block"
    >
      <img
        src="@/assets/images/school/perspective-grid.png"
        class="inline-block"
        alt="perspective-grid"
      />
    </div>
    <div
      class="absolute bottom-0 left-0 right-0 z-[1] h-[70px] md:h-[90px] lg:h-[135px] bg-center bg-no-repeat bg-top dark:invert"
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

import bgImage from "@/assets/images/school/banner-divider.png";

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
