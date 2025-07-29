<template>
  <Navbar className="relative bg-primary-500" />
  <PricingPlans />
  <DashboardShowcase />
  <OnlineSeller />
  <CustomerTestimonials />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PricingPlans from "../components/Common/PricingPlans.vue";
import DashboardShowcase from "../components/Common/DashboardShowcase.vue";
import OnlineSeller from "../components/Common/OnlineSeller.vue";
import CustomerTestimonials from "../components/Common/CustomerTestimonials.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "PricingPage",
  components: {
    Navbar,
    PricingPlans,
    DashboardShowcase,
    OnlineSeller,
    CustomerTestimonials,
    CTA,
    Footer,
  },
});
</script>
