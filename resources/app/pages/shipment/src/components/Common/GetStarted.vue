<template>
  <div class="xl:max-w-[1680px] mx-auto">
    <div
      class="dark:bg-[#0a0e19] pt-[75px] pb-[60px] relative z-[1] xl:rounded-[35px]"
    >
      <div
        class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
      >
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
          <div class="xl:max-w-[485px]">
            <h2
              class="md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[13px] md:!mb-[15px] xl:!mb-[20px]"
            >
              Ready to Upgrade Your Delivery Operations?
            </h2>
            <p class="md:text-[15px] lg:text-md">
              Start managing shipments smarter with Trezo’s powerful logistics
              platform.
            </p>
            <a
              href="https://trezo-twcss.envytheme.com/"
              class="inline-block font-medium md:text-base rounded-[7px] bg-[#275b96] text-white py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] transition-all hover:bg-orange-500 mt-[5px] md:mt-[10px] lg:mt-[15px] xl:mt-[25px]"
              target="_blank"
            >
              Get Started Free
            </a>
          </div>
          <div class="text-center">
            <img
              src="@/assets/images/shipment/cargo-package.png"
              class="inline-block"
              alt="cargo-package-image"
            />
          </div>
        </div>
      </div>
      <div
        class="absolute top-0 left-0 right-0 bottom-0 -z-[1] dark:hidden bg-cover bg-no-repeat bg-center xl:rounded-[35px]"
        :style="{ backgroundImage: `url(${bgImage})` }"
      ></div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import bgImage from "@/assets/images/shipment/cargo-package-bg.jpg";

export default defineComponent({
  name: "GetStarted",
  data() {
    return {
      bgImage: bgImage,
    };
  },
});
</script>
