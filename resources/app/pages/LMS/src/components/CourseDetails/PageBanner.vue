<template>
  <div
    class="pt-[120px] pb-[60px] md:pt-[140px] md:pb-[80px] lg:pt-[175px] lg:pb-[110px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <h1
        class="!text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl md:-tracking-[1px] !text-gray-800 dark:!text-gray-100 !mb-[15px] md:!mb-[20px]"
      >
        Full-Stack Web Development
      </h1>

      <div class="inline-block">
        <ul
          class="flex items-center justify-center gap-[5px] md:gap-[10px] py-[5px] px-[18px] bg-[#ffef99] dark:bg-[#0a0e19] rounded-[100px]"
        >
          <li>
            <RouterLink
              to="/"
              class="transition-all text-gray-900 dark:text-gray-200 hover:text-primary-500"
            >
              Home
            </RouterLink>
          </li>
          <li
            class="text-gray-900 dark:text-gray-200 text-[20px] leading-none rtl:-scale-x-100"
          >
            <i class="ri-arrow-right-s-line"></i>
          </li>
          <li class="text-gray-900 dark:text-gray-200">Courses</li>
          <li
            class="text-gray-900 dark:text-gray-200 text-[20px] leading-none rtl:-scale-x-100"
          >
            <i class="ri-arrow-right-s-line"></i>
          </li>
          <li class="text-gray-900 dark:text-gray-200">Course Details</li>
        </ul>
      </div>

      <ul
        class="mt-[20px] md:mt-[30px] lg:mt-[40px] md:flex items-center gap-[20px] xl:gap-[25px]"
      >
        <li
          class="relative text-[15px] md:text-md lg:text-lg text-gray-700 dark:text-gray-300 ltr:pl-[34px] ltr:md:pl-[38px] rtl:pr-[34px] rtl:md:pr-[38px] mt-[12px] first:mt-0 md:mt-0"
        >
          <i
            class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 md:!text-[29px]"
          >
            menu_book
          </i>
          By:
          <a
            href="#"
            class="text-gray-700 dark:text-gray-200 transition-all hover:text-primary-500"
          >
            John
          </a>
        </li>
        <li class="hidden md:block">
          <div class="w-[1px] h-[22.958px] bg-gray-200 dark:bg-gray-800"></div>
        </li>
        <li
          class="relative text-[15px] md:text-md lg:text-lg text-gray-700 dark:text-gray-300 ltr:pl-[34px] ltr:md:pl-[38px] rtl:pr-[34px] rtl:md:pr-[38px] mt-[12px] first:mt-0 md:mt-0"
        >
          <i
            class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 md:!text-[29px]"
          >
            group
          </i>
          6,300+ Enrolled
        </li>
        <li class="hidden md:block">
          <div class="w-[1px] h-[22.958px] bg-gray-200 dark:bg-gray-800"></div>
        </li>
        <li
          class="text-[15px] md:text-md lg:text-lg flex items-center gap-[5px] md:gap-[10px] mt-[12px] first:mt-0 md:mt-0"
        >
          <div
            class="flex items-center text-orange-400 leading-none lg:text-md gap-[2px] relative -top-[3px]"
          >
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-line"></i>
          </div>
          4.7 (980 ratings)
        </li>
      </ul>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "PageBanner",
});
</script>
