<template>
  <div
    class="bg-white dark:bg-[#0a0e19] rounded-[20px] border border-gray-200 dark:border-[#202c4b] p-[20px] md:p-[25px] xl:p-[30px] lg:-mt-[385px] xl:-mt-[420px]"
  >
    <div class="relative rounded-[20px]">
      <img
        src="@/assets/images/lms-courses/courses/course2.jpg"
        alt="course-image"
        class="rounded-[20px] inline-block"
      />
      <lightgallery :settings="{ speed: 500, plugins }">
        <a
          href="https://www.youtube.com/watch?v=WDlEBXD2I2k"
          class="flex items-center justify-center w-[55px] h-[55px] bg-white rounded-full absolute left-0 right-0 top-1/2 -translate-y-1/2 mx-auto text-[35px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white"
        >
          <i class="ri-play-fill"></i>
        </a>
      </lightgallery>
    </div>
    <div class="my-[25px] md:my-[30px] lg:my-[40px]">
      <div
        class="flex items-center justify-between border-b border-gray-100 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
      >
        <div
          class="relative ltr:pl-[34px] rtl:pr-[34px] md:text-[15px] lg:text-md text-gray-700 dark:text-gray-200"
        >
          <i
            class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"
          >
            payments
          </i>
          Price:
        </div>
        <div class="text-[18px] md:text-[20px] font-bold text-primary-500">
          $69
        </div>
      </div>
      <div
        class="flex items-center justify-between border-b border-gray-100 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
      >
        <div
          class="relative ltr:pl-[34px] rtl:pr-[34px] md:text-[15px] lg:text-md text-gray-700 dark:text-gray-200"
        >
          <i
            class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"
          >
            school
          </i>
          Instructor:
        </div>
        <div
          class="md:text-[15px] lg:text-md font-semibold text-gray-600 dark:text-gray-300"
        >
          John
        </div>
      </div>
      <div
        class="flex items-center justify-between border-b border-gray-100 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
      >
        <div
          class="relative ltr:pl-[34px] rtl:pr-[34px] md:text-[15px] lg:text-md text-gray-700 dark:text-gray-200"
        >
          <i
            class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"
          >
            calendar_month
          </i>
          Duration:
        </div>
        <div
          class="md:text-[15px] lg:text-md font-semibold text-gray-600 dark:text-gray-300"
        >
          12 weeks
        </div>
      </div>
      <div
        class="flex items-center justify-between border-b border-gray-100 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
      >
        <div
          class="relative ltr:pl-[34px] rtl:pr-[34px] md:text-[15px] lg:text-md text-gray-700 dark:text-gray-200"
        >
          <i
            class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"
          >
            menu_book
          </i>
          Lessons:
        </div>
        <div
          class="md:text-[15px] lg:text-md font-semibold text-gray-600 dark:text-gray-300"
        >
          22
        </div>
      </div>
      <div
        class="flex items-center justify-between border-b border-gray-100 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
      >
        <div
          class="relative ltr:pl-[34px] rtl:pr-[34px] md:text-[15px] lg:text-md text-gray-700 dark:text-gray-200"
        >
          <i
            class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"
          >
            group
          </i>
          Students:
        </div>
        <div
          class="md:text-[15px] lg:text-md font-semibold text-gray-600 dark:text-gray-300"
        >
          6,300
        </div>
      </div>
      <div
        class="flex items-center justify-between border-b border-gray-100 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
      >
        <div
          class="relative ltr:pl-[34px] rtl:pr-[34px] md:text-[15px] lg:text-md text-gray-700 dark:text-gray-200"
        >
          <i
            class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"
          >
            language
          </i>
          Language:
        </div>
        <div
          class="md:text-[15px] lg:text-md font-semibold text-gray-600 dark:text-gray-300"
        >
          English
        </div>
      </div>
      <div
        class="flex items-center justify-between border-b border-gray-100 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
      >
        <div
          class="relative ltr:pl-[34px] rtl:pr-[34px] md:text-[15px] lg:text-md text-gray-700 dark:text-gray-200"
        >
          <i
            class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"
          >
            workspace_premium
          </i>
          Certifications:
        </div>
        <div
          class="md:text-[15px] lg:text-md font-semibold text-gray-600 dark:text-gray-300"
        >
          Yes
        </div>
      </div>
    </div>
    <button
      type="button"
      class="block w-full py-[10px] md:py-[12px] px-[17px] md:px-[20px] bg-primary-600 hover:bg-primary-500 text-white md:text-[15px] lg:text-md font-medium rounded-md transition-all"
    >
      <span
        class="inline-block relative ltr:pl-[30px] rtl:pr-[30px] ltr:md:pl-[34px] rtl:md:pr-[34px]"
      >
        <i
          class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 !text-[22px] md:!text-[24px]"
        >
          shopping_cart
        </i>
        Buy Now
      </span>
    </button>
    <div
      class="flex items-center gap-[8px] mt-[20px] md:mt-[25px] lg:mt-[30px]"
    >
      <span class="block md:text-[15px] lg:text-md"> Share: </span>
      <a
        href="#"
        class="leading-none inline-block transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500 text-[22px]"
        target="_blank"
      >
        <i class="ri-facebook-box-fill"></i>
      </a>
      <a
        href="#"
        class="leading-none inline-block transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500 text-[22px]"
        target="_blank"
      >
        <i class="ri-twitter-x-fill"></i>
      </a>
      <a
        href="#"
        class="leading-none inline-block transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500 text-[22px]"
        target="_blank"
      >
        <i class="ri-linkedin-box-fill"></i>
      </a>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref } from "vue";
import Lightgallery from "lightgallery/vue";
import lgVideo from "lightgallery/plugins/video";

import "lightgallery/css/lightgallery.css";
import "lightgallery/css/lg-video.css";

const plugins = ref([lgVideo]);
</script>
