<template>
  <div class="pt-[125px] md:pt-[145px] lg:pt-[185px] xl:pt-[195px] text-center">
    <div class="container 2xl:max-w-[1320px] mx-auto px-[12px] relative z-[1]">
      <h1
        class="!mb-0 !leading-[1.2] !text-[32px] md:!text-[40px] lg:!text-[50px] xl:!text-[60px] -tracking-[.5px] md:-tracking-[1px] xl:-tracking-[1.5px]">
        {{ pageTitle }}
      </h1>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "PageTitle",
  props: ["pageTitle"],
});
</script>
