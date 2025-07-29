<template>
  <Navbar className="fixed w-full" />
  <PageBanner pageTitle="How It Works" />
  <CTA />
  <HowItWorks />
  <Footer />
</template>

<script lang="ts">
import { defineComponent, onBeforeUnmount, onMounted } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import CTA from "../components/Common/CTA.vue";
import HowItWorks from "../components/Common/HowItWorks.vue";
import Footer from "../components/Layouts/Footer.vue";

const BODY_BG_CLASSES = ["!bg-[#fffef8]", "dark:!bg-dark"] as const;

export default defineComponent({
  name: "HowItWorksPage",
  components: {
    Navbar,
    PageBanner,
    CTA,
    HowItWorks,
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
