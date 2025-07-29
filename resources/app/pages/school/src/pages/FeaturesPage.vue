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
  <div
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px] relative z-[2]"
  >
    <Benefits />
  </div>
  <Features />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import Benefits from "../components/Common/Benefits.vue";
import Features from "../components/Common/Features.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "FeaturesPage",
  components: {
    Navbar,
    Benefits,
    Features,
    CTA,
    Footer,
  },
});
</script>
