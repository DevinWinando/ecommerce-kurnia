<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px] relative z-[1] dark:bg-[#0a0e19]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <!-- Header Section -->
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] text-center mx-auto md:max-w-[455px]"
      >
        <span
          class="inline-block rounded-[30px] bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 py-[3.5px] px-[14px] mb-[12px] md:mb-[15px]"
        >
          {{ featuresData.tagline }}
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px]"
        >
          {{ featuresData.title.part1 }}
          <span class="italic gradient-color">{{
            featuresData.title.highlight
          }}</span>
          {{ featuresData.title.part2 }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ featuresData.subtitle }}
        </p>
      </div>

      <!-- Features Grid -->
      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] items-center"
      >
        <!-- Left Column Features -->
        <div class="order-1 lg:order-1">
          <div
            v-for="(feature, index) in featuresData.leftFeatures"
            :key="'left-' + index"
            class="flex gap-[15px] md:gap-[20px] mb-[30px] md:mb-[40px] lg:mb-[70px] xl:mb-[100px] last:mb-0 relative"
            :class="{
              'ltr:lg:left-[55px] rtl:lg:right-[55px]': index % 2 === 0,
            }"
          >
            <div class="flex-none">
              <img :src="feature.icon" :alt="feature.alt" />
            </div>
            <div>
              <h3
                class="!font-medium !text-md md:!text-lg lg:!text-[20px] !mb-[10px]"
              >
                {{ feature.title }}
              </h3>
              <p>{{ feature.description }}</p>
            </div>
          </div>
        </div>

        <!-- Center Image -->
        <div
          class="order-3 lg:order-2 md:col-span-2 lg:col-span-1 text-center relative md:-mx-[2.5px]"
        >
          <img
            :src="featuresData.centerImage.src"
            class="inline-block"
            :alt="featuresData.centerImage.alt"
          />
          <div
            class="absolute w-[157px] h-[41px] mx-auto left-0 right-0 -bottom-[20px] bg-[#343434] -z-[1]"
            style="filter: blur(30.650001525878906px)"
          ></div>
        </div>

        <!-- Right Column Features -->
        <div class="order-2 lg:order-3">
          <div
            v-for="(feature, index) in featuresData.rightFeatures"
            :key="'right-' + index"
            class="flex gap-[15px] md:gap-[20px] mb-[30px] md:mb-[40px] lg:mb-[70px] xl:mb-[100px] last:mb-0 relative"
            :class="{
              'ltr:lg:right-[55px] rtl:lg:left-[55px]': index % 2 === 0,
            }"
          >
            <div class="ltr:md:text-right rtl:md:text-left">
              <h3
                class="!font-medium !text-md md:!text-lg lg:!text-[20px] !mb-[10px]"
              >
                {{ feature.title }}
              </h3>
              <p>{{ feature.description }}</p>
            </div>
            <div class="flex-none">
              <img :src="feature.icon" :alt="feature.alt" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background Gradient -->
    <div
      class="absolute top-0 left-0 right-0 bottom-0 rounded-[15px] -z-[1] dark:hidden"
      style="
        background: radial-gradient(
            57.11% 57.11% at 50% 50%,
            rgba(255, 255, 255, 0) 61.06%,
            #e4e9ff 100%
          ),
          radial-gradient(
            37.42% 117.39% at 50% 50%,
            rgba(255, 255, 255, 0) 0%,
            #ecf0ff 100%
          );
      "
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import icon1 from "@/assets/images/school/icons/graduation.svg";
import icon2 from "@/assets/images/school/icons/calendar-cap.svg";
import icon3 from "@/assets/images/school/icons/user-settings.svg";
import icon4 from "@/assets/images/school/icons/group.svg";
import icon5 from "@/assets/images/school/icons/suit.svg";
import icon6 from "@/assets/images/school/icons/doc.svg";

import imageRobot from "@/assets/images/school/robot.png";

interface Feature {
  title: string;
  description: string;
  icon: string;
  alt: string;
}

interface FeaturesData {
  tagline: string;
  title: {
    part1: string;
    highlight: string;
    part2: string;
  };
  subtitle: string;
  leftFeatures: Feature[];
  rightFeatures: Feature[];
  centerImage: {
    src: string;
    alt: string;
  };
}

export default defineComponent({
  name: "Features",
  setup() {
    const featuresData: FeaturesData = {
      tagline: "Popular Features",
      title: {
        part1: "Powerful",
        highlight: "Features",
        part2: "Simple to Use",
      },
      subtitle: "Everything your school needs — from one easy dashboard",
      leftFeatures: [
        {
          title: "Student Profiles",
          description:
            "Store and manage student data, attendance, and grades in one place — accessible to staff, students, and parents securely.",
          icon: icon1,
          alt: "graduation",
        },
        {
          title: "Class Scheduling",
          description:
            "Automate class timetables, assign teachers, and avoid overlaps with smart scheduling tools tailored for academic institutions.",
          icon: icon2,
          alt: "calendar-cap",
        },
        {
          title: "Fee Management",
          description:
            "Track payments, send reminders, and generate receipts with ease — keep school finances transparent and organized.",
          icon: icon3,
          alt: "user-settings",
        },
      ],
      rightFeatures: [
        {
          title: "Parent Portal",
          description:
            "Enable real-time communication with parents about grades, attendance, announcements, and school events via a dedicated portal.",
          icon: icon4,
          alt: "group",
        },
        {
          title: "Staff Dashboard",
          description:
            "Enable real-time communication with parents about grades, attendance, announcements, and school events via a dedicated portal.",
          icon: icon5,
          alt: "suit",
        },
        {
          title: "Exam Reports",
          description:
            "Design, schedule, and evaluate exams — then generate detailed performance reports and analytics effortlessly.",
          icon: icon6,
          alt: "doc",
        },
      ],
      centerImage: {
        src: imageRobot,
        alt: "robot-image",
      },
    };

    return {
      featuresData,
    };
  },
});
</script>
