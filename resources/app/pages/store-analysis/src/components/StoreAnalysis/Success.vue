<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <!-- Left Content -->
        <div>
          <span
            class="inline-block rounded-[30px] text-white py-[6.5px] px-[19px] mb-[15px]"
            :style="badgeStyle"
          >
            {{ content.badge }}
          </span>
          <h2
            class="!font-medium md:-tracking-[1px] !text-xl md:!text-2xl lg:!text-3xl xl:!text-5xl !leading-[1.2] !mb-[13px]"
          >
            {{ content.title }}
          </h2>
          <p class="md:text-[15px] lg:text-md">
            {{ content.description }}
          </p>

          <div class="mt-[25px] md:mt-[30px] lg:mt-[35px] xl:mt-[40px]">
            <div
              v-for="(item, index) in content.successItems"
              :key="index"
              class="relative ltr:pl-[40px] rtl:pr-[40px] ltr:md:pl-[52px] rtl:md:pr-[52px] mb-[15px] md:mb-[20px] lg:mb-[25px] last:mb-0"
            >
              <img
                :src="checkIcon"
                class="absolute top-[3px] ltr:left-0 rtl:right-0"
                alt="check"
              />
              <h3 class="!font-medium !text-md md:!text-lg !mb-[9px]">
                {{ item.title }}
              </h3>
              <p class="md:text-[15px] lg:text-md">
                {{ item.description }}
              </p>
            </div>
          </div>
        </div>

        <!-- Right Image -->
        <div
          class="text-center relative ltr:pl-[15px] rtl:pr-[15px] ltr:md:pl-[50px] rtl:md:pr-[50px] ltr:xl:pl-[108px] rtl:xl:pr-[108px]"
        >
          <img
            :src="mainImage"
            class="inline-block rounded-[15px]"
            :alt="content.imageAlt"
          />
          <img
            :src="overlayImage"
            :alt="content.overlayAlt"
            class="inline-block max-w-[100px] md:max-w-[220px] rounded-[10px] absolute top-[63px] ltr:left-0 rtl:right-0 ltr:xl:left-[43px] rtl:xl:right-[43px]"
            :style="overlayStyle"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import checkIcon from "@/assets/images/store-analysis/icons/check-primary.svg";
import mainImage from "@/assets/images/store-analysis/success.jpg";
import overlayImage from "@/assets/images/store-analysis/sales-this-month.jpg";

interface SuccessItem {
  title: string;
  description: string;
}

interface Content {
  badge: string;
  title: string;
  description: string;
  imageAlt: string;
  overlayAlt: string;
  successItems: SuccessItem[];
}

export default defineComponent({
  name: "Success",
  setup() {
    const badgeStyle = {
      background: "linear-gradient(180deg, #ffaa72 0%, #ee3e08 100%)",
    };

    const overlayStyle = {
      boxShadow:
        "-37.785px 151.141px 43.663px 0px rgba(140, 140, 140, 0), -24.35px 96.562px 39.464px 0px rgba(140, 140, 140, 0.01), -13.435px 54.579px 33.587px 0px rgba(140, 140, 140, 0.05), -5.878px 24.35px 25.19px 0px rgba(140, 140, 140, 0.09), -1.679px 5.878px 13.435px 0px rgba(140, 140, 140, 0.1)",
    };

    const content: Content = {
      badge: "Success with Trezo",
      title: "Retail Wins Powered by Trezo",
      description:
        "See how real-world retailers used Trezo's analytics to boost efficiency, increase sales, and build smarter strategies that scale.",
      imageAlt: "Success with Trezo analytics",
      overlayAlt: "Sales this month",
      successItems: [
        {
          title: "35% Increase in Weekly Sales",
          description:
            "A mid-sized fashion store used Trezo's trend reports to restock fast-selling items, resulting in a 35% boost in weekly revenue.",
        },
        {
          title: "20% Faster Inventory Turnover",
          description:
            "A lifestyle brand improved inventory planning through Trezo's predictive analytics, reducing overstock and freeing up cash flow.",
        },
        {
          title: "40% Reduction in Operational Delays",
          description:
            "A retail chain optimized staffing and delivery schedules with live dashboard insights, cutting fulfillment delays by nearly half.",
        },
        {
          title: "3x Customer Retention Growth",
          description:
            "A boutique store identified and rewarded loyal customers using Trezo's customer behavior analytics, tripling their repeat visit rate.",
        },
      ],
    };

    return {
      badgeStyle,
      overlayStyle,
      content,
      checkIcon,
      mainImage,
      overlayImage,
    };
  },
});
</script>
