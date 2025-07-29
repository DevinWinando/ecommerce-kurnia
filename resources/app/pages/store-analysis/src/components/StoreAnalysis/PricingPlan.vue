<template>
  <div
    class="relative z-[1] dark:bg-[#0a0e19] py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px] text-center mx-auto md:max-w-[475px]"
      >
        <span
          class="inline-block rounded-[30px] text-white py-[6.5px] px-[19px] mb-[15px]"
          :style="headerBadgeStyle"
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

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          v-for="(plan, index) in plans"
          :key="index"
          class="relative z-[1] dark:bg-dark rounded-[15px] py-[25px] md:py-[35px] px-[20px] md:px-[25px]"
        >
          <div
            class="mb-[20px] md:mb-[25px] px-[5px] md:px-[10px] flex items-center justify-between"
          >
            <div>
              <h3
                class="!font-medium !text-md md:!text-lg !text-primary-500 !mb-[8px]"
              >
                {{ plan.name }}
              </h3>
              <div
                class="text-black dark:text-white font-medium text-3xl md:text-4xl lg:text-5xl md:-tracking-[1px]"
              >
                {{ plan.price }}
                <span
                  class="ltr:-ml-[4px] rtl:-mr-[4px] text-base tracking-normal font-normal text-gray-500 dark:text-gray-400 relative bottom-[2px]"
                >
                  /monthly
                </span>
              </div>
            </div>
            <img :src="plan.gradientImage" alt="mesh-grad" />
          </div>

          <div
            class="bg-white dark:bg-[#0a0e19] rounded-[15px] p-[20px] md:p-[25px]"
          >
            <p class="md:text-[15px] lg:text-md">{{ plan.subtitle }}</p>

            <a
              :href="plan.ctaLink"
              class="group inline-block font-medium md:text-base rounded-[30px] py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] relative z-[1] transition-all md:mt-[8px]"
              :class="plan.ctaClasses"
              target="_blank"
              :style="plan.ctaStyle"
            >
              {{ plan.ctaText }} -
              <span class="font-normal">{{ plan.ctaSubtext }}</span>
              <span
                class="m-px absolute top-0 left-0 right-0 bottom-0 -z-[1] rounded-[30px] transition-all bg-white dark:bg-[#0a0e19] group-hover:opacity-0"
                v-if="plan.name === 'Starter' || plan.name === 'Enterprise'"
              ></span>
              <span
                class="absolute top-0 left-0 w-full h-full -z-[1] rounded-[30px] transition-all group-hover:opacity-0"
                :style="plan.ctaHoverStyle"
                v-if="plan.name === 'Pro'"
              ></span>
            </a>

            <ul class="mt-[20px] md:mt-[25px] lg:mt-[30px] xl:mt-[35px]">
              <li
                v-for="(feature, featureIndex) in plan.features"
                :key="featureIndex"
                class="text-gray-700 dark:text-white md:text-[15px] xl:text-md relative ltr:pl-[32px] rtl:pr-[32px] mb-[13px] last:mb-0"
              >
                <img
                  :src="checkIcon"
                  class="w-[22px] inline-block absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 dark:invert"
                  alt="check"
                />
                {{ feature }}
              </li>
            </ul>
          </div>

          <div
            class="absolute rounded-[15px] top-0 left-0 w-full h-full bg-no-repeat bg-center bg-cover -z-[1] dark:hidden"
            :style="plan.backgroundStyle"
          ></div>
        </div>
      </div>
    </div>

    <div
      class="absolute top-0 left-0 w-full h-full bg-no-repeat bg-center bg-cover -z-[1] dark:hidden"
      :style="backgroundStyle"
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import checkIcon from "@/assets/images/store-analysis/icons/check.svg";
import meshGrad1 from "@/assets/images/store-analysis/icons/mesh-grad1.png";
import meshGrad2 from "@/assets/images/store-analysis/icons/mesh-grad2.png";
import meshGrad3 from "@/assets/images/store-analysis/icons/mesh-grad3.png";
import pricingBg from "@/assets/images/store-analysis/pricing-bg.jpg";

interface PricingPlan {
  name: string;
  price: string;
  subtitle: string;
  gradientImage: string;
  features: string[];
  ctaLink: string;
  ctaText: string;
  ctaSubtext: string;
  ctaClasses: string;
  ctaStyle: { background?: string };
  ctaHoverStyle: { background?: string };
  backgroundStyle: { background: string };
}

interface Header {
  badge: string;
  title: string;
  description: string;
}

export default defineComponent({
  name: "PricingPlan",
  setup() {
    const headerBadgeStyle = {
      background: "linear-gradient(180deg, #ffaa72 0%, #ee3e08 100%)",
    };

    const backgroundStyle = {
      backgroundImage: `url(${pricingBg})`,
    };

    const header: Header = {
      badge: "Pricing Plan",
      title: "Flexible Plans for Retail at Every Scale",
      description: "Choose the right analytics solution for your store",
    };

    const plans: PricingPlan[] = [
      {
        name: "Starter",
        price: "$0",
        subtitle: "Ideal for single store",
        gradientImage: meshGrad1,
        features: [
          "1 Store Dashboard",
          "Basic Metrics",
          "Daily Email Reports",
          "Community Support",
          "Email Support",
          "Access to Trezo Mobile App",
        ],
        ctaLink: "https://trezo-twcss.envytheme.com/",
        ctaText: "Get Started",
        ctaSubtext: "It's Free",
        ctaClasses: "text-primary-500 hover:text-white",
        ctaStyle: {
          background: "linear-gradient(180deg, #9caaff 0%, #4936f5 100%)",
        },
        ctaHoverStyle: {},
        backgroundStyle: {
          background: "linear-gradient(180deg, #faf5ff 0%, #d3f1ff 100%)",
        },
      },
      {
        name: "Pro",
        price: "$29",
        subtitle: "For growing businesses",
        gradientImage: meshGrad2,
        features: [
          "Up to 10 Stores",
          "Advanced Metrics",
          "Real-Time Dashboard",
          "Alert Notifications",
          "Email & Chat Support",
          "Custom Post Templates",
        ],
        ctaLink: "https://trezo-twcss.envytheme.com/",
        ctaText: "Get Started",
        ctaSubtext: "It's Free",
        ctaClasses: "bg-primary-500 text-white",
        ctaStyle: {},
        ctaHoverStyle: {
          background: "linear-gradient(180deg, #9caaff 0%, #4936f5 100%)",
        },
        backgroundStyle: {
          background: "linear-gradient(180deg, #faf5ff 0%, #d3f1ff 100%)",
        },
      },
      {
        name: "Enterprise",
        price: "$49",
        subtitle: "Tailored for scale",
        gradientImage: meshGrad3,
        features: [
          "Unlimited Stores",
          "Custom Integrations",
          "White-label Dashboard",
          "Dedicated Manager",
          "Onboarding & Training",
          "24/7 Premium Support",
        ],
        ctaLink: "https://trezo-twcss.envytheme.com/",
        ctaText: "Get Started",
        ctaSubtext: "It's Free",
        ctaClasses: "text-primary-500 hover:text-white",
        ctaStyle: {
          background: "linear-gradient(180deg, #9caaff 0%, #4936f5 100%)",
        },
        ctaHoverStyle: {},
        backgroundStyle: {
          background: "linear-gradient(180deg, #faf5ff 0%, #d3f1ff 100%)",
        },
      },
    ];

    return {
      headerBadgeStyle,
      backgroundStyle,
      header,
      plans,
      checkIcon,
    };
  },
});
</script>
