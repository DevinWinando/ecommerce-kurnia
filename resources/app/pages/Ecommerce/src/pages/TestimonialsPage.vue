<template>
  <Navbar className="relative bg-primary-500" />
  <Testimonials />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import Testimonials from "../components/Testimonials/index.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "TestimonialsPage",
  components: {
    Navbar,
    Testimonials,
    CTA,
    Footer,
  },
});
</script>
