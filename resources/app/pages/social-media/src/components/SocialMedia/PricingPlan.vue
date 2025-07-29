<template>
  <div
    class="bg-[#f7f7f7] dark:bg-[#0a0e19] py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px] text-center mx-auto md:max-w-[455px]"
      >
        <span
          class="inline-block rounded-[30px] bg-white dark:bg-dark text-purple-600 border border-purple-200 dark:border-gray-800 py-[3.5px] px-[13px] mb-[12px] md:mb-[15px]"
        >
          {{ pricingData.title }}
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-0"
        >
          {{ pricingData.subtitle }}
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          v-for="(plan, index) in pricingData.plans"
          :key="index"
          class="bg-white dark:bg-dark rounded-[15px] py-[25px] md:py-[35px] px-[20px] md:px-[25px]"
        >
          <div
            class="mb-[20px] md:mb-[25px] px-[5px] md:px-[10px] flex items-center justify-between"
          >
            <div>
              <h3
                class="!font-medium !text-md md:!text-lg !text-purple-600 !mb-[8px]"
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
            <img :src="plan.icon" alt="plan-icon" />
          </div>

          <!-- Plan Content -->
          <div
            class="bg-[#f7f7f7] dark:bg-[#0a0e19] rounded-[15px] p-[20px] md:p-[25px]"
          >
            <p class="md:text-[15px] lg:text-md">
              {{ plan.description }}
            </p>

            <!-- CTA Button -->
            <a
              :href="plan.ctaLink"
              class="group inline-block font-medium md:text-base rounded-[7px] bg-purple-500 text-white py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] relative z-[1] md:mt-[8px]"
              target="_blank"
            >
              {{ plan.ctaText }}
              <span
                class="absolute top-0 left-0 w-full h-full -z-[1] rounded-[7px] transition-all group-hover:opacity-0"
                :style="gradientStyle"
              ></span>
            </a>

            <!-- Features List -->
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
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import checkIcon from "@/assets/images/social-media/icons/check.svg";
import meshGrad1 from "@/assets/images/social-media/icons/mesh-grad1.png";
import meshGrad2 from "@/assets/images/social-media/icons/mesh-grad2.png";
import meshGrad3 from "@/assets/images/social-media/icons/mesh-grad3.png";

interface PricingPlan {
  name: string;
  price: string;
  description: string;
  features: string[];
  ctaText: string;
  ctaLink: string;
  icon: string;
}

interface PricingData {
  title: string;
  subtitle: string;
  plans: PricingPlan[];
}

export default defineComponent({
  name: "PricingPlan",
  setup() {
    const pricingData: PricingData = {
      title: "Pricing Plan",
      subtitle: "Transparent Pricing That Grows with Your Brand",
      plans: [
        {
          name: "Starter Plan",
          price: "$0",
          description:
            "Perfect for individuals and small teams starting out with social media",
          features: [
            "Connect up to 3 social profiles",
            "10 scheduled posts per profile/month",
            "Basic post analytics",
            "Single-user access",
            "Email support",
            "Limited media library access",
            "Access to Trezo mobile app",
          ],
          ctaText: "Get Started - It's Free",
          ctaLink: "https://trezo-twcss.envytheme.com/",
          icon: meshGrad1,
        },
        {
          name: "Pro Plan",
          price: "$29",
          description:
            "Ideal for growing brands and content creators who need flexibility",
          features: [
            "Connect up to 10 social profiles",
            "Unlimited scheduled posts",
            "Real-time analytics dashboard",
            "Team collaboration (up to 5 users)",
            "AI-powered content suggestions",
            "Priority email & chat support",
            "Custom post templates",
          ],
          ctaText: "Get Started - It's Free",
          ctaLink: "https://trezo-twcss.envytheme.com/",
          icon: meshGrad2,
        },
        {
          name: "Enterprise Plan",
          price: "$49",
          description:
            "Designed for agencies, enterprises, and large teams with advanced needs",
          features: [
            "Unlimited social profiles",
            "Unlimited scheduling & posting",
            "Dedicated account manager",
            "White-label dashboard options",
            "Team roles & permissions",
            "Deep analytics + export reports",
            "24/7 premium support",
          ],
          ctaText: "Get Started - It's Free",
          ctaLink: "https://trezo-twcss.envytheme.com/",
          icon: meshGrad3,
        },
      ],
    };

    const gradientStyle = {
      background: "linear-gradient(180deg, #bf85fb 0%, #9135e8 100%)",
    };

    return {
      pricingData,
      checkIcon,
      gradientStyle,
    };
  },
});
</script>
