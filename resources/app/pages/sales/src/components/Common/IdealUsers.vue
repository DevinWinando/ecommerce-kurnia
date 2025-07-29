<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] text-center mx-auto md:max-w-[415px]"
    >
      <span
        class="inline-block font-medium text-[#7a857d] rounded-[30px] border border-[#ebebe0] dark:border-gray-800 py-[5.5px] px-[18px] mb-[12px] md:mb-[15px]"
      >
        {{ content.tagline }}
      </span>
      <h2
        class="!text-[#06201B] dark:!text-white md:-tracking-[1px] !font-medium !text-2xl md:!text-3xl lg:!text-4xl !leading-[1.2] !mb-[12px] md:!mb-[15px]"
      >
        {{ content.title }}
      </h2>
      <p class="md:text-[15px] lg:text-md text-[#7a857d]">
        {{ content.subtitle }}
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] items-center">
      <div
        class="text-center ltr:lg:text-right rtl:lg:text-left ltr:lg:-mr-[70px] rtl:lg:-ml-[70px]"
      >
        <img
          :src="content.image.src"
          class="inline-block"
          :alt="content.image.alt"
        />
      </div>
      <div class="lg:col-span-2 ltr:lg:ml-[125px] rtl:lg:mr-[125px]">
        <div
          v-for="(role, index) in content.roles"
          :key="index"
          class="border-b border-[#ebebe0] dark:border-gray-800 pb-[20px] md:pb-[25px] lg:pb-[35px] mb-[20px] md:mb-[25px] lg:mb-[35px] last:border-b-0 last:pb-0 last:mb-0 xl:max-w-[545px]"
          :class="{
            'ltr:lg:ml-[90px] rtl:lg:mr-[90px]': index === 1,
            'ltr:lg:ml-[180px] rtl:lg:mr-[180px]': index === 2,
          }"
        >
          <img :src="role.icon.src" :alt="role.icon.alt" />
          <h3
            class="!font-medium !text-md md:!text-lg lg:!text-[20px] !text-[#06201B] dark:!text-white !mb-[10px] mt-[22px]"
          >
            {{ role.title }}
          </h3>
          <p class="lg:max-w-[385px] text-[#7a857d]">
            {{ role.description }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

import image from "@/assets/images/sales/woman-seat.png";

import icon1 from "@/assets/images/sales/icons/target.svg";
import icon2 from "@/assets/images/sales/icons/chart.svg";
import icon3 from "@/assets/images/sales/icons/lightbulb.svg";

interface Role {
  title: string;
  description: string;
  icon: {
    src: string;
    alt: string;
  };
}

interface Content {
  tagline: string;
  title: string;
  subtitle: string;
  image: {
    src: string;
    alt: string;
  };
  roles: Role[];
}

export default defineComponent({
  name: "IdealUsers",
  setup() {
    const content = ref<Content>({
      tagline: "Ideal Users",
      title: "Made for Every Sales Role",
      subtitle:
        "Whether you're a solo rep or a full sales team — Trezo fits your flow.",
      image: {
        src: image,
        alt: "woman-seat-image",
      },
      roles: [
        {
          title: "Sales Representatives",
          description:
            "Track leads, follow up automatically, and hit your quota with less effort. Trezo helps reps stay organized, responsive, and always ready to close.",
          icon: {
            src: icon1,
            alt: "target",
          },
        },
        {
          title: "Sales Managers",
          description:
            "Monitor team performance, assign deals, and forecast revenue with clarity. Trezo gives managers real-time visibility and the tools to coach effectively.",
          icon: {
            src: icon2,
            alt: "chart",
          },
        },
        {
          title: "Agencies & Consultants",
          description:
            "Manage multiple clients, pipelines, and proposals with ease. Trezo keeps your agency efficient, professional, and ready to deliver results that impress.",
          icon: {
            src: icon3,
            alt: "lightbulb",
          },
        },
      ],
    });

    return {
      content,
    };
  },
});
</script>
