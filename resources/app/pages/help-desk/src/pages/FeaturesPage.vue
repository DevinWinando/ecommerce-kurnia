<template>
  <Navbar className="fixed w-full" />
  <div class="h-[74px] md:h-[94px] lg:h-[114px]"></div>
  <Features />
  <Funfacts />
  <TrustedPartners />
  <Testimonials />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import Features from "../components/Common/Features.vue";
import Funfacts from "../components/Common/Funfacts.vue";
import TrustedPartners from "../components/Common/TrustedPartners.vue";
import Testimonials from "../components/Common/Testimonials.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "FeaturesPage",
  components: {
    Navbar,
    Features,
    Funfacts,
    TrustedPartners,
    Testimonials,
    CTA,
    Footer,
  },
});
</script>
