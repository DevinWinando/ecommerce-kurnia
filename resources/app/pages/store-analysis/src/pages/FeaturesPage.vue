<template>
  <Navbar className="" />
  <PageBanner
    pageTitle="Features"
    shortDesc="Unlock Data-Driven"
    shortDesc2="Retail Decisions"
  />
  <Features />
  <FAQ />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import Features from "../components/Features/index.vue";
import FAQ from "../components/Common/FAQ.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "FeaturesPage",
  components: {
    Navbar,
    PageBanner,
    Features,
    FAQ,
    CTA,
    Footer,
  },
});
</script>
