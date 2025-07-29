<template>
  <div
    class="dark:bg-[#0a0e19] py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px] relative z-[1]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px] text-center mx-auto md:max-w-[455px]"
      >
        <span
          class="inline-block rounded-[30px] bg-primary-500 text-white py-[4.5px] px-[14px] mb-[12px] md:mb-[15px]"
        >
          {{ header.tagline }}
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-2xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px]"
        >
          {{ header.title }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ header.description }}
        </p>
      </div>
      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] items-center"
      >
        <div
          v-for="(testimonial, index) in testimonials"
          :key="index"
          class="p-[20px] md:p-[30px] xl:p-[40px] bg-white dark:bg-dark rounded-[15px] md:rounded-[25px] border border-gray-200 dark:border-gray-800"
          :style="boxShadowStyle"
        >
          <div
            class="flex items-center text-orange-400 leading-none text-md gap-[2px] mb-[13px] md:mb-[20px]"
          >
            <i v-for="star in 5" :key="star" class="ri-star-fill"></i>
          </div>
          <p>{{ testimonial.quote }}</p>
          <div
            class="flex items-center gap-[12px] mt-[15px] md:mt-[20px] lg:mt-[27px]"
          >
            <img
              :src="testimonial.avatar"
              class="rounded-full w-[42px]"
              :alt="`${testimonial.name} image`"
            />
            <div>
              <h5 class="!text-base !mb-[4px] !font-semibold">
                {{ testimonial.name }}
              </h5>
              <span class="block">{{ testimonial.position }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="absolute top-0 left-0 right-0 bottom-0 lg:rounded-[30px] -z-[1] bg-center bg-no-repeat bg-cover lg:mx-[15px] xl:mx-[30px] dark:hidden"
      :style="backgroundStyle"
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/saas/users/user1.jpg";
import image2 from "@/assets/images/saas/users/user2.jpg";
import image3 from "@/assets/images/saas/users/user3.jpg";
import image4 from "@/assets/images/saas/users/user4.jpg";
import image5 from "@/assets/images/saas/users/user5.jpg";
import image6 from "@/assets/images/saas/users/user6.jpg";
import image7 from "@/assets/images/saas/users/user7.jpg";
import image8 from "@/assets/images/saas/users/user8.jpg";
import image9 from "@/assets/images/saas/users/user9.jpg";

import bgImage from "@/assets/images/saas/testimonials-bg.jpg";

interface Testimonial {
  quote: string;
  name: string;
  position: string;
  avatar: string;
}

interface HeaderData {
  tagline: string;
  title: string;
  description: string;
}

export default defineComponent({
  name: "Testimonials",
  setup() {
    const header: HeaderData = {
      tagline: "Testimonials",
      title: "See What Users Are Saying",
      description:
        "Real feedback from real users who streamlined their operations with Trezo.",
    };

    const testimonials: Testimonial[] = [
      {
        quote:
          "Trezo has completely transformed how we manage projects. The real-time insights and seamless collaboration tools are unmatched!",
        name: "Sophia Reed",
        position: "Project Manager",
        avatar: image1,
      },
      {
        quote:
          "Switching to Trezo was the best decision we made. Our workflows are faster.",
        name: "Olivia Johnson",
        position: "Designer",
        avatar: image2,
      },
      {
        quote:
          "I'm impressed by how intuitive Trezo's dashboard is. It keeps everything organized and visible in real time.",
        name: "Daniel Cho",
        position: "Head of Operations",
        avatar: image3,
      },
      {
        quote:
          "Trezo's automation tools saved us countless hours every week. Highly recommend it for any scaling business!",
        name: "Marcus Nguyen",
        position: "Business Development Manager",
        avatar: image4,
      },
      {
        quote:
          "With Trezo, collaboration across departments is finally smooth and effortless. It's truly a powerhouse SaaS platform!",
        name: "Rachel Carter",
        position: "Marketing Strategist",
        avatar: image5,
      },
      {
        quote:
          "From day one, Trezo made it easier to keep projects, people, and progress aligned.",
        name: "Ethan Brooks",
        position: "Operations Coordinator",
        avatar: image6,
      },
      {
        quote: "The insights we gather from Trezo's dashboard are priceless.",
        name: "Nina Garcia",
        position: "Data Analyst",
        avatar: image7,
      },
      {
        quote:
          "Managing client accounts used to be chaotic — now, thanks to Trezo, it's streamlined and stress-free!",
        name: "Adam Scott",
        position: "Account Manager",
        avatar: image8,
      },
      {
        quote:
          "Trezo's reporting features and customizable workflows have leveled up our agency's service delivery big time.",
        name: "Amelia Hayes",
        position: "Agency Director",
        avatar: image9,
      },
    ];

    const boxShadowStyle = {
      boxShadow:
        "14px 181px 51px 0px rgba(0, 0, 0, 0), 9px 116px 46px 0px rgba(0, 0, 0, 0), 5px 65px 39px 0px rgba(0, 0, 0, 0.02), 2px 29px 29px 0px rgba(0, 0, 0, 0.03), 1px 7px 16px 0px rgba(0, 0, 0, 0.03)",
    };

    const backgroundStyle = {
      backgroundImage: `url(${bgImage})`,
    };

    return {
      header,
      testimonials,
      boxShadowStyle,
      backgroundStyle,
    };
  },
});
</script>
