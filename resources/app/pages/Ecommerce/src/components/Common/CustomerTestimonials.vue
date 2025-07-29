<template>
  <div
    class="pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[150px] 2xl:pb-[180px] relative z-[1]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="grid grid-cols-1 lg:grid-cols-2 gap-[18px] md:gap-[22px] mb-[35px] md:mb-[45px] lg:mb-[55px] xl:mb-[65px] items-center"
      >
        <div>
          <span
            class="inline-block py-[4.5px] px-[15px] text-primary-600 bg-primary-50 dark:bg-gray-900 rounded-[100px] mb-[12px]"
          >
            {{ sectionTagline }}
          </span>
          <h2
            class="!font-medium md:-tracking-[1px] !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl lg:max-w-[480px] xl:max-w-[540px] !leading-[1.2] !mb-[11px] md:!mb-[13px] lg:!mb-[15px]"
          >
            {{ sectionTitle }}
          </h2>
          <p>
            {{ sectionDescription }}
          </p>
        </div>
        <div class="ltr:lg:text-right rtl:lg:text-left">
          <RouterLink
            :to="ctaLink"
            class="inline-block py-[9px] px-[25px] md:py-[10.5px] md:px-[30px] font-medium text-white bg-primary-500 rounded-[100px] border border-primary-500 transition-all hover:bg-primary-600 hover:border-primary-600"
          >
            {{ ctaText }}
          </RouterLink>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          v-for="(testimonial, index) in testimonials"
          :key="index"
          class="px-[20px] py-[30px] md:px-[30px] md:py-[40px] lg:px-[40px] lg:py-[50px] xl:px-[50px] xl:py-[60px] bg-white dark:bg-[#0a0e19] rounded-[15px] relative z-[1]"
        >
          <div
            class="flex items-center text-orange-400 leading-none text-md lg:text-lg gap-[3px] mb-[18px] md:mb-[22px] lg:mb-[30px]"
          >
            <i v-for="star in 5" :key="star" class="ri-star-fill"></i>
          </div>
          <p class="md:text-[15px] lg:text-md">
            {{ testimonial.content }}
          </p>
          <div
            class="flex items-center gap-[12px] mt-[20px] md:mt-[25px] lg:mt-[40px] xl:mt-[50px]"
          >
            <img
              :src="testimonial.user.image"
              class="rounded-full w-[42px]"
              :alt="`${testimonial.user.name} image`"
            />
            <div>
              <h5 class="!text-base !mb-[3px] !font-semibold">
                {{ testimonial.user.name }}
              </h5>
              <span class="block">{{ testimonial.user.title }}</span>
            </div>
          </div>
          <div
            class="rounded-[15px] absolute top-0 left-0 right-0 bottom-0 -z-[1] dark:hidden"
            :style="testimonial.backgroundStyle"
          ></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/ecommerce/users/user1.jpg";
import image2 from "@/assets/images/ecommerce/users/user2.jpg";
import image3 from "@/assets/images/ecommerce/users/user3.jpg";

export default defineComponent({
  name: "CustomerTestimonials",
  setup() {
    const data = {
      sectionTagline: "Customer Testimonials",
      sectionTitle: "What Store Owners Say About Trezo",
      sectionDescription:
        "Real feedback from real users — building better eCommerce with Trezo.",
      ctaText: "View All Feedback",
      ctaLink: "/testimonials",

      testimonials: [
        {
          content:
            "Trezo has completely transformed how we run our store. The real-time dashboard gives us a clear view of sales and stock, and the marketing tools helped us scale faster than expected. It's like having a full team behind us.",
          user: {
            name: "Alex H.",
            title: "Apparel Store Owner",
            image: image1,
          },
          backgroundStyle: `
            background: linear-gradient(
                0deg,
                rgba(255, 255, 255, 0.2) 0%,
                rgba(255, 255, 255, 0.2) 100%
              ),
              linear-gradient(180deg, #faf5ff 0%, #ecf0ff 100%);
          `,
        },
        {
          content:
            "We were juggling multiple tools for sales tracking, email, & product analytics — until we found Trezo. Now everything's in one place. It saves time, reduces errors, & helps us grow smarter. Highly recommended for serious store owners.",
          user: {
            name: "Monica R.",
            title: "Shopify Seller",
            image: image2,
          },
          backgroundStyle: `
            background: linear-gradient(
                0deg,
                rgba(255, 255, 255, 0.2) 0%,
                rgba(255, 255, 255, 0.2) 100%
              ),
              linear-gradient(180deg, #faf5ff 0%, #ecf0ff 100%);
          `,
        },
        {
          content:
            "I love how intuitive Trezo is. Even my team members with no tech background can use it easily. The analytics are easy to digest, and the automation features are powerful. We've seen a big jump in engagement and retention.",
          user: {
            name: "Daniel K.",
            title: "Fitness Gear Retailer",
            image: image3,
          },
          backgroundStyle: `
            background: linear-gradient(
                0deg,
                rgba(255, 255, 255, 0.2) 0%,
                rgba(255, 255, 255, 0.2) 100%
              ),
              linear-gradient(180deg, #faf5ff 0%, #ecf0ff 100%);
          `,
        },
      ],
    };

    return {
      ...data,
    };
  },
});
</script>
