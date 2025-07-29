<template>
  <PageTitle pageTitle="Room Details" subTitle="Hotel" />

  <RoomDetails />
  <Reviews />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import PageTitle from "@/components/Common/PageTitle.vue";
import RoomDetails from "@/components/Pages/Hotel/RoomDetails/index.vue";
import Reviews from "@/components/Pages/Hotel/RoomDetails/Reviews.vue";

export default defineComponent({
  name: "RoomDetailsPage",
  components: {
    PageTitle,
    RoomDetails,
    Reviews,
  },
});
</script>
