<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] items-center"
    >
      <!-- Header Section -->
      <div class="mb-[5px] md:mb-[15px] lg:mb-0 md:col-span-2 lg:col-span-1">
        <h2
          class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[10px] lg:!mb-[12px]"
        >
          {{ title }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ description }}
        </p>
      </div>

      <!-- Pricing Plans -->
      <div
        v-for="(plan, index) in plans"
        :key="index"
        class="dark:bg-[#0a0e19] px-[20px] py-[25px] md:px-[35px] md:py-[45px] xl:px-[55px] relative z-[1] rounded-[25px]"
        :class="{ 'xl:py-[65px]': index === 0, 'xl:py-[80px]': index === 1 }"
      >
        <!-- Plan Name -->
        <span
          class="block text-purple-600 font-medium text-md lg:text-lg mb-[10px] md:mb-[17px]"
        >
          {{ plan.name }}
        </span>

        <!-- Price -->
        <div
          class="text-gray-700 dark:text-gray-100 font-medium text-4xl md:text-5xl mb-[15px] md:mb-[18px]"
        >
          {{ plan.price }}
          <span
            class="ltr:-ml-[8px] rtl:-mr-[8px] text-base md:text-[15px] font-normal lg:text-md text-gray-500 dark:text-gray-400"
          >
            {{ plan.billingPeriod }}
          </span>
        </div>

        <!-- Description -->
        <p class="md:text-[15px] lg:text-md">
          {{ plan.description }}
        </p>

        <!-- CTA Button -->
        <a
          :href="plan.ctaLink"
          target="_blank"
          class="inline-block font-medium py-[9px] md:py-[10.5px] px-[25px] md:px-[30px] rounded-[100px] transition-all border md:mt-[5px] lg:mt-[10px]"
          :class="[
            plan.featured
              ? 'text-white bg-purple-600 border-purple-600 hover:bg-purple-500 hover:border-purple-500'
              : 'text-purple-600 border-purple-600 hover:text-white hover:bg-purple-500 hover:border-purple-500',
          ]"
        >
          {{ plan.ctaText }}
        </a>

        <!-- Features List -->
        <ul class="mt-[20px] md:mt-[25px] lg:mt-[35px]">
          <li
            v-for="(feature, featureIndex) in plan.features"
            :key="featureIndex"
            class="text-gray-700 dark:text-gray-100 md:text-[15px] lg:text-md relative ltr:pl-[32px] rtl:pr-[32px] mb-[12px] md:mb-[15px] last:mb-0"
          >
            <img
              src="@/assets/images/helpdesk/icons/check.svg"
              class="absolute top-1/2 ltr:left-0 rtl:right-0 -translate-y-1/2 dark:invert"
              alt="check"
            />
            {{ feature }}
          </li>
        </ul>

        <!-- Gradient Background (Light Mode Only) -->
        <div
          class="rounded-[25px] absolute top-0 left-0 right-0 bottom-0 -z-[1] dark:hidden"
          :style="`background: ${plan.gradient}`"
        ></div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

interface PricingPlan {
  name: string;
  price: string;
  billingPeriod: string;
  description: string;
  ctaText: string;
  ctaLink: string;
  features: string[];
  featured: boolean;
  gradient: string;
}

export default defineComponent({
  name: "Pricing",
  setup() {
    const title = "Flexible Plans That Grow With You";
    const description =
      "Choose the perfect plan for your team — whether you're just starting out or scaling fast.";

    const plans: PricingPlan[] = [
      {
        name: "Starter",
        price: "$0",
        billingPeriod: "/monthly",
        description: "Perfect for individuals or small teams exploring Trezo.",
        ctaText: "Get Started",
        ctaLink: "https://trezo-twcss.envytheme.com/",
        featured: false,
        features: [
          "1 Agent Seat",
          "Email Ticket Support",
          "Basic Reporting",
          "Knowledge Base Access",
          "Community Support",
        ],
        gradient: "linear-gradient(180deg, #faf5ff 0%, #eef6ff 100%)",
      },
      {
        name: "Pro",
        price: "$49",
        billingPeriod: "/monthly",
        description:
          "Ideal for growing teams that need automation and deeper insights.",
        ctaText: "Get Started",
        ctaLink: "https://trezo-twcss.envytheme.com/",
        featured: true,
        features: [
          "Up to 10 Agent Seats",
          "Multi-Channel Support",
          "Smart Ticket Routing",
          "SLA & Workflow Automation",
          "Advanced Reporting & Analytics",
          "Integrations with Slack, CRM, etc.",
          "Priority email support",
        ],
        gradient: "linear-gradient(180deg, #fff5ed 0%, #faf5ff 100%)",
      },
    ];

    return {
      title,
      description,
      plans,
    };
  },
});
</script>
