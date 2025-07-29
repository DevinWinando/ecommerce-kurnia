<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-2 md:grid-cols-4 gap-[25px]">
        <div
          v-for="(stat, index) in stats"
          :key="index"
          class="text-center"
          :aria-label="`${stat.value} ${stat.label}`"
        >
          <h3
            class="!leading-none -tracking-[1.5px] !text-[3xl] md:!text-4xl lg:!text-5xl xl:!text-[48px] !mb-[8px]"
          >
            <span v-html="stat.value"></span>
          </h3>
          <span class="block md:text-[15px] lg:text-md font-medium">
            {{ stat.label }}
          </span>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

export default defineComponent({
  name: "Funfacts",
  setup() {
    const stats = ref([
      {
        value: "75K<span class='text-orange-600'>+</span>",
        label: "Shipments Delivered",
      },
      {
        value: "9K<span class='text-orange-600'>+</span>",
        label: "Happy Clients",
      },
      {
        value: "99.9<span class='text-orange-600'>%</span>",
        label: "On-Time Rate",
      },
      {
        value: "24/<span class='text-orange-600'>7</span>",
        label: "Support Availability",
      },
    ]);

    return { stats };
  },
});
</script>
