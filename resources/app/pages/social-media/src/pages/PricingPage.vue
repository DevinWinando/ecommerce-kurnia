<template>
  <Navbar className="" />
  <PageBanner pageTitle="Transparent Pricing That Grows with Your Brand" />
  <Pricing />
  <BenefitsArea />
  <FreeTrial />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import Pricing from "../components/Pricing/index.vue";
import BenefitsArea from "../components/Pricing/BenefitsArea.vue";
import FreeTrial from "../components/Common/FreeTrial.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "PricingPage",
  components: {
    Navbar,
    PageBanner,
    Pricing,
    BenefitsArea,
    FreeTrial,
    Footer,
  },
});
</script>
