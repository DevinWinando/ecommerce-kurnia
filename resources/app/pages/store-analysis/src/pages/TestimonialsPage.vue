<template>
  <Navbar className="" />
  <PageBanner
    pageTitle="Testimonials"
    shortDesc="What Retailers Are"
    shortDesc2="Saying About Trezo"
  />
  <Testimonials />
  <FAQ />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import Testimonials from "../components/Testimonials/index.vue";
import FAQ from "../components/Common/FAQ.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "TestimonialsPage",
  components: {
    Navbar,
    PageBanner,
    Testimonials,
    FAQ,
    CTA,
    Footer,
  },
});
</script>
