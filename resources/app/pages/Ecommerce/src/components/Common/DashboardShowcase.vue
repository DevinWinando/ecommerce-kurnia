<template>
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[110px] xl:pt-[150px] 2xl:pt-[180px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div>
          <span
            class="inline-block py-[4.5px] px-[15px] text-primary-600 bg-primary-50 dark:bg-gray-900 rounded-[100px] mb-[12px] md:!mb-[15px]"
          >
            {{ tagline }}
          </span>
          <h2
            class="!font-medium md:-tracking-[2.5px] !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl xl:max-w-[540px] !leading-[1.2] !mb-[11px] md:!mb-[13px] lg:!mb-[15px]"
          >
            {{ title }}
          </h2>
          <p>
            {{ description }}
          </p>
          <div
            class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[30px] lg:gap-[40px] xl:gap-[50px] mt-[20px] md:mt-[30px] lg:mt-[40px] xl:mt-[70px]"
          >
            <div
              v-for="(feature, index) in features"
              :key="index"
              class="relative ltr:pl-[35px] rtl:pr-[35px] ltr:xl:pl-[45px] rtl:xl:pr-[45px]"
            >
              <div class="absolute top-[4px] ltr:left-0 rtl:right-0">
                <img
                  src="@/assets/images/ecommerce/icons/check.svg"
                  alt="check"
                />
              </div>
              <h3
                class="!font-medium !text-lg md:!text-[20px] lg:!text-[22px] xl:!text-xl !leading-[1.2] !mb-[8px]"
              >
                {{ feature.title }}
              </h3>
              <p>{{ feature.description }}</p>
            </div>
          </div>
        </div>

        <div class="xl:max-w-[521px] ltr:xl:ml-auto rtl:xl:mr-auto text-center">
          <img
            :src="image"
            class="inline-block rtl:-scale-x-100"
            :alt="imageAlt"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import imageSrc from "@/assets/images/ecommerce/dashboard-showcase.jpg";

export default defineComponent({
  name: "DashboardShowcase",
  setup() {
    const data = {
      tagline: "Dashboard Showcase",
      title: "See Trezo in Action",
      description:
        "A live view of your store's performance — all in one clean dashboard.",

      features: [
        {
          title: "Real-Time Insights",
          description: "View live sales, orders, and traffic without delay.",
        },
        {
          title: "Sales Analytics",
          description:
            "Track revenue, conversion rates, and product performance.",
        },
        {
          title: "Inventory Monitoring",
          description: "Get automatic alerts for low or out-of-stock items.",
        },
        {
          title: "Customer Behavior",
          description: "Understand how shoppers browse, buy, and return.",
        },
      ],
      image: imageSrc,
      imageAlt: "dashboard-showcase-image",
    };

    return {
      ...data,
    };
  },
});
</script>
