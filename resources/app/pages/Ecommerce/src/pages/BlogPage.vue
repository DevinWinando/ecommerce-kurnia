<template>
  <Navbar className="relative bg-primary-500" />
  <Blog />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import Blog from "../components/Blog/index.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "BlogPage",
  components: {
    Navbar,
    Blog,
    CTA,
    Footer,
  },
});
</script>
