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
          class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[12px] lg:!mb-[15px]"
        >
          Powerful <span class="text-purple-600 italic">Features</span>.
          Seamless Support.
        </h2>
        <p class="md:text-[15px] lg:text-md">
          Everything your team needs to deliver fast, efficient, and
          personalized customer support — all in one unified platform.
        </p>
      </div>

      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-[25px]"
      >
        <div
          v-for="(feature, index) in features"
          :key="index"
          class="bg-white dark:bg-[#0a0e19] rounded-[15px] px-[20px] py-[30px] md:px-[25px] md:py-[50px] lg:px-[45px] relative z-[1] group"
        >
          <div
            class="rounded-[15px] absolute top-0 left-0 right-0 bottom-0 -z-[1] dark:hidden"
            style="
              background: linear-gradient(180deg, #f6f8ff 0%, #f5ebff 100%);
            "
          ></div>
          <div
            class="mb-[30px] md:mb-[50px] lg:mb-[60px] w-[85px] h-[85px] flex items-center justify-center rounded-full bg-white dark:bg-dark transition-all group-hover:rounded-[15px]"
          >
            <img :src="feature.icon" :alt="feature.title" />
          </div>
          <h3
            class="!font-medium !text-lg md:!text-[20px] lg:!text-xl !mb-[15px] lg:!mb-[25px]"
          >
            {{ feature.title }}
          </h3>
          <p>{{ feature.description }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import icon1 from "@/assets/images/helpdesk/icons/lightbulb.svg";
import icon2 from "@/assets/images/helpdesk/icons/email.svg";
import icon3 from "@/assets/images/helpdesk/icons/refresh.svg";
import icon4 from "@/assets/images/helpdesk/icons/search.svg";

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
        title: "Smart Routing",
        description:
          "Automatically assign tickets based on issue type or workload.",
        icon: icon1,
      },
      {
        title: "Unified Inbox",
        description:
          "Manage emails, chats, and social messages from one place.",
        icon: icon2,
      },
      {
        title: "Real-Time Collaboration",
        description: "Internal notes and agent chat streamline teamwork.",
        icon: icon3,
      },
      {
        title: "Insight Reports",
        description:
          "View agent performance, resolution time, and customer trends.",
        icon: icon4,
      },
    ];

    return {
      features,
    };
  },
});
</script>
