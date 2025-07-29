<template>
  <Navbar className="" />
  <PageBanner
    pageTitle="Pricing Plan"
    shortDesc="Flexible Plans for Retail"
    shortDesc2="at Every Scale"
  />
  <Pricing />
  <FAQ />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import Pricing from "../components/Pricing/index.vue";
import FAQ from "../components/Common/FAQ.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "PricingPage",
  components: {
    Navbar,
    PageBanner,
    Pricing,
    FAQ,
    CTA,
    Footer,
  },
});
</script>
