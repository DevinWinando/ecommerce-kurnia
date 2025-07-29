<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px] px-[20px] md:px-[25px] lg:px-0 bg-[#ebebe0] dark:bg-[#0a0e19] rounded-[20px] md:rounded-[35px] overflow-hidden"
      >
        <div
          class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] text-center mx-auto md:max-w-[415px]"
        >
          <span
            class="inline-block font-medium text-[#7a857d] rounded-[30px] border border-gray-200 dark:border-gray-800 py-[5.5px] px-[18px] mb-[12px] md:mb-[15px]"
          >
            Customer Testimonials
          </span>
          <h2
            class="!text-[#06201B] dark:!text-white md:-tracking-[1px] !font-medium !text-2xl md:!text-3xl lg:!text-4xl !leading-[1.2] !mb-[12px] md:!mb-[15px]"
          >
            What Sales Teams Say About Trezo
          </h2>
          <p class="md:text-[15px] lg:text-md text-[#7a857d]">
            Real feedback from the pros who close more deals, faster — thanks to
            Trezo.
          </p>
        </div>

        <div
          class="ltr:lg:-ml-[125px] ltr:lg:-mr-[220px] rtl:lg:-mr-[125px] rtl:lg:-ml-[220px]"
        >
          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[25px]"
          >
            <TestimonialCard
              v-for="(testimonial, index) in firstRowTestimonials"
              :key="index"
              :testimonial="testimonial"
            />
          </div>
        </div>

        <div class="ltr:lg:-ml-[300px] rtl:lg:-mr-[300px] mt-[25px]">
          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[25px]"
          >
            <TestimonialCard
              v-for="(testimonial, index) in secondRowTestimonials"
              :key="index + 4"
              :testimonial="testimonial"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import TestimonialCard from "./TestimonialCard.vue";

import image1 from "@/assets/images/sales/users/user1.jpg";
import image2 from "@/assets/images/sales/users/user2.jpg";
import image3 from "@/assets/images/sales/users/user3.jpg";
import image4 from "@/assets/images/sales/users/user4.jpg";
import image5 from "@/assets/images/sales/users/user5.jpg";
import image6 from "@/assets/images/sales/users/user6.jpg";

export default defineComponent({
  name: "Testimonials",
  components: {
    TestimonialCard,
  },
  data() {
    return {
      testimonials: [
        {
          rating: 5,
          text: "Trezo changed the way we manage campaigns. Everything's faster, clearer, and way more collaborative. Our ROI improved within weeks.",
          name: "Rachel Nguyen",
          role: "Growth Marketing @ BrightDash",
          image: image1,
        },
        {
          rating: 4.5,
          text: "Trezo helped us cut our sales cycle in half. The real-time dashboard and automation features are game changers for fast-moving teams.",
          name: "Lisa Grant",
          role: "Sales Director @ LaunchPoint",
          image: image2,
        },
        {
          rating: 4,
          text: "I can finally track my pipeline, team goals, and forecast all in one place. It's made my job 10x easier.",
          name: "Mark E",
          role: "Sales Manager @ FreshFlow",
          image: image3,
        },
        {
          rating: 5,
          text: "The lead capture and follow-up flows are genius. We've seen a 30% boost in conversions within two months of switching to Trezo.",
          name: "Alyssa Chen",
          role: "BDR @ GrowthSphere",
          image: image4,
        },
        {
          rating: 5,
          text: "I've used everything from spreadsheets to CRMs — Trezo finally gets it right for salespeople who want to sell, not babysit tools.",
          name: "Emily R.",
          role: "Account Executive @ ZentoTech",
          image: image1,
        },
        {
          rating: 4.5,
          text: "As an agency, managing multiple sales pipelines used to be a nightmare. Trezo keeps it all clean, clear, and efficient.",
          name: "Jason Lee",
          role: "Founder @ StratEdge Consulting",
          image: image6,
        },
        {
          rating: 4,
          text: "Unified communications, great support, and automation that just works. Trezo fits right into our workflow — no learning curve at all.",
          name: "Rachel Adams",
          role: "SDR Team Lead @ LoopHire",
          image: image5,
        },
        {
          rating: 5,
          text: "The reporting tools in Trezo gave us insights we didn't know we were missing. Better data means better decisions.",
          name: "Victor T.",
          role: "Head of Sales Ops @ Nexify",
          image: image1,
        },
      ],
    };
  },
  computed: {
    firstRowTestimonials() {
      return this.testimonials.slice(0, 4);
    },
    secondRowTestimonials() {
      return this.testimonials.slice(4, 8);
    },
  },
});
</script>
