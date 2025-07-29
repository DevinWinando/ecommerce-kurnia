<template>
  <Navbar className="" />
  <PageBanner pageTitle="Features" />
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <Features />
  </div>
  <Partners />
  <AboutUs />
  <div
    class="pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[130px] 2xl:pb-[160px]"
  >
    <Funfacts />
  </div>
  <FreeTrail />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import Features from "../components/Common/Features.vue";
import Partners from "../components/Common/Partners.vue";
import AboutUs from "../components/Common/AboutUs.vue";
import Funfacts from "../components/Common/Funfacts.vue";
import FreeTrail from "../components/Common/FreeTrail.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "FeaturesPage",
  components: {
    Navbar,
    PageBanner,
    Features,
    Partners,
    AboutUs,
    Funfacts,
    FreeTrail,
    Footer,
  },
});
</script>
