<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
      <div class="md:max-w-[430px]">
        <span
          class="inline-block font-medium text-[#7a857d] rounded-[30px] border border-[#ebebe0] dark:border-gray-800 py-[5.5px] px-[18px] mb-[12px] md:mb-[15px]"
        >
          {{ aboutData.badge }}
        </span>

        <h2
          class="!text-[#06201B] dark:!text-white md:-tracking-[1px] !font-medium !text-2xl md:!text-3xl lg:!text-4xl !leading-[1.2] !mb-[12px] md:!mb-[15px]"
        >
          {{ aboutData.heading }}
        </h2>

        <p class="md:text-[15px] lg:text-md text-[#7a857d]">
          {{ aboutData.description }}
        </p>

        <div class="my-[20px] md:my-[25px] lg:my-[35px] xl:my-[45px]">
          <div
            v-for="(feature, index) in aboutData.features"
            :key="index"
            class="mb-[15px] md:mb-[20px] lg:mb-[25px] last:mb-0 flex items-center font-medium !text-[#06201B] dark:!text-white text-[14px] md:text-md lg:text-lg gap-[12px]"
          >
            <span
              class="flex items-center justify-center w-[25px] md:w-[30px] h-[25px] md:h-[30px] rounded-full bg-[#00ba00] text-white text-[18px] md:text-[22px]"
            >
              <i class="ri-check-fill"></i>
            </span>
            {{ feature }}
          </div>
        </div>

        <a
          :href="aboutData.cta.link"
          class="inline-block font-medium md:text-base rounded-[7px] bg-[#06201b] text-white py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all hover:bg-lime-500 hover:text-black mt-[5px] md:mt-[10px] xl:mt-[15px]"
          target="_blank"
        >
          {{ aboutData.cta.text }}
        </a>
      </div>

      <div class="text-center">
        <img
          :src="aboutData.image.src"
          :class="[
            'inline-block rounded-[20px] md:rounded-[35px]',
            aboutData.image.class,
          ]"
          :alt="aboutData.image.alt"
        />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import aboutImage from "@/assets/images/sales/about.jpg";

export default defineComponent({
  name: "AboutUs",
  setup() {
    const aboutData = {
      badge: "About Trezo Sales",
      heading: "Built for Modern Sales Teams",
      description:
        "From prospecting to pipeline management — Trezo keeps your workflow fast, focused, and data-driven.",
      features: [
        "Centralize contacts and deals",
        "Automate follow-ups and reminders",
        "Track sales performance in real-time",
        "Integrate with your CRM, email, and calendar",
      ],
      cta: {
        text: "Get Your Free 14-Day Trial",
        link: "https://trezo-twcss.envytheme.com/",
      },
      image: {
        src: aboutImage,
        alt: "about",
        class: "",
      },
    };

    return { aboutData };
  },
});
</script>
