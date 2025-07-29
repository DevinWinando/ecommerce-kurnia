<template>
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <Stats />

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">
        <RoomsAvailabiliityChart />

        <GuestActivityChart />
      </div>

      <UpcomingVIPReservations />
    </div>
    <div class="lg:col-span-1">
      <RecentBookings />
    </div>
  </div>

  <PopularRooms />

  <CustomerReviews />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Stats from "../../components/Dashboard/Hotel/Stats.vue";
import RoomsAvailabiliityChart from "../../components/Dashboard/Hotel/RoomsAvailabiliityChart.vue";
import GuestActivityChart from "../../components/Dashboard/Hotel/GuestActivityChart.vue";
import UpcomingVIPReservations from "../../components/Dashboard/Hotel/UpcomingVIPReservations.vue";
import RecentBookings from "../../components/Dashboard/Hotel/RecentBookings.vue";
import PopularRooms from "../../components/Dashboard/Hotel/PopularRooms.vue";
import CustomerReviews from "../../components/Dashboard/Hotel/CustomerReviews.vue";

export default defineComponent({
  name: "HotelPage",
  components: {
    Stats,
    RoomsAvailabiliityChart,
    GuestActivityChart,
    UpcomingVIPReservations,
    RecentBookings,
    PopularRooms,
    CustomerReviews,
  },
});
</script>
