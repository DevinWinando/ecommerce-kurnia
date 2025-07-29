<template>
  <div
    class="pt-[145px] md:pt-[175px] lg:pt-[190px] xl:pt-[175px] pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[140px] relative z-[1] overflow-hidden"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div class="ltr:lg:-mr-[75px] rtl:lg:-ml-[75px]">
          <div
            class="text-orange-700 py-[8px] px-[14px] rounded-[100px] bg-orange-100 dark:bg-[#0a0e19] inline-block mb-[10px] xl:mb-[5px]"
          >
            <span class="relative inline-block ltr:pl-[23px] rtl:pr-[23px]">
              <i
                class="ri-fire-fill text-orange-600 absolute top-1/2 ltr:-left-[3px] rtl:-right-[3px] -translate-y-1/2 text-[19px]"
              ></i>
              Less chaos. More clarity. Better results.
            </span>
          </div>
          <h2
            class="-tracking-[1px] lg:-tracking-[1.5px] !text-[30px] md:!text-[45px] lg:!text-[55px] xl:!text-[72px] !font-medium !leading-[1.2] !mb-[14px] md:!mb-[17px] lg:!mb-[20px] xl:!mb-[25px]"
          >
            Unlock <span class="text-orange-600 italic">rapid growth</span> with
            an all-in-one marketing hub
          </h2>
          <p class="md:text-[15px] lg:text-md">
            Trezo gives you the tools to plan, execute, and track campaigns —
            all in one smart dashboard.
          </p>
          <div class="-mt-[5px] md:mt-[25px] lg:mt-[35px] xl:mt-[55px]">
            <RouterLink
              to="/pricing"
              class="inline-block text-white py-[10.5px] px-[30px] rounded-[100px] transition-all font-medium border border-orange-500 bg-orange-500 hover:text-white hover:bg-orange-700 hover:border-orange-700 mt-[12px] md:mt-0"
            >
              Start Your Free Trial
            </RouterLink>

            <lightgallery
              :settings="{ speed: 500, plugins }"
              class="inline-block text-orange-500 py-[10.5px] px-[30px] rounded-[100px] transition-all font-medium border border-orange-500 hover:text-white hover:bg-orange-500 hover:border-orange-500 ltr:ml-[10px] rtl:mr-[10px] ltr:md:ml-[15px] rtl:md:mr-[15px] mt-[12px] md:mt-0"
            >
              <a href="https://www.youtube.com/watch?v=WDlEBXD2I2k">
                <span class="inline-block relative ltr:pl-[18px] rtl:pr-[18px]">
                  <i
                    class="ri-play-fill absolute top-1/2 ltr:-left-[2px] rtl:-right-[2px] -translate-y-1/2 text-md"
                  ></i>
                  Watch Demo
                </span>
              </a>
            </lightgallery>
          </div>
        </div>
        <div
          class="relative ltr:md:pl-[195px] rtl:md:pr-[195px] ltr:lg:pl-[140px] rtl:lg:pr-[140px] ltr:xl:pl-[195px] rtl:xl:pr-[195px] text-center"
        >
          <img
            src="@/assets/images/marketing/woman-with-tab.png"
            class="inline-block"
            alt="woman-with-tab"
          />
          <img
            src="@/assets/images/marketing/flying-laptop.png"
            class="md:absolute md:top-[80px] lg:-top-[5px] xl:top-[80px] ltr:md:left-0 rtl:md:right-0 md:max-w-[265px] lg:max-w-[240px] xl:max-w-[265px] mt-[25px] md:mt-0 inline-block"
            alt="flying-laptop"
          />
        </div>
      </div>
    </div>
    <div
      class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-no-repeat bg-top -z-[1] dark:hidden"
      style="background: linear-gradient(180deg, #ffefe1 0%, #fff 100%)"
    ></div>
    <div
      class="absolute top-[70px] md:top-[84px] lg:top-[91px] left-0 right-0 -z-[1]"
    >
      <img
        src="@/assets/images/marketing/perspective-grid.png"
        class="inline-block"
        alt="perspective-grid"
      />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import Lightgallery from "lightgallery/vue";
import lgVideo from "lightgallery/plugins/video";

import "lightgallery/css/lightgallery.css";
import "lightgallery/css/lg-video.css";

export default defineComponent({
  name: "MainBanner",
  components: {
    Lightgallery,
  },
  setup() {
    const plugins = ref([lgVideo]);

    return {
      plugins,
    };
  },
});
</script>
