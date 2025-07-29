import { createRouter, createWebHistory } from "vue-router";

import HomePage from "../pages/HomePage.vue";
import AboutPage from "../pages/AboutPage.vue";
import FeaturesPage from "../pages/FeaturesPage.vue";
import PricingPage from "../pages/PricingPage.vue";

const routes = [
  {
    path: "/",
    name: "HomePage",
    component: HomePage,
  },
  {
    path: "/about",
    name: "AboutPage",
    component: AboutPage,
  },
  {
    path: "/features",
    name: "FeaturesPage",
    component: FeaturesPage,
  },
  {
    path: "/pricing",
    name: "PricingPage",
    component: PricingPage,
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
