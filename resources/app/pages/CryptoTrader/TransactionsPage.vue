<template>
  <PageTitle pageTitle="Transactions" subTitle="Crypto Trader" />

  <CryptoTransactions />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import PageTitle from "@/components/Common/PageTitle.vue";
import CryptoTransactions from "@/components/Pages/CryptoTrader/CryptoTransactions/index.vue";

export default defineComponent({
  name: "TransactionsPage",
  components: {
    PageTitle,
    CryptoTransactions,
  },
});
</script>
