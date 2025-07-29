<template>
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[110px] xl:pt-[130px] 2xl:pt-[150px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
        <div class="ltr:xl:pr-[53px] rtl:xl:pl-[53px]">
          <h2
            class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[10px] lg:!mb-[12px]"
          >
            {{ content.title }}
          </h2>
          <span
            class="block font-medium md:text-[15px] lg:text-md mb-[10px] md:mb-[20px] lg:mb-[25px]"
          >
            {{ content.subtitle }}
          </span>
          <p class="md:max-w-[521px]">
            {{ content.description }}
          </p>

          <div class="my-[25px] md:my-[30px] lg:my-[40px] xl:my-[45px]">
            <div
              v-for="(feature, index) in content.features"
              :key="index"
              class="mb-[15px] md:mb-[20px] lg:mb-[25px] last:mb-0 text-[15px] md:text-[17px] lg:text-lg xl:text-[20px] flex items-center gap-[15px] md:gap-[20px] font-medium text-gray-700 dark:text-white"
            >
              <div
                class="w-[55px] h-[55px] md:w-[65px] md:h-[65px] rounded-full flex items-center justify-center bg-purple-50 dark:bg-[#0a0e19] border border-purple-100 dark:border-gray-700"
              >
                <img :src="feature.icon" :alt="feature.alt" />
              </div>
              {{ feature.text }}
            </div>
          </div>
          <a
            :href="content.cta.url"
            class="inline-block font-medium rounded-[100px] bg-purple-600 border border-purple-600 text-base text-white py-[9px] md:py-[10.5px] px-[25px] md:px-[30px] transition-all hover:bg-purple-500 hover:border-purple-500"
            target="_blank"
          >
            {{ content.cta.text }}
          </a>
        </div>
        <div class="text-center ltr:xl:-ml-[53px] rtl:xl:-mr-[53px]">
          <img
            :src="content.image.src"
            class="inline-block"
            :alt="content.image.alt"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

import icon1 from "@/assets/images/helpdesk/icons/robot.svg";
import icon2 from "@/assets/images/helpdesk/icons/chart.svg";
import icon3 from "@/assets/images/helpdesk/icons/response.svg";
import icon4 from "@/assets/images/helpdesk/icons/inbox.svg";

import chooseUsImage from "@/assets/images/helpdesk/why-choose-us.png";

interface Feature {
  icon: string;
  alt: string;
  text: string;
}

interface Content {
  title: string;
  subtitle: string;
  description: string;
  features: Feature[];
  cta: {
    text: string;
    url: string;
  };
  image: {
    src: string;
    alt: string;
  };
}

export default defineComponent({
  name: "WhyChooseUs",
  setup() {
    const content = ref<Content>({
      title: "What is Trezo HelpDesk?",
      subtitle: "A complete customer service suite for growing teams.",
      description:
        "Trezo HelpDesk centralizes support communication across email, chat, and social. Automate repetitive tasks, route tickets intelligently, and track performance — all in real time.",
      features: [
        {
          icon: icon1,
          alt: "robot",
          text: "Intelligent ticket automation",
        },
        {
          icon: icon2,
          alt: "chart",
          text: "Performance analytics in real time",
        },
        {
          icon: icon3,
          alt: "response",
          text: "Faster response & resolution workflow",
        },
        {
          icon: icon4,
          alt: "inbox",
          text: "Centralized Inbox for all support channels",
        },
      ],
      cta: {
        text: "Try It Free",
        url: "https://trezo-twcss.envytheme.com/",
      },
      image: {
        src: chooseUsImage,
        alt: "why-choose-us",
      },
    });

    return {
      content,
    };
  },
});
</script>
