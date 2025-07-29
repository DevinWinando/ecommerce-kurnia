<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-2 md:grid-cols-4 gap-[25px]">
        <div v-for="(fact, index) in facts" :key="index">
          <h3
            class="!leading-none !font-normal -tracking-[1.5px] !text-[3xl] md:!text-4xl lg:!text-5xl xl:!text-[64px] !mb-[8px]"
          >
            {{ fact.value }}
          </h3>
          <span class="block lg:text-[15px] xl:text-md">
            {{ fact.label }}
          </span>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

interface FunFact {
  value: string;
  label: string;
}

export default defineComponent({
  name: "Funfacts",
  setup() {
    const facts: FunFact[] = [
      { value: "12K+", label: "Stores Tracked" },
      { value: "35%", label: "Average Sales Uplift" },
      { value: "15+", label: "Data Sources Integrated" },
      { value: "98%", label: "Customer Satisfaction" },
    ];

    return { facts };
  },
});
</script>
