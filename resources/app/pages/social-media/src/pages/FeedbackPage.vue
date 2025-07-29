<template>
  <Navbar className="" />
  <PageBanner pageTitle="What Our Users Say About Trezo" />
  <Testimonials />
  <FreeTrial />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import Testimonials from "../components/Common/Testimonials.vue";
import FreeTrial from "../components/Common/FreeTrial.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "FeedbackPage",
  components: {
    Navbar,
    PageBanner,
    Testimonials,
    FreeTrial,
    Footer,
  },
});
</script>
