<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[150px] 2xl:py-[180px] bg-[#f7f7f7] dark:bg-[#0a0e19]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="text-center mb-[35px] md:mb-[45px] lg:mb-[55px] xl:mb-[65px]">
        <span
          class="inline-block py-[4.5px] px-[15px] text-primary-600 bg-primary-50 dark:bg-gray-900 rounded-[100px] mb-[12px]"
        >
          {{ sectionTagline }}
        </span>
        <h2
          class="!font-medium md:-tracking-[2.5px] !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl lg:max-w-[480px] xl:max-w-[540px] mx-auto !leading-[1.2] !mb-[11px] md:!mb-[13px] lg:!mb-[15px]"
        >
          {{ sectionTitle }}
        </h2>
        <p>{{ sectionDescription }}</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          v-for="(plan, index) in pricingPlans"
          :key="index"
          class="group bg-white dark:bg-dark rounded-[15px] px-[20px] md:px-[30px] xl:px-[50px] py-[30px] md:py-[40px] xl:py-[60px] relative z-[1]"
        >
          <span
            class="inline-block py-[3.5px] px-[20px] border border-primary-600 text-primary-600 group-hover:bg-primary-100 dark:bg-gray-900 rounded-[100px] mb-[20px] md:mb-[25px] transition-all"
          >
            {{ plan.name }}
          </span>
          <div
            class="leading-none text-black dark:text-white text-3xl md:text-5xl mb-[17px]"
          >
            ${{ plan.price
            }}<span
              class="text-base md:text-[15px] lg:text-md font-normal text-gray-500 dark:text-gray-400"
              >/monthly</span
            >
          </div>
          <p>{{ plan.description }}</p>
          <div class="h-px w-full bg-gray-100 dark:bg-gray-800 my-[20px]"></div>
          <span
            class="block font-medium text-black dark:text-white md:text-[15px] lg:text-md"
          >
            Features:
          </span>
          <ul class="mt-[20px] mb-[30px] md:mb-[40px] lg:mb-[50px]">
            <li
              v-for="(feature, featureIndex) in plan.features"
              :key="featureIndex"
              class="md:text-[15px] xl:text-md relative ltr:pl-[32px] rtl:pr-[32px] mb-[12px] last:mb-0"
            >
              <img
                src="@/assets/images/ecommerce/icons/check.svg"
                class="w-[22px] inline-block absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"
                alt="check"
              />
              {{ feature }}
            </li>
          </ul>
          <a
            :href="plan.ctaLink"
            target="_blank"
            class="block w-full text-center py-[9px] px-[25px] md:py-[10.5px] md:px-[30px] font-medium text-primary-500 rounded-[100px] border border-primary-500 transition-all group-hover:bg-primary-500 group-hover:border-primary-500 group-hover:text-white"
          >
            {{ plan.ctaText }}
          </a>
          <div
            class="opacity-0 transition-all group-hover:opacity-100 absolute -z-[1] top-[30px] ltr:right-[30px] rtl:left-[30px]"
            v-if="plan.showShape"
          >
            <img
              src="@/assets/images/ecommerce/shapes/shape5.png"
              alt="shape"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "PricingPlans",
  setup() {
    const data = {
      sectionTagline: "Pricing Plans",
      sectionTitle: "Flexible Plans That Scale With You",
      sectionDescription:
        "Start free and upgrade as you grow. No hidden fees, no surprises.",
      pricingPlans: [
        {
          name: "Free Trial",
          price: "0",
          description: "New store owners exploring Trezo",
          ctaText: "Get Started",
          ctaLink: "https://trezo-twcss.envytheme.com/",
          showShape: true,
          features: [
            "Access to basic dashboard",
            "Real-time sales tracking",
            "Inventory overview",
            "Up to 50 products",
            "1 connected store",
            "Email support",
            "No credit card required",
          ],
        },
        {
          name: "Pro",
          price: "39",
          description: "Growing businesses that need more control",
          ctaText: "Get Started",
          ctaLink: "https://trezo-twcss.envytheme.com/",
          showShape: true,
          features: [
            "Everything in Free",
            "Unlimited products & orders",
            "Multi-store dashboard",
            "Marketing automation tools",
            "Custom email campaigns",
            "Analytics & reports",
            "Chat support",
          ],
        },
        {
          name: "Enterprise",
          price: "79",
          description: "High-volume sellers & teams",
          ctaText: "Get Started",
          ctaLink: "https://trezo-twcss.envytheme.com/",
          showShape: true,
          features: [
            "Everything in Pro",
            "Dedicated success manager",
            "API access & integrations",
            "Advanced analytics & forecasting",
            "Priority support",
            "Team roles & permissions",
            "SLA-backed uptime guarantee",
          ],
        },
      ],
    };

    return {
      ...data,
    };
  },
});
</script>
