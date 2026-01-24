<template>
  <PageTitle pageTitle="Order Details" class="mt-6" subTitle="eCommerce" />
  <OrderDetails class="px-4" />
</template>

<script>
import { defineComponent } from "vue";
import PageTitle from "@/components/Common/PageTitle.vue";
import OrderDetails from "@/components/Pages/Ecommerce/OrderDetails/index.vue";

export default defineComponent({
  name: "OrderDetailsPage",
  components: {
    PageTitle,
    OrderDetails,
  },
});
</script>
