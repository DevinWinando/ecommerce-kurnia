<template>
  <Navbar className="fixed w-full" />
  <MainBanner />
  <Funfacts />
  <TrustedPartners />
  <WhyChooseUs />
  <Features />
  <div class="relative z-[1] dark:bg-[#0a0e19]">
    <LiveDemo />
    <EffortlessIntegrations />
    <div
      class="absolute top-0 left-0 right-0 bottom-0 -z-[1] dark:hidden"
      style="background: linear-gradient(180deg, #f6f8ff 0%, #f5ebff 100%)"
    ></div>
    <div
      class="absolute top-0 left-0 right-0 -z-[1] bg-white dark:bg-dark h-[318px]"
    ></div>
  </div>
  <Testimonials />
  <CTA />
  <Pricing />
  <Blog />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import MainBanner from "../components/HelpDesk/MainBanner.vue";
import Funfacts from "../components/Common/Funfacts.vue";
import TrustedPartners from "../components/Common/TrustedPartners.vue";
import WhyChooseUs from "../components/Common/WhyChooseUs.vue";
import Features from "../components/Common/Features.vue";
import LiveDemo from "../components/HelpDesk/LiveDemo.vue";
import EffortlessIntegrations from "../components/Common/EffortlessIntegrations.vue";
import Testimonials from "../components/Common/Testimonials.vue";
import CTA from "../components/Common/CTA.vue";
import Pricing from "../components/Common/Pricing.vue";
import Blog from "../components/HelpDesk/Blog.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "HomePage",
  components: {
    Navbar,
    MainBanner,
    Funfacts,
    TrustedPartners,
    WhyChooseUs,
    Features,
    LiveDemo,
    EffortlessIntegrations,
    Testimonials,
    CTA,
    Pricing,
    Blog,
    Footer,
  },
});
</script>
