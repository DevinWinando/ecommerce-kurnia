<template>
  <div
    class="bg-[#f6f5f3] dark:bg-[#0e1321] py-[70px] md:py-[90px] lg:py-[110px] xl:py-[120px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <!-- Dynamic Categories -->
      <div class="mb-[20px] md:mb-[30px] lg:mb-[40px] xl:mb-[50px]">
        <button
          v-for="category in categories"
          :key="category.id"
          type="button"
          @click="setActiveCategory(category.id)"
          :class="[
            'md:text-[15px] lg:text-md font-medium rounded-[100px] inline-block py-[8px] md:py-[10px] px-[20px] md:px-[25px]',
            'ltr:mr-[10px] rtl:ml-[10px] ltr:last:mr-0 rtl:last:ml-0 mb-[10px] transition-all',
            activeCategory === category.id
              ? 'bg-primary-500 text-white'
              : 'text-gray-700 dark:text-gray-100 bg-white dark:bg-[#0a0e19] hover:bg-primary-500 hover:text-white',
          ]"
        >
          {{ category.name }}
        </button>
      </div>

      <!-- Dynamic Courses -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          v-for="course in filteredCourses"
          :key="course.id"
          class="bg-white dark:bg-[#0a0e19] rounded-[15px] p-[20px] md:p-[25px] lg:p-[30px] 2xl:p-[35px]"
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
            <RatingStars :rating="course.rating" />
            <span class="block lg:text-md leading-none">
              {{ course.rating }} ({{ course.ratingCount }} ratings)
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
              {{ course.lessons }} Lessons
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
              {{ course.enrolled }}+ Enrolled
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref, computed } from "vue";

import image1 from "@/assets/images/lms-courses/courses/course2.jpg";
import image2 from "@/assets/images/lms-courses/courses/course3.jpg";
import image3 from "@/assets/images/lms-courses/courses/course4.jpg";
import image4 from "@/assets/images/lms-courses/courses/course5.jpg";
import image5 from "@/assets/images/lms-courses/courses/course6.jpg";
import image6 from "@/assets/images/lms-courses/courses/course7.jpg";
import image7 from "@/assets/images/lms-courses/courses/course8.jpg";
import image8 from "@/assets/images/lms-courses/courses/course9.jpg";
import image9 from "@/assets/images/lms-courses/courses/course10.jpg";

interface Category {
  id: string;
  name: string;
}

interface Course {
  id: string;
  title: string;
  category: string;
  image: string;
  rating: number;
  ratingCount: string;
  price: number;
  lessons: number;
  enrolled: number;
}

