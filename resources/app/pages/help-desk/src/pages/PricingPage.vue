<template>
  <Navbar className="fixed w-full" />
  <div class="h-[74px] md:h-[94px] lg:h-[114px]"></div>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[150px]"
  >
    <Pricing />
  </div>
  <Funfacts />
  <TrustedPartners />
  <WhyChooseUs />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import Pricing from "../components/Common/Pricing.vue";
import Funfacts from "../components/Common/Funfacts.vue";
import TrustedPartners from "../components/Common/TrustedPartners.vue";
import WhyChooseUs from "../components/Common/WhyChooseUs.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "PricingPage",
  components: {
    Navbar,
    Pricing,
    Funfacts,
    TrustedPartners,
    WhyChooseUs,
    CTA,
    Footer,
  },
});
</script>
