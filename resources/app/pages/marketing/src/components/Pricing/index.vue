<template>
  <div
    class="pt-[145px] md:pt-[175px] lg:pt-[190px] xl:pt-[175px] pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[140px] relative z-[1] overflow-hidden"
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
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px] items-center"
      >
        <div
          v-for="(plan, index) in pricingPlans"
          :key="'plan-' + index"
          :class="`order-${plan.order} lg:order-${plan.order}`"
        >
          <div
            class="bg-white dark:bg-[#0a0e19] px-[20px] py-[25px] md:px-[35px] md:py-[45px] xl:px-[55px] xl:py-[65px] rounded-[25px]"
            :class="{ 'xl:py-[80px]': plan.name === 'Pro' }"
          >
            <span
              class="block text-orange-600 font-medium text-md lg:text-lg mb-[10px] md:mb-[17px]"
            >
              {{ plan.name }}
            </span>
            <div
              class="text-gray-700 dark:text-gray-100 font-medium text-4xl md:text-5xl mb-[15px] md:mb-[18px]"
            >
              ${{ plan.price }}
              <span
                class="ltr:-ml-[8px] rtl:-mr-[8px] md:-tracking-[1px] text-base md:text-[15px] font-normal lg:text-md text-gray-500 dark:text-gray-400"
              >
                /monthly
              </span>
            </div>
            <p class="md:text-[15px] lg:text-md">
              {{ plan.description }}
            </p>
            <a
              :href="plan.ctaLink"
              target="_blank"
              class="inline-block py-[10.5px] px-[20px] rounded-[7px] transition-all font-medium border md:text-[15px] lg:text-md md:mt-[5px] lg:mt-[10px]"
              :class="plan.ctaClass"
            >
              <span class="inline-block relative ltr:pl-[28px] rtl:pr-[28px]">
                <i
                  class="material-symbols-outlined absolute top-1/2 ltr:-left-[2px] rtl:-right-[2px] -translate-y-1/2"
                >
                  person
                </i>
                {{ plan.ctaText }}
              </span>
            </a>
            <ul class="mt-[20px] md:mt-[25px] lg:mt-[35px]">
              <li
                v-for="(feature, featureIndex) in plan.features"
                :key="'feature-' + index + '-' + featureIndex"
                class="text-gray-700 dark:text-gray-100 md:text-[15px] lg:text-md relative ltr:pl-[32px] rtl:pr-[32px] mb-[12px] md:mb-[15px] last:mb-0"
              >
                <img
                  src="@/assets/images/marketing/icons/check.svg"
                  class="absolute top-1/2 ltr:left-0 rtl:right-0 -translate-y-1/2 dark:invert"
                  alt="check"
                />
                {{ feature }}
              </li>
            </ul>
            <div
              class="rounded-[25px] absolute top-0 left-0 right-0 bottom-0 -z-[1] dark:hidden"
              :style="{ background: plan.backgroundGradient }"
            ></div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-no-repeat bg-top -z-[1] dark:hidden"
      style="background: linear-gradient(180deg, #ffefe1 0%, #fff 100%)"
    ></div>
    <div
      class="absolute top-[70px] md:top-[84px] lg:top-[91px] left-0 right-0 -z-[1]"
    >
      <img
        src="@/assets/images/marketing/perspective-grid.png"
        class="inline-block"
        alt="perspective-grid"
      />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

interface PricingPlan {
  name: string;
  price: number;
  description: string;
  ctaText: string;
  ctaLink: string;
  ctaClass: string;
  features: string[];
  backgroundGradient: string;
  order: number;
}

export default defineComponent({
  name: "Pricing",
  setup() {
    const sectionTag = "Pricing";
    const sectionTitle = "Flexible Plans That Scale With You";
    const sectionDescription =
      "Trezo has a plan that fits your needs — and grows with you.";

    const pricingPlans: PricingPlan[] = [
      {
        name: "Free Trial",
        price: 0,
        description: "Perfect for individuals or small teams",
        ctaText: "Get Started",
        ctaLink: "https://trezo-twcss.envytheme.com/",
        ctaClass:
          "text-orange-600 border-orange-600 hover:text-white hover:bg-orange-500 hover:border-orange-500",
        features: [
          "Access to core features",
          "1 active project",
          "Up to 3 team members",
          "Email campaign builder",
          "Basic analytics",
          "7-day activity history",
        ],
        backgroundGradient: "linear-gradient(180deg, #faf5ff 0%, #eef6ff 100%)",
        order: 1,
      },
      {
        name: "Pro",
        price: 39,
        description: "Ideal for growing teams and agencies",
        ctaText: "Get Started",
        ctaLink: "https://trezo-twcss.envytheme.com/",
        ctaClass:
          "text-white border-orange-600 bg-orange-600 hover:text-white hover:bg-orange-500 hover:border-orange-500",
        features: [
          "Everything in free trial",
          "Unlimited projects & campaigns",
          "Up to 15 team members",
          "Advanced analytics & reports",
          "Funnel tracking & segmentation",
          "Social & email integrations",
          "Priority email support",
        ],
        backgroundGradient: "linear-gradient(180deg, #fff5ed 0%, #faf5ff 100%)",
        order: 3,
      },
      {
        name: "Enterprise",
        price: 79,
        description: "Built for large teams and custom needs",
        ctaText: "Get Started",
        ctaLink: "https://trezo-twcss.envytheme.com/",
        ctaClass:
          "text-orange-600 border-orange-600 hover:text-white hover:bg-orange-500 hover:border-orange-500",
        features: [
          "Everything in pro",
          "Unlimited team members",
          "Dedicated account manager",
          "Custom integrations",
          "Advanced security & audit logs",
          "24/7 priority support",
        ],
        backgroundGradient: "linear-gradient(180deg, #eef6ff 0%, #eeffe5 100%)",
        order: 2,
      },
    ];

    return {
      sectionTag,
      sectionTitle,
      sectionDescription,
      pricingPlans,
    };
  },
});
</script>