export default defineComponent({
  name: "Courses",
  setup() {
    const categories: Category[] = [
      { id: "business", name: "Business & Management" },
      { id: "technology", name: "Technology & Coding" },
      { id: "creative", name: "Creative Arts & Design" },
      { id: "personal", name: "Personal Development" },
      { id: "health", name: "Health & Wellness" },
    ];

    const courses: Course[] = [
      {
        id: "data-science",
        title: "Data Science with Python",
        category: "business",
        image: image1,
        rating: 4.7,
        ratingCount: "980",
        price: 69,
        lessons: 38,
        enrolled: 6300,
      },
      {
        id: "graphic-design",
        title: "Graphic Design Masterclass",
        category: "technology",
        image: image2,
        rating: 4.9,
        ratingCount: "10,200",
        price: 99,
        lessons: 52,
        enrolled: 10200,
      },
      {
        id: "mindfulness",
        title: "Mindfulness & Stress Management",
        category: "business",
        image: image3,
        rating: 4.0,
        ratingCount: "750",
        price: 79,
        lessons: 20,
        enrolled: 400,
      },
      {
        id: "mobile-dev",
        title: "Mobile App Development",
        category: "technology",
        image: image4,
        rating: 4.8,
        ratingCount: "1,120",
        price: 49,
        lessons: 40,
        enrolled: 7800,
      },
      {
        id: "machine-learning",
        title: "Introduction to Machine Learning",
        category: "business",
        image: image5,
        rating: 4.6,
        ratingCount: "2,340",
        price: 99,
        lessons: 50,
        enrolled: 14500,
      },
      {
        id: "digital-marketing",
        title: "Digital Marketing Mastery",
        category: "business",
        image: image6,
        rating: 4.7,
        ratingCount: "1,980",
        price: 79,
        lessons: 35,
        enrolled: 1100,
      },
      {
        id: "video-editing",
        title: "Video Editing - Adobe Premiere Pro",
        category: "creative",
        image: image7,
        rating: 4.9,
        ratingCount: "870",
        price: 69,
        lessons: 28,
        enrolled: 4900,
      },
      {
        id: "financial-planning",
        title: "Financial Planning & Investing",
        category: "business",
        image: image8,
        rating: 4.5,
        ratingCount: "1,310",
        price: 79,
        lessons: 32,
        enrolled: 6800,
      },
      {
        id: "excel-analysis",
        title: "Excel for Data Analysis",
        category: "personal",
        image: image9,
        rating: 4.6,
        ratingCount: "9,200",
        price: 39,
        lessons: 30,
        enrolled: 2100,
      },
      {
        id: "data-science",
        title: "Data Science with Python",
        category: "business",
        image: image1,
        rating: 4.7,
        ratingCount: "980",
        price: 69,
        lessons: 38,
        enrolled: 6300,
      },
      {
        id: "graphic-design",
        title: "Graphic Design Masterclass",
        category: "creative",
        image: image2,
        rating: 4.9,
        ratingCount: "10,200",
        price: 99,
        lessons: 52,
        enrolled: 10200,
      },
      {
        id: "mindfulness",
        title: "Mindfulness & Stress Management",
        category: "business",
        image: image3,
        rating: 4.0,
        ratingCount: "750",
        price: 79,
        lessons: 20,
        enrolled: 400,
      },
      {
        id: "mobile-dev",
        title: "Mobile App Development",
        category: "personal",
        image: image4,
        rating: 4.8,
        ratingCount: "1,120",
        price: 49,
        lessons: 40,
        enrolled: 7800,
      },
      {
        id: "machine-learning",
        title: "Introduction to Machine Learning",
        category: "technology",
        image: image5,
        rating: 4.6,
        ratingCount: "2,340",
        price: 99,
        lessons: 50,
        enrolled: 14500,
      },
      {
        id: "digital-marketing",
        title: "Digital Marketing Mastery",
        category: "business",
        image: image6,
        rating: 4.7,
        ratingCount: "1,980",
        price: 79,
        lessons: 35,
        enrolled: 1100,
      },
      {
        id: "video-editing",
        title: "Video Editing - Adobe Premiere Pro",
        category: "health",
        image: image7,
        rating: 4.9,
        ratingCount: "870",
        price: 69,
        lessons: 28,
        enrolled: 4900,
      },
      {
        id: "financial-planning",
        title: "Financial Planning & Investing",
        category: "business",
        image: image8,
        rating: 4.5,
        ratingCount: "1,310",
        price: 79,
        lessons: 32,
        enrolled: 6800,
      },
      {
        id: "excel-analysis",
        title: "Excel for Data Analysis",
        category: "health",
        image: image9,
        rating: 4.6,
        ratingCount: "9,200",
        price: 39,
        lessons: 30,
        enrolled: 2100,
      },
    ];

    const activeCategory = ref<string>("business");

    const filteredCourses = computed(() => {
      return activeCategory.value
        ? courses.filter((course) => course.category === activeCategory.value)
        : courses;
    });

    const setActiveCategory = (categoryId: string) => {
      activeCategory.value = categoryId;
    };

    return {
      categories,
      courses,
      activeCategory,
      filteredCourses,
      setActiveCategory,
    };
  },
});
</script>
