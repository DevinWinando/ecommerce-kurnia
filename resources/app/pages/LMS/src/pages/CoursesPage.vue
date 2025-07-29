<template>
  <Navbar className="fixed w-full" />
  <PageBanner pageTitle="Courses" />
  <Courses />
  <HowItWorks />
  <CTA />
  <PricingPlans />
  <Footer />
</template>

<script lang="ts">
import { defineComponent, onBeforeUnmount, onMounted } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import Courses from "../components/Courses/index.vue";
import HowItWorks from "../components/Common/HowItWorks.vue";
import CTA from "../components/Common/CTA.vue";
import PricingPlans from "../components/Common/PricingPlans.vue";
import Footer from "../components/Layouts/Footer.vue";

const BODY_BG_CLASSES = ["!bg-[#fffef8]", "dark:!bg-dark"] as const;

export default defineComponent({
  name: "CoursesPage",
  components: {
    Navbar,
    PageBanner,
    Courses,
    HowItWorks,
    CTA,
    PricingPlans,
    Footer,
  },
  setup() {
    onMounted(() => {
      if (typeof document !== "undefined") {
        document.body.classList.add(...BODY_BG_CLASSES);
      }
    });

    onBeforeUnmount(() => {
      if (typeof document !== "undefined") {
        document.body.classList.remove(...BODY_BG_CLASSES);
      }
    });
  },
});
</script>
