<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[150px] 2xl:py-[180px] relative z-[1]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="text-center mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px]"
      >
        <span
          class="inline-block py-[4.5px] px-[15px] rounded-[100px] bg-orange-100 dark:bg-[#0a0e19] text-orange-700 mb-[12px]"
        >
          {{ sectionTag }}
        </span>
        <h2
          class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl xl:max-w-[520px] mx-auto !leading-[1.2] !mb-[10px] lg:!mb-[12px]"
        >
          {{ sectionTitle }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ sectionDescription }}
        </p>
      </div>
      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] mb-[25px]"
      >
        <div
          v-for="(testimonial, index) in testimonials"
          :key="'testimonial-' + index"
          class="px-[20px] py-[30px] md:px-[30px] md:py-[40px] lg:px-[40px] lg:py-[50px] xl:px-[50px] xl:py-[60px] bg-white dark:bg-[#0a0e19] rounded-[15px] relative z-[1]"
        >
          <div
            class="flex items-center text-orange-400 leading-none text-md lg:text-lg gap-[3px] mb-[18px] md:mb-[22px] lg:mb-[30px]"
          >
            <i v-for="star in 5" :key="'star-' + star" class="ri-star-fill"></i>
          </div>
          <p
            class="font-medium text-gray-700 dark:text-gray-100 text-[15px] md:text-md lg:text-[17px] xl:text-lg"
          >
            "{{ testimonial.quote }}"
          </p>
          <div
            class="flex items-center gap-[12px] mt-[18px] md:mt-[25px] lg:mt-[40px] xl:mt-[50px]"
          >
            <img
              :src="testimonial.avatar"
              class="rounded-full w-[42px]"
              :alt="testimonial.name"
            />
            <div>
              <h5 class="!text-base !mb-[3px] !font-semibold">
                {{ testimonial.name }}
              </h5>
              <span class="block">{{ testimonial.position }}</span>
            </div>
          </div>
          <div
            class="rounded-[15px] absolute top-0 left-0 right-0 bottom-0 -z-[1] dark:hidden"
            :style="{ background: testimonial.backgroundGradient }"
          ></div>
        </div>
      </div>
      <div class="mx-auto max-w-[848px]">
        <div
          class="px-[20px] py-[30px] md:px-[30px] md:py-[40px] lg:px-[40px] lg:py-[50px] xl:px-[50px] xl:py-[60px] bg-white dark:bg-[#0a0e19] rounded-[15px] relative z-[1]"
        >
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] md:gap-[25px]">
            <div>
              <div
                class="flex items-center text-orange-400 leading-none text-md lg:text-lg gap-[3px] mb-[18px] md:mb-[22px] lg:mb-[30px]"
              >
                <i
                  v-for="star in 5"
                  :key="'featured-star-' + star"
                  class="ri-star-fill"
                ></i>
              </div>
              <p
                class="font-medium text-gray-700 dark:text-gray-100 text-[15px] md:text-md lg:text-[17px] xl:text-lg"
              >
                "{{ featuredTestimonial.quote }}"
              </p>
              <div
                class="flex items-center gap-[12px] mt-[18px] md:mt-[25px] lg:mt-[40px] xl:mt-[50px]"
              >
                <img
                  :src="featuredTestimonial.avatar"
                  class="rounded-full w-[42px]"
                  :alt="featuredTestimonial.name"
                />
                <div>
                  <h5 class="!text-base !mb-[3px] !font-semibold">
                    {{ featuredTestimonial.name }}
                  </h5>
                  <span class="block">{{ featuredTestimonial.position }}</span>
                </div>
              </div>
            </div>
            <div class="relative">
              <img
                :src="featuredTestimonial.image"
                class="inline-block rounded-[15px]"
                :alt="featuredTestimonial.imageAlt"
              />
              <lightgallery :settings="{ speed: 500, plugins }">
                <a
                  :href="featuredTestimonial.videoUrl"
                  class="flex items-center justify-center w-[55px] h-[55px] bg-orange-300 rounded-full absolute left-0 right-0 top-1/2 -translate-y-1/2 mx-auto text-[35px] text-black transition-all hover:bg-orange-400"
                >
                  <i class="ri-play-fill"></i>
                </a>
              </lightgallery>
            </div>
          </div>
          <div
            class="rounded-[15px] absolute top-0 left-0 right-0 bottom-0 -z-[1] dark:hidden"
            :style="{ background: featuredTestimonial.backgroundGradient }"
          ></div>
        </div>
      </div>
    </div>
    <div
      class="absolute top-0 left-0 w-full h-full bg-no-repeat bg-cover bg-center -z-1 dark:hidden"
      :style="{ backgroundImage: `url(${backgroundImage})` }"
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import Lightgallery from "lightgallery/vue";
import lgVideo from "lightgallery/plugins/video";

import "lightgallery/css/lightgallery.css";
import "lightgallery/css/lg-video.css";

import avatar1 from "@/assets/images/marketing/users/user5.jpg";
import avatar2 from "@/assets/images/marketing/users/user6.jpg";
import avatar3 from "@/assets/images/marketing/users/user7.jpg";

import manImage from "@/assets/images/marketing/man.jpg";
import bgImage from "@/assets/images/marketing/gradient-bg2.jpg";

interface Testimonial {
  quote: string;
  name: string;
  position: string;
  avatar: string;
  backgroundGradient: string;
  image?: string;
  imageAlt?: string;
  videoUrl?: string;
}

export default defineComponent({
  name: "Testimonials",
  components: {
    Lightgallery,
  },
  setup() {
    const plugins = ref([lgVideo]);

    const sectionTag = "Testimonials";
    const sectionTitle = "What Marketers Say About Trezo";
    const sectionDescription =
      "From campaign tracking to performance insights — we've got you covered.";
    const backgroundImage = bgImage;

    const testimonials: Testimonial[] = [
      {
        quote:
          "Trezo changed the way we manage campaigns. Everything's faster, & way more collaborative. ROI improved within weeks.",
        name: "Rachel Nguyen",
        position: "Growth Marketing Lead, BrightDash",
        avatar: avatar1,
        backgroundGradient: "linear-gradient(180deg, #fff 0%, #eef6ff 100%)",
      },
      {
        quote:
          "I've used dozens of marketing tools — Trezo is the only one that actually simplifies my workflow instead of complicating it.",
        name: "Michael Brooks",
        position: "Senior Digital Strategist, Amply Media",
        avatar: avatar2,
        backgroundGradient: "linear-gradient(180deg, #fff 0%, #faf5ff 100%)",
      },
      {
        quote:
          "The real-time dashboard and funnel visualization features are a game-changer. My team finally has the clarity we needed.",
        name: "Lila Fernandez",
        position: "Head of Marketing, Corelytics",
        avatar: avatar3,
        backgroundGradient: "linear-gradient(180deg, #fff 0%, #eeffe5 100%)",
      },
    ];

    const featuredTestimonial: Testimonial = {
      quote:
        "Trezo's impact on our marketing operations has been incredible. It's now at the center of everything we do.",
      name: "Olivia Smith",
      position: "Performance Marketing Lead, BrightDash",
      avatar: avatar1,
      image: manImage,
      imageAlt: "man",
      videoUrl: "https://www.youtube.com/watch?v=WDlEBXD2I2k",
      backgroundGradient: "linear-gradient(180deg, #fff 0%, #ffe4e4 100%)",
    };

    return {
      plugins,
      sectionTag,
      sectionTitle,
      sectionDescription,
      backgroundImage,
      testimonials,
      featuredTestimonial,
    };
  },
});
</script>
