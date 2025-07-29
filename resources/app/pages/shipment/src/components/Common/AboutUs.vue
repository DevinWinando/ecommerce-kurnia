<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div class="text-center">
          <img
            :src="cargoContainerImage"
            class="inline-block"
            alt="cargo-container-image"
          />
        </div>
        <div class="ltr:xl:pl-[100px] rtl:xl:pr-[100px]">
          <span
            class="inline-block rounded-[30px] text-[#e36925] border border-[#e36925] py-[3.5px] px-[14px] mb-[12px] md:mb-[15px]"
          >
            {{ aboutData.tagline }}
          </span>
          <h2
            class="md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px] md:!mb-[15px]"
          >
            {{ aboutData.title }}
          </h2>
          <p class="md:text-[15px] lg:text-md xl:max-w-[415px]">
            {{ aboutData.description }}
          </p>
          <div class="mt-[22px] md:mt-[40px] xl:max-w-[480px]">
            <div
              v-for="(feature, index) in aboutData.features"
              :key="index"
              class="bg-[#f7f7f7] dark:bg-[#0a0e19] mb-[20px] md:mb-0 rounded-[7px] p-[15px] md:p-[20px] flex items-center gap-[15px] md:gap-[18px] relative transition-all hover:rotate-0"
              :class="[
                index % 2 === 0
                  ? 'ltr:md:ml-[30px] rtl:md:mr-[30px] md:-rotate-[3.688deg]'
                  : 'md:rotate-[2.026deg]',
                index === 2 ? 'md:-rotate-[5.358deg] z-[1]' : '',
                index === 3 ? 'md:rotate-[2.026deg]' : '',
              ]"
              :style="{
                boxShadow:
                  '0px 10px 3px 0px rgba(176, 176, 176, 0), 0px 6px 3px 0px rgba(176, 176, 176, 0.03), 0px 4px 2px 0px rgba(176, 176, 176, 0.12), 0px 2px 2px 0px rgba(176, 176, 176, 0.2), 0px 0px 1px 0px rgba(176, 176, 176, 0.23)',
              }"
            >
              <div
                class="flex-none flex items-center justify-center w-[80px] md:w-[95px] h-[74px] rounded-[7px]"
                :class="feature.colorClass"
              >
                <img
                  :src="feature.icon"
                  :alt="feature.title.toLowerCase().replace(' ', '-')"
                />
              </div>

              <div>
                <h3 class="!font-semibold !text-md md:!text-lg !mb-[8px]">
                  {{ feature.title }}
                </h3>
                <p>{{ feature.description }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import cargoContainerImage from "@/assets/images/shipment/cargo-container.png";

import icon1 from "@/assets/images/shipment/icons/real-time-tracking.svg";
import icon2 from "@/assets/images/shipment/icons/file-management.svg";
import icon3 from "@/assets/images/shipment/icons/alarm-bell.svg";
import icon4 from "@/assets/images/shipment/icons/customer-satisfaction.svg";

interface Feature {
  title: string;
  description: string;
  icon: string;
  colorClass: string;
}

interface AboutData {
  tagline: string;
  title: string;
  description: string;
  features: Feature[];
}

export default defineComponent({
  name: "AboutUs",
  setup() {
    const aboutData: AboutData = {
      tagline: "About Trezo",
      title: "Shipping Management Made Simple",
      description:
        "From first mile to last, Trezo keeps your operations moving smoothly.",
      features: [
        {
          title: "Live Tracking",
          description: "Always know where your shipments are.",
          icon: icon1,
          colorClass: "bg-[#CDEFFF]",
        },
        {
          title: "Centralized Management",
          description: "Orders, drivers, customers — all in one place.",
          icon: icon2,
          colorClass: "bg-[#FFCFE0]",
        },
        {
          title: "Automated Alerts",
          description: "Real-time updates to reduce delays and confusion.",
          icon: icon3,
          colorClass: "bg-[#FFE966]",
        },
        {
          title: "Customer Satisfaction",
          description: "Transparent delivery experience boosts brand loyalty.",
          icon: icon4,
          colorClass: "bg-[#88FFFE]",
        },
      ],
    };

    return {
      aboutData,
      cargoContainerImage,
    };
  },
});
</script>
