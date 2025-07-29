<template>
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[110px] xl:pt-[130px] 2xl:pt-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px] text-center mx-auto md:max-w-[475px]"
      >
        <span
          class="inline-block rounded-[30px] text-white py-[6.5px] px-[19px] mb-[15px]"
          :style="badgeStyle"
        >
          {{ header.badge }}
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-xl md:!text-2xl lg:!text-3xl xl:!text-5xl !leading-[1.2] !mb-[13px]"
        >
          {{ header.title }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ header.description }}
        </p>
      </div>

      <div
        class="dark:bg-[#0a0e19] p-[20px] md:p-[30px] lg:px-[55px] lg:py-[47px] rounded-[15px] relative z-[1] mx-auto xl:max-w-[1066px]"
      >
        <div class="relative" id="storeAnalysisTestimonialsSlides">
          <Swiper
            :slidesPerView="1"
            :loop="true"
            :autoplay="{
              delay: 4500,
              disableOnInteraction: true,
            }"
            :navigation="{
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            }"
            :modules="modules"
            class="mySwiper"
          >
            <SwiperSlide
              v-for="(testimonial, index) in testimonials"
              :key="index"
            >
              <div
                class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center"
              >
                <div class="text-center ltr:lg:mr-[87px] rtl:lg:ml-[87px]">
                  <img
                    :src="testimonial.image"
                    :alt="testimonial.alt"
                    class="inline-block rounded-[15px]"
                  />
                </div>
                <div
                  class="bg-white dark:bg-dark rounded-[15px] py-[25px] md:py-[50px] px-[20px] md:px-[40px] xl:px-[56px] ltr:lg:-ml-[87px] rtl:lg:-mr-[87px]"
                  :style="clipPathStyle"
                >
                  <img
                    :src="quoteIcon"
                    class="mb-[15px] md:mb-[28px] lg:mb-[25px] xl:mb-[28px]"
                    alt="quote"
                  />
                  <p class="text-[15px] md:text-lg xl:text-[20px]">
                    {{ testimonial.quote }}
                  </p>
                  <div class="mt-[15px] md:mt-[28px] lg:mt-[25px] xl:mt-[28px]">
                    <h5
                      class="!text-base md:!text-[15px] lg:!text-md !mb-[5px] !font-normal"
                    >
                      {{ testimonial.name }}
                    </h5>
                    <span class="block">{{ testimonial.position }}</span>
                  </div>
                </div>
              </div>
            </SwiperSlide>
          </Swiper>

          <div
            class="lg:absolute lg:top-0 ltr:lg:right-0 rtl:lg:left-0 flex items-center justify-center gap-[8.33px] mt-[25px] lg:mt-0"
          >
            <div
              class="swiper-button-prev !relative !top-0 !w-[50px] !h-[50px] !rounded-full !left-0 !right-0 !mt-0 after:hidden bg-white dark:bg-dark !text-xl md:!text-2xl !text-gray-500 dark:!text-gray-400 transition-all hover:!text-primary-600"
            >
              <i class="ri-arrow-left-down-line"></i>
            </div>
            <div
              class="swiper-button-next !relative !top-0 !w-[50px] !h-[50px] !rounded-full !left-0 !right-0 !mt-0 after:hidden bg-white dark:bg-dark !text-xl md:!text-2xl !text-gray-500 dark:!text-gray-400 transition-all hover:!text-primary-600"
            >
              <i class="ri-arrow-right-up-line"></i>
            </div>
          </div>
        </div>

        <div
          class="absolute top-0 left-0 right-0 bottom-0 -z-[1] rounded-[15px] dark:hidden"
          :style="backgroundStyle"
        ></div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Navigation } from "swiper/modules";

import quoteIcon from "@/assets/images/store-analysis/icons/quote.svg";
import testimonial1 from "@/assets/images/store-analysis/testimonials/testimonial1.jpg";
import testimonial2 from "@/assets/images/store-analysis/testimonials/testimonial2.jpg";
import testimonial3 from "@/assets/images/store-analysis/testimonials/testimonial3.jpg";

interface Testimonial {
  image: string;
  alt: string;
  quote: string;
  name: string;
  position: string;
}

interface Header {
  badge: string;
  title: string;
  description: string;
}

export default defineComponent({
  name: "Testimonials",
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const badgeStyle = {
      background: "linear-gradient(180deg, #ffaa72 0%, #ee3e08 100%)",
    };

    const clipPathStyle = {
      clipPath: "polygon(75% 0, 100% 25%, 100% 100%, 0 100%, 0 0)",
    };

    const backgroundStyle = {
      background: "linear-gradient(180deg, #faf5ff 0%, #d3f1ff 100%)",
    };

    const header: Header = {
      badge: "Testimonials",
      title: "What Retailers Are Saying About Trezo",
      description:
        "Hear how Trezo's powerful analytics have helped store owners, managers, and retail teams boost sales",
    };

    const testimonials: Testimonial[] = [
      {
        image: testimonial1,
        alt: "Samantha Reyes testimonial",
        quote:
          "Trezo's analytics dashboard has become our go-to tool for tracking sales and customer behavior. It's intuitive, and the real-time insights have helped us make quicker, smarter decisions.",
        name: "Samantha Reyes",
        position: "Store Manager",
      },
      {
        image: testimonial2,
        alt: "John Doe testimonial",
        quote:
          "Managing multiple stores was a logistical nightmare until we started using Trezo. Now, we can monitor each location's performance from one dashboard — it's a game changer for our daily operations.",
        name: "John Doe",
        position: "Retail Manager",
      },
      {
        image: testimonial3,
        alt: "Kimberly Watts testimonial",
        quote:
          "Before Trezo, we relied on spreadsheets to track sales trends. Now, everything's visualized in real time, and our reporting process has been cut in half. Love the simplicity!",
        name: "Kimberly Watts",
        position: "Retail Analyst",
      },
    ];

    return {
      modules: [Autoplay, Navigation],
      badgeStyle,
      clipPathStyle,
      backgroundStyle,
      header,
      testimonials,
      quoteIcon,
    };
  },
});
</script>
