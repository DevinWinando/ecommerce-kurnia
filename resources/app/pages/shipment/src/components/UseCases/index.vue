<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px] relative z-[1] overflow-hidden"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] text-center mx-auto md:max-w-[455px]"
      >
        <span
          class="inline-block rounded-[30px] text-[#e36925] border border-[#e36925] py-[3.5px] px-[14px] mb-[12px] md:mb-[15px]"
        >
          {{ useCasesData.tagline }}
        </span>
        <h2
          class="md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px] md:!mb-[15px]"
        >
          {{ useCasesData.title }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ useCasesData.description }}
        </p>
      </div>

      <div
        class="lg:max-w-[1087px] mx-auto flex flex-wrap justify-center gap-[15px]"
      >
        <div
          v-for="(useCase, index) in useCasesData.useCases"
          :key="index"
          class="flex items-center bg-[#f7f7f7] dark:bg-[#0a0e19] rounded-[100px] text-base md:text-md lg:text-lg text-black dark:text-white font-semibold gap-[10px] md:gap-[15px] lg:gap-[20px] py-[15px] ltr:pl-[15px] rtl:pr-[15px] ltr:pr-[15px] rtl:pl-[15px] ltr:lg:pr-[35px] rtl:lg:pl-[35px] shadow-custom dark:shadow-[none] hover:scale-[1.02] transition-transform"
        >
          <div
            class="w-[56px] h-[56px] rounded-full bg-white dark:bg-white/10 flex items-center justify-center"
          >
            <img
              :src="useCase.icon"
              :alt="useCase.name + ' icon'"
              class="w-[34px] h-[34px]"
            />
          </div>
          {{ useCase.name }}
        </div>
      </div>
    </div>

    <div
      class="absolute top-1/2 -translate-y-1/2 left-0 right-0 -z-[1] text-center dark:opacity-10"
    >
      <img
        src="@/assets/images/shipment/map.png"
        class="inline-block"
        alt="map background"
      />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import icon1 from "@/assets/images/shipment/icons/truck.svg";
import icon2 from "@/assets/images/shipment/icons/cart.svg";
import icon3 from "@/assets/images/shipment/icons/building.svg";
import icon4 from "@/assets/images/shipment/icons/store.svg";
import icon5 from "@/assets/images/shipment/icons/food.svg";
import icon6 from "@/assets/images/shipment/icons/ambulance.svg";

interface UseCase {
  name: string;
  icon: string;
}

interface UseCasesData {
  tagline: string;
  title: string;
  description: string;
  useCases: UseCase[];
}

export default defineComponent({
  name: "UseCases",
  setup() {
    const useCasesData: UseCasesData = {
      tagline: "Use Cases",
      title: "Who Trezo Shipment Helps",
      description:
        "From small courier teams to enterprise freight networks — discover how Trezo adapts to your shipping workflow.",
      useCases: [
        {
          name: "Courier Services",
          icon: icon1,
        },
        {
          name: "E-commerce Businesses",
          icon: icon2,
        },
        {
          name: "Warehousing Companies",
          icon: icon3,
        },
        {
          name: "Retailers with Delivery",
          icon: icon4,
        },
        {
          name: "Food & Beverage Logistics",
          icon: icon5,
        },
        {
          name: "Healthcare Delivery Services",
          icon: icon6,
        },
      ],
    };

    return {
      useCasesData,
    };
  },
});
</script>
