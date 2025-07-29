<template>
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[110px] xl:pt-[130px] 2xl:pt-[150px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] text-center mx-auto md:max-w-[630px]"
      >
        <h2
          class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[10px] lg:!mb-[12px]"
        >
          {{ title }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ description }}
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          v-for="(testimonial, index) in testimonials"
          :key="index"
          class="px-[20px] py-[30px] md:px-[30px] md:py-[40px] lg:px-[40px] lg:py-[50px] xl:px-[50px] xl:py-[70px] bg-white dark:bg-[#0a0e19] rounded-[15px] relative z-[1]"
        >
          <div
            class="flex items-center text-orange-400 leading-none text-md lg:text-lg gap-[3px] mb-[18px] md:mb-[22px] lg:mb-[30px]"
          >
            <i v-for="star in 5" :key="star" class="ri-star-fill"></i>
          </div>

          <p
            class="font-medium text-gray-700 dark:text-gray-100 text-[15px] md:text-md lg:text-[17px] xl:text-lg"
          >
            {{ testimonial.quote }}
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
            style="
              background: linear-gradient(180deg, #f6f8ff 0%, #f5ebff 100%);
            "
          ></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/helpdesk/users/user1.jpg";
import image2 from "@/assets/images/helpdesk/users/user2.jpg";
import image3 from "@/assets/images/helpdesk/users/user3.jpg";

interface Testimonial {
  name: string;
  position: string;
  quote: string;
  avatar: string;
  rating: number;
}

export default defineComponent({
  name: "Testimonials",
  setup() {
    const title = "What Users Are Saying";
    const description =
      "Hear how Trezo is transforming support for real businesses.";

    const testimonials: Testimonial[] = [
      {
        name: "Rachel Nguyen",
        position: "Growth Marketing Lead, BrightDash",
        quote:
          "Trezo HelpDesk has completely streamlined our support operations. The unified inbox and real-time dashboard help our team stay aligned and resolve issues faster. We've reduced our average response time by nearly 40%.",
        avatar: image1,
        rating: 5,
      },
      {
        name: "Michael Brooks",
        position: "Senior Digital Strategist, Amply Media",
        quote:
          "I love how easy it is to automate ticket routing and follow-ups in Trezo. It saves our agents hours every week and has improved our SLA compliance dramatically. It's a must-have for scaling support.",
        avatar: image2,
        rating: 5,
      },
      {
        name: "Lila Fernandez",
        position: "Head of Marketing, Corelytics",
        quote:
          "Trezo's integration with Slack and our CRM means our support team never misses a beat. Internal collaboration is smoother, and we've seen a noticeable uptick in customer satisfaction since switching.",
        avatar: image3,
        rating: 5,
      },
    ];

    return {
      title,
      description,
      testimonials,
    };
  },
});
</script>
