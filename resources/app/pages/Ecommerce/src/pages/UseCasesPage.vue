<template>
  <Navbar className="relative bg-primary-500" />
  <OnlineSeller class="!pb-[0px] relative z-[1]" />
  <DashboardShowcase
    class="pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[150px] 2xl:pb-[180px] relative z-[1]"
  />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import OnlineSeller from "../components/Common/OnlineSeller.vue";
import DashboardShowcase from "../components/Common/DashboardShowcase.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "UseCasesPage",
  components: {
    Navbar,
    OnlineSeller,
    DashboardShowcase,
    CTA,
    Footer,
  },
});
</script>
