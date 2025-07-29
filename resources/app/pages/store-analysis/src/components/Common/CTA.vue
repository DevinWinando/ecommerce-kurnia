<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="dark:bg-[#0a0e19] rounded-[15px] relative z-[1] px-[20px] py-[25px] md:p-[50px] xl:p-[70px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div
          class="text-center ltr:lg:mr-[25px] rtl:lg:ml-[25px] ltr:xl:mr-[50px] rtl:xl:ml-[50px]"
        >
          <img
            src="@/assets/images/store-analysis/cta.jpg"
            class="inline-block rounded-[15px]"
            alt="cta-image"
          />
        </div>
        <div class="xl:max-w-[470px]">
          <h2
            class="!font-medium md:-tracking-[1px] !text-xl md:!text-2xl lg:!text-3xl xl:!text-5xl !leading-[1.2] !mb-[12px] md:!mb-[15px] xl:!mb-[20px]"
          >
            Ready to Know Your Store Better?
          </h2>
          <p class="md:text-[15px] lg:text-md">
            Join thousands of retail pros who trust Trezo Store Analytics
          </p>
          <a
            href="https://trezo-twcss.envytheme.com/"
            class="group inline-block font-medium md:text-base rounded-[30px] bg-primary-500 text-white py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] relative z-[1] mt-[5px] md:mt-[10px] xl:mt-[20px]"
            target="_blank"
          >
            Get Started - <span class="font-normal">It’s Free</span>
            <span
              class="absolute top-0 left-0 w-full h-full -z-[1] rounded-[30px] transition-all group-hover:opacity-0"
              style="
                background: linear-gradient(180deg, #9caaff 0%, #4936f5 100%);
              "
            ></span>
          </a>
        </div>
      </div>
      <div
        class="absolute top-0 left-0 w-full h-full rounded-[15px] bg-no-repeat bg-center bg-cover -z-[1] dark:hidden"
        :style="`background-image: url(${bgImage})`"
      ></div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import bgImage from "@/assets/images/store-analysis/cta-bg.jpg";

export default defineComponent({
  name: "CTA",
  setup() {
    return {
      bgImage,
    };
  },
});
</script>
