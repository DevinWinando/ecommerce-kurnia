<template>
  <div class="px-8 mt-[19vh]">
    <ProductsDetails />
    <ProductsDetailsTabs />
  </div>
  <Footer />
</template>

<script setup>
import ProductsDetails from "@/components/Pages/Ecommerce/ProductsDetails/index.vue";
import ProductsDetailsTabs from "@/components/Pages/Ecommerce/ProductsDetails/ProductsDetailsTabs.vue";
import Footer from "@/components/FrontPages/Common/Footer.vue";
</script>
