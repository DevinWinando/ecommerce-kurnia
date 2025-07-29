<template>
  <WelcomeDoctor />

  <div
    class="lg:px-[30px] 2xl:px-[80px] mt-[25px] lg:-mt-[25px] relative z-[1]"
  >
    <Stats />

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
      <div class="lg:col-span-2">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[25px] mb-[25px]">
          <PatientRetentionChart />

          <PatientDistributionChart />
        </div>

        <UpgradePlan />

        <IncomeExpenseChart />
      </div>
      <div class="lg:col-span-1">
        <TodaysSchedule />
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-[25px] mb-[25px]">
      <div class="lg:col-span-3">
        <MyRecentPatients />
      </div>
      <div class="lg:col-span-1">
        <RecentLabReports />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import WelcomeDoctor from "../../components/Dashboard/Doctor/WelcomeDoctor.vue";
import Stats from "../../components/Dashboard/Doctor/Stats.vue";
import PatientRetentionChart from "../../components/Dashboard/Doctor/PatientRetentionChart.vue";
import PatientDistributionChart from "../../components/Dashboard/Doctor/PatientDistributionChart.vue";
import UpgradePlan from "../../components/Dashboard/Doctor/UpgradePlan.vue";
import IncomeExpenseChart from "../../components/Dashboard/Doctor/IncomeExpenseChart.vue";
import TodaysSchedule from "../../components/Dashboard/Doctor/TodaysSchedule.vue";
import MyRecentPatients from "../../components/Dashboard/Doctor/MyRecentPatients.vue";
import RecentLabReports from "../../components/Dashboard/Doctor/RecentLabReports.vue";

export default defineComponent({
  name: "DoctorPage",
  components: {
    WelcomeDoctor,
    Stats,
    PatientRetentionChart,
    PatientDistributionChart,
    UpgradePlan,
    IncomeExpenseChart,
    TodaysSchedule,
    MyRecentPatients,
    RecentLabReports,
  },
});
</script>
