<template>
  <Navbar className="" />
  <MainBanner />
  <Partners />
  <AboutUs />
  <Funfacts />
  <Features />
  <Success />
  <PricingPlan />
  <Testimonials />
  <FAQ />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import MainBanner from "../components/StoreAnalysis/MainBanner.vue";
import Partners from "../components/StoreAnalysis/Partners.vue";
import AboutUs from "../components/StoreAnalysis/AboutUs.vue";
import Funfacts from "../components/StoreAnalysis/Funfacts.vue";
import Features from "../components/StoreAnalysis/Features.vue";
import Success from "../components/StoreAnalysis/Success.vue";
import PricingPlan from "../components/StoreAnalysis/PricingPlan.vue";
import Testimonials from "../components/StoreAnalysis/Testimonials.vue";
import FAQ from "../components/Common/FAQ.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "HomePage",
  components: {
    Navbar,
    MainBanner,
    Partners,
    AboutUs,
    Funfacts,
    Features,
    Success,
    PricingPlan,
    Testimonials,
    FAQ,
    CTA,
    Footer,
  },
});
</script>
