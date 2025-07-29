<template>
  <Navbar className="fixed w-full" />
  <div class="px-8 bg-white">
    <ProductsGrid />
  </div>
  <Footer />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import PageTitle from "@/components/Common/PageTitle.vue";
import ProductsFilter from "@/components/Pages/Ecommerce/ProductsGrid/ProductsFilter.vue";
import ProductsGrid from "@/components/Pages/Ecommerce/ProductsGrid/Shop.vue";
import Navbar from "@/components/FrontPages/Common/Navbar.vue";
import Banner from "@/components/FrontPages/Home/Banner.vue";
import Footer from "@/components/FrontPages/Common/Footer.vue";

export default defineComponent({
  name: "ProductsGridPage",
  components: {
    PageTitle,
    ProductsFilter,
    ProductsGrid,
    Navbar,
    Banner,
    Footer,
  },
});
</script>
