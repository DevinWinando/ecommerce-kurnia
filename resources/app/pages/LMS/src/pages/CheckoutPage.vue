<template>
  <Navbar className="fixed w-full" />
  <PageBanner pageTitle="Checkout" />
  <Checkout />
  <Footer />
</template>

<script lang="ts">
import { defineComponent, onBeforeUnmount, onMounted } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import Checkout from "../components/Checkout/index.vue";
import Footer from "../components/Layouts/Footer.vue";

const BODY_BG_CLASSES = ["!bg-[#fffef8]", "dark:!bg-dark"] as const;

export default defineComponent({
  name: "CheckoutPage",
  components: {
    Navbar,
    PageBanner,
    Checkout,
    Footer,
  },
  setup() {
    onMounted(() => {
      if (typeof document !== "undefined") {
        document.body.classList.add(...BODY_BG_CLASSES);
      }
    });

    onBeforeUnmount(() => {
      if (typeof document !== "undefined") {
        document.body.classList.remove(...BODY_BG_CLASSES);
      }
    });
  },
});
</script>
