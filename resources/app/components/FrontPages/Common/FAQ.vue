<template>
  <div class="relative z-[1] pt-[60px] md:pt-[80px] lg:pt-[100px] xl:pt-[150px]">
    <div class="container 2xl:max-w-[1320px] mx-auto px-[12px]">
      <div
        class="mx-auto text-center lg:max-w-[810px] xl:max-w-[785px] mb-[35px] md:mb-[50px] lg:mb-[65px] xl:mb-[90px]">
        <h2
          class="!mb-0 !text-[24px] md:!text-[28px] lg:!text-[34px] xl:!text-[36px] -tracking-[.5px] md:-tracking-[.6px] lg:-tracking-[.8px] xl:-tracking-[1px] !leading-[1.2]">
          Do You Have Questions? We Have Answers
        </h2>
      </div>
      <div class="toc-accordion mx-auto md:max-w-[738px]" id="tablesOfContentAccordion">
        <div v-for="(faq, index) in faqs" :key="index"
          class="toc-accordion-item bg-white dark:bg-[#0c1427] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
          <button
            class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full text-left font-medium relative"
            type="button">
            {{ faq.question }}
            <i
              class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 right-[20px] md:right-[25px] text-[20px] pointer-events-none"></i>
          </button>
          <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
            <p class="text-gray-500 dark:text-gray-400 leading-[1.7]">
              {{ faq.answer }}
            </p>
            <ul v-if="faq.points" class="list-disc pl-[17px] mt-3">
              <li v-for="(point, idx) in faq.points" :key="idx"
                class="text-gray-500 dark:text-gray-400 leading-[1.6] mb-[7px] last:mb-0">
                {{ point }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, onMounted } from "vue";

export default defineComponent({
  name: "FAQ",
  setup() {
    const faqs = [
      {
        question: "What kind of products do you sell?",
        answer:
          "We offer baking ingredients, food packaging, party/event supplies, and kitchen tools. Perfect for households, small businesses, and large-scale events.",
      },
      {
        question: "Are all items in stock?",
        answer:
          "Most of our products are ready-stock. For bulk purchases or specific items, feel free to contact us first.",
        points: [
          "Pellentesque viverra lorem malesuada nunc tristique sapien.",
          "Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.",
          "Tellus non morbi nascetur cursus etiam facilisis mi.",
          "Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.",
        ],
      },
      {
        question: "Can I buy retail or do I have to buy in bulk?",
        answer:
          "Both! We welcome retail and wholesale purchases.",
      },
      {
        question: "Do you offer delivery?",
        answer:
          "Yes, we provide delivery services within Purbalingga and nearby areas. Fees and delivery times will be confirmed upon ordering.",
      },
      {
        question: "Can I pick up my order at the store?",
        answer:
          "Absolutely. You can visit us directly at: Jl.Jend.Sudirman No.173, Bancar, Purbalingga.",
      },
      {
        question: "Will I receive a receipt or invoice?",
        answer:
          "Yes, every transaction includes a printed or digital invoice.",
      },
      {
        question: "I’m confused about ordering. What should I do?",
        answer:
          "Don’t worry! You can chat directly with our admin via WhatsApp for assistance.",
      },
    ];

    const initializeAccordions = () => {
      const accordions = document.querySelectorAll<HTMLElement>(".toc-accordion-button");

      accordions.forEach((accordion) => {
        accordion.addEventListener("click", function () {
          const isOpen = this.classList.contains("open");

          // Tutup semua dulu
          accordions.forEach((acc) => {
            acc.classList.remove("open");
            acc.setAttribute("aria-expanded", "false");
            const panel = acc.nextElementSibling as HTMLElement;
            if (panel) panel.style.display = "none";
          });

          // Buka yang sekarang diklik
          if (!isOpen) {
            this.classList.add("open");
            this.setAttribute("aria-expanded", "true");
            const panel = this.nextElementSibling as HTMLElement;
            if (panel) panel.style.display = "block";
          }
        });
      });
    };

    onMounted(() => {
      initializeAccordions();
    });

    return {
      faqs,
    };
  },
});
</script>

<style scoped>
/* Optional: Transition for better UX */
.toc-accordion-collapse {
  transition: all 0.3s ease;
}
</style>
