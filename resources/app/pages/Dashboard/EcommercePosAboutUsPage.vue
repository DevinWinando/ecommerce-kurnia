<template>
  <Banner @click="count++" />
  <Solutions />
  <Footer />
</template>

<script setup>
import { defineComponent, ref, watch } from "vue";
import PageTitle from "@/components/Common/PageTitle.vue";
import ProductsFilter from "@/components/Pages/Ecommerce/ProductsGrid/ProductsFilter.vue";
import ProductsGrid from "@/components/Pages/Ecommerce/ProductsGrid/index.vue";
import Navbar from "@/components/FrontPages/Common/Navbar.vue";
import Banner from "@/components/FrontPages/Home/Banner.vue";
import Solutions from "@/components/FrontPages/Home/Solution.vue";
import Footer from "@/components/FrontPages/Common/Footer.vue";

</script>
