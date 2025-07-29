<template>
  <Navbar className="fixed w-full" />
  <MainBanner />
  <Partners />
  <AboutUs />
  <EverythingYouNeed />
  <DashboardShowcase />
  <UseCases />
  <Testimonials />
  <Pricing />
  <Blog />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import MainBanner from "../components/Marketing/MainBanner.vue";
import Partners from "../components/Marketing/Partners.vue";
import AboutUs from "../components/Marketing/AboutUs.vue";
import EverythingYouNeed from "../components/Common/EverythingYouNeed.vue";
import DashboardShowcase from "../components/Common/DashboardShowcase.vue";
import UseCases from "../components/Marketing/UseCases.vue";
import Testimonials from "../components/Marketing/Testimonials.vue";
import Pricing from "../components/Common/Pricing.vue";
import Blog from "../components/Marketing/Blog.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "HomePage",
  components: {
    Navbar,
    MainBanner,
    Partners,
    AboutUs,
    EverythingYouNeed,
    DashboardShowcase,
    UseCases,
    Testimonials,
    Pricing,
    Blog,
    Footer,
  },
});
</script>
