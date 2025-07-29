<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="dark:bg-[#0a0e19] pt-[30px] md:pt-[40px] lg:pt-[30px] px-[20px] md:px-[40px] xl:px-[110px] rounded-[15px] relative z-[1]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div class="relative lg:-top-[15px]">
          <h2
            class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px] md:!mb-[15px] xl:!mb-[20px]"
          >
            Ready to Simplify Your Social Media?
          </h2>
          <p class="md:text-[15px] lg:text-md md:max-w-[485px]">
            Start scheduling smarter today — with a platform loved by creators
            and teams worldwide.
          </p>
          <a
            href="https://trezo-twcss.envytheme.com/"
            class="group inline-block font-medium md:text-base rounded-[7px] bg-purple-500 text-white py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] relative z-[1] mt-[5px] md:mt-[10px] xl:mt-[20px]"
            target="_blank"
          >
            Get 7 Days - Free Trial
            <span
              class="absolute top-0 left-0 w-full h-full -z-[1] rounded-[7px] transition-all group-hover:opacity-0"
              style="
                background: linear-gradient(180deg, #bf85fb 0%, #9135e8 100%);
              "
            ></span>
          </a>
        </div>
        <div
          class="text-center ltr:xl:ml-[110px] rtl:xl:mr-[110px] relative ltr:xl:-left-[25px] rtl:xl:-right-[25px]"
        >
          <img
            src="@/assets/images/social-media/happy-girl.png"
            class="inline-block"
            alt="happy-girl"
          />
        </div>
      </div>
      <div
        class="absolute ltr:left-[31%] rtl:right-[31%] bottom-[12%] -z-[1] hidden md:block"
      >
        <img
          src="@/assets/images/social-media/icons/blur-facebook.png"
          alt="blur-facebook"
        />
      </div>
      <div
        class="absolute ltr:left-[49.5%] rtl:right-[49.5%] top-[13.5%] -z-[1] hidden md:block"
      >
        <img
          src="@/assets/images/social-media/icons/red-play-button.png"
          alt="red-play-button"
        />
      </div>
      <div
        class="absolute top-0 left-0 w-full h-full rounded-[15px] bg-no-repeat bg-center bg-cover -z-[2] dark:hidden rtl:-scale-x-[1]"
        :style="{ backgroundImage: `url(${bgImage})` }"
      ></div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import bgImage from "@/assets/images/social-media/cta-bg.jpg";

export default defineComponent({
  name: "FreeTrial",
  data() {
    return {
      bgImage: bgImage,
    };
  },
});
</script>
