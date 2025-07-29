<template>
  <div
    class="sidebar-settings fixed top-1/2 -translate-y-1/2 ltr:right-0 rtl:left-0 bg-white dark:bg-[#0a0e19] ltr:rounded-l-[10px] rtl:rounded-r-[10px] border border-gray-100 dark:border-[#202c4b] ltr:border-r-0 rtl:border-l-0 shadow-md z-[9] p-[10px] md:p-[15px]"
  >
    <DarkSwtichBtn />

    <RTLSwtichBtn />
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import DarkSwtichBtn from "./DarkSwtichBtn.vue";
import RTLSwtichBtn from "./RTLSwtichBtn.vue";

export default defineComponent({
  name: "SidebarSettings",
  components: {
    DarkSwtichBtn,
    RTLSwtichBtn,
  },
});
</script>
