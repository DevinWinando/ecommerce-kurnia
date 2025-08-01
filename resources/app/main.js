import { createPinia } from "pinia";

import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import VueApexCharts from "vue3-apexcharts";
import { QuillEditor } from "@vueup/vue-quill";
import { vTooltip } from "./utils/vTooltip";
import clickToSeeCodeDirective from "./utils/clickToSeeCode";
import customPopover from "./utils/popover";
import i18n from "@/plugins/i18n";
import store from './store'

import "swiper/css/bundle";

import "./assets/css/remixicon.css";

const app = createApp(App);

app.use(createPinia());
app.use(store);
app.use(router);
app.use(i18n);

app.use(VueApexCharts);
app.component("QuillEditor", QuillEditor);
app.directive("tooltip", vTooltip);
app.directive("click-to-see-code", clickToSeeCodeDirective);
app.directive("custom-popover", customPopover);

localStorage.theme = 'light';
document.documentElement.classList.remove('dark');

app.mount("#app");
