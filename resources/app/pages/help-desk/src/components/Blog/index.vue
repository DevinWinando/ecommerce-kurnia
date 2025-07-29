<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[150px]"
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
          Support Smarter, Not Harder
        </h2>
        <p class="md:text-[15px] lg:text-md">
          Insights, best practices, and updates from the Trezo team.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div v-for="blog in blogs" :key="blog.id">
          <RouterLink
            to="/blog-details"
            class="block rounded-[25px] mb-[20px] md:mb-[25px]"
          >
            <img
              :src="blog.image"
              class="rounded-[25px] inline-block w-full h-auto"
              :alt="blog.title"
            />
          </RouterLink>
          <div class="lg:px-[15px] xl:px-[25px]">
            <h3
              class="!font-medium !text-lg md:!text-[20px] lg:!text-xl !mb-[12px] md:!mb-[15px] !leading-[1.2]"
            >
              <RouterLink
                to="/blog-details"
                class="hover:text-purple-600 transition-all"
              >
                {{ blog.title }}
              </RouterLink>
            </h3>
            <p>{{ blog.excerpt }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/helpdesk/blogs/blog1.jpg";
import image2 from "@/assets/images/helpdesk/blogs/blog2.jpg";
import image3 from "@/assets/images/helpdesk/blogs/blog3.jpg";
import image4 from "@/assets/images/helpdesk/blogs/blog4.jpg";
import image5 from "@/assets/images/helpdesk/blogs/blog5.jpg";
import image6 from "@/assets/images/helpdesk/blogs/blog6.jpg";
import image7 from "@/assets/images/helpdesk/blogs/blog7.jpg";
import image8 from "@/assets/images/helpdesk/blogs/blog8.jpg";
import image9 from "@/assets/images/helpdesk/blogs/blog9.jpg";

interface Blog {
  id: number;
  title: string;
  excerpt: string;
  image: string;
}

export default defineComponent({
  name: "Blog",
  setup() {
    const blogs: Blog[] = [
      {
        id: 1,
        title: "Mastering Customer Support Workflows",
        excerpt:
          "Discover how streamlined workflows can transform your support team's productivity and ensure no ticket ever falls through the cracks.",
        image: image1,
      },
      {
        id: 2,
        title: "The Power of a Unified Inbox",
        excerpt:
          "Managing multiple channels? Learn how a unified inbox boosts efficiency, improves response times, and keeps your team in sync.",
        image: image2,
      },
      {
        id: 3,
        title: "Why Automation Is the Future of HelpDesks",
        excerpt:
          "From auto-routing to response templates, explore how automation helps your agents focus on what really matters — helping customers.",
        image: image3,
      },
      {
        id: 4,
        title: "Enhancing Customer Experience Through Smart Routing",
        excerpt:
          "Discover how streamlined workflows can transform your support team's productivity and ensure no ticket ever falls through the cracks.",
        image: image4,
      },
      {
        id: 5,
        title: "How AI Is Reshaping Customer Support",
        excerpt:
          "Managing multiple channels? Learn how a unified inbox boosts efficiency, improves response times, and keeps your team in sync.",
        image: image5,
      },
      {
        id: 6,
        title: "Scaling Support Without Sacrificing Quality",
        excerpt:
          "From auto-routing to response templates, explore how automation helps your agents focus on what really matters — helping customers.",
        image: image6,
      },
      {
        id: 7,
        title: "The Role of Data in Modern Helpdesk Operations",
        excerpt:
          "Discover how streamlined workflows can transform your support team's productivity and ensure no ticket ever falls through the cracks.",
        image: image7,
      },
      {
        id: 8,
        title: "Personalization in Support: Why It Matters More Than Ever",
        excerpt:
          "Managing multiple channels? Learn how a unified inbox boosts efficiency, improves response times, and keeps your team in sync.",
        image: image8,
      },
      {
        id: 9,
        title: "From Chaos to Clarity: Organizing Your Support Strategy",
        excerpt:
          "From auto-routing to response templates, explore how automation helps your agents focus on what really matters — helping customers.",
        image: image9,
      },
    ];

    return {
      blogs,
    };
  },
});
</script>
