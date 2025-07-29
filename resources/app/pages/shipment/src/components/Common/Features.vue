<template>
  <div class="xl:max-w-[1680px] mx-auto">
    <div
      class="bg-[#f7f7f7] dark:bg-[#0a0e19] py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px] relative z-[1] xl:rounded-[35px]"
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
            {{ features.tagline }}
          </span>
          <h2
            class="md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px] md:!mb-[15px]"
          >
            {{ features.title }}
          </h2>
          <p class="md:text-[15px] lg:text-md">
            {{ features.description }}
          </p>
        </div>

        <div class="relative z-[1]">
          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-[25px]"
          >
            <div>
              <div
                v-for="(feature, index) in features.leftColumn"
                :key="'left-' + index"
                class="bg-white dark:bg-dark rounded-[7px] p-[15px] md:p-[20px] flex items-center gap-[15px] md:gap-[18px] mb-[25px] lg:mb-[70px] xl:mb-[100px] last:mb-0 relative lg:max-w-[412px]"
                :class="{
                  'ltr:lg:left-[40px] rtl:lg:right-[40px] ltr:xl:left-[90px] rtl:xl:right-[90px]':
                    index % 2 === 0,
                }"
                style="
                  box-shadow: 0px 10px 3px 0px rgba(176, 176, 176, 0),
                    0px 6px 3px 0px rgba(176, 176, 176, 0.03),
                    0px 4px 2px 0px rgba(176, 176, 176, 0.12),
                    0px 2px 2px 0px rgba(176, 176, 176, 0.2),
                    0px 0px 1px 0px rgba(176, 176, 176, 0.23);
                "
              >
                <div
                  class="flex-none bg-[#f7f7f7] dark:bg-[#0a0e19] flex items-center justify-center w-[80px] lg:w-[100px] h-[100px] rounded-[7px]"
                >
                  <img
                    :src="feature.icon"
                    :alt="feature.title.toLowerCase().replace(' ', '-')"
                  />
                </div>
                <div>
                  <h3
                    class="!font-semibold !text-md md:!text-lg lg:!text-[20px] !mb-[9px]"
                  >
                    {{ feature.title }}
                  </h3>
                  <p>{{ feature.description }}</p>
                </div>
              </div>
            </div>

            <div>
              <div
                v-for="(feature, index) in features.rightColumn"
                :key="'right-' + index"
                class="bg-white dark:bg-dark rounded-[7px] p-[15px] md:p-[20px] flex items-center justify-end gap-[15px] md:gap-[18px] mb-[25px] lg:mb-[70px] xl:mb-[100px] last:mb-0 relative lg:max-w-[412px] ltr:ml-auto rtl:mr-auto"
                :class="{
                  'ltr:lg:right-[40px] rtl:lg:left-[40px] ltr:xl:right-[90px] rtl:xl:left-[90px]':
                    index % 2 === 0,
                }"
                style="
                  box-shadow: 0px 10px 3px 0px rgba(176, 176, 176, 0),
                    0px 6px 3px 0px rgba(176, 176, 176, 0.03),
                    0px 4px 2px 0px rgba(176, 176, 176, 0.12),
                    0px 2px 2px 0px rgba(176, 176, 176, 0.2),
                    0px 0px 1px 0px rgba(176, 176, 176, 0.23);
                "
              >
                <div class="ltr:text-right rtl:text-left">
                  <h3
                    class="!font-semibold !text-md md:!text-lg lg:!text-[20px] !mb-[9px]"
                  >
                    {{ feature.title }}
                  </h3>
                  <p>{{ feature.description }}</p>
                </div>
                <div
                  class="flex-none bg-[#f7f7f7] dark:bg-[#0a0e19] flex items-center justify-center w-[80px] lg:w-[100px] h-[100px] rounded-[7px]"
                >
                  <img
                    :src="feature.icon"
                    :alt="feature.title.toLowerCase().replace(' ', '-')"
                  />
                </div>
              </div>
            </div>
          </div>

          <!-- Center Image -->
          <div
            class="lg:absolute lg:left-0 lg:right-0 lg:top-1/2 lg:-translate-y-1/2 lg:-z-[1] mt-[25px] lg:mt-0"
          >
            <img
              :src="centerImage"
              class="inline-block"
              alt="air-cargo-image"
            />
          </div>
        </div>
      </div>

      <!-- Background Shape -->
      <div
        class="absolute -z-[1] top-0 ltr:left-0 rtl:right-0 rtl:-scale-x-100 dark:opacity-15"
      >
        <img :src="shapeImage" alt="shape2" />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import centerImage from "@/assets/images/shipment/air-cargo.png";
import shapeImage from "@/assets/images/shipment/shapes/shape2.png";

import icon1 from "@/assets/images/shipment/icons/optimization.svg";
import icon2 from "@/assets/images/shipment/icons/delivery-management.svg";
import icon3 from "@/assets/images/shipment/icons/analytics.svg";
import icon4 from "@/assets/images/shipment/icons/product-management.svg";
import icon5 from "@/assets/images/shipment/icons/location.svg";
import icon6 from "@/assets/images/shipment/icons/notification.svg";

interface Feature {
  title: string;
  description: string;
  icon: string;
}

interface FeaturesData {
  tagline: string;
  title: string;
  description: string;
  leftColumn: Feature[];
  rightColumn: Feature[];
}

export default defineComponent({
  name: "Features",
  setup() {
    const features: FeaturesData = {
      tagline: "Trezo Features",
      title: "Tools Designed for Smarter Shipping",
      description:
        "Efficiency, transparency, and control — everything your logistics team needs.",
      leftColumn: [
        {
          title: "Route Optimization",
          description:
            "Plan faster and cheaper delivery routes with AI-based tools.",
          icon: icon1,
        },
        {
          title: "Order Management",
          description:
            "Organize bulk orders, special requests, and returns effortlessly.",
          icon: icon2,
        },
        {
          title: "Analytics Dashboard",
          description: "Visualize delivery performance and KPIs instantly.",
          icon: icon3,
        },
      ],
      rightColumn: [
        {
          title: "Fleet Management",
          description: "Monitor vehicle health and driver performance easily.",
          icon: icon4,
        },
        {
          title: "Delivery Tracking",
          description: "Provide real-time tracking links to customers.",
          icon: icon5,
        },
        {
          title: "Automated Notifications",
          description: "Send real-time updates via SMS and email.",
          icon: icon6,
        },
      ],
    };

    return {
      features,
      centerImage,
      shapeImage,
    };
  },
});
</script>
