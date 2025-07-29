<template>
  <Navbar className="" />
  <div class="h-[69px] md:h-[89px] lg:h-[114px]"></div>
  <PageBanner pageTitle="Use Cases" />
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[100px] xl:pt-[120px] 2xl:pt-[140px]"
  >
    <IdealUsers />
  </div>
  <Funfacts />
  <Partners />
  <div
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px]"
  >
    <AboutUs />
  </div>
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import IdealUsers from "../components/Common/IdealUsers.vue";
import Funfacts from "../components/Common/Funfacts.vue";
import Partners from "../components/Common/Partners.vue";
import AboutUs from "../components/Common/AboutUs.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "UseCasesPage",
  components: {
    Navbar,
    PageBanner,
    IdealUsers,
    Funfacts,
    Partners,
    AboutUs,
    CTA,
    Footer,
  },
});
</script>
