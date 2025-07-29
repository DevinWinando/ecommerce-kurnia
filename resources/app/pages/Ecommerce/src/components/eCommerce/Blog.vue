<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[150px] 2xl:py-[180px]"
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
          v-for="(post, index) in blogPosts"
          :key="index"
          class="bg-[#f7f7f7] rounded-[15px] p-[20px] md:p-[30px] xl:p-[40px] dark:bg-[#0a0e19]"
        >
          <RouterLink :to="post.link" class="block rounded-[12px] text-center">
            <img
              :src="post.image"
              class="rounded-[12px]"
              :alt="post.imageAlt"
            />
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
          <p>{{ post.excerpt }}</p>
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

export default defineComponent({
  name: "Blog",
  setup() {
    const data = {
      sectionTagline: "From the Blog",
      sectionTitle: "Learn to Sell Smarter",
      sectionDescription:
        "Expert tips, growth guides, and eCommerce trends — fresh every week.",
      ctaText: "View All",
      ctaLink: "/blog",

      blogPosts: [
        {
          title: "eCommerce Metrics That Matter in 2025",
          excerpt:
            "Understand which numbers to watch and why they matter for growth.",
          author: "Trezo",
          date: "April 13, 2025",
          image: image1,
          imageAlt: "eCommerce metrics blog image",
          link: "/blog-details",
        },
        {
          title: "How to Design a Product Page That Converts",
          excerpt: "Boost sales with smarter UX and persuasive content.",
          author: "Trezo",
          date: "April 12, 2025",
          image: image2,
          imageAlt: "Product page design blog image",
          link: "/blog-details",
        },
        {
          title: "Avoid These 5 Inventory Mistakes",
          excerpt: "Save money, reduce churn, and improve operations.",
          author: "Trezo",
          date: "April 11, 2025",
          image: image3,
          imageAlt: "Inventory management blog image",
          link: "/blog-details",
        },
      ],
    };

    return {
      ...data,
    };
  },
});
</script>
