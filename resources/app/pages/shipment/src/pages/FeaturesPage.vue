<template>
  <Navbar className="" />
  <div class="h-[69px] md:h-[89px] lg:h-[104px]"></div>
  <PageBanner pageTitle="Tools Designed for Smarter Shipping" />
  <AboutUs />
  <Partners />
  <Features />
  <Funfacts />
  <GetStarted />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import AboutUs from "../components/Common/AboutUs.vue";
import Partners from "../components/Common/Partners.vue";
import Features from "../components/Common/Features.vue";
import Funfacts from "../components/Common/Funfacts.vue";
import GetStarted from "../components/Common/GetStarted.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "FeaturesPage",
  components: {
    Navbar,
    PageBanner,
    AboutUs,
    Partners,
    Features,
    Funfacts,
    GetStarted,
    Footer,
  },
});
</script>
