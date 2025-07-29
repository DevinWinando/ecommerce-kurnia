<template>
  <div
    class="dark:bg-[#0a0e19] py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px] relative z-[1]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px] text-center mx-auto md:max-w-[455px]"
      >
        <span
          class="inline-block rounded-[30px] bg-primary-500 text-white py-[4.5px] px-[14px] mb-[12px] md:mb-[15px]"
        >
          {{ pricingData.title }}
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px]"
        >
          {{ pricingData.headline }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ pricingData.subhead }}
        </p>
      </div>
      <div class="trezo-tabs" id="trezo-tabs">
        <ul
          class="navs pricing-tabs text-center mb-[30px] md:mb-[35px] lg:mb-[40px]"
        >
          <li
            v-for="(tab, index) in pricingData.tabs"
            :key="index"
            class="nav-item inline-block mx-[39px]"
          >
            <button
              type="button"
              :data-tab="'tab' + (index + 1)"
              :class="[
                'nav-link block transition-all relative md:text-[15px] lg:text-md',
                { active: activeTab === index },
              ]"
              @click="activeTab = index"
            >
              {{ tab.label }}
              <span
                v-if="tab.discount"
                class="inline-block bg-orange-50 dark:bg-gray-900 text-xs md:text-base rounded-[4px] text-orange-600 py-[2px] px-[9px] ltr:ml-[5px] rtl:mr-[5px]"
              >
                {{ tab.discount }}
              </span>
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div
            v-for="(tab, index) in pricingData.tabs"
            :key="'tab' + index"
            :class="['tab-pane', { active: activeTab === index }]"
            :id="'tab' + (index + 1)"
          >
            <div
              class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] items-center"
            >
              <div
                v-for="(plan, planIndex) in tab.plans"
                :key="'plan-' + index + '-' + planIndex"
                :class="[
                  'relative rounded-[15px] px-[20px] py-[25px] md:px-[25px] md:py-[30px] lg:px-[30px] lg:py-[35px] xl:px-[55px] xl:py-[55px]',
                  plan.featured ? 'bg-primary-500' : 'bg-white dark:bg-dark',
                ]"
              >
                <h3
                  :class="[
                    '!font-medium !text-md md:!text-lg lg:!text-[20px] !mb-[7px]',
                    plan.featured ? '!text-white' : '',
                  ]"
                >
                  {{ plan.name }}
                </h3>
                <p :class="plan.featured ? 'text-gray-50' : ''">
                  {{ plan.description }}
                </p>
                <div
                  :class="[
                    'font-medium text-3xl md:text-4xl lg:mt-[22px] md:-tracking-[1px]',
                    plan.featured ? 'text-white' : 'text-primary-500',
                  ]"
                >
                  {{ plan.price }}
                  <span
                    :class="[
                      'ltr:-ml-[4px] rtl:-mr-[4px] text-base tracking-normal font-normal relative bottom-[2px]',
                      plan.featured
                        ? 'text-gray-50'
                        : 'text-gray-500 dark:text-gray-400',
                    ]"
                  >
                    /{{ tab.period }}
                  </span>
                </div>
                <span
                  :class="[
                    'block md:text-[15px] lg:text-md mt-[12px] md:mt-[18px] lg:mt-[32px] border-b pb-[3px] mb-[20px] md:mb-[25px]',
                    plan.featured
                      ? 'text-white border-gray-200'
                      : 'text-gray-900 dark:text-white border-gray-200 dark:border-gray-900',
                  ]"
                >
                  Features:
                </span>
                <ul>
                  <li
                    v-for="(feature, featureIndex) in plan.features"
                    :key="
                      'feature-' + index + '-' + planIndex + '-' + featureIndex
                    "
                    :class="[
                      'relative lg:text-[15px] xl:text-md ltr:pl-[33px] rtl:pr-[33px] mb-[15px] last:mb-0',
                      plan.featured ? 'text-gray-50' : '',
                    ]"
                  >
                    <i
                      :class="[
                        'ri-checkbox-circle-fill absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-[25px]',
                        plan.featured ? 'text-gray-100' : 'text-[#00ba00]',
                      ]"
                    ></i>
                    {{ feature }}
                  </li>
                </ul>
                <a
                  href="#"
                  :class="[
                    'block w-full text-center font-medium md:text-base rounded-[7px] py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all mt-[20px] md:mt-[30px] xl:mt-[45px]',
                    plan.featured
                      ? 'bg-white text-primary-500 hover:bg-primary-600 hover:text-white'
                      : 'bg-primary-500 text-white hover:bg-primary-600',
                  ]"
                >
                  {{ plan.cta }}
                </a>
                <span
                  v-if="plan.badge"
                  class="inline-block text-white absolute top-[15px] ltr:right-[10px] rtl:left-[10px] md:top-[25px] ltr:md:right-[20px] rtl:md:left-[20px] border border-gray-200 rounded-[30px] py-[3.5px] px-[13px] ltr:-rotate-[9.31deg] rtl:rotate-[9.31deg]"
                  style="
                    background: linear-gradient(
                      88deg,
                      #ff4747 0.97%,
                      #d800b9 91.99%
                    );
                  "
                >
                  {{ plan.badge }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="absolute top-0 left-0 right-0 bottom-0 lg:rounded-[30px] -z-[1] bg-center bg-no-repeat bg-cover lg:mx-[15px] xl:mx-[30px] dark:hidden"
      :style="'background-image: url(' + pricingData.backgroundImage + ')'"
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

import bgImage from "@/assets/images/saas/pricing-bg.jpg";

export default defineComponent({
  name: "Pricing",
  setup() {
    const activeTab = ref(0);

    const pricingData = ref({
      title: "Pricing Plans",
      headline: "Flexible Plans that Grow With You",
      subhead: "Start small or scale big — we have a plan for every team.",
      backgroundImage: bgImage,
      tabs: [
        {
          label: "Monthly",
          period: "month",
          plans: [
            {
              name: "Starter Plan",
              description:
                "Perfect for individuals and small teams starting out.",
              price: "Free",
              features: [
                "Access to core features",
                "1 Workspace",
                "Up to 3 team members",
                "Basic dashboard & reporting",
                "Email support",
                "10GB storage",
                "Community access",
              ],
              cta: "Start Your Free Trial",
              featured: false,
            },
            {
              name: "Pro Plan",
              description:
                "Best for growing teams needing more power and flexibility.",
              price: "$29",
              features: [
                "Everything in Starter, plus",
                "Unlimited workspaces",
                "Up to 50 team members",
                "Advanced dashboard analytics",
                "Automations and workflows",
                "Priority email & chat support",
                "100GB storage",
                "API Access & Integrations",
              ],
              cta: "Start Your Free Trial",
              featured: true,
              badge: "Super Saver",
            },
            {
              name: "Enterprise Plan",
              description: "Built for large institutions with advanced.",
              price: "$89",
              features: [
                "Everything in Pro",
                "Unlimited team members",
                "Custom integrations",
                "Dedicated account manager",
                "Advanced security & compliance",
                "SLA + 99.9% uptime guarantee",
                "Onboarding and training sessions",
              ],
              cta: "Start Your Free Trial",
              featured: false,
            },
          ],
        },
        {
          label: "Annually",
          period: "year",
          discount: "20% Off",
          plans: [
            {
              name: "Starter Plan",
              description:
                "Perfect for individuals and small teams starting out.",
              price: "$19",
              features: [
                "Access to core features",
                "1 Workspace",
                "Up to 3 team members",
                "Basic dashboard & reporting",
                "Email support",
                "10GB storage",
                "Community access",
              ],
              cta: "Start Your Free Trial",
              featured: false,
            },
            {
              name: "Pro Plan",
              description:
                "Best for growing teams needing more power and flexibility.",
              price: "$129",
              features: [
                "Everything in Starter, plus",
                "Unlimited workspaces",
                "Up to 50 team members",
                "Advanced dashboard analytics",
                "Automations and workflows",
                "Priority email & chat support",
                "100GB storage",
                "API Access & Integrations",
              ],
              cta: "Start Your Free Trial",
              featured: true,
              badge: "Super Saver",
            },
            {
              name: "Enterprise Plan",
              description: "Built for large institutions with advanced.",
              price: "$189",
              features: [
                "Everything in Pro",
                "Unlimited team members",
                "Custom integrations",
                "Dedicated account manager",
                "Advanced security & compliance",
                "SLA + 99.9% uptime guarantee",
                "Onboarding and training sessions",
              ],
              cta: "Start Your Free Trial",
              featured: false,
            },
          ],
        },
      ],
    });

    return {
      activeTab,
      pricingData,
    };
  },
});
</script>
