<template>
  <Navbar className="" />
  <div class="h-[69px] md:h-[89px] lg:h-[114px]"></div>
  <MainBanner />
  <div
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px]"
  >
    <Partners />
  </div>
  <AboutUs />
  <Funfacts />
  <Features />
  <DashboardShowcase />
  <IdealUsers />
  <Testimonials />
  <PricingPlans />
  <FAQ />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import MainBanner from "../components/Sales/MainBanner.vue";
import Partners from "../components/Common/Partners.vue";
import AboutUs from "../components/Common/AboutUs.vue";
import Funfacts from "../components/Common/Funfacts.vue";
import Features from "../components/Common/Features.vue";
import DashboardShowcase from "../components/Sales/DashboardShowcase.vue";
import IdealUsers from "../components/Common/IdealUsers.vue";
import Testimonials from "../components/Sales/Testimonials.vue";
import PricingPlans from "../components/Common/PricingPlans.vue";
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
    DashboardShowcase,
    IdealUsers,
    Testimonials,
    PricingPlans,
    FAQ,
    CTA,
    Footer,
  },
});
</script>
