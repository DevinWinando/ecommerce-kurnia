<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] text-center mx-auto md:max-w-[630px]"
    >
      <h2
        class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-0"
      >
        Send Us a Message
      </h2>
    </div>
    <form class="max-w-[957px] mx-auto">
      <div class="mb-[20px] md:mb-[22px]">
        <label
          class="font-medium text-gray-700 dark:text-gray-100 block mb-[10px]"
        >
          Your Name *
        </label>
        <input
          type="text"
          class="block w-full h-[47px] border border-gray-200 dark:border-gray-900 rounded-md text-base text-gray-700 dark:text-gray-100 placeholder:text-gray-400 px-[16px] !outline-0 transition-all focus:border-primary-500"
          placeholder="Enter your name"
        />
      </div>
      <div class="mb-[20px] md:mb-[22px]">
        <label
          class="font-medium text-gray-700 dark:text-gray-100 block mb-[10px]"
        >
          Your Email *
        </label>
        <input
          type="text"
          class="block w-full h-[47px] border border-gray-200 dark:border-gray-900 rounded-md text-base text-gray-700 dark:text-gray-100 placeholder:text-gray-400 px-[16px] !outline-0 transition-all focus:border-primary-500"
          placeholder="Enter your email address"
        />
      </div>
      <div class="mb-[20px] md:mb-[22px]">
        <label
          class="font-medium text-gray-700 dark:text-gray-100 block mb-[10px]"
        >
          Your Subject *
        </label>
        <input
          type="text"
          class="block w-full h-[47px] border border-gray-200 dark:border-gray-900 rounded-md text-base text-gray-700 dark:text-gray-100 placeholder:text-gray-400 px-[16px] !outline-0 transition-all focus:border-primary-500"
          placeholder="Enter your subject"
        />
      </div>
      <div class="mb-[20px] md:mb-[22px]">
        <label
          class="font-medium text-gray-700 dark:text-gray-100 block mb-[10px]"
        >
          Your Message *
        </label>
        <textarea
          class="block w-full h-[130px] border border-gray-200 dark:border-gray-900 rounded-md text-base text-gray-700 dark:text-gray-100 placeholder:text-gray-400 p-[16px] !outline-0 transition-all focus:border-primary-500"
          placeholder="Write you message..."
        ></textarea>
      </div>
      <button
        type="submit"
        class="inline-block font-medium rounded-[100px] bg-purple-600 border border-purple-600 text-base text-white py-[9px] md:py-[10.5px] px-[25px] md:px-[30px] transition-all hover:bg-purple-500 hover:border-purple-500 mt-[5px] md:mt-[8px]"
      >
        Submit Your Message
      </button>
    </form>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "Contact",
});
</script>
