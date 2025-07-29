<template>
  <Navbar className="fixed w-full" />
  <div class="h-[74px] md:h-[94px] lg:h-[114px]"></div>
  <ContactInfo />
  <Contact />
  <CTA
    class="pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[130px] 2xl:pb-[150px]"
  />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import ContactInfo from "../components/Contact/ContactInfo.vue";
import Contact from "../components/Contact/index.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "ContactPage",
  components: {
    Navbar,
    ContactInfo,
    Contact,
    CTA,
    Footer,
  },
});
</script>
