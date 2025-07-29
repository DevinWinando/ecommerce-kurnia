<template>
  <Navbar className="fixed w-full" />
  <EverythingYouNeed />
  <DashboardShowcase />
  <FAQ />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import EverythingYouNeed from "../components/Features/EverythingYouNeed.vue";
import DashboardShowcase from "../components/Common/DashboardShowcase.vue";
import FAQ from "../components/Common/FAQ.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "FeaturesPage",
  components: {
    Navbar,
    EverythingYouNeed,
    DashboardShowcase,
    FAQ,
    Footer,
  },
});
</script>
