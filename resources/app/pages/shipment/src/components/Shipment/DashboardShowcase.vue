<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] md:max-w-[630px] text-center ltr:lg:text-left rtl:lg:text-right md:mx-auto lg:mx-0 relative"
      >
        <span
          class="inline-block rounded-[30px] text-[#e36925] border border-[#e36925] py-[3.5px] px-[14px] mb-[12px] md:mb-[15px]"
        >
          {{ dashboardData.tagline }}
        </span>
        <h2
          class="md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px] md:!mb-[15px]"
        >
          {{ dashboardData.title }}
        </h2>
        <p class="md:text-[15px] lg:text-md !mb-0">
          {{ dashboardData.description }}
        </p>
      </div>

      <div class="relative" id="shipmentDashboardShowcaseSlides">
        <Swiper
          :slidesPerView="1"
          :loop="true"
          :autoplay="{
            delay: 4500,
            disableOnInteraction: false,
          }"
          :navigation="{
            nextEl: '.swiper-button-next.dashboard-showcase-swiper-button',
            prevEl: '.swiper-button-prev.dashboard-showcase-swiper-button',
          }"
          :modules="modules"
          class="mySwiper2"
        >
          <SwiperSlide
            v-for="(slide, index) in dashboardData.slides"
            :key="index"
          >
            <div
              class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center"
            >
              <div
                class="relative text-center ltr:md:pr-[30px] rtl:md:pl-[30px]"
              >
                <img
                  :src="slide.mainImage"
                  class="inline-block rounded-[15px]"
                  :alt="slide.mainImageAlt"
                />
                <img
                  :src="slide.overlayImage"
                  :alt="slide.overlayImageAlt"
                  class="inline-block rounded-[7px] md:max-w-[357px] mt-[25px]"
                  :class="{
                    'md:absolute md:top-1/2 md:-translate-y-1/2 ltr:md:right-0 rtl:md:left-0 ltr:xl:-right-[43px] rtl:xl:-left-[43px] md:-mt-[88px]':
                      index === 0,
                    'md:absolute top-[40px] ltr:right-[65px] rtl:left-[65px] md:mt-0':
                      index === 1,
                  }"
                  style="
                    filter: drop-shadow(0px 5px 10px rgba(212, 212, 212, 0.32))
                      drop-shadow(0px 18px 18px rgba(212, 212, 212, 0.28))
                      drop-shadow(0px 41px 25px rgba(212, 212, 212, 0.16))
                      drop-shadow(0px 74px 29px rgba(212, 212, 212, 0.05))
                      drop-shadow(0px 115px 32px rgba(212, 212, 212, 0.01));
                  "
                />
              </div>

              <div class="ltr:xl:pl-[100px] rtl:xl:pr-[100px]">
                <h2
                  class="!text-lg md:!text-xl lg:!text-2xl !leading-[1.2] !mb-[25px] md:!mb-[30px] lg:!mb-[40px]"
                >
                  {{ slide.slideTitle }}
                </h2>
                <div>
                  <div
                    v-for="(feature, featureIndex) in slide.features"
                    :key="featureIndex"
                    class="relative border-b border-gray-100 dark:border-gray-900 pb-[15px] md:pb-[20px] lg:pb-[25px] mb-[15px] md:mb-[20px] lg:mb-[25px] last:mb-0 last:pb-0 last:border-b-0 ltr:pl-[45px] rtl:pr-[45px] ltr:lg:pl-[50px] rtl:lg:pr-[50px]"
                  >
                    <i
                      class="ri-check-double-line absolute text-orange-600 -top-[8px] ltr:left-0 rtl:right-0 text-3xl"
                    ></i>
                    <h3
                      class="!font-semibold !leading-[1.2] !text-md md:!text-lg !mb-[9px]"
                    >
                      {{ feature.title }}
                    </h3>
                    <p class="lg:max-w-[325px]">
                      {{ feature.description }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </SwiperSlide>
        </Swiper>

        <div
          class="lg:absolute -top-[165px] ltr:right-0 rtl:left-0 flex items-center justify-center gap-[8.33px] mt-[25px] lg:mt-0"
        >
          <div
            class="swiper-button-prev dashboard-showcase-swiper-button !relative !top-0 !w-[50px] !h-[50px] md:!w-[63.333px] md:!h-[63.333px] !rounded-full !left-0 !right-0 !mt-0 after:hidden bg-[#f7f7f7] dark:bg-[#0a0e19] !text-xl md:!text-2xl !text-gray-500 dark:!text-gray-400 transition-all hover:!text-orange-500"
          >
            <i class="ri-arrow-left-down-line"></i>
          </div>
          <div
            class="swiper-button-next dashboard-showcase-swiper-button !relative !top-0 !w-[50px] !h-[50px] md:!w-[63.333px] md:!h-[63.333px] !rounded-full !left-0 !right-0 !mt-0 after:hidden bg-[#f7f7f7] dark:bg-[#0a0e19] !text-xl md:!text-2xl !text-gray-500 dark:!text-gray-400 transition-all hover:!text-orange-500"
          >
            <i class="ri-arrow-right-up-line"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Navigation } from "swiper/modules";

