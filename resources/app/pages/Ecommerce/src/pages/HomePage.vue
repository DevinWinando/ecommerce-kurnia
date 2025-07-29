<template>
  <Navbar className="fixed w-full" />
  <MainBanner />
  <Partners />
  <BuiltForModernOnlineSellers />
  <TopFeatures />
  <DashboardShowcase />
  <OnlineSeller />
  <CustomerTestimonials />
  <PricingPlans />
  <Blog />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import MainBanner from "../components/eCommerce/MainBanner.vue";
import Partners from "../components/eCommerce/Partners.vue";
import BuiltForModernOnlineSellers from "../components/eCommerce/BuiltForModernOnlineSellers.vue";
import TopFeatures from "../components/Common/TopFeatures.vue";
import DashboardShowcase from "../components/Common/DashboardShowcase.vue";
import OnlineSeller from "../components/Common/OnlineSeller.vue";
import CustomerTestimonials from "../components/Common/CustomerTestimonials.vue";
import PricingPlans from "../components/Common/PricingPlans.vue";
import Blog from "../components/eCommerce/Blog.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "HomePage",
  components: {
    Navbar,
    MainBanner,
    Partners,
    BuiltForModernOnlineSellers,
    TopFeatures,
    DashboardShowcase,
    OnlineSeller,
    CustomerTestimonials,
    PricingPlans,
    Blog,
    CTA,
    Footer,
  },
});
</script>
