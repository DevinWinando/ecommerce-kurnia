<template>
  <Navbar className="" />
  <PageBanner pageTitle="Use Cases" />
  <UseCases />
  <Partners />
  <AboutUs />
  <FreeTrail />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import UseCases from "../components/Common/UseCases.vue";
import Partners from "../components/Common/Partners.vue";
import AboutUs from "../components/Common/AboutUs.vue";
import FreeTrail from "../components/Common/FreeTrail.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "UseCasesPage",
  components: {
    Navbar,
    PageBanner,
    UseCases,
    Partners,
    AboutUs,
    FreeTrail,
    Footer,
  },
});
</script>
