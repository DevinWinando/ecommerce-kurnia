<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px]">
        <!-- FAQ Header -->
        <div class="mb-[5px] md:mb-[15px] lg:mb-0 md:max-w-[525px]">
          <span
            class="inline-block rounded-[30px] text-white py-[6.5px] px-[19px] mb-[15px]"
            :style="badgeStyle"
          >
            {{ header.badge }}
          </span>
          <h2
            class="!font-medium md:-tracking-[1px] !text-xl md:!text-2xl lg:!text-3xl xl:!text-5xl !leading-[1.2] !mb-[13px]"
          >
            {{ header.title }}
          </h2>
          <p class="md:text-[15px] lg:text-md">
            {{ header.description }}
          </p>
        </div>

        <!-- FAQ Accordion -->
        <div class="toc-accordion" id="tablesOfContentAccordion">
          <div
            v-for="(item, index) in faqs"
            :key="index"
            class="toc-accordion-item dark:bg-[#0a0e19] rounded-[15px] relative z-[1] mb-[15px] last:mb-0"
          >
            <button
              class="toc-accordion-button text-[16px] md:text-lg lg:text-[20px] py-[20px] md:py-[25px] px-[20px] md:px-[30px] block w-full ltr:text-left rtl:text-right font-medium relative text-black dark:text-white"
              :class="{ open: index === 0 }"
              type="button"
              @click="toggleAccordion(index)"
            >
              {{ item.question }}
              <i
                class="ri-arrow-down-s-line text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[30px] md:rtl:left-[30px] text-[20px] md:text-[25px] transition-transform duration-300"
                :class="{ 'rotate-180': activeIndex === index }"
              ></i>
            </button>
            <div
              class="toc-accordion-collapse -mt-[5px] md:-mt-[10px] px-[20px] md:px-[30px] pb-[20px] md:pb-[28px] overflow-hidden transition-all duration-300"
              :style="{
                display: activeIndex === index ? 'block' : 'none',
                maxHeight: activeIndex === index ? '500px' : '0px',
              }"
            >
              <p class="md:text-[15px] lg:text-md">
                {{ item.answer }}
              </p>
            </div>
            <div
              class="absolute top-0 left-0 w-full h-full rounded-[15px] -z-[1] dark:hidden"
              :style="backgroundStyle"
            ></div>
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

interface Header {
  badge: string;
  title: string;
  description: string;
}

export default defineComponent({
  name: "FAQ",
  setup() {
    const activeIndex = ref(0);

    const badgeStyle = {
      background: "linear-gradient(180deg, #ffaa72 0%, #ee3e08 100%)",
    };

    const backgroundStyle = {
      background: "linear-gradient(180deg, #faf5ff 0%, #d3f1ff 100%), #fff",
    };

    const header: Header = {
      badge: "FAQ's",
      title: "Your Questions, Answered",
      description:
        "Get quick answers to common questions about Trezo's store analysis platform — from features and pricing to integrations and data security.",
    };

    const faqs: FAQItem[] = [
      {
        question: "How does Trezo track store performance?",
        answer:
          "Trezo collects data from multiple sources, including POS systems, foot traffic sensors, and sales reports, to provide a comprehensive view of store performance.",
      },
      {
        question: "Can I use Trezo for multiple store locations?",
        answer:
          "Yes, Trezo supports multi-location management with our Pro and Enterprise plans, allowing you to monitor all your stores from a single dashboard.",
      },
      {
        question: "What kind of reports can I generate?",
        answer:
          "Trezo offers various reports including sales performance, customer behavior, inventory turnover, and staff productivity reports, all customizable to your needs.",
      },
      {
        question: "Is my data secure with Trezo?",
        answer:
          "Absolutely. Trezo uses enterprise-grade encryption, regular security audits, and complies with all major data protection regulations to keep your information safe.",
      },
    ];

    const toggleAccordion = (index: number) => {
      activeIndex.value = activeIndex.value === index ? -1 : index;
    };

    return {
      activeIndex,
      badgeStyle,
      backgroundStyle,
      header,
      faqs,
      toggleAccordion,
    };
  },
});
</script>
