import { createRouter, createWebHistory } from "vue-router";

import HomePage from "../pages/HomePage.vue";
import FeaturesPage from "../pages/FeaturesPage.vue";
import UseCasesPage from "../pages/UseCasesPage.vue";
import PricingPage from "../pages/PricingPage.vue";

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