import image1 from "@/assets/images/shipment/live-shipment-status.jpg";
import image2 from "@/assets/images/shipment/average-delivery-time.jpg";
import mImage1 from "@/assets/images/shipment/dashboard-showcase.jpg";
import mImage2 from "@/assets/images/shipment/dashboard-showcase2.jpg";

interface Feature {
  title: string;
  description: string;
}

interface Slide {
  mainImage: string;
  mainImageAlt: string;
  overlayImage: string;
  overlayImageAlt: string;
  slideTitle: string;
  features: Feature[];
}

interface DashboardData {
  tagline: string;
  title: string;
  description: string;
  slides: Slide[];
}

export default defineComponent({
  name: "DashboardShowcase",
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const modules = [Autoplay, Navigation];

    const dashboardData: DashboardData = {
      tagline: "Dashboard Showcase",
      title: "Real-Time Shipment Intelligence",
      description:
        "Stay updated with every move your fleet makes — all on a single, dynamic dashboard.",
      slides: [
        {
          mainImage: mImage1,
          mainImageAlt: "dashboard-showcase-image",
          overlayImage: image1,
          overlayImageAlt: "live-shipment-status-image",
          slideTitle: "Monitor Fleet Health and Deliveries",
          features: [
            {
              title: "Live Vehicle Tracking",
              description:
                "View real-time GPS locations of every vehicle in your fleet.",
            },
            {
              title: "Maintenance Alerts",
              description:
                "Get automated notifications for oil changes, tire rotations, and inspection schedules.",
            },
            {
              title: "Engine Diagnostics",
              description:
                "Monitor engine health, fuel levels, and mileage remotely.",
            },
            {
              title: "Shipment Status Updates",
              description:
                "Know when parcels are in transit, delayed, or successfully delivered.",
            },
            {
              title: "Connectivity Monitoring",
              description:
                "Detect offline or unresponsive fleet units instantly.",
            },
            {
              title: "Route History Logs",
              description:
                "Access historical trip data for audit and performance reviews.",
            },
          ],
        },
        {
          mainImage: mImage2,
          mainImageAlt: "dashboard-showcase-image",
          overlayImage: image2,
          overlayImageAlt: "average-delivery-time-image",
          slideTitle: "Track Delays and Bottlenecks Live",
          features: [
            {
              title: "Real-Time Delay Alerts",
              description:
                "Get instant notifications when shipments are delayed.",
            },
            {
              title: "Live Vehicle Tracking",
              description:
                "Monitor all vehicles in real-time on an interactive map.",
            },
            {
              title: "Dynamic Route Analysis",
              description:
                "Analyze and optimize routes based on current traffic conditions.",
            },
            {
              title: "Bottleneck Heatmaps",
              description:
                "Visualize common delay points across your delivery network.",
            },
            {
              title: "SLA Breach Notifications",
              description:
                "Get alerts when delivery time commitments are at risk.",
            },
            {
              title: "Delay Insights Dashboard",
              description:
                "Analyze patterns and root causes of delivery delays.",
            },
          ],
        },
      ],
    };

    return {
      modules,
      dashboardData,
    };
  },
});
</script>
