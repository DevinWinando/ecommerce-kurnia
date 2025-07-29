<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] text-center mx-auto md:max-w-[455px]"
      >
        <span
          class="inline-block rounded-[30px] bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 py-[3.5px] px-[14px] mb-[12px] md:mb-[15px]"
        >
          Pricing Plans
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px]"
        >
          Flexible <span class="italic gradient-color">Pricing</span> for Every
          School
        </h2>
        <p class="md:text-[15px] lg:text-md">
          Choose the plan that fits your institution
        </p>
      </div>
      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] items-center"
      >
        <div
          v-for="(plan, index) in pricingPlans"
          :key="index"
          :class="[
            'relative z-[1] rounded-[15px] px-[20px] py-[25px] md:px-[25px] md:py-[30px] lg:px-[30px] lg:py-[35px] xl:px-[55px] xl:py-[55px]',
            plan.isFeatured ? 'bg-primary-500' : 'dark:bg-[#0a0e19]',
          ]"
        >
          <h3
            :class="[
              '!font-medium !text-md md:!text-lg lg:!text-[20px] !mb-[7px]',
              plan.isFeatured ? '!text-white' : '',
            ]"
          >
            {{ plan.name }}
          </h3>
          <p :class="plan.isFeatured ? 'text-gray-50' : ''">
            {{ plan.description }}
          </p>
          <div
            :class="[
              'font-medium text-3xl md:text-4xl lg:mt-[22px] md:-tracking-[1px]',
              plan.isFeatured ? 'text-white' : 'text-primary-500',
            ]"
          >
            ${{ plan.price }}
            <span
              :class="[
                'ltr:-ml-[4px] rtl:-mr-[4px] text-base tracking-normal font-normal relative bottom-[2px]',
                plan.isFeatured
                  ? 'text-gray-50'
                  : 'text-gray-500 dark:text-gray-400',
              ]"
            >
              /month
            </span>
          </div>
          <span
            :class="[
              'block md:text-[15px] lg:text-md mt-[12px] md:mt-[18px] lg:mt-[32px] border-b pb-[3px] mb-[20px] md:mb-[25px]',
              plan.isFeatured
                ? 'text-white border-gray-200'
                : 'text-gray-900 dark:text-white border-gray-200 dark:border-gray-900',
            ]"
          >
            Includes:
          </span>
          <ul>
            <li
              v-for="(feature, featureIndex) in plan.features"
              :key="featureIndex"
              :class="[
                'relative lg:text-[15px] xl:text-md ltr:pl-[33px] rtl:pr-[33px] mb-[15px] last:mb-0',
                plan.isFeatured ? 'text-gray-50' : '',
              ]"
            >
              <i
                :class="[
                  'ri-checkbox-circle-fill absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-[25px]',
                  plan.isFeatured ? 'text-gray-100' : 'text-[#00ba00]',
                ]"
              ></i>
              {{ feature }}
            </li>
          </ul>
          <a
            href="https://trezo-twcss.envytheme.com/"
            :class="[
              'block w-full text-center font-medium md:text-base rounded-[7px] py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all mt-[20px] md:mt-[30px] xl:mt-[45px]',
              plan.isFeatured
                ? 'bg-white text-primary-500 hover:bg-primary-600 hover:text-white'
                : 'bg-primary-500 text-white hover:bg-primary-600',
            ]"
            target="_blank"
          >
            Start Your Free Trial
          </a>

          <span
            v-if="plan.isFeatured"
            class="inline-block text-white absolute top-[15px] ltr:right-[10px] rtl:left-[10px] md:top-[25px] ltr:md:right-[20px] rtl:md:left-[20px] border border-gray-200 rounded-[30px] py-[3.5px] px-[13px] ltr:-rotate-[9.31deg] rtl:rotate-[9.31deg]"
            style="
              background: linear-gradient(88deg, #ff4747 0.97%, #d800b9 91.99%);
            "
          >
            Super Saver
          </span>

          <div
            v-if="!plan.isFeatured"
            class="absolute top-0 left-0 right-0 bottom-0 rounded-[15px] -z-[1] dark:hidden"
            :style="gradientBackground"
          ></div>
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
  isFeatured: boolean;
}

export default defineComponent({
  name: "Pricing",
  setup() {
    const pricingPlans: PricingPlan[] = [
      {
        name: "Starter Plan",
        description: "Perfect for small schools & single branches.",
        price: 49,
        features: [
          "Student & Staff Management",
          "Class Scheduling & Attendance",
          "Gradebook & Report Cards",
          "Parent Communication Tools",
          "Email Support",
          "Daily Backups",
          "Single Campus Support",
        ],
        isFeatured: false,
      },
      {
        name: "Pro Plan",
        description: "Ideal for growing schools ready to scale operations.",
        price: 129,
        features: [
          "Everything in Starter",
          "Multi-Campus Management",
          "Online Payment & Fee Tracking",
          "Role-Based Access Controls",
          "Performance Analytics Dashboard",
          "Live Chat Support",
          "Custom Branding Options",
          "API Access & Integrations",
        ],
        isFeatured: true,
      },
      {
        name: "Enterprise Plan",
        description: "Built for large institutions with advanced needs.",
        price: 249,
        features: [
          "Everything in Pro",
          "API Access & Integrations",
          "Dedicated Account Manager",
          "Advanced Security Controls",
          "Priority Support",
          "Staff Onboarding & Training",
          "Custom Module Development",
        ],
        isFeatured: false,
      },
    ];

    const gradientBackground = {
      background:
        "radial-gradient(57.11% 57.11% at 50% 50%, rgba(255, 255, 255, 0) 61.06%, #e4e9ff 100%), radial-gradient(37.42% 117.39% at 50% 50%, rgba(255, 255, 255, 0) 0%, #ecf0ff 100%)",
    };

    return {
      pricingPlans,
      gradientBackground,
    };
  },
});
</script>
