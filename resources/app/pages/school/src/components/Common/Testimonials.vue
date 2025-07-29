<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px] relative z-[1] dark:bg-[#0a0e19]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] text-center mx-auto md:max-w-[455px]"
      >
        <span
          class="inline-block rounded-[30px] bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 py-[3.5px] px-[14px] mb-[12px] md:mb-[15px]"
        >
          Testimonials
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px]"
        >
          What <span class="italic gradient-color">Educators</span> Say About
          Trezo
        </h2>
        <p class="md:text-[15px] lg:text-md">
          Hear it from schools that trust us
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          v-for="(testimonial, index) in testimonials"
          :key="index"
          class="p-[20px] md:p-[30px] xl:p-[40px] bg-white dark:bg-dark rounded-[15px] md:rounded-[25px] border border-gray-200 dark:border-gray-800"
          :style="boxShadowStyle"
        >
          <div
            class="flex items-center text-orange-400 leading-none text-md gap-[2px] mb-[13px] md:mb-[20px]"
          >
            <i v-for="star in 5" :key="star" class="ri-star-fill"></i>
          </div>
          <p>{{ testimonial.text }}</p>
          <div
            class="flex items-center gap-[12px] mt-[15px] md:mt-[20px] lg:mt-[27px]"
          >
            <img
              :src="testimonial.avatar"
              class="rounded-full w-[42px]"
              :alt="`${testimonial.name}-image`"
            />
            <div>
              <h5 class="!text-base !mb-[4px] !font-semibold">
                {{ testimonial.name }}
              </h5>
              <span class="block">{{ testimonial.position }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="absolute top-0 left-0 right-0 bottom-0 rounded-[15px] -z-[1] dark:hidden"
      :style="gradientBackground"
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/school/users/user1.jpg";
import image2 from "@/assets/images/school/users/user2.jpg";
import image3 from "@/assets/images/school/users/user3.jpg";
import image4 from "@/assets/images/school/users/user4.jpg";
import image5 from "@/assets/images/school/users/user5.jpg";
import image6 from "@/assets/images/school/users/user6.jpg";

interface Testimonial {
  text: string;
  name: string;
  position: string;
  avatar: string;
}

export default defineComponent({
  name: "Testimonials",
  setup() {
    const testimonials: Testimonial[] = [
      {
        text: "Trezo completely transformed the way we manage our school. From attendance tracking to exam reporting, everything is faster, easier, and more accurate. Our entire team loves it.",
        name: "Rachel Nguyen",
        position: "Growth Marketing Lead, BrightDash",
        avatar: image1,
      },
      {
        text: "As a teacher, I appreciate how Trezo centralizes my tasks. I can update grades, check schedules, and message parents—all without switching tabs or juggling different systems.",
        name: "Lisa Grant",
        position: "Sales Director @ LaunchPoint",
        avatar: image2,
      },
      {
        text: "Parents have commented on how connected they feel. Trezo's parent portal allows us to communicate clearly and instantly about grades, attendance, and school updates.",
        name: "Mark E",
        position: "Sales Manager @ FreshFlow",
        avatar: image3,
      },
      {
        text: "We used to rely on paper for everything. Now we've gone fully digital with Trezo. It's boosted productivity, transparency, and staff morale across the school.",
        name: "Emily R.",
        position: "Account Executive @ ZentoTech",
        avatar: image4,
      },
      {
        text: "Implementing Trezo was easier than expected. The support was fantastic, and our staff adapted quickly. It's now the backbone of how we manage school operations.",
        name: "Jason Lee",
        position: "Founder @ StratEdge Consulting",
        avatar: image5,
      },
      {
        text: "Before Trezo, managing multiple campuses was overwhelming. Now, we have complete oversight with real-time data and seamless control over each branch.",
        name: "Rachel Adams",
        position: "SDR Team Lead @ LoopHire",
        avatar: image6,
      },
    ];

    const boxShadowStyle = {
      boxShadow:
        "14px 181px 51px 0px rgba(0, 0, 0, 0), 9px 116px 46px 0px rgba(0, 0, 0, 0), 5px 65px 39px 0px rgba(0, 0, 0, 0.02), 2px 29px 29px 0px rgba(0, 0, 0, 0.03), 1px 7px 16px 0px rgba(0, 0, 0, 0.03)",
    };

    const gradientBackground = {
      background:
        "radial-gradient(57.11% 57.11% at 50% 50%, rgba(255, 255, 255, 0) 61.06%, #e4e9ff 100%), radial-gradient(37.42% 117.39% at 50% 50%, rgba(255, 255, 255, 0) 0%, #ecf0ff 100%)",
    };

    return {
      testimonials,
      boxShadowStyle,
      gradientBackground,
    };
  },
});
</script>
