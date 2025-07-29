<template>
  <button
    id="backToTopBtn"
    class="fixed bottom-[20px] right-[20px] lg:bottom-[30px] lg:right-[30px] xl:bottom-[40px] xl:right-[40px] z-[9] flex items-center justify-center w-[40px] h-[40px] bg-primary-500 text-white hover:bg-primary-600 rounded-full transition-all text-[20px]"
    type="button"
    :class="{ active: isTop }"
    @click="scrollToTop"
  >
    <i class="ri-arrow-up-line"></i>
  </button>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted, onUnmounted } from "vue";

export default defineComponent({
  name: "BackToTop",
  setup() {
    const isTop = ref(false);

    const scrollToTop = () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth", // Added smooth scrolling
      });
    };

    const handleScroll = () => {
      isTop.value = window.scrollY >= 100;
    };

    onMounted(() => {
      window.addEventListener("scroll", handleScroll);
    });

    onUnmounted(() => {
      window.removeEventListener("scroll", handleScroll);
    });

    return {
      isTop,
      scrollToTop,
    };
  },
});
</script>
