<template>
  <div
    class="pt-[145px] md:pt-[175px] lg:pt-[190px] xl:pt-[175px] pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[140px] relative z-[1] overflow-hidden"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="text-center mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] 2xl:mb-[70px]"
      >
        <span
          class="inline-block py-[4.5px] px-[15px] rounded-[100px] bg-orange-100 dark:bg-[#0a0e19] text-orange-700 mb-[12px]"
        >
          {{ sectionTag }}
        </span>
        <h2
          class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl mx-auto xl:max-w-[630px] !leading-[1.2] !mb-[10px] lg:!mb-[12px]"
        >
          {{ sectionTitle }}
        </h2>
        <p class="md:text-[15px] lg:text-md mx-auto xl:max-w-[615px]">
          {{ sectionDescription }}
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div v-for="(post, index) in blogPosts" :key="'post-' + index">
          <RouterLink
            :to="post.link"
            class="block rounded-[25px] mb-[20px] md:mb-[25px]"
          >
            <img
              :src="post.image"
              class="rounded-[25px] inline-block"
              :alt="post.imageAlt"
            />
          </RouterLink>
          <div class="lg:px-[15px] xl:px-[25px]">
            <h3
              class="!font-medium !text-lg md:!text-[20px] lg:!text-xl !mb-[12px] md:!mb-[15px] lg:!mb-[20px] !leading-[1.2]"
            >
              <RouterLink
                :to="post.link"
                class="hover:text-orange-600 transition-all"
              >
                {{ post.title }}
              </RouterLink>
            </h3>
            <p>
              {{ post.excerpt }}
            </p>
          </div>
        </div>
      </div>
    </div>
    <div
      class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-no-repeat bg-top -z-[1] dark:hidden"
      :style="{ background: backgroundGradient }"
    ></div>
    <div
      class="absolute top-[70px] md:top-[84px] lg:top-[91px] left-0 right-0 -z-[1]"
    >
      <img
        src="@/assets/images/marketing/perspective-grid.png"
        class="inline-block"
        alt="perspective-grid"
      />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import image1 from "@/assets/images/marketing/blogs/blog1.jpg";
import image2 from "@/assets/images/marketing/blogs/blog2.jpg";
import image3 from "@/assets/images/marketing/blogs/blog3.jpg";
import image4 from "@/assets/images/marketing/blogs/blog4.jpg";
import image5 from "@/assets/images/marketing/blogs/blog5.jpg";
import image6 from "@/assets/images/marketing/blogs/blog6.jpg";
import image7 from "@/assets/images/marketing/blogs/blog7.jpg";
import image8 from "@/assets/images/marketing/blogs/blog8.jpg";
import image9 from "@/assets/images/marketing/blogs/blog9.jpg";

interface BlogPost {
  title: string;
  excerpt: string;
  image: string;
  imageAlt: string;
  link: string;
}

export default defineComponent({
  name: "Blog",
  setup() {
    const sectionTag = "Blog";
    const sectionTitle =
      "Insights, Strategies, and Stories to Help You Market Smarter.";
    const sectionDescription =
      "Stay ahead of the curve with expert tips, industry trends, and product updates from the Trezo team.";
    const backgroundGradient = "linear-gradient(180deg, #ffefe1 0%, #fff 100%)";

    const blogPosts: BlogPost[] = [
      {
        title: "The Future of Data-Driven Marketing",
        excerpt:
          "Discover why real-time data is the new creative and how teams are shifting to smarter, measurable campaigns.",
        image: image1,
        imageAlt: "blog-image",
        link: "/blog-details",
      },
      {
        title: "7 Marketing Funnels That Actually Convert",
        excerpt:
          "Explore the funnel setups successful brands are using — and how you can apply them to your campaigns.",
        image: image2,
        imageAlt: "blog-image",
        link: "/blog-details",
      },
      {
        title: "Why Your Team Needs a Unified Marketing Tool",
        excerpt:
          "Learn how consolidating your marketing stack improves performance, saves time, and boosts ROI.",
        image: image3,
        imageAlt: "blog-image",
        link: "/blog-details",
      },
      {
        title: "How to Build a Scalable Marketing Engine from Scratch",
        excerpt:
          "Discover why real-time data is the new creative and how teams are shifting to smarter, measurable campaigns.",
        image: image4,
        imageAlt: "blog-image",
        link: "/blog-details",
      },
      {
        title: "The Hidden Cost of Switching Between Too Many Tools",
        excerpt:
          "Explore the funnel setups successful brands are using — and how you can apply them to your campaigns.",
        image: image5,
        imageAlt: "blog-image",
        link: "/blog-details",
      },
      {
        title: "From Leads to Loyalty: Mastering the Customer Auth",
        excerpt:
          "Learn how consolidating your marketing stack improves performance, saves time, and boosts ROI.",
        image: image6,
        imageAlt: "blog-image",
        link: "/blog-details",
      },
      {
        title: "Stop Guessing: How to Let Data Guide Marketing Move",
        excerpt:
          "Discover why real-time data is the new creative and how teams are shifting to smarter, measurable campaigns.",
        image: image7,
        imageAlt: "blog-image",
        link: "/blog-details",
      },
      {
        title: "What Most Teams Get Wrong About Marketing Automation",
        excerpt:
          "Explore the funnel setups successful brands are using — and how you can apply them to your campaigns.",
        image: image8,
        imageAlt: "blog-image",
        link: "/blog-details",
      },
      {
        title: "Turn Strategy into Revenue: The Marketer's Playbook",
        excerpt:
          "Learn how consolidating your marketing stack improves performance, saves time, and boosts ROI.",
        image: image9,
        imageAlt: "blog-image",
        link: "/blog-details",
      },
    ];

    return {
      sectionTag,
      sectionTitle,
      sectionDescription,
      backgroundGradient,
      blogPosts,
    };
  },
});
</script>
