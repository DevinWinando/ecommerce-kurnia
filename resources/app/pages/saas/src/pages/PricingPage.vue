<template>
  <Navbar className="" />
  <PageBanner pageTitle="Pricing" />
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <Partners />
  </div>
  <Pricing />
  <AboutUs />
  <Testimonials />
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[110px] xl:pt-[130px] 2xl:pt-[160px]"
  >
    <FreeTrail />
  </div>
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import Partners from "../components/Common/Partners.vue";
import Pricing from "../components/Common/Pricing.vue";
import AboutUs from "../components/Common/AboutUs.vue";
import Testimonials from "../components/Common/Testimonials.vue";
import FreeTrail from "../components/Common/FreeTrail.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "PricingPage",
  components: {
    Navbar,
    PageBanner,
    Partners,
    Pricing,
    AboutUs,
    Testimonials,
    FreeTrail,
    Footer,
  },
});
</script>
