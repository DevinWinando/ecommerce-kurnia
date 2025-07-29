import { createRouter, createWebHistory } from "vue-router";

import HomePage from "../pages/HomePage.vue";
import WhyChooseUsPage from "../pages/WhyChooseUsPage.vue";
import CoursesPage from "../pages/CoursesPage.vue";
import CourseDetailsPage from "../pages/CourseDetailsPage.vue";
import HowItWorksPage from "../pages/HowItWorksPage.vue";
import PricingPage from "../pages/PricingPage.vue";
import CheckoutPage from "../pages/CheckoutPage.vue";

const routes = [
  {
    path: "/",
    name: "HomePage",
    component: HomePage,
  },
  {
    path: "/why-choose-us",
    name: "WhyChooseUsPage",
    component: WhyChooseUsPage,
  },
  {
    path: "/courses",
    name: "CoursesPage",
    component: CoursesPage,
  },
  {
    path: "/course-details",
    name: "CourseDetailsPage",
    component: CourseDetailsPage,
  },
  {
    path: "/how-it-works",
    name: "HowItWorksPage",
    component: HowItWorksPage,
  },
  {
    path: "/pricing",
    name: "PricingPage",
    component: PricingPage,
  },
  {
    path: "/checkout",
    name: "CheckoutPage",
    component: CheckoutPage,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
  linkExactActiveClass: "active",
  scrollBehavior() {
    return { top: 0, behavior: "smooth" };
  },
});

export default router;
