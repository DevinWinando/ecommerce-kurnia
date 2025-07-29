<template>
  <SidebarSettings />
  <router-view />
  <BackToTop />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import SidebarSettings from "./components/Layouts/SidebarSettings.vue";
import BackToTop from "./components/Layouts/BackToTop.vue";

export default defineComponent({
  name: "App",
  components: {
    SidebarSettings,
    BackToTop,
  },
});
</script>
