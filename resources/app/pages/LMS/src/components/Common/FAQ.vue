<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[150px] 2xl:py-[180px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="text-center mx-auto md:max-w-[485px] mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px]"
      >
        <div
          class="md:text-[15px] lg:text-md py-[4px] px-[17px] md:px-[18px] bg-[#ffef99] dark:bg-[#0a0e19] rounded-[100px] text-gray-900 dark:text-gray-200 inline-block"
        >
          <div class="flex items-center gap-[8px] md:gap-[10px]">
            <img src="@/assets/images/lms-courses/ico.svg" alt="ico" />
            FAQ's
          </div>
        </div>
        <h2
          class="!text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl -tracking-[1px] mt-[15px] !mb-0 !text-gray-800 dark:!text-gray-100"
        >
          Got Questions? We've Got Answers
        </h2>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div class="text-center">
          <img
            src="@/assets/images/lms-courses/faq.png"
            class="inline-block"
            alt="faq-image"
          />
        </div>
        <div class="toc-accordion">
          <div
            v-for="(item, index) in faqItems"
            :key="index"
            class="toc-accordion-item bg-white dark:bg-[#0a0e19] border border-gray-200 dark:border-[#202c4b] rounded-[25px] mb-[15px] last:mb-0"
          >
            <button
              class="toc-accordion-button text-[16px] md:text-lg lg:text-[20px] py-[20px] md:py-[28px] px-[20px] md:px-[30px] block w-full ltr:text-left rtl:text-right font-semibold relative text-gray-700 dark:text-gray-100"
              type="button"
              @click="toggleAccordion(index)"
            >
              {{ item.question }}
              <i
                class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[30px] md:rtl:left-[30px] text-[20px] md:text-[25px] transition-transform duration-200"
                :class="{ 'rotate-180': activeIndex === index }"
              ></i>
            </button>
            <div
              class="toc-accordion-collapse -mt-[7px] md:-mt-[12px] px-[20px] md:px-[30px] pb-[20px] md:pb-[28px] overflow-hidden transition-all duration-300"
              :class="{ hidden: activeIndex !== index }"
            >
              <p class="md:text-[15px] lg:text-md">
                {{ item.answer }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

interface FAQItem {
  question: string;
  answer: string;
}

export default defineComponent({
  name: "FAQ",
  setup() {
    const activeIndex = ref<number | null>(0); // First item open by default

    const faqItems: FAQItem[] = [
      {
        question: "Can I learn at my own pace?",
        answer:
          "Absolutely! Our platform is fully self-paced, allowing you to learn whenever and wherever you want.",
      },
      {
        question: "Are certificates recognized?",
        answer:
          "Yes, our certificates are widely recognized by industry professionals and can be shared on LinkedIn.",
      },
      {
        question: "Do I need any prior knowledge?",
        answer:
          "Most of our courses are designed for beginners, though some advanced courses may require basic knowledge.",
      },
      // {
      //   question: "How do I access the courses?",
      //   answer:
      //     "After purchase, you'll get instant access to all course materials through your personal dashboard.",
      // },
      // {
      //   question: "Is there a money-back guarantee?",
      //   answer:
      //     "We offer a 30-day money-back guarantee if you're not satisfied with your learning experience.",
      // },
    ];

    const toggleAccordion = (index: number) => {
      activeIndex.value = activeIndex.value === index ? null : index;
    };

    return {
      faqItems,
      activeIndex,
      toggleAccordion,
    };
  },
});
</script>
