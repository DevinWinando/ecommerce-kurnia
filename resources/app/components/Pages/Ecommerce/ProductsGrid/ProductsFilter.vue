<template>
  <div
    class="trezo-card mt-4 bg-transparent mb-[25px] py-[20px] md:py-[10px] rounded-md"
  >
    <div class="trezo-card-header sm:flex items-center justify-between">
      <div class="trezo-card-title">
        <h5 class="!mb-0 !font-medium">{{ title }}</h5>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineComponent } from "vue";
import { useClickOutside } from "@/utils/useClickOutside";

const props = defineProps({
  title: {
    type: String,
    required: true,
  },
});

const emit = defineEmits(["close"]);
useClickOutside(() => {
  emit("close");
});
</script>
