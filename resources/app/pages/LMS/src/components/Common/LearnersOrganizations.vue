<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1400px] 2xl:max-w-[1705px] mx-auto px-[12px]"
  >
    <div
      class="bg-[#f0eedf] dark:bg-[#0a0e19] rounded-[25px] py-[70px] md:py-[90px] lg:py-[110px] xl:py-[120px] px-[20px] md:px-[50px] lg:px-[70px]"
    >
      <span
        class="block text-[16px] md:text-[18px] lg:text-[20px] font-medium text-center text-gray-700 dark:text-gray-100 mb-[30px] md:mb-[40px] lg:mb-[50px]"
      >
        Trusted by Learners & Organizations Worldwide
      </span>

      <div
        class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 xl:flex gap-[20px] md:gap-[25px] items-center justify-between"
      >
        <img
          v-for="organization in organizations"
          :key="organization.id"
          :src="organization.image"
          :alt="organization.alt"
          class="inline-block dark:invert"
        />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/lms-courses/learners-organizations/lo1.svg";
import image2 from "@/assets/images/lms-courses/learners-organizations/lo2.svg";
import image3 from "@/assets/images/lms-courses/learners-organizations/lo3.svg";
import image4 from "@/assets/images/lms-courses/learners-organizations/lo4.svg";
import image5 from "@/assets/images/lms-courses/learners-organizations/lo5.svg";
import image6 from "@/assets/images/lms-courses/learners-organizations/lo6.svg";

interface Partner {
  id: number;
  image: string;
  alt: string;
}

export default defineComponent({
  name: "LearnersOrganizations",
  setup() {
    const organizations: Partner[] = [
      { id: 1, image: image1, alt: "learners-organizations-image" },
      { id: 2, image: image2, alt: "learners-organizations-image" },
      { id: 3, image: image3, alt: "learners-organizations-image" },
      { id: 4, image: image4, alt: "learners-organizations-image" },
      { id: 5, image: image5, alt: "learners-organizations-image" },
      { id: 6, image: image6, alt: "learners-organizations-image" },
    ];

    return { organizations };
  },
});
</script>
