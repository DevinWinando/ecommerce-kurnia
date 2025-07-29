<template>
  <div class="mb-[25px] md:flex items-center justify-between">
    <h5 class="!mb-0">{{ pageTitle }}</h5>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "PageTitle",
  props: ["pageTitle", "subTitle"],
});
</script>
