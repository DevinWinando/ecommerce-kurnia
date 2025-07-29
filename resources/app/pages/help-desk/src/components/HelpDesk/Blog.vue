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
          {{ content.title }}
        </h2>
        <p class="md:text-[15px] lg:text-md">
          {{ content.subtitle }}
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div v-for="(blog, index) in content.blogs" :key="index">
          <RouterLink
            :to="blog.link"
            class="block rounded-[25px] mb-[20px] md:mb-[25px]"
          >
            <img
              :src="blog.image"
              class="rounded-[25px] inline-block"
              :alt="blog.imageAlt"
            />
          </RouterLink>
          <div class="lg:px-[15px] xl:px-[25px]">
            <h3
              class="!font-medium !text-lg md:!text-[20px] lg:!text-xl !mb-[12px] md:!mb-[15px] !leading-[1.2]"
            >
              <RouterLink
                :to="blog.link"
                class="hover:text-purple-600 transition-all"
              >
                {{ blog.title }}
              </RouterLink>
            </h3>
            <p>
              {{ blog.description }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

import image1 from "@/assets/images/helpdesk/blogs/blog1.jpg";
import image2 from "@/assets/images/helpdesk/blogs/blog2.jpg";
import image3 from "@/assets/images/helpdesk/blogs/blog3.jpg";

interface Blog {
  title: string;
  description: string;
  image: string;
  imageAlt: string;
  link: string;
}

interface Content {
  title: string;
  subtitle: string;
  blogs: Blog[];
}

export default defineComponent({
  name: "Blog",
  setup() {
    const content = ref<Content>({
      title: "Support Smarter, Not Harder",
      subtitle: "Insights, best practices, and updates from the Trezo team.",
      blogs: [
        {
          title: "Mastering Customer Support Workflows",
          description:
            "Discover how streamlined workflows can transform your support team's productivity and ensure no ticket ever falls through the cracks.",
          image: image1,
          imageAlt: "blog-image-1",
          link: "/blog-details",
        },
        {
          title: "The Power of a Unified Inbox",
          description:
            "Managing multiple channels? Learn how a unified inbox boosts efficiency, improves response times, and keeps your team in sync.",
          image: image2,
          imageAlt: "blog-image-2",
          link: "/blog-details",
        },
        {
          title: "Why Automation Is the Future of HelpDesks",
          description:
            "From auto-routing to response templates, explore how automation helps your agents focus on what really matters — helping customers.",
          image: image3,
          imageAlt: "blog-image-3",
          link: "/blog-details",
        },
      ],
    });

    return {
      content,
    };
  },
});
</script>
