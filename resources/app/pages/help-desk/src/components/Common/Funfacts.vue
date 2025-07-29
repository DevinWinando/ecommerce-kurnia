<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[150px] bg-gray-900"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-2 md:grid-cols-4 gap-[25px]">
        <div v-for="(stat, index) in stats" :key="index">
          <h2
            class="!text-white !font-medium !text-5xl md:!text-[55px] lg:!text-[72px] !leading-none !mb-[7px]"
          >
            {{ stat.value }}
          </h2>
          <p class="text-gray-100 lg:text-lg">{{ stat.description }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

interface Stat {
  value: string;
  description: string;
}

export default defineComponent({
  name: "Funfacts",
  setup() {
    const stats = ref<Stat[]>([
      { value: "10K+", description: "Tickets Resolved Daily" },
      { value: "98%", description: "User Satisfaction" },
      { value: "100+", description: "Integration Options" },
      { value: "24/7", description: "Global Support" },
    ]);

    return {
      stats,
    };
  },
});
</script>
