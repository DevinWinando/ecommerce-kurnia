<template>
  <Navbar className="fixed w-full" />
  <PageBanner pageTitle="Why Choose Us" />
  <LearnersOrganizations />
  <WhyChooseUs />
  <StudentTestimonials />
  <FAQ />
  <Footer />
</template>

<script lang="ts">
import { defineComponent, onBeforeUnmount, onMounted } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/Common/PageBanner.vue";
import LearnersOrganizations from "../components/Common/LearnersOrganizations.vue";
import WhyChooseUs from "../components/Common/WhyChooseUs.vue";
import StudentTestimonials from "../components/Common/StudentTestimonials.vue";
import FAQ from "../components/Common/FAQ.vue";
import Footer from "../components/Layouts/Footer.vue";

const BODY_BG_CLASSES = ["!bg-[#fffef8]", "dark:!bg-dark"] as const;

export default defineComponent({
  name: "WhyChooseUsPage",
  components: {
    Navbar,
    PageBanner,
    LearnersOrganizations,
    WhyChooseUs,
    StudentTestimonials,
    FAQ,
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
