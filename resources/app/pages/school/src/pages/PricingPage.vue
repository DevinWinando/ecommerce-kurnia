<template>
  <Navbar className="" />
  <div class="h-[69px] md:h-[89px] lg:h-[114px] relative z-[1]">
    <div
      class="absolute top-0 left-0 right-0 bottom-0 -z-[1]"
      style="
        background: linear-gradient(
          180deg,
          rgba(255, 255, 255, 0) 30%,
          #757dff 300%
        );
      "
    ></div>
  </div>
  <Pricing />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import Pricing from "../components/Common/Pricing.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "PricingPage",
  components: {
    Navbar,
    Pricing,
    CTA,
    Footer,
  },
});
</script>
