<template>
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[110px] xl:pt-[130px] 2xl:pt-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="grid grid-cols-1 lg:grid-cols-2 gap-[12px] md:gap-[15px] lg:gap-[25px] items-center mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px]"
      >
        <div class="md:max-w-[475px]">
          <span
            class="inline-block rounded-[30px] bg-white dark:bg-dark text-purple-600 border border-purple-200 dark:border-gray-800 py-[3.5px] px-[13px] mb-[12px] md:mb-[15px]"
          >
            Dashboard Live
          </span>
          <h2
            class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1GAME.2] !mb-0"
          >
            Experience the Full Power of Trezo Social Live
          </h2>
        </div>
        <div class="md:max-w-[520px] ltr:lg:ml-auto rtl:lg:mr-auto">
          <p class="md:text-[15px] lg:text-md">
            Explore how your team can track conversations, analyze trends, and
            respond instantly — all from a centralized, intuitive workspace.
          </p>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div
          class="toc-accordion ltr:xl:pr-[100px] rtl:xl:pl-[100px]"
          id="tablesOfContentAccordion"
        >
          <div
            v-for="(item, index) in accordionItems"
            :key="index"
            class="toc-accordion-item border-b border-gray-100 first:border-t dark:border-gray-900"
          >
            <button
              class="toc-accordion-button text-[16px] md:text-lg lg:text-[20px] xl:text-[22px] py-[20px] md:py-[28px] block w-full ltr:text-left rtl:text-right font-medium relative text-gray-700 dark:text-gray-100"
              type="button"
              @click="toggleAccordion(index)"
              :aria-expanded="item.isOpen"
              :aria-controls="`collapse-${index}`"
            >
              {{ item.title }}
              <i
                :class="[
                  'ri-arrow-down-s-line text-purple-600 absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-0 md:rtl:left-0 text-[22px] md:text-[28px]',
                  { 'rotate-180': item.isOpen },
                ]"
              ></i>
            </button>
            <div
              :id="`collapse-${index}`"
              class="toc-accordion-collapse -mt-[7px] md:-mt-[12px] pb-[20px] md:pb-[28px]"
              :class="{ hidden: !item.isOpen }"
            >
              <p class="md:text-[15px] lg:text-md">
                {{ item.description }}
              </p>
            </div>
          </div>
        </div>

        <div class="text-center">
          <img
            src="@/assets/images/social-media/dashboard.jpg"
            class="inline-block rounded-[15px]"
            alt="dashboard"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

export default defineComponent({
  name: "DashboardLive",
  setup() {
    const accordionItems = ref([
      {
        title: "Schedule Posts by Channel",
        description:
          "Easily plan and schedule posts for each social platform in advance — ensuring consistent messaging and maximum engagement across all channels.",
        isOpen: true,
      },
      {
        title: "Preview Live Feeds",
        description:
          "View real-time previews of your social media feeds to ensure your content looks perfect before it goes live.",
        isOpen: false,
      },
      {
        title: "Track Performance in Real-Time",
        description:
          "Monitor engagement metrics and performance data as it happens to optimize your social media strategy.",
        isOpen: false,
      },
      {
        title: "Collaborate with Your Team",
        description:
          "Work seamlessly with your team to create, review, and publish content from a single platform.",
        isOpen: false,
      },
      {
        title: "Identify Top-Performing Content Instantly",
        description:
          "Quickly spot your best-performing posts with analytics to replicate successful strategies.",
        isOpen: false,
      },
    ]);

    const toggleAccordion = (index: number) => {
      accordionItems.value.forEach((item, i) => {
        item.isOpen = i === index ? !item.isOpen : false;
      });
    };

    return { accordionItems, toggleAccordion };
  },
});
</script>
