<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <!-- Header Section -->
      <div
        class="grid grid-cols-1 lg:grid-cols-2 gap-[12px] md:gap-[15px] lg:gap-[25px] items-center mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px]"
      >
        <div class="md:max-w-[475px]">
          <span
            class="inline-block rounded-[30px] bg-white dark:bg-dark text-purple-600 border border-purple-200 dark:border-gray-800 py-[3.5px] px-[13px] mb-[12px] md:mb-[15px]"
          >
            Key Features
          </span>
          <h2
            class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-0"
          >
            Powerful Tools for Smarter Shipping
          </h2>
        </div>
        <div class="md:max-w-[520px] ltr:lg:ml-auto rtl:lg:mr-auto">
          <p class="md:text-[15px] lg:text-md">
            Unlock end-to-end shipment visibility, faster task assignments, and
            real-time control with Trezo's robust logistics management features.
          </p>
        </div>
      </div>

      <!-- Features Swiper -->
      <Swiper
        :spaceBetween="25"
        :loop="true"
        :autoplay="{
          delay: 4500,
          disableOnInteraction: false,
        }"
        :breakpoints="{
          640: { slidesPerView: 2 },
          768: { slidesPerView: 2 },
          1024: { slidesPerView: 3 },
        }"
        :modules="modules"
        class="features-swiper"
      >
        <SwiperSlide v-for="(feature, index) in features" :key="index">
          <div
            class="rounded-[15px] bg-[#f7f7f7] dark:bg-[#0a0e19] py-[25px] md:py-[45px] lg:py-[65px] px-[20px] md:px-[30px] lg:px-[40px]"
          >
            <div
              class="rounded-[4px] w-[58px] h-[58px] flex items-center justify-center mb-[25px] md:mb-[40px] lg:mb-[55px]"
              :style="gradientStyle"
            >
              <img
                :src="feature.icon"
                :alt="feature.title"
                class="w-[30px] h-[30px]"
              />
            </div>
            <h3
              class="!font-medium !text-lg md:!text-[20px] lg:!text-[22px] xl:!text-xl !mb-[12px] md:!mb-[18px]"
            >
              {{ feature.title }}
            </h3>
            <p class="md:text-[15px] lg:text-md">
              {{ feature.description }}
            </p>
          </div>
        </SwiperSlide>
      </Swiper>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination } from "swiper/modules";

import scheduleIcon from "@/assets/images/social-media/icons/schedule.svg";
import contentWritingIcon from "@/assets/images/social-media/icons/content-writing.svg";
import aiIcon from "@/assets/images/social-media/icons/ai.svg";
import ideaIcon from "@/assets/images/social-media/icons/idea.svg";

interface Feature {
  title: string;
  description: string;
  icon: string;
}

export default defineComponent({
  name: "Features",
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const features: Feature[] = [
      {
        title: "Smart Scheduling",
        description:
          "Automate your social posts across all platforms with drag-and-drop calendar.",
        icon: scheduleIcon,
      },
      {
        title: "Content Planner",
        description:
          "Visualize and organize your monthly strategy with a flexible editorial calendar.",
        icon: contentWritingIcon,
      },
      {
        title: "AI Captions",
        description:
          "Generate high-performing captions tailored to your brand tone and audience.",
        icon: aiIcon,
      },
      {
        title: "Hashtag Insights",
        description:
          "Discover trending and top-performing hashtags for each platform.",
        icon: ideaIcon,
      },
    ];

    const gradientStyle = {
      background: "linear-gradient(180deg, #bf85fb 0%, #9135e8 100%)",
    };

    return {
      modules: [Autoplay, Pagination],
      features,
      gradientStyle,
    };
  },
});
</script>
