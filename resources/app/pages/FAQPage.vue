<template>
  <div style="background: linear-gradient(180deg, #ffefe1 0%, #fff 100%)">
    <Navbar class="fixed" />
    <PageTitle pageTitle="Frequently Asked Questions" />
    <FAQ />
  </div>
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "@/components/FrontPages/Common/Navbar.vue";
import PageTitle from "@/components/FrontPages/Common/PageTitle.vue";
import FAQ from "@/components/FrontPages/Common/FAQ.vue";
import CTA from "@/components/FrontPages/Common/CTA.vue";
import Footer from "@/components/FrontPages/Common/Footer.vue";
import LightDarkModeBtn from "@/components/FrontPages/Common/LightDarkModeBtn.vue";

export default defineComponent({
  name: "FAQPage",
  components: {
    Navbar,
    PageTitle,
    FAQ,
    CTA,
    Footer,
    LightDarkModeBtn,
  },
});
</script>
