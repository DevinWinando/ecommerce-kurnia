<template>
  <ul class="mb-[10px]">
    <li
      class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0"
    >
      <RouterLink
        to="/settings"
        class="block rounded-md font-medium py-[8.5px] px-[15px] text-[#7d0909] border border-[#7d0909] transition-all hover:bg-[#7d0909] hover:text-white"
      >
        Pengaturan Umum
      </RouterLink>
    </li>
    <li
      class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0"
    >
      <RouterLink
        to="/settings/change-password"
        class="block rounded-md font-medium py-[8.5px] px-[15px] text-[#7d0909] border border-[#7d0909] transition-all hover:bg-[#7d0909] hover:text-white"
      >
        Ubah Kata Sandi
      </RouterLink>
    </li>
    <li
      class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0"
    >
      <RouterLink
        to="/settings/history"
        class="block rounded-md font-medium py-[8.5px] px-[15px] text-[#7d0909] border border-[#7d0909] transition-all hover:bg-[#7d0909] hover:text-white"
      >
        Riwayat Transaksi
      </RouterLink>
    </li>
  </ul>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "SettingsNav",
});
</script>

<style lang="scss" scoped>
ul {
  li {
    a {
      &.active {
        --tw-bg-opacity: 1;
        background-color: #7d0909;
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity, 1));
      }
    }
  }
}
</style>
