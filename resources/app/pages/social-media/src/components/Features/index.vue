<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          v-for="(feature, index) in features"
          :key="index"
          class="rounded-[15px] bg-[#f7f7f7] dark:bg-[#0a0e19] py-[25px] md:py-[45px] lg:py-[65px] px-[20px] md:px-[30px] lg:px-[40px]"
        >
          <div
            class="rounded-[4px] w-[58px] h-[58px] flex items-center justify-center mb-[25px] md:mb-[40px] lg:mb-[55px]"
            :style="gradientStyle"
          >
            <img
              :src="feature.icon"
              :alt="feature.title"
              class="w-[30px] h-[30px]"
            />
          </div>
          <h3
            class="!font-medium !text-lg md:!text-[20px] lg:!text-[22px] xl:!text-xl !mb-[12px] md:!mb-[18px]"
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
</template>

<script lang="ts">
import { defineComponent } from "vue";

import scheduleIcon from "@/assets/images/social-media/icons/schedule.svg";
import contentWritingIcon from "@/assets/images/social-media/icons/content-writing.svg";
import aiIcon from "@/assets/images/social-media/icons/ai.svg";
import ideaIcon from "@/assets/images/social-media/icons/idea.svg";

interface Feature {
  title: string;
  description: string;
  icon: string;
}

export default defineComponent({
  name: "Features",
  setup() {
    const features: Feature[] = [
      {
        title: "Smart Scheduling",
        description:
          "Automate your social posts across all platforms with drag-and-drop calendar.",
        icon: scheduleIcon,
      },
      {
        title: "Content Planner",
        description:
          "Visualize and organize your monthly strategy with a flexible editorial calendar.",
        icon: contentWritingIcon,
      },
      {
        title: "AI Captions",
        description:
          "Generate high-performing captions tailored to your brand tone and audience.",
        icon: aiIcon,
      },
      {
        title: "Hashtag Insights",
        description:
          "Discover trending and top-performing hashtags for each platform.",
        icon: ideaIcon,
      },
      {
        title: "Analytics Dashboard",
        description:
          "Track performance metrics across all your social channels in one place.",
        icon: scheduleIcon,
      },
      {
        title: "Team Collaboration",
        description:
          "Work seamlessly with your team on content creation and approval workflows.",
        icon: contentWritingIcon,
      },
    ];

    const gradientStyle = {
      background: "linear-gradient(180deg, #bf85fb 0%, #9135e8 100%)",
    };

    return {
      features,
      gradientStyle,
    };
  },
});
</script>
