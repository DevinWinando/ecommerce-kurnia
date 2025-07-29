<template>
  <Navbar className="fixed w-full" />
  <Blog />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import Blog from "../components/Blog/index.vue";
import Footer from "../components/Layouts/Footer.vue";

export default defineComponent({
  name: "BlogPage",
  components: {
    Navbar,
    Blog,
    Footer,
  },
});
</script>
