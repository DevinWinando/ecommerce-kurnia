<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[150px] 2xl:py-[180px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div class="xl:max-w-[521px]">
          <img
            src="@/assets/images/lms-courses/why-choose-us.jpg"
            class="inline-block rounded-[25px]"
            alt="why-choose-us-image"
          />
        </div>
        <div>
          <div
            class="md:text-[15px] lg:text-md py-[4px] px-[17px] md:px-[18px] bg-[#ffef99] dark:bg-[#0a0e19] rounded-[100px] text-gray-900 dark:text-gray-200 inline-block"
          >
            <div class="flex items-center gap-[8px] md:gap-[10px]">
              <img src="@/assets/images/lms-courses/ico.svg" alt="ico" />
              {{ sectionTitle }}
            </div>
          </div>
          <h2
            class="!text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl md:-tracking-[1px] mt-[15px] !mb-[25px] md:!mb-[30px] xl:!mb-[40px] !text-gray-800 dark:!text-gray-100"
          >
            {{ heading }}
          </h2>
          <div
            v-for="(feature, index) in features"
            :key="index"
            class="bg-[#f0eedf] dark:bg-[#0a0e19] rounded-[15px] px-[20px] md:px-[30px] py-[20px] md:py-[22px] mb-[20px] md:mb-[23px] last:mb-0"
            :class="{
              'ltr:md:mr-[45px] rtl:md:ml-[45px]': index % 2 === 0,
              'ltr:md:ml-[45px] rtl:md:mr-[45px]': index % 2 !== 0,
            }"
          >
            <div class="relative ltr:md:pl-[65px] rtl:md:pr-[65px]">
              <i
                class="material-symbols-outlined md:absolute md:top-1/2 md:-translate-y-1/2 ltr:left-0 rtl:right-0 !text-[40px] md:!text-[46px] text-primary-600"
              >
                {{ feature.icon }}
              </i>
              <h3
                class="!text-gray-700 dark:!text-gray-100 !text-[18px] md:!text-[20px] !my-[10px] md:!mb-[5px] md:!mt-0"
              >
                {{ feature.title }}
              </h3>
              <p class="md:text-[15px] lg:text-md">
                {{ feature.description }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

interface Feature {
  icon: string;
  title: string;
  description: string;
}

export default defineComponent({
  name: "WhyChooseUs",
  setup() {
    const sectionTitle = "Why Choose Us";
    const heading = "Why Our LMS Stands Out";

    const features: Feature[] = [
      {
        icon: "collections_bookmark",
        title: "Diverse Course Catalog",
        description:
          "From tech to creative arts, access 1000+ expert-led courses.",
      },
      {
        icon: "monitoring",
        title: "Progress Tracking",
        description:
          "Interactive dashboards and real-time analytics to track your learning.",
      },
      {
        icon: "school",
        title: "Expert Instructors",
        description: "Learn from certified professionals and industry leaders.",
      },
      {
        icon: "devices",
        title: "Anytime, Anywhere Access",
        description: "Mobile-friendly platform for learning on the go.",
      },
      {
        icon: "workspace_premium",
        title: "Certificates & Badges",
        description:
          "Showcase your achievements with professional certification.",
      },
    ];

    return {
      sectionTitle,
      heading,
      features,
    };
  },
});
</script>
