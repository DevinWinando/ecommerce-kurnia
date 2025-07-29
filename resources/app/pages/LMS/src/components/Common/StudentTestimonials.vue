<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="text-center mx-auto md:max-w-[500px] mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px]"
    >
      <div
        class="md:text-[15px] lg:text-md py-[4px] px-[17px] md:px-[18px] bg-[#ffef99] dark:bg-[#0a0e19] rounded-[100px] text-gray-900 dark:text-gray-200 inline-block"
      >
        <div class="flex items-center gap-[8px] md:gap-[10px]">
          <img src="@/assets/images/lms-courses/ico.svg" alt="ico" />
          Student Testimonials
        </div>
      </div>
      <h2
        class="!text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl -tracking-[1px] mt-[15px] !mb-0 !text-gray-800 dark:!text-gray-100"
      >
        What Our Learners Say
      </h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
      <div
        v-for="(testimonial, index) in testimonials.slice(0, 3)"
        :key="index"
        class="bg-[#f0eedf] dark:bg-[#0a0e19] relative z-[1] rounded-[25px] p-[20px] md:p-[30px] lg:p-[40px]"
      >
        <div
          class="flex items-center text-orange-400 leading-none lg:text-md gap-[2px] mb-[15px] md:mb-[20px]"
        >
          <i
            v-for="star in fullStars(testimonial.rating)"
            :key="'full' + star"
            class="ri-star-fill"
          ></i>
          <i
            v-if="hasHalfStar(testimonial.rating)"
            class="ri-star-half-fill"
          ></i>
          <i v-if="hasEmptyStar(testimonial.rating)" class="ri-star-line"></i>
        </div>
        <p
          class="text-gray-700 dark:text-gray-200 md:text-[15px] lg:text-md font-medium"
        >
          {{ testimonial.text }}
        </p>
        <div class="flex items-center mt-[20px] md:mt-[25px] gap-[15px]">
          <img
            :src="testimonial.avatar"
            class="rounded-full border-[3px] border-white w-[48px]"
            alt="user-image"
          />
          <div>
            <h5
              class="!text-md !mb-[5px] !font-semibold !text-gray-700 dark:!text-gray-100"
            >
              {{ testimonial.name }}
            </h5>
            <span class="block text-xs">{{ testimonial.position }}</span>
          </div>
        </div>
        <div
          class="absolute bottom-[20px] md:bottom-[30px] lg:bottom-[40px] ltr:right-[20px] rtl:left-[20px] ltr:md:right-[30px] rtl:md:left-[30px] ltr:lg:right-[40px] rtl:lg:left-[40px] leading-none text-[50px] text-dark opacity-[.10]"
        >
          <i class="ri-double-quotes-l"></i>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-[25px] mt-[25px]">
      <div
        v-for="(testimonial, index) in testimonials.slice(3, 5)"
        :key="index + 3"
        class="bg-[#f0eedf] dark:bg-[#0a0e19] relative z-[1] rounded-[25px] p-[20px] md:p-[30px] lg:p-[40px]"
      >
        <div
          class="flex items-center text-orange-400 leading-none lg:text-md gap-[2px] mb-[15px] md:mb-[20px]"
        >
          <i
            v-for="star in fullStars(testimonial.rating)"
            :key="'full' + star"
            class="ri-star-fill"
          ></i>
          <i
            v-if="hasHalfStar(testimonial.rating)"
            class="ri-star-half-fill"
          ></i>
          <i v-if="hasEmptyStar(testimonial.rating)" class="ri-star-line"></i>
        </div>
        <p
          class="text-gray-700 dark:text-gray-200 md:text-[15px] lg:text-md font-medium"
        >
          {{ testimonial.text }}
        </p>
        <div class="flex items-center mt-[20px] md:mt-[25px] gap-[15px]">
          <img
            :src="testimonial.avatar"
            class="rounded-full border-[3px] border-white w-[48px]"
            alt="user-image"
          />
          <div>
            <h5
              class="!text-md !mb-[5px] !font-semibold !text-gray-700 dark:!text-gray-100"
            >
              {{ testimonial.name }}
            </h5>
            <span class="block text-xs">{{ testimonial.position }}</span>
          </div>
        </div>
        <div
          class="absolute bottom-[20px] md:bottom-[30px] lg:bottom-[40px] ltr:right-[20px] rtl:left-[20px] ltr:md:right-[30px] rtl:md:left-[30px] ltr:lg:right-[40px] rtl:lg:left-[40px] leading-none text-[50px] text-dark opacity-[.10]"
        >
          <i class="ri-double-quotes-l"></i>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/lms-courses/users/user1.jpg";
import image2 from "@/assets/images/lms-courses/users/user2.jpg";
import image3 from "@/assets/images/lms-courses/users/user3.jpg";
import image4 from "@/assets/images/lms-courses/users/user4.jpg";
import image5 from "@/assets/images/lms-courses/users/user5.jpg";

interface Testimonial {
  name: string;
  position: string;
  text: string;
  rating: number;
  avatar: string;
}

export default defineComponent({
  name: "StudentTestimonials",
  setup() {
    const testimonials: Testimonial[] = [
      {
        name: "Maria Johnson",
        position: "Web Developer at TechVerse",
        text: "This platform changed my life! The Web Development course was incredibly comprehensive, and the support team was always there when I needed help. I landed a job just weeks after finishing!",
        rating: 5,
        avatar: image1,
      },
      {
        name: "Jessica Lee",
        position: "Graphic Designer at CreativeHive",
        text: "Loved every bit of the Graphic Design Masterclass! The instructor was amazing, and the course content was well-structured. I use what I learned every day at work.",
        rating: 4.5,
        avatar: image2,
      },
      {
        name: "Carlos Mendes",
        position: "Mental Wellness Coach",
        text: "The Mindfulness course helped me not only in my personal life but also improved how I teach my clients. The guided sessions are pure gold. I use what I learned every day at work.",
        rating: 4,
        avatar: image3,
      },
      {
        name: "Elena Petrova",
        position: "HR Manager at SkillBridge Corp.",
        text: "Enrolling in the Full-Stack Web Development course was one of the best decisions I’ve ever made. The platform’s structure made learning easy and enjoyable — from interactive video lessons to real-time quizzes. What truly impressed me was the depth of content and how up-to-date it was with modern technologies.",
        rating: 5,
        avatar: image4,
      },
      {
        name: "Lucas Moretti",
        position: "Entrepreneur & Startup Mentor",
        text: "As someone looking to switch careers, I was hesitant at first. But the Data Science and Analytics course exceeded all my expectations. It took me from beginner-level Python to advanced data manipulation and visualization. The capstone project gave me something tangible to show in my portfolio.",
        rating: 5,
        avatar: image5,
      },
    ];

    const fullStars = (rating: number) => Math.floor(rating);
    const hasHalfStar = (rating: number) => rating % 1 >= 0.5;
    const hasEmptyStar = (rating: number) => 5 - Math.ceil(rating) > 0;

    return {
      testimonials,
      fullStars,
      hasHalfStar,
      hasEmptyStar,
    };
  },
});
</script>
