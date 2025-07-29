<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[150px] 2xl:py-[180px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div>
          <div
            class="md:text-[15px] lg:text-md py-[4px] px-[17px] md:px-[18px] bg-[#ffef99] dark:bg-[#0a0e19] rounded-[100px] text-gray-900 dark:text-gray-200 inline-block"
          >
            <div class="flex items-center gap-[8px] md:gap-[10px]">
              <img src="@/assets/images/lms-courses/ico.svg" alt="ico" />
              How It Works
            </div>
          </div>
          <h2
            class="!text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl md:-tracking-[1px] mt-[15px] !mb-[25px] md:!mb-[30px] lg:!mb-[50px] xl:!mb-[80px] !text-gray-800 dark:!text-gray-100"
          >
            Learning Made Simple
          </h2>
          <div
            v-for="(step, index) in steps"
            :key="step.id"
            class="flex items-center gap-[20px] pb-[15px] md:pb-[20px] mb-[15px] md:mb-[20px] border-b border-gray-100 dark:border-[#202c4b] last:mb-0 last:pb-0 last:border-b-0"
            :class="[
              index === 0 ? 'ltr:md:mr-[105px] rtl:md:ml-[105px]' : '',
              index === 1
                ? 'ltr:md:ml-[35px] rtl:md:mr-[35px] ltr:md:mr-[70px] rtl:md:ml-[70px]'
                : '',
              index === 2
                ? 'ltr:md:ml-[70px] rtl:md:mr-[70px] ltr:md:mr-[35px] rtl:md:ml-[35px]'
                : '',
              index === 3 ? 'ltr:md:ml-[105px] rtl:md:mr-[105px]' : '',
            ]"
          >
            <div
              class="leading-none font-semibold text-[48px] italic -tracking-[1px] text-primary-300"
            >
              {{ step.number }}.
            </div>
            <div>
              <h3
                class="!text-gray-700 dark:!text-gray-100 !text-[18px] md:!text-[20px] !mb-[5px]"
              >
                {{ step.title }}
              </h3>
              <p class="md:text-[15px] lg:text-md">
                {{ step.description }}
              </p>
            </div>
          </div>
        </div>
        <div class="xl:max-w-[521px] ltr:ml-auto rtl:mr-auto">
          <img
            src="@/assets/images/lms-courses/how-it-works.jpg"
            class="inline-block rounded-[25px]"
            alt="how-it-works-image"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "HowItWorks",
  data() {
    return {
      steps: [
        {
          id: 1,
          number: 1,
          title: "Sign Up Free",
          description: "Create your account in seconds.",
        },
        {
          id: 2,
          number: 2,
          title: "Choose Your Course",
          description: "Pick from hundreds of topics.",
        },
        {
          id: 3,
          number: 3,
          title: "Start Learning",
          description: "Watch lessons, take quizzes, and track progress.",
        },
        {
          id: 4,
          number: 4,
          title: "Get Certified",
          description: "Earn credentials and grow your resume.",
        },
      ],
    };
  },
});
</script>
