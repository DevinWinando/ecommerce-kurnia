<template>
  <Navbar className="fixed w-full" />
  <PageBanner pageTitle="Pricing" />
  <CourseDetails />
  <Courses />
  <Footer />
</template>

<script lang="ts">
import { defineComponent, onBeforeUnmount, onMounted } from "vue";
import Navbar from "../components/Layouts/Navbar.vue";
import PageBanner from "../components/CourseDetails/PageBanner.vue";
import CourseDetails from "../components/CourseDetails/index.vue";
import Courses from "../components/CourseDetails/Courses.vue";
import Footer from "../components/Layouts/Footer.vue";

const BODY_BG_CLASSES = ["!bg-[#fffef8]", "dark:!bg-dark"] as const;

export default defineComponent({
  name: "CourseDetailsPage",
  components: {
    Navbar,
    PageBanner,
    CourseDetails,
    Courses,
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
