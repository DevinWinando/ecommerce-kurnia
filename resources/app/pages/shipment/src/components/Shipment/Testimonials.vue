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
            {{ testimonialsData.tagline }}
          </span>
          <h2
            class="md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px] md:!mb-[15px]"
          >
            {{ testimonialsData.title }}
          </h2>
          <p class="md:text-[15px] lg:text-md">
            {{ testimonialsData.description }}
          </p>
        </div>

        <div
          class="mx-auto xl:max-w-[1065px] relative ltr:lg:pr-[218px] rtl:lg:pl-[218px]"
        >
          <div class="relative" id="shipmentTestimonialsSlides">
            <Swiper
              :slidesPerView="1"
              :loop="true"
              :autoplay="{
                delay: 4500,
                disableOnInteraction: false,
              }"
              :navigation="{
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              }"
              :modules="modules"
              class="swiper mySwiper"
            >
              <SwiperSlide
                v-for="(testimonial, index) in testimonialsData.testimonials"
                :key="index"
              >
                <div class="grid grid-cols-1 md:grid-cols-3 gap-[25px]">
                  <div
                    class="rounded-[15px] ltr:md:-mr-[38px] rtl:md:-ml-[38px]"
                  >
                    <img
                      :src="testimonial.mainImage"
                      class="inline-block rounded-[15px] w-full h-auto"
                      :alt="testimonial.mainImageAlt"
                      loading="lazy"
                    />
                  </div>

                  <div class="md:col-span-2 ltr:md:ml-[38px] rtl:md:mr-[38px]">
                    <div
                      class="bg-white dark:bg-dark rounded-[15px] py-[25px] md:py-[55px] px-[20px] md:px-[40px] xl:px-[50px]"
                    >
                      <img
                        src="@/assets/images/shipment/icons/quote.svg"
                        class="mb-[15px] md:mb-[25px] xl:mb-[37px]"
                        alt="quote"
                      />
                      <p
                        class="!leading-[1.45] md:!leading-[1.35] text-gray-700 dark:text-gray-400 text-[15px] md:text-lg lg:text-[20px] xl:text-xl"
                      >
                        {{ testimonial.quote }}
                      </p>
                      <div
                        class="flex items-center gap-[12px] mt-[15px] md:mt-[30px] xl:mt-[52px]"
                      >
                        <img
                          :src="testimonial.userImage"
                          class="rounded-full w-[42px] h-[42px] object-cover"
                          :alt="testimonial.userName + ' image'"
                        />
                        <div>
                          <h5
                            class="!text-base md:!text-[15px] lg:!text-md !mb-[4px] !font-medium"
                          >
                            {{ testimonial.userName }}
                          </h5>
                          <span class="block text-gray-500 dark:text-gray-400">
                            {{ testimonial.userPosition }}
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </SwiperSlide>
            </Swiper>

            <div
              class="lg:absolute lg:top-[10px] xl:top-[40px] ltr:lg:-right-[218px] rtl:lg:-left-[218px] flex items-center justify-center gap-[8.33px] mt-[25px] lg:mt-0"
            >
              <button
                class="swiper-button-prev testimonials-swiper-button !relative !top-0 !w-[50px] !h-[50px] md:!w-[63.333px] md:!h-[63.333px] !rounded-full !left-0 !right-0 !mt-0 after:hidden bg-white dark:bg-dark !text-xl md:!text-2xl !text-gray-500 dark:!text-gray-400 transition-all hover:!text-orange-500"
                aria-label="Previous testimonial"
              >
                <i class="ri-arrow-left-down-line"></i>
              </button>
              <button
                class="swiper-button-next testimonials-swiper-button !relative !top-0 !w-[50px] !h-[50px] md:!w-[63.333px] md:!h-[63.333px] !rounded-full !left-0 !right-0 !mt-0 after:hidden bg-white dark:bg-dark !text-xl md:!text-2xl !text-gray-500 dark:!text-gray-400 transition-all hover:!text-orange-500"
                aria-label="Next testimonial"
              >
                <i class="ri-arrow-right-up-line"></i>
              </button>
            </div>
          </div>

          <div
            class="absolute ltr:right-0 rtl:left-0 bottom-0 max-w-[193px] rounded-[15px] hidden lg:block"
          >
            <img
              src="@/assets/images/shipment/working-man.jpg"
              class="inline-block rounded-[15px] w-full"
              alt="working-man"
              loading="lazy"
            />
          </div>
        </div>
      </div>

      <div
        class="absolute -z-[1] top-0 ltr:right-0 rtl:left-0 rtl:-scale-x-100 dark:opacity-15"
      >
        <img src="@/assets/images/shipment/shapes/shape1.png" alt="shape1" />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Navigation } from "swiper/modules";

import mainImage1 from "@/assets/images/shipment/working-girl.jpg";
import mainImage2 from "@/assets/images/shipment/girl-with-wacky-tacky.jpg";

import image1 from "@/assets/images/shipment/users/user1.jpg";
import image2 from "@/assets/images/shipment/users/user2.jpg";

interface Testimonial {
  mainImage: string;
  mainImageAlt: string;
  quote: string;
  userName: string;
  userImage: string;
  userPosition: string;
}

interface TestimonialsData {
  tagline: string;
  title: string;
  description: string;
  testimonials: Testimonial[];
}

export default defineComponent({
  name: "Testimonials",
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const modules = [Autoplay, Navigation];

    const testimonialsData: TestimonialsData = {
      tagline: "Customer Testimonials",
      title: "Trusted by Logistics Leaders",
      description:
        "Hear from companies who streamlined their delivery operations with Trezo.",
      testimonials: [
        {
          mainImage: mainImage1,
          mainImageAlt: "working-girl-image",
          quote:
            "The live dashboard and route optimization features have reduced our delivery delays by 40%. It's a game-changer for our logistics team.",
          userName: "Olivia Chen",
          userImage: image1,
          userPosition: "Logistics Manager, FastFleet Logistics",
        },
        {
          mainImage: mainImage2,
          mainImageAlt: "girl-with-wacky-tacky-image",
          quote:
            "Having one central place for deliveries, performance stats, and driver status has brought serious clarity to our daily operations.",
          userName: "John Mitchell",
          userImage: image2,
          userPosition: "Delivery Coordinator, ShipRight",
        },
      ],
    };

    return {
      modules,
      testimonialsData,
    };
  },
});
</script>
