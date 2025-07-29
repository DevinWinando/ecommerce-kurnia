<template>
  <Navbar className="" />
  <MainBanner />
  <Partners />
  <Features />
  <AboutUs />
  <DashboardLive />
  <BenefitsArea />
  <PricingPlan />
  <Testimonials />
  <FreeTrial />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import MainBanner from "../components/SocialMedia/MainBanner.vue";
import Partners from "../components/SocialMedia/Partners.vue";
import Features from "../components/SocialMedia/Features.vue";
import AboutUs from "../components/SocialMedia/AboutUs.vue";
import DashboardLive from "../components/SocialMedia/DashboardLive.vue";
import BenefitsArea from "../components/SocialMedia/BenefitsArea.vue";
import PricingPlan from "../components/SocialMedia/PricingPlan.vue";
import Testimonials from "../components/Common/Testimonials.vue";
import FreeTrial from "../components/Common/FreeTrial.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "HomePage",
  components: {
    Navbar,
    MainBanner,
    Partners,
    Features,
    AboutUs,
    DashboardLive,
    BenefitsArea,
    PricingPlan,
    Testimonials,
    FreeTrial,
    Footer,
  },
});
</script>
