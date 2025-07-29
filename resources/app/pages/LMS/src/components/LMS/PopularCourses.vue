<template>
  <div
    class="bg-[#f6f5f3] dark:bg-[#0e1321] py-[70px] md:py-[90px] lg:py-[110px] xl:py-[150px] 2xl:py-[180px]"
  >
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
            {{ sectionTitle }}
          </div>
        </div>
        <h2
          class="!text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl -tracking-[1px] mt-[15px] !mb-0 !text-gray-800 dark:!text-gray-100"
        >
          {{ heading }}
        </h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          v-for="course in courses"
          :key="course.id"
          class="bg-white dark:bg-[#0a0e19] rounded-[15px] p-[20px] md:p-[25px] lg:p-[30px] 2xl:p-[35px]"
        >
          <RouterLink :to="course.link" class="d-block rounded-[10px]">
            <img
              :src="course.image"
              :alt="course.title + ' image'"
              class="rounded-[10px] inline-block"
            />
          </RouterLink>
          <h3
            class="!text-[18px] md:!text-[19px] lg:!text-[20px] !font-semibold mt-[18px] md:mt-[22px] lg:mt-[28px] !mb-[15px]"
          >
            <RouterLink
              :to="course.link"
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
                v-for="star in fullStars(course.rating)"
                :key="'full' + course.id + star"
                class="ri-star-fill"
              ></i>
              <i
                v-if="hasHalfStar(course.rating)"
                class="ri-star-half-fill"
              ></i>
              <i v-if="hasEmptyStar(course.rating)" class="ri-star-line"></i>
            </div>
            <span class="block lg:text-md leading-none">
              {{ course.rating }} ({{
                course.ratingsCount.toLocaleString()
              }}
              ratings)
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
              {{ course.lessonsCount }} Lessons
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
              {{ course.enrolledCount.toLocaleString() }}+ Enrolled
            </li>
          </ul>
        </div>
      </div>
      <div class="text-center mt-[35px] md:mt-[50px] lg:mt-[70px]">
        <RouterLink
          to="/courses"
          class="inline-block py-[10px] md:py-[12px] px-[17px] md:px-[20px] bg-primary-600 hover:bg-primary-500 text-white md:text-[15px] lg:text-md font-medium rounded-md transition-all"
        >
          <span
            class="block relative ltr:pl-[30px] rtl:pr-[30px] ltr:md:pl-[34px] rtl:md:pr-[34px]"
          >
            <i
              class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 !text-[22px] md:!text-[24px]"
            >
              school
            </i>
            {{ ctaText }}
          </span>
        </RouterLink>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/lms-courses/courses/course1.jpg";
import image2 from "@/assets/images/lms-courses/courses/course3.jpg";
import image3 from "@/assets/images/lms-courses/courses/course4.jpg";

interface Course {
  id: number;
  title: string;
  image: string;
  link: string;
  rating: number;
  ratingsCount: number;
  price: number;
  lessonsCount: number;
  enrolledCount: number;
}

export default defineComponent({
  name: "PopularCourses",
  setup() {
    const sectionTitle = "Popular Courses";
    const heading = "Top-Rated Courses to Kickstart Your Journey";
    const ctaText = "Browse All Courses";

    const courses: Course[] = [
      {
        id: 1,
        title: "Data Science with Python",
        image: image1,
        link: "/course-details",
        rating: 4.7,
        ratingsCount: 980,
        price: 69,
        lessonsCount: 38,
        enrolledCount: 6300,
      },
      {
        id: 2,
        title: "Graphic Design Masterclass",
        image: image2,
        link: "/course-details",
        rating: 4.9,
        ratingsCount: 10200,
        price: 99,
        lessonsCount: 52,
        enrolledCount: 10200,
      },
      {
        id: 3,
        title: "Mindfulness & Stress Management",
        image: image3,
        link: "/course-details",
        rating: 4.0,
        ratingsCount: 750,
        price: 79,
        lessonsCount: 20,
        enrolledCount: 400,
      },
    ];

    // Helper functions for star rating display
    const fullStars = (rating: number) => Math.floor(rating);
    const hasHalfStar = (rating: number) => rating % 1 >= 0.5;
    const hasEmptyStar = (rating: number) => 5 - Math.ceil(rating) > 0;

    return {
      sectionTitle,
      heading,
      ctaText,
      courses,
      fullStars,
      hasHalfStar,
      hasEmptyStar,
    };
  },
});
</script>
