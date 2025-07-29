<template>
  <div class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[140px]">
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="mb-[30px] md:mb-[40px] lg:mb-[50px]">
        <h2
          class="!text-xl md:!text-3xl !font-semibold -tracking-[1px] mt-[15px] !mb-0 !text-gray-800 dark:!text-gray-100"
        >
          Courses You May Like
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          v-for="course in popularCourses"
          :key="course.id"
          class="bg-white dark:bg-[#0a0e19] border border-gray-200 dark:border-[#202c4b] rounded-[15px] p-[20px] md:p-[25px] lg:p-[30px] 2xl:p-[35px]"
        >
          <RouterLink to="/course-details" class="d-block rounded-[10px]">
            <img
              :src="course.image"
              :alt="course.title"
              class="rounded-[10px] inline-block w-full"
            />
          </RouterLink>
          <h3
            class="!text-[18px] md:!text-[19px] lg:!text-[20px] !font-semibold mt-[18px] md:mt-[22px] lg:mt-[28px] !mb-[15px]"
          >
            <RouterLink
              to="/course-details"
              class="text-gray-700 dark:text-gray-100 transition-all hover:text-primary-500"
            >
              {{ course.title }}
            </RouterLink>
          </h3>
          <div class="flex items-center gap-[8px]">
            <div
              class="flex items-center text-orange-400 leading-none lg:text-md gap-[2px] relative -top-px"
            >
              <i
                v-for="star in 5"
                :key="star"
                :class="getStarClass(star, course.rating)"
              ></i>
            </div>
            <span class="block lg:text-md leading-none">
              {{ course.rating.toFixed(1) }} ({{ course.reviewCount }} ratings)
            </span>
          </div>
          <div
            class="mt-[20px] lg:mt-[25px] text-primary-600 leading-none text-md md:text-[20px] font-semibold"
          >
            ${{ course.price }}
          </div>
          <ul
            class="flex items-center gap-[15px] lg:gap-[20px] 2xl:gap-[25px] md:text-[15px] xl:text-md mt-[15px] md:mt-[20px] lg:mt-[22px]"
          >
            <li
              class="relative inline-block ltr:pl-[25px] rtl:pr-[25px] ltr:lg:pl-[32px] rtl:lg:pr-[32px] text-gray-700 dark:text-gray-200"
            >
              <i
                class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 !text-lg lg:!text-xl"
              >
                book_ribbon
              </i>
              {{ course.lessonCount }} Lessons
            </li>
            <li class="relative inline-block">
              <div class="w-[1px] h-[19px] bg-gray-200 dark:bg-[#202c4b]"></div>
            </li>
            <li
              class="relative inline-block ltr:pl-[25px] rtl:pr-[25px] ltr:lg:pl-[32px] rtl:lg:pr-[32px] text-gray-700 dark:text-gray-200"
            >
              <i
                class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 !text-lg lg:!text-xl"
              >
                group
              </i>
              {{ formatNumber(course.studentCount) }}+ Enrolled
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/lms-courses/courses/course4.jpg";
import image2 from "@/assets/images/lms-courses/courses/course9.jpg";
import image3 from "@/assets/images/lms-courses/courses/course7.jpg";

interface Course {
  id: number;
  title: string;
  image: string;
  rating: number;
  reviewCount: number;
  price: number;
  lessonCount: number;
  studentCount: number;
}

export default defineComponent({
  name: "Courses",
  setup() {
    const popularCourses: Course[] = [
      {
        id: 1,
        title: "Mindfulness & Stress Management",
        image: image1,
        rating: 4.0,
        reviewCount: 750,
        price: 79,
        lessonCount: 20,
        studentCount: 4000,
      },
      {
        id: 2,
        title: "Financial Planning & Investing",
        image: image2,
        rating: 4.5,
        reviewCount: 1310,
        price: 79,
        lessonCount: 32,
        studentCount: 6800,
      },
      {
        id: 3,
        title: "Digital Marketing Mastery",
        image: image3,
        rating: 4.7,
        reviewCount: 1980,
        price: 79,
        lessonCount: 35,
        studentCount: 11000,
      },
    ];

    const getStarClass = (star: number, rating: number) => {
      if (star <= Math.floor(rating)) {
        return "ri-star-fill";
      }
      if (star - 0.5 <= rating && rating < star) {
        return "ri-star-half-fill";
      }
      return "ri-star-line";
    };

    const formatNumber = (num: number) => {
      if (num >= 1000) {
        return `${(num / 1000).toFixed(1)}k`.replace(".0", "");
      }
      return num;
    };

    return {
      getStarClass,
      formatNumber,
      popularCourses,
    };
  },
});
</script>
