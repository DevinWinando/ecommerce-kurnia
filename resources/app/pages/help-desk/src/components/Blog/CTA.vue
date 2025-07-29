<template>
  <div
    class="pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[130px] 2xl:pb-[150px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="text-center rounded-[15px] bg-cover bg-center bg-no-repeat py-[70px] md:py-[90px] lg:py-[110px] px-[20px]"
        :style="{ backgroundImage: `url(${bgImage})` }"
      >
        <div class="mx-auto md:max-w-[520px]">
          <h2
            class="!text-white md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[10px] lg:!mb-[12px]"
          >
            Get the Latest Support Tips
          </h2>
          <p class="md:text-[15px] lg:text-md text-white">
            Join our community of helpdesk pros.
          </p>
          <form
            action="#"
            class="relative mt-[20px] md:mt-[35px] lg:mt-[45px] md:max-w-[496px] mx-auto"
          >
            <i
              class="material-symbols-outlined absolute top-[14px] md:top-[21px] ltr:left-[20px] rtl:right-[20px] ltr:md:left-[30px] rtl:md:right-[30px] text-gray-400 !text-[22px] md:!text-[26px]"
            >
              mail
            </i>
            <input
              type="text"
              class="block w-full bg-gray-800 rounded-[100px] fw-medium text-base text-white h-[50px] md:h-[70px] !outline-0 placeholder:text-gray-300 px-[52px] md:px-[70px]"
              placeholder="Enter your email address"
            />
            <button
              type="button"
              class="md:absolute md:top-[13px] ltr:md:right-[13px] rtl:md:left-[13px] mt-[20px] md:mt-0 inline-block font-medium rounded-[100px] bg-purple-600 border border-purple-600 text-base text-white py-[9px] md:py-[10.5px] px-[25px] md:px-[30px] transition-all hover:bg-purple-500 hover:border-purple-500"
            >
              Subscribe Now
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import bgImage from "@/assets/images/helpdesk/cta-bg.jpg";

export default defineComponent({
  name: "CTA",
  setup() {
    return {
      bgImage,
    };
  },
});
</script>
