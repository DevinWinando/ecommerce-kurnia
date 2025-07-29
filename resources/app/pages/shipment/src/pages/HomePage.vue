<template>
  <Navbar className="" />
  <div class="h-[69px] md:h-[89px] lg:h-[104px]"></div>
  <MainBanner />
  <AboutUs />
  <Partners />
  <Features />
  <DashboardShowcase />
  <Testimonials />
  <UseCases />
  <Pricing />
  <Funfacts />
  <GetStarted />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import MainBanner from "../components/Shipment/MainBanner.vue";
import AboutUs from "../components/Common/AboutUs.vue";
import Partners from "../components/Common/Partners.vue";
import Features from "../components/Common/Features.vue";
import DashboardShowcase from "../components/Shipment/DashboardShowcase.vue";
import Testimonials from "../components/Shipment/Testimonials.vue";
import UseCases from "../components/Common/UseCases.vue";
import Pricing from "../components/Common/Pricing.vue";
import Funfacts from "../components/Common/Funfacts.vue";
import GetStarted from "../components/Common/GetStarted.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "HomePage",
  components: {
    Navbar,
    MainBanner,
    AboutUs,
    Partners,
    Features,
    DashboardShowcase,
    Testimonials,
    UseCases,
    Pricing,
    Funfacts,
    GetStarted,
    Footer,
  },
});
</script>
