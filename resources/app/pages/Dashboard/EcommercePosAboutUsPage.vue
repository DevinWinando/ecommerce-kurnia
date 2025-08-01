<template>
  <Banner />
  <Solutions />
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import PageTitle from "@/components/Common/PageTitle.vue";
import ProductsFilter from "@/components/Pages/Ecommerce/ProductsGrid/ProductsFilter.vue";
import ProductsGrid from "@/components/Pages/Ecommerce/ProductsGrid/index.vue";
import Navbar from "@/components/FrontPages/Common/Navbar.vue";
import Banner from "@/components/FrontPages/Home/Banner.vue";
import Solutions from "@/components/FrontPages/Home/Solution.vue";
import Footer from "@/components/FrontPages/Common/Footer.vue";

export default defineComponent({
  name: "EcommercePosAboutUsPage",
  components: {
    PageTitle,
    ProductsFilter,
    ProductsGrid,
    Navbar,
    Banner,
    Footer,
    Solutions,
  },
});
</script>
