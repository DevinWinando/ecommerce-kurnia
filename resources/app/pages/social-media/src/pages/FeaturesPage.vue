<template>
  <Navbar className="" />
  <PageBanner pageTitle="Powerful Tools for Smarter Shipping" />
  <Features />
  <FreeTrial />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import Features from "../components/Features/index.vue";
import FreeTrial from "../components/Common/FreeTrial.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "FeaturesPage",
  components: {
    Navbar,
    PageBanner,
    Features,
    FreeTrial,
    Footer,
  },
});
</script>
