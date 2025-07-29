<template>
  <button
    type="button"
    class="light-dark-toggle leading-none transition-all text-black dark:text-white font-medium flex items-center gap-[10px]"
    id="light-dark-toggle"
    @click="toggleTheme"
    aria-label="Toggle dark mode"
  >
    Light/dark:
    <i
      class="material-symbols-outlined !text-[20px] md:!text-[22px] text-[#fe7a36]"
    >
      {{ icon }}
    </i>
  </button>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted } from "vue";

export default defineComponent({
  name: "DarkSwtichBtn",
  setup() {
    // Explicitly type the icon ref
    const icon = ref<"light_mode" | "dark_mode">("light_mode");

    // Toggle theme function
    const toggleTheme = (): void => {
      const html = document.documentElement;
      const darkThemeClass = "dark";
      const lightThemeClass = "light";

      if (html.classList.contains(darkThemeClass)) {
        html.classList.remove(darkThemeClass);
        html.classList.add(lightThemeClass);
        icon.value = "light_mode";
        localStorage.setItem("trezo_theme", "light");
      } else {
        html.classList.remove(lightThemeClass);
        html.classList.add(darkThemeClass);
        icon.value = "dark_mode";
        localStorage.setItem("trezo_theme", "dark");
      }
    };

    // Initialize theme on mount
    onMounted(() => {
      const savedTheme = localStorage.getItem("trezo_theme");
      const html = document.documentElement;

      if (savedTheme === "dark") {
        html.classList.add("dark");
        icon.value = "dark_mode";
      } else {
        // Default to light theme if no saved theme
        html.classList.add("light");
        icon.value = "light_mode";
        localStorage.setItem("trezo_theme", "light");
      }
    });

    return {
      icon,
      toggleTheme,
    };
  },
});
</script>
