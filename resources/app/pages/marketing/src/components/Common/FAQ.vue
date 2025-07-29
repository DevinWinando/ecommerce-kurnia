<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[150px] 2xl:py-[180px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="text-center mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px]"
      >
        <span
          class="inline-block py-[4.5px] px-[15px] rounded-[100px] bg-orange-100 dark:bg-[#0a0e19] text-orange-700 mb-[12px]"
        >
          {{ sectionTag }}
        </span>
        <h2
          class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl xl:max-w-[520px] mx-auto !leading-[1.2] !mb-[10px] lg:!mb-[12px]"
        >
          {{ sectionTitle }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ sectionDescription }}
        </p>
      </div>
      <div
        class="toc-accordion mx-auto lg:max-w-[850px]"
        id="tablesOfContentAccordion"
      >
        <div
          v-for="(faq, index) in faqs"
          :key="'faq-' + index"
          class="toc-accordion-item bg-white dark:bg-[#0a0e19] border border-orange-100 dark:border-[#202c4b] rounded-[25px] relative z-[1] mb-[15px] last:mb-0"
        >
          <button
            class="toc-accordion-button text-[15px] md:text-md lg:text-lg py-[20px] md:py-[28px] px-[20px] md:px-[30px] block w-full ltr:text-left rtl:text-right font-semibold relative text-black dark:text-white"
            type="button"
            @click="toggleAccordion(index)"
          >
            {{ faq.question }}
            <i
              class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[30px] md:rtl:left-[30px] text-[20px] md:text-[25px] transition-transform duration-300"
              :class="{ 'transform rotate-180': activeIndex === index }"
            ></i>
          </button>
          <div
            class="toc-accordion-collapse -mt-[7px] md:-mt-[12px] px-[20px] md:px-[30px] pb-[20px] md:pb-[28px]"
            :style="{ display: activeIndex === index ? 'block' : 'none' }"
          >
            <p>
              {{ faq.answer }}
            </p>
          </div>
          <div
            class="opacity-50 absolute top-0 left-0 right-0 bottom-0 -z-[1] rounded-[25px] dark:hidden"
            :style="{ background: faq.backgroundGradient }"
          ></div>
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
  backgroundGradient: string;
}

export default defineComponent({
  name: "FAQ",
  setup() {
    const sectionTag = "Frequently Asked Questions";
    const sectionTitle = "Everything You Need to Know About Trezo";
    const sectionDescription =
      "Here are some of the most common things people ask us.";

    const faqs: FAQItem[] = [
      {
        question: "Is there a free trial available?",
        answer:
          "Yes! You can start with our Free Trial plan — no credit card required. It includes access to core features so you can explore Trezo without risk.",
        backgroundGradient: "linear-gradient(180deg, #ffefe1 0%, #ffffff 100%)",
      },
      {
        question: "Can I upgrade or downgrade my plan anytime?",
        answer:
          "Absolutely! You can change your plan at any time from your account settings. Changes take effect immediately with pro-rated billing.",
        backgroundGradient: "linear-gradient(180deg, #ffefe1 0%, #ffffff 100%)",
      },
      {
        question: "Is Trezo suitable for large teams or enterprises?",
        answer:
          "Yes! Our Enterprise plan is designed specifically for large organizations with features like unlimited team members, advanced security, and dedicated support.",
        backgroundGradient: "linear-gradient(180deg, #ffefe1 0%, #ffffff 100%)",
      },
      {
        question: "Do you offer onboarding or training?",
        answer:
          "We provide comprehensive onboarding materials, video tutorials, and live training sessions for all paid plans. Enterprise customers get dedicated onboarding support.",
        backgroundGradient: "linear-gradient(180deg, #ffefe1 0%, #ffffff 100%)",
      },
      {
        question: "What channels does Trezo support?",
        answer:
          "Trezo integrates with email, social media platforms, advertising networks, and supports custom API integrations for specialized needs.",
        backgroundGradient: "linear-gradient(180deg, #ffefe1 0%, #ffffff 100%)",
      },
    ];

    const activeIndex = ref<number | null>(0);

    const toggleAccordion = (index: number) => {
      activeIndex.value = activeIndex.value === index ? null : index;
    };

    return {
      sectionTag,
      sectionTitle,
      sectionDescription,
      faqs,
      activeIndex,
      toggleAccordion,
    };
  },
});
</script>
