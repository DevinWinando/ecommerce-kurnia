<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-[25px] items-center"
    >
      <!-- Header Section -->
      <div
        class="mb-[5px] md:mb-[15px] lg:mb-[25px] xl:mb-0 text-center ltr:xl:text-left rtl:xl:text-right md:mx-auto xl:mx-0 md:max-w-[455px] md:col-span-2 lg:col-span-2 xl:col-span-1"
      >
        <span
          class="inline-block rounded-[30px] text-[#e36925] border border-[#e36925] py-[3.5px] px-[14px] mb-[12px] md:mb-[15px]"
        >
          {{ pricingData.tagline }}
        </span>
        <h2
          class="md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px] md:!mb-[16px]"
        >
          {{ pricingData.title }}
        </h2>
        <p
          class="md:text-[15px] lg:text-md md:max-w-[360px] md:mx-auto xl:mx-0"
        >
          {{ pricingData.description }}
        </p>
      </div>

      <div
        v-for="(plan, index) in pricingData.plans"
        :key="index"
        class="relative rounded-[15px] bg-[#f7f7f7] dark:bg-[#0a0e19] py-[25px] md:py-[35px] lg:py-[40px] px-[20px] md:px-[30px] lg:px-[35px] hover:shadow-lg transition-shadow"
      >
        <span
          v-if="plan.isPopular"
          class="inline-block rounded-[30px] text-white py-[4.5px] px-[15px] absolute top-[21px] md:top-[31px] lg:top-[38px] ltr:right-[20px] rtl:left-[20px] ltr:md:right-[30px] rtl:md:left-[30px] ltr:lg:right-[35px] rtl:lg:left-[35px]"
          style="
            background: linear-gradient(88deg, #ff4747 0.97%, #d800b9 91.99%);
          "
        >
          Most Popular
        </span>

        <h3
          class="!font-semibold !text-md md:!text-lg lg:!text-[20px] !mb-[20px] md:!mb-[25px] lg:!mb-[30px]"
        >
          {{ plan.name }}
        </h3>

        <div
          class="bg-white dark:bg-dark p-[20px] md:p-[25px] lg:p-[30px] rounded-[10px]"
        >
          <p>{{ plan.description }}</p>

          <div
            class="border-b border-gray-100 dark:border-gray-800 pb-[2px] text-black dark:text-white font-bold text-3xl md:text-4xl lg:mt-[22px] md:-tracking-[1px]"
          >
            ${{ plan.price }}
            <span
              class="ltr:-ml-[4px] rtl:-mr-[4px] text-base tracking-normal font-normal text-gray-500 dark:text-gray-400 relative bottom-[2px]"
            >
              /month
            </span>
          </div>

          <ul class="my-[20px] md:my-[25px] lg:my-[30px]">
            <li
              v-for="(feature, featureIndex) in plan.features"
              :key="featureIndex"
              class="relative lg:text-[15px] xl:text-md ltr:pl-[33px] rtl:pr-[33px] mb-[15px] last:mb-0"
            >
              <i
                class="ri-checkbox-circle-fill text-danger-400 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-[25px]"
              ></i>
              {{ feature }}
            </li>
          </ul>

          <a
            :href="plan.ctaLink"
            class="text-center block font-medium md:text-base rounded-[7px] bg-[#275b96] text-white py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] transition-all hover:bg-orange-500"
            target="_blank"
          >
            {{ plan.ctaText }}
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

interface PricingPlan {
  name: string;
  description: string;
  price: number;
  features: string[];
  ctaLink: string;
  ctaText: string;
  isPopular?: boolean;
}

interface PricingData {
  tagline: string;
  title: string;
  description: string;
  plans: PricingPlan[];
}

export default defineComponent({
  name: "Pricing",
  setup() {
    const pricingData: PricingData = {
      tagline: "Pricing Plans",
      title: "Flexible Pricing for Every Shipment Size",
      description:
        "From first mile to last, Trezo keeps your operations moving smoothly.",
      plans: [
        {
          name: "Starter Plan",
          description: "For growing logistics teams just getting started.",
          price: 10,
          features: [
            "Basic tracking",
            "1 Fleet Integration",
            "SMS Alerts (limited)",
            "Email Support",
          ],
          ctaLink: "https://trezo-twcss.envytheme.com/",
          ctaText: "Get Started Free",
        },
        {
          name: "Pro Plan",
          description:
            "Ideal for scaling operations with advanced tracking and analytics.",
          price: 39,
          features: [
            "Unlimited orders",
            "Advanced fleet tracking",
            "Branded customer portals",
            "Priority Support",
          ],
          ctaLink: "https://trezo-twcss.envytheme.com/",
          ctaText: "Get Started Free",
          isPopular: true,
        },
      ],
    };

    return {
      pricingData,
    };
  },
});
</script>
