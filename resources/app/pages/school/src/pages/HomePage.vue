<template>
  <Navbar className="" />
  <MainBanner />
  <Partners />

  <div
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px]"
  >
    <AboutUs />
  </div>
  <Features />
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[100px] xl:pt-[120px] 2xl:pt-[140px] relative z-[2]"
  >
    <Benefits />
  </div>
  <Users />
  <Integrations />
  <Testimonials />
  <Pricing />
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div class="h-[1px] w-full bg-gray-100 dark:bg-gray-900"></div>
  </div>
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import MainBanner from "../components/School/MainBanner.vue";
import Partners from "../components/Common/Partners.vue";
import AboutUs from "../components/Common/AboutUs.vue";
import Features from "../components/Common/Features.vue";
import Benefits from "../components/Common/Benefits.vue";
import Users from "../components/Common/Users.vue";
import Integrations from "../components/Common/Integrations.vue";
import Testimonials from "../components/Common/Testimonials.vue";
import Pricing from "../components/Common/Pricing.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "HomePage",
  components: {
    Navbar,
    MainBanner,
    Partners,
    AboutUs,
    Features,
    Benefits,
    Users,
    Integrations,
    Testimonials,
    Pricing,
    CTA,
    Footer,
  },
});
</script>
