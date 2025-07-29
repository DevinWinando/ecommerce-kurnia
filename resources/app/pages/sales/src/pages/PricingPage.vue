<template>
  <Navbar className="" />
  <div class="h-[69px] md:h-[89px] lg:h-[114px]"></div>
  <PageBanner pageTitle="Pricing" />
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[100px] xl:pt-[120px] 2xl:pt-[140px]"
  >
    <PricingPlans />
  </div>
  <FAQ />
  <div
    class="pb-[70px] md:pb-[90px] lg:pb-[100px] xl:pb-[120px] 2xl:pb-[140px]"
  >
    <Partners />
  </div>
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import PricingPlans from "../components/Common/PricingPlans.vue";
import FAQ from "../components/Common/FAQ.vue";
import Partners from "../components/Common/Partners.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "UseCasesPage",
  components: {
    Navbar,
    PageBanner,
    PricingPlans,
    FAQ,
    Partners,
    CTA,
    Footer,
  },
});
</script>
