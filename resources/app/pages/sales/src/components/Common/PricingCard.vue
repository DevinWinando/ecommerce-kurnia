<template>
  <div
    class="px-[20px] py-[25px] md:px-[35px] md:py-[45px] xl:px-[55px] xl:py-[55px] rounded-[20px] md:rounded-[35px]"
  >
    <span
      :class="`block ${plan.textColor} font-medium text-md lg:text-lg mb-[10px] md:mb-[17px]`"
    >
      {{ plan.title }}
    </span>
    <div
      :class="`${plan.textColor} font-medium text-4xl md:text-5xl mb-[15px] md:mb-[18px]`"
    >
      {{ plan.price }}
      <span
        :class="`ltr:-ml-[8px] rtl:-mr-[8px] text-base md:text-[15px] font-normal lg:text-md ${
          plan.textColor.replace('text-', 'text-opacity-70 ') ||
          'text-[#7a857d]'
        }`"
      >
        {{ plan.period }}
      </span>
    </div>
    <p
      :class="{
        'md:text-[15px] lg:text-md': true,
        'text-[#7a857d] dark:text-white': plan.type === 'pro',
        'text-[#ebebe0]': plan.type === 'enterprise',
        'text-opacity-70': plan.type === 'enterprise',
      }"
    >
      {{ plan.description }}
    </p>
    <a
      href="https://trezo-twcss.envytheme.com/"
      target="_blank"
      :class="`inline-block font-medium md:text-base rounded-[7px] ${plan.buttonClass} py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all md:mt-[5px] lg:mt-[10px]`"
    >
      {{ plan.buttonText }}
    </a>
    <ul class="mt-[20px] md:mt-[25px] lg:mt-[35px]">
      <li
        v-for="(feature, index) in plan.features"
        :key="index"
        :class="`${plan.textColor} md:text-[15px] lg:text-md relative ltr:pl-[32px] rtl:pr-[32px] mb-[12px] md:mb-[15px] last:mb-0`"
      >
        <img
          src="@/assets/images/sales/icons/check.svg"
          :class="`absolute top-1/2 ltr:left-0 rtl:right-0 -translate-y-1/2 ${plan.checkIconClass}`"
          alt="check"
        />
        {{ feature.text }}
      </li>
    </ul>
  </div>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";

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
  name: "PricingCard",
  props: {
    plan: {
      type: Object as PropType<PricingPlan>,
      required: true,
    },
  },
});
</script>
