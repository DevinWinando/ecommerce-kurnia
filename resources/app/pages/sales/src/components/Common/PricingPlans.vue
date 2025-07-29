<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] items-center"
    >
      <!-- Pricing Header -->
      <div class="mb-[5px] md:mb-[15px] lg:mb-0 md:col-span-2 lg:col-span-1">
        <span
          class="inline-block font-medium text-[#7a857d] rounded-[30px] border border-[#ebebe0] dark:border-gray-800 py-[5.5px] px-[18px] mb-[12px] md:mb-[15px]"
        >
          Pricing Plans
        </span>
        <h2
          class="!text-[#06201B] dark:!text-white md:-tracking-[1px] !font-medium !text-2xl md:!text-3xl lg:!text-4xl !leading-[1.2] !mb-[10px] md:!mb-[15px]"
        >
          Choose a Plan That Grows With You
        </h2>
        <p class="md:text-[15px] lg:text-md text-[#7a857d]">
          No contracts, no hidden fees. Just value.
        </p>
        <a
          href="https://trezo-twcss.envytheme.com/"
          class="inline-block font-medium md:text-base rounded-[7px] bg-lime-500 text-black py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all hover:bg-lime-600 mt-[5px] md:mt-[15px] lg:mt-[45px] xl:mt-[55px]"
          target="_blank"
        >
          Get Your Free 14-Day Trial
        </a>
      </div>

      <!-- Pricing Cards -->
      <PricingCard
        v-for="(plan, index) in pricingPlans"
        :key="index"
        :plan="plan"
        :class="{
          'bg-[#ebebe0] dark:bg-[#0a0e19]': plan.type === 'pro',
          'bg-[#06201b]': plan.type === 'enterprise',
        }"
      />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import PricingCard from "./PricingCard.vue"; // You'll need to create this component

interface PricingFeature {
  text: string;
}

interface PricingPlan {
  type: string;
  title: string;
  price: string;
  period: string;
  description: string;
  buttonText: string;
  buttonClass: string;
  features: PricingFeature[];
  textColor: string;
  checkIconClass: string;
}

export default defineComponent({
  name: "PricingPlans",
  components: {
    PricingCard,
  },
  data() {
    return {
      pricingPlans: [
        {
          type: "pro",
          title: "Pro Plan",
          price: "$39",
          period: "/monthly",
          description: "Growing sales teams needing automation and insights",
          buttonText: "Get Started",
          buttonClass:
            "bg-[#06201b] text-white hover:bg-lime-500 hover:text-black",
          features: [
            { text: "Up to 10 user seats" },
            { text: "Advanced sales dashboard" },
            { text: "Pipeline & deal tracking" },
            { text: "Email + chat support" },
            { text: "10,000 contact storage" },
            { text: "Smart automation workflows" },
            { text: "Reporting & goal tracking" },
          ],
          textColor: "text-[#06201B] dark:text-white",
          checkIconClass: "dark:invert",
        },
        {
          type: "enterprise",
          title: "Enterprise Plan",
          price: "$79",
          period: "/monthly",
          description: "Growing sales teams needing automation and insights",
          buttonText: "Get Started",
          buttonClass: "bg-lime-500 text-black hover:bg-lime-600",
          features: [
            { text: "Unlimited users" },
            { text: "Custom pipelines & dashboards" },
            { text: "AI-powered lead scoring" },
            { text: "Role-based permissions" },
            { text: "SLA monitoring & alerts" },
            { text: "Priority support & onboarding" },
            { text: "Dedicated success manager" },
            { text: "CRM & ERP integrations" },
          ],
          textColor: "text-[#ebebe0]",
          checkIconClass: "invert",
        },
      ],
    };
  },
});
</script>
