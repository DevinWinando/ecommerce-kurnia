<template>
  <div
    class="trezo-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md mb-[25px]"
  >
    <div class="trezo-card-content">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-[10px]">
        <!-- New Bookings Card -->
        <div
          v-for="stat in stats"
          :key="stat.id"
          class="p-[20px] rounded-md"
          :class="`bg-${stat.color}-100 dark:bg-[#0a0e19]`"
        >
          <span class="block">{{ stat.title }}</span>
          <h1 class="!leading-none !text-2xl !font-black mt-[5px] !mb-[11px]">
            {{ formatNumber(stat.value) }}
          </h1>
          <span
            class="inline-block text-xs px-[9px] border rounded-[100px]"
            :class="getChangeClasses(stat.change)"
          >
            {{ formatChange(stat.change) }}
          </span>
          <div
            class="bg-white dark:bg-[#0c1427] rounded-full w-[79px] h-[79px] flex items-center justify-end -mt-[14px] ltr:ml-auto rtl:mr-auto"
          >
            <img :src="stat.icon" :alt="stat.title" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

import icon1 from "@/assets/images/icons/add-event2.svg";
import icon2 from "@/assets/images/icons/check-in-desk.svg";
import icon3 from "@/assets/images/icons/point.svg";

interface StatItem {
  id: number;
  title: string;
  value: number;
  change: number;
  color: string;
  icon: string;
}

export default defineComponent({
  name: "Stats",
  setup() {
    // Sample data - in a real app, this would come from an API
    const stats = ref<StatItem[]>([
      {
        id: 1,
        title: "New Bookings",
        value: 1540,
        change: -4.15,
        color: "primary",
        icon: icon1,
      },
      {
        id: 2,
        title: "Check In",
        value: 245,
        change: 3.4,
        color: "orange",
        icon: icon2,
      },
      {
        id: 3,
        title: "Check Out",
        value: 315,
        change: -1.4,
        color: "purple",
        icon: icon3,
      },
    ]);

    // Format number with commas
    const formatNumber = (num: number) => {
      return num.toLocaleString();
    };

    // Format change percentage with +/-
    const formatChange = (change: number) => {
      return `${change > 0 ? "+" : ""}${change.toFixed(2)}%`;
    };

    // Get appropriate classes based on change value
    const getChangeClasses = (change: number) => {
      return {
        "text-success-700 border-success-500 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c]":
          change > 0,
        "text-danger-700 border-danger-400 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c]":
          change < 0,
        "text-gray-700 border-gray-400 bg-gray-100 dark:bg-[#15203c] dark:border-[#15203c]":
          change === 0,
      };
    };

    // Simulate data refresh - in a real app, this would be an API call
    const refreshData = () => {
      stats.value = stats.value.map((stat) => ({
        ...stat,
        value: Math.floor(stat.value * (1 + (Math.random() * 0.2 - 0.1))),
        change: parseFloat(
          (stat.change * (1 + Math.random() * 0.2 - 0.1)).toFixed(0)
        ),
      }));
    };

    // Auto-refresh data every 30 seconds
    setInterval(refreshData, 30000);

    return {
      stats,
      formatNumber,
      formatChange,
      getChangeClasses,
    };
  },
});
</script>
