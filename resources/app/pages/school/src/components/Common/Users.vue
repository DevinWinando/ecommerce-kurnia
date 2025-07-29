<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px] relative z-[1]"
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
          {{ content.tagline }}
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px]"
        >
          {{ content.title.text }}
          <span class="italic gradient-color">{{
            content.title.highlight
          }}</span>
        </h2>
        <p class="md:text-[15px] lg:text-md">{{ content.subtitle }}</p>
      </div>
      <div
        class="lg:max-w-[848px] mx-auto flex flex-wrap justify-center gap-[17px]"
      >
        <div
          v-for="(role, index) in content.roles"
          :key="index"
          class="flex items-center bg-white/76 dark:bg-[#0a0e19] border border-gray-100 lg:border-white/40 dark:border-gray-900 rounded-[30px] text-base md:text-md lg:text-lg text-black dark:text-white font-medium gap-[10px] md:gap-[15px] py-[12px] md:py-[14px] lg:py-[16px] px-[20px] md:px-[25px] lg:px-[30px]"
        >
          <img :src="role.icon.src" :alt="role.icon.alt" />
          {{ role.name }}
        </div>
      </div>
    </div>

    <div
      class="absolute top-1/2 -translate-y-1/2 left-0 right-0 -z-[1] text-center"
    >
      <img
        :src="content.backgroundImage.src"
        class="inline-block"
        :alt="content.backgroundImage.alt"
      />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

import iconCheck from "@/assets/images/school/icons/check.svg";
import blurImage from "@/assets/images/school/blur.png";

interface Role {
  name: string;
  icon: {
    src: string;
    alt: string;
  };
}

interface Content {
  tagline: string;
  title: {
    text: string;
    highlight: string;
  };
  subtitle: string;
  backgroundImage: {
    src: string;
    alt: string;
  };
  roles: Role[];
}

export default defineComponent({
  name: "Users",
  setup() {
    const content = ref<Content>({
      tagline: "Users",
      title: {
        text: "Built for Every",
        highlight: "Role",
      },
      subtitle: "Trezo adapts to your workflow",
      backgroundImage: {
        src: blurImage,
        alt: "blur",
      },
      roles: [
        {
          name: "School Administrators",
          icon: { src: iconCheck, alt: "check" },
        },
        {
          name: "Teachers & Staff",
          icon: { src: iconCheck, alt: "check" },
        },
        {
          name: "Parents & Guardians",
          icon: { src: iconCheck, alt: "check" },
        },
        {
          name: "Students",
          icon: { src: iconCheck, alt: "check" },
        },
        {
          name: "Finance Departments",
          icon: { src: iconCheck, alt: "check" },
        },
        {
          name: "IT Teams",
          icon: { src: iconCheck, alt: "check" },
        },
      ],
    });

    return {
      content,
    };
  },
});
</script>
