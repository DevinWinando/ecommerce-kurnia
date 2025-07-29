<template>
  <button
    type="button"
    class="rtl-mode-toggle flex items-center text-black dark:text-white font-medium mt-[10px] gap-[10px]"
    id="rtl-mode-toggle"
    @click="toggleDirection"
  >
    LTR/RTL:
    <span
      class="inline-block relative rounded-full w-[35px] h-[20px] bg-gray-50 dark:bg-[#0a0e19]"
    >
      <span
        class="inline-block transition-all absolute h-[12px] w-[12px] bg-black dark:bg-white rounded-full top-1/2 -translate-y-1/2"
      ></span>
    </span>
  </button>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted } from "vue";

export default defineComponent({
  name: "RTLSwtichBtn",
  setup() {
    const direction = ref(localStorage.getItem("direction") || "ltr");

    const toggleDirection = () => {
      direction.value = direction.value === "ltr" ? "rtl" : "ltr";
      document.body.setAttribute("dir", direction.value);
      localStorage.setItem("direction", direction.value); // Persist to local storage
    };

    onMounted(() => {
      document.body.setAttribute("dir", direction.value); // Apply saved direction
    });

    return {
      direction,
      toggleDirection,
    };
  },
});
</script>
