<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div class="grid grid-cols-2 md:grid-cols-4 gap-[25px]">
      <div v-for="(fact, index) in funfacts" :key="index" class="text-center">
        <h3
          class="!leading-none !font-medium -tracking-[1.5px] !text-[3xl] md:!text-4xl lg:!text-5xl xl:!text-[48px] !mb-[8px]"
        >
          {{ fact.value }}
        </h3>
        <span class="block md:text-[15px] lg:text-md font-medium">
          {{ fact.label }}
        </span>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

interface FunFact {
  value: string;
  label: string;
}

export default defineComponent({
  name: "Funfacts",
  setup() {
    const funfacts = ref<FunFact[]>([
      { value: "50K+", label: "Happy Users" },
      { value: "2M+", label: "Completed Tasks" },
      { value: "99.9%", label: "Platform Uptime" },
      { value: "120+", label: "Growing Companies" },
    ]);

    return {
      funfacts,
    };
  },
});
</script>
