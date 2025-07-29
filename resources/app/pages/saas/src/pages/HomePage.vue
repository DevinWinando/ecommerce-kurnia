<template>
  <Navbar className="" />
  <MainBanner />
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[110px] xl:pt-[130px] 2xl:pt-[160px]"
  >
    <Partners />
  </div>
  <AboutUs />
  <Features />
  <DashboardShowcase />
  <Testimonials />
  <UseCases />
  <Pricing />
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <Funfacts />
  </div>
  <FreeTrail />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import MainBanner from "../components/SaaS/MainBanner.vue";
import Partners from "../components/Common/Partners.vue";
import AboutUs from "../components/Common/AboutUs.vue";
import Features from "../components/Common/Features.vue";
import DashboardShowcase from "../components/SaaS/DashboardShowcase.vue";
import Testimonials from "../components/Common/Testimonials.vue";
import UseCases from "../components/Common/UseCases.vue";
import Pricing from "../components/Common/Pricing.vue";
import Funfacts from "../components/Common/Funfacts.vue";
import FreeTrail from "../components/Common/FreeTrail.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "HomePage",
  components: {
    Navbar,
    MainBanner,
    Partners,
    AboutUs,
    Features,
    DashboardShowcase,
    Testimonials,
    UseCases,
    Pricing,
    Funfacts,
    FreeTrail,
    Footer,
  },
});
</script>
