<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[150px] 2xl:py-[180px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="text-center mb-[35px] md:mb-[45px] lg:mb-[55px] xl:mb-[65px]">
        <span
          class="inline-block py-[4.5px] px-[15px] text-primary-600 bg-primary-50 dark:bg-gray-900 rounded-[100px] mb-[12px]"
        >
          From the Blog
        </span>
        <h2
          class="!font-medium md:-tracking-[1px] !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl lg:max-w-[480px] xl:max-w-[540px] mx-auto !leading-[1.2] !mb-[11px] md:!mb-[13px] lg:!mb-[15px]"
        >
          Learn to Sell Smarter
        </h2>
        <p>
          Expert tips, growth guides, and eCommerce trends — fresh every week.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          v-for="post in blogPosts"
          :key="post.id"
          class="bg-[#f7f7f7] rounded-[15px] p-[20px] md:p-[30px] xl:p-[40px] dark:bg-[#0a0e19]"
        >
          <RouterLink :to="post.link" class="block rounded-[12px] text-center">
            <img :src="post.image" class="rounded-[12px]" :alt="post.alt" />
          </RouterLink>
          <ul
            class="mt-[20px] md:mt-[25px] lg:mt-[30px] mb-[15px] lg:mb-[18px]"
          >
            <li
              class="relative inline-block ltr:pl-[24px] rtl:pr-[24px] mx-[10px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0"
            >
              <i
                class="ri-user-line text-lg absolute top-1/2 ltr:left-0 rtl:right-0 -translate-y-1/2 text-primary-500"
              ></i>
              By: {{ post.author }}
            </li>
            <li
              class="relative inline-block ltr:pl-[24px] rtl:pr-[24px] mx-[10px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0"
            >
              <i
                class="ri-calendar-line text-lg absolute top-1/2 ltr:left-0 rtl:right-0 -translate-y-1/2 text-primary-500"
              ></i>
              {{ post.date }}
            </li>
          </ul>
          <h3
            class="!font-medium !text-lg md:!text-[20px] lg:!text-[22px] xl:!text-xl !leading-[1.2] !mb-[15px] lg:!mb-[18px]"
          >
            <RouterLink
              :to="post.link"
              class="transition-all hover:text-primary-500"
            >
              {{ post.title }}
            </RouterLink>
          </h3>
          <p>{{ post.description }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/ecommerce/blogs/blog1.jpg";
import image2 from "@/assets/images/ecommerce/blogs/blog2.jpg";
import image3 from "@/assets/images/ecommerce/blogs/blog3.jpg";
import image4 from "@/assets/images/ecommerce/blogs/blog4.jpg";
import image5 from "@/assets/images/ecommerce/blogs/blog5.jpg";
import image6 from "@/assets/images/ecommerce/blogs/blog6.jpg";
import image7 from "@/assets/images/ecommerce/blogs/blog7.jpg";
import image8 from "@/assets/images/ecommerce/blogs/blog8.jpg";
import image9 from "@/assets/images/ecommerce/blogs/blog9.jpg";

export default defineComponent({
  name: "Blog",
  data() {
    return {
      blogPosts: [
        {
          id: 1,
          image: image1,
          alt: "blog-image",
          author: "Trezo",
          date: "April 13, 2025",
          link: "/blog-details",
          title: "eCommerce Metrics That Matter in 2025",
          description:
            "Understand which numbers to watch and why they matter for growth.",
        },
        {
          id: 2,
          image: image2,
          alt: "blog-image",
          author: "Trezo",
          date: "April 12, 2025",
          link: "/blog-details",
          title: "How to Design a Product Page That Converts",
          description: "Boost sales with smarter UX and persuasive content.",
        },
        {
          id: 3,
          image: image3,
          alt: "blog-image",
          author: "Trezo",
          date: "April 11, 2025",
          link: "/blog-details",
          title: "Avoid These 5 Inventory Mistakes",
          description: "Save money, reduce churn, and improve operations.",
        },
        {
          id: 4,
          image: image4,
          alt: "blog-image",
          author: "Trezo",
          date: "April 13, 2025",
          link: "/blog-details",
          title: "Boosting AOV: Proven Upselling Tactics",
          description:
            "Understand which numbers to watch and why they matter for growth.",
        },
        {
          id: 5,
          image: image5,
          alt: "blog-image",
          author: "Trezo",
          date: "April 12, 2025",
          link: "/blog-details",
          title: "The Secret to Faster Checkout Experiences",
          description: "Boost sales with smarter UX and persuasive content.",
        },
        {
          id: 6,
          image: image6,
          alt: "blog-image",
          author: "Trezo",
          date: "April 11, 2025",
          link: "/blog-details",
          title: "Mobile Commerce Trends to Watch",
          description: "Save money, reduce churn, and improve operations.",
        },
        {
          id: 7,
          image: image7,
          alt: "blog-image",
          author: "Trezo",
          date: "April 13, 2025",
          link: "/blog-details",
          title: "How to Optimize Product Listings for SEO",
          description:
            "Understand which numbers to watch and why they matter for growth.",
        },
        {
          id: 8,
          image: image8,
          alt: "blog-image",
          author: "Trezo",
          date: "April 12, 2025",
          link: "/blog-details",
          title: "Crafting High-Converting Email Campaigns",
          description: "Boost sales with smarter UX and persuasive content.",
        },
        {
          id: 9,
          image: image9,
          alt: "blog-image",
          author: "Trezo",
          date: "April 11, 2025",
          link: "/blog-details",
          title: "Streamlining Returns to Improve Customer Loyalty",
          description: "Save money, reduce churn, and improve operations.",
        },
      ],
    };
  },
});
</script>
