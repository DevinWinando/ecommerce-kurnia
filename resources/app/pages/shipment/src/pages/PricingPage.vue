<template>
  <Navbar className="" />
  <div class="h-[69px] md:h-[89px] lg:h-[104px]"></div>
  <PageBanner pageTitle="Flexible Pricing for Every Shipment Size" />
  <div
    class="pt-[70px] md:pt-[90px] lg:pt-[110px] xl:pt-[130px] 2xl:pt-[160px]"
  ></div>
  <Pricing />
  <Funfacts />
  <GetStarted />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import Pricing from "../components/Common/Pricing.vue";
import Funfacts from "../components/Common/Funfacts.vue";
import GetStarted from "../components/Common/GetStarted.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "PricingPage",
  components: {
    Navbar,
    PageBanner,
    Pricing,
    Funfacts,
    GetStarted,
    Footer,
  },
});
</script>
