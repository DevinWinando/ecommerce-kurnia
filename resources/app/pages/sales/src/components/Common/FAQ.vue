<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <!-- FAQ Header -->
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] text-center mx-auto md:max-w-[415px]"
      >
        <span
          class="inline-block font-medium text-[#7a857d] rounded-[30px] border border-[#ebebe0] dark:border-gray-800 py-[5.5px] px-[18px] mb-[12px] md:mb-[15px]"
        >
          Frequently Asked Questions
        </span>
        <h2
          class="!text-[#06201B] dark:!text-white md:-tracking-[1px] !font-medium !text-2xl md:!text-3xl lg:!text-4xl !leading-[1.2] !mb-[12px] md:!mb-[15px]"
        >
          Got Questions? We've Got Answers
        </h2>
        <p class="md:text-[15px] lg:text-md text-[#7a857d]">
          Still curious? Here are answers to the most common questions we get
          about using Trezo for sales success.
        </p>
      </div>

      <!-- FAQ Accordion -->
      <div
        class="toc-accordion mx-auto max-w-[848px]"
        id="tablesOfContentAccordion"
      >
        <div
          v-for="(item, index) in faqItems"
          :key="index"
          class="toc-accordion-item bg-[#ebebe0] dark:bg-[#0a0e19] rounded-[15px] mb-[20px] last:mb-0"
        >
          <button
            class="toc-accordion-button text-[16px] md:text-lg lg:text-[20px] px-[20px] md:px-[30px] py-[20px] md:py-[25px] flex items-center justify-between w-full ltr:text-left rtl:text-right font-medium relative text-[#06201B] dark:text-white"
            type="button"
            @click="toggleAccordion(index)"
          >
            {{ item.question }}
            <span
              class="block w-[35px] h-[35px] md:w-[44px] md:h-[44px] rounded-full bg-white dark:bg-dark flex items-center justify-center text-[24px] md:text-[28px]"
            >
              <i class="ri-arrow-down-s-line"></i>
            </span>
          </button>
          <div
            class="toc-accordion-collapse -mt-[5px] md:-mt-[10px] px-[20px] md:px-[30px] pb-[20px] md:pb-[30px]"
            :style="{ display: activeIndex === index ? 'block' : 'none' }"
          >
            <p class="text-[#7a857d]">
              {{ item.answer }}
            </p>
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
    const faqItems: FAQItem[] = [
      {
        question: "Is Trezo only for sales teams?",
        answer:
          "Trezo is built for sales, but also works great for business development, consultants, and account managers who need to track leads and close deals.",
      },
      {
        question: "Can I integrate Trezo with my CRM?",
        answer:
          "Yes! Trezo offers native integrations with popular CRMs like Salesforce, HubSpot, and Zoho. We also provide an API for custom integrations.",
      },
      {
        question: "Do you offer a free trial?",
        answer:
          "Absolutely! We offer a 14-day free trial with full access to all features. No credit card required.",
      },
      {
        question: "What kind of support is included?",
        answer:
          "All plans include email and chat support. Pro and Enterprise plans add priority support, and Enterprise includes a dedicated success manager.",
      },
      {
        question: "Is my data secure with Trezo?",
        answer:
          "Security is our top priority. We use enterprise-grade encryption, regular audits, and comply with GDPR and CCPA regulations.",
      },
    ];

    const activeIndex = ref<number>(0);

    const toggleAccordion = (index: number) => {
      activeIndex.value = activeIndex.value === index ? -1 : index;
    };

    return {
      faqItems,
      activeIndex,
      toggleAccordion,
    };
  },
});
</script>
