<template>
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">
    <WelcomeBeautySalon />

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">
      <CustomerSatisfactionRateChart />

      <NewCustomersThisMonth />
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <TopSellingProducts />
    </div>
    <div class="lg:col-span-1">
      <CustomersFromChannels />
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-1">
      <FeaturedServices />
    </div>
    <div class="lg:col-span-2">
      <RecentAppointments />
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="lg:col-span-2">
      <RevenueByServicesChart />
    </div>
    <div class="lg:col-span-1">
      <TopStylistPerformance />
    </div>
  </div>

  <TopCustomers />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import WelcomeBeautySalon from "../../components/Dashboard/BeautySalon/WelcomeBeautySalon.vue";
import CustomerSatisfactionRateChart from "../../components/Dashboard/BeautySalon/CustomerSatisfactionRateChart.vue";
import NewCustomersThisMonth from "../../components/Dashboard/BeautySalon/NewCustomersThisMonth.vue";
import TopSellingProducts from "../../components/Dashboard/BeautySalon/TopSellingProducts.vue";
import CustomersFromChannels from "../../components/Dashboard/BeautySalon/CustomersFromChannels.vue";
import FeaturedServices from "../../components/Dashboard/BeautySalon/FeaturedServices.vue";
import RecentAppointments from "../../components/Dashboard/BeautySalon/RecentAppointments.vue";
import RevenueByServicesChart from "../../components/Dashboard/BeautySalon/RevenueByServicesChart.vue";
import TopStylistPerformance from "../../components/Dashboard/BeautySalon/TopStylistPerformance.vue";
import TopCustomers from "../../components/Dashboard/BeautySalon/TopCustomers.vue";

export default defineComponent({
  name: "BeautySalonPage",
  components: {
    WelcomeBeautySalon,
    CustomerSatisfactionRateChart,
    NewCustomersThisMonth,
    TopSellingProducts,
    CustomersFromChannels,
    FeaturedServices,
    RecentAppointments,
    RevenueByServicesChart,
    TopStylistPerformance,
    TopCustomers,
  },
});
</script>
