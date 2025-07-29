<template>
  <Navbar className="relative bg-primary-500" />
  <BlogDetails />
  <CTA />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import BlogDetails from "../components/BlogDetails/index.vue";
import CTA from "../components/Common/CTA.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "BlogDetailsPage",
  components: {
    Navbar,
    BlogDetails,
    CTA,
    Footer,
  },
});
</script>
