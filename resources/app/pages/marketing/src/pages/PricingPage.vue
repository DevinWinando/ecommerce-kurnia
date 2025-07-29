<template>
  <Navbar className="fixed w-full" />
  <Pricing />
  <DashboardShowcase />
  <FAQ />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import Pricing from "../components/Pricing/index.vue";
import DashboardShowcase from "../components/Common/DashboardShowcase.vue";
import FAQ from "../components/Common/FAQ.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "PricingPage",
  components: {
    Navbar,
    Pricing,
    DashboardShowcase,
    FAQ,
    Footer,
  },
});
</script>
