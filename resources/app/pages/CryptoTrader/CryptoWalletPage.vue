<template>
  <PageTitle pageTitle="Wallet" subTitle="Crypto Trader" />

  <CryptoWallet />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import PageTitle from "@/components/Common/PageTitle.vue";
import CryptoWallet from "@/components/Pages/CryptoTrader/CryptoWallet/index.vue";

export default defineComponent({
  name: "CryptoWalletPage",
  components: {
    PageTitle,
    CryptoWallet,
  },
});
</script>
