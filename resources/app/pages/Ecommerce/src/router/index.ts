import { createRouter, createWebHistory } from "vue-router";

import HomePage from "../pages/HomePage.vue";
import FeaturesPage from "../pages/FeaturesPage.vue";
import UseCasesPage from "../pages/UseCasesPage.vue";
import TestimonialsPage from "../pages/TestimonialsPage.vue";
import PricingPage from "../pages/PricingPage.vue";
import BlogPage from "../pages/BlogPage.vue";
import BlogDetailsPage from "../pages/BlogDetailsPage.vue";

const routes = [
  {
    path: "/",
    name: "HomePage",
    component: HomePage,
  },
  {
    path: "/features",
    name: "FeaturesPage",
    component: FeaturesPage,
  },
  {
    path: "/use-cases",
    name: "UseCasesPage",
    component: UseCasesPage,
  },
  {
    path: "/testimonials",
    name: "TestimonialsPage",
    component: TestimonialsPage,
  },
  {
    path: "/pricing",
    name: "PricingPage",
    component: PricingPage,
  },
  {
    path: "/blog",
    name: "BlogPage",
    component: BlogPage,
  },
  {
    path: "/blog-details",
    name: "BlogDetailsPage",
    component: BlogDetailsPage,
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
