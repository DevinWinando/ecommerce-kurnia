<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="grid grid-cols-1 lg:grid-cols-2 gap-[12px] md:gap-[15px] lg:gap-[25px] items-center mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px]"
      >
        <div class="md:max-w-[475px]">
          <span
            class="inline-block rounded-[30px] bg-white dark:bg-dark text-purple-600 border border-purple-200 dark:border-gray-800 py-[3.5px] px-[13px] mb-[12px] md:mb-[15px]"
          >
            Testimonials
          </span>
          <h2
            class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-0"
          >
            What Our Users Say About Trezo
          </h2>
        </div>
        <div class="md:max-w-[520px] ltr:lg:ml-auto rtl:lg:mr-auto">
          <p class="md:text-[15px] lg:text-md">
            Real feedback from marketers, creators, and brands who trust Trezo
            to power their social media strategy — every day, across every
            platform.
          </p>
        </div>
      </div>

      <div class="grid grid-cols-1 xl:grid-cols-3 gap-[25px]">
        <div
          class="rounded-[15px] py-[30px] px-[20px] md:py-[40px] lg:py-[50px] md:px-[30px] ltr:xl:mr-[108px] rtl:xl:ml-[108px]"
          style="background: linear-gradient(180deg, #bf85fb 0%, #9135e8 100%)"
        >
          <div
            class="mb-[25px] md:mb-[50px] lg:mb-[114px] flex items-center gap-[15px] border border-purple-400 justify-center rounded-[100px] py-[13px] px-[20px] max-w-[243px]"
          >
            <div class="text-center text-white">
              <div
                class="leading-none mb-[2px] flex items-center -tracking-[0.5px] font-medium text-xl gap-[5px]"
              >
                <i
                  class="ri-star-fill leading-none -mt-[7px] text-orange-200"
                ></i>
                {{ ratingCard.rating }}
              </div>
              <span class="block text-sm">
                {{ ratingCard.reviews }} reviews
              </span>
            </div>
            <div class="flex items-center">
              <img
                v-for="(image, index) in ratingCard.userImages"
                :key="index"
                :src="image"
                class="rounded-full border-[1px] border-white w-[45px] ltr:-mr-[15px] rtl:-ml-[15px] ltr:last:mr-0 rtl:last:ml-0"
                alt="user-image"
              />
            </div>
          </div>

          <p class="md:text-[15px] lg:text-md text-white">
            Trezo is trusted by thousands of users worldwide and consistently
            earns a {{ ratingCard.rating }}-star average rating — proof of our
            commitment to performance, reliability, and user satisfaction.
          </p>
        </div>

        <div class="xl:col-span-2">
          <div
            class="bg-[#f7f7f7] dark:bg-[#0a0e19] p-[20px] md:p-[30px] lg:p-[35px] rounded-[15px] ltr:xl:-ml-[108px] rtl:xl:-mr-[108px]"
          >
            <div class="relative" id="socialMediaTestimonialsSlides">
              <Swiper
                :slidesPerView="1"
                :loop="true"
                :autoplay="{ delay: 4500, disableOnInteraction: false }"
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
                    <div class="text-center ltr:lg:mr-[80px] rtl:lg:ml-[80px]">
                      <img
                        :src="testimonial.image"
                        alt="testimonial-image"
                        class="inline-block rounded-[15px]"
                      />
                    </div>
                    <div
                      class="bg-white dark:bg-dark rounded-[15px] py-[25px] md:py-[55px] px-[20px] md:px-[40px] xl:px-[50px] ltr:lg:-ml-[80px] rtl:lg:-mr-[80px]"
                      style="
                        clip-path: polygon(
                          75% 0,
                          100% 25%,
                          100% 100%,
                          0 100%,
                          0 0
                        );
                      "
                    >
                      <img
                        src="@/assets/images/social-media/icons/quote.svg"
                        class="mb-[15px] md:mb-[32px]"
                        alt="quote"
                      />
                      <p class="text-[15px] md:text-lg">
                        {{ testimonial.quote }}
                      </p>
                      <div class="mt-[15px] md:mt-[32px]">
                        <h5
                          class="!text-base md:!text-[15px] lg:!text-md !mb-[5px] !font-normal"
                        >
                          {{ testimonial.name }}
                        </h5>
                        <span class="block">{{ testimonial.role }}</span>
                      </div>
                    </div>
                  </div>
                </SwiperSlide>
              </Swiper>

              <div
                class="lg:absolute lg:top-0 ltr:lg:right-0 rtl:lg:left-0 flex items-center justify-center gap-[8.33px] mt-[25px] lg:mt-0"
              >
                <div
                  class="swiper-button-prev !relative !top-0 !w-[50px] !h-[50px] !rounded-full !left-0 !right-0 !mt-0 after:hidden bg-white dark:bg-dark !text-xl md:!text-2xl !text-gray-500 dark:!text-gray-400 transition-all hover:!text-purple-600"
                >
                  <i class="ri-arrow-left-down-line"></i>
                </div>
                <div
                  class="swiper-button-next !relative !top-0 !w-[50px] !h-[50px] !rounded-full !left-0 !right-0 !mt-0 after:hidden bg-white dark:bg-dark !text-xl md:!text-2xl !text-gray-500 dark:!text-gray-400 transition-all hover:!text-purple-600"
                >
                  <i class="ri-arrow-right-up-line"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Navigation, Pagination } from "swiper/modules";

import image1 from "@/assets/images/social-media/testimonials/testimonial1.jpg";
import image2 from "@/assets/images/social-media/testimonials/testimonial2.jpg";
import image3 from "@/assets/images/social-media/testimonials/testimonial3.jpg";

import user1 from "@/assets/images/social-media/users/user1.jpg";
import user2 from "@/assets/images/social-media/users/user2.jpg";
import user3 from "@/assets/images/social-media/users/user3.jpg";

export default defineComponent({
  name: "Testimonials",
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const testimonials = ref([
      {
        image: image1,
        quote:
          "Trezo has completely streamlined our content planning. Scheduling posts across platforms is now effortless, and the analytics help us fine-tune our messaging.",
        name: "Amelia Nguyen",
        role: "Digital Marketing Strategist",
      },
      {
        image: image2,
        quote:
          "As a solo creator, Trezo gives me agency-level tools. I can schedule weeks of content and track performance without ever feeling overwhelmed.",
        name: "Jasmine Patel",
        role: "Content Creator",
      },
      {
        image: image3,
        quote:
          "Managing five client accounts used to be chaos. With Trezo, I can collaborate with my team and maintain control over all campaigns in one place.",
        name: "Carlos D’Souza",
        role: "Social Media Manager",
      },
    ]);

    const ratingCard = ref({
      rating: 4.9,
      reviews: "15k+",
      userImages: [user1, user2, user3],
    });

    return {
      testimonials,
      ratingCard,
      modules: [Autoplay, Navigation, Pagination],
    };
  },
});
</script>
