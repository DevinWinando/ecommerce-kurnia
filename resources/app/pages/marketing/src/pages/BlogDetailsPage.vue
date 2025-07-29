<template>
  <Navbar className="fixed w-full" />" />
  <BlogDetails />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import BlogDetails from "../components/BlogDetails/index.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "BlogDetailsPage",
  components: {
    Navbar,
    BlogDetails,
    Footer,
  },
});
</script>
