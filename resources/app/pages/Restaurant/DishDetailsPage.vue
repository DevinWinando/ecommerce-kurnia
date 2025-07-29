<template>
  <PageTitle pageTitle="Dish Details" subTitle="Restaurant" />

  <DishDetails />
  <Reviews />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import PageTitle from "@/components/Common/PageTitle.vue";
import DishDetails from "@/components/Pages/Restaurant/DishDetails/index.vue";
import Reviews from "@/components/Pages/Restaurant/DishDetails/Reviews.vue";

export default defineComponent({
  name: "DishDetailsPage",
  components: {
    PageTitle,
    DishDetails,
    Reviews,
  },
});
</script>
