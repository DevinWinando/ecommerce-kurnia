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
import store from "./store";
import axios from "axios";

// ambil cookie sanctum dulu sebelum Echo connect
// Use window.AppConfig.url or current origin to ensure same protocol (HTTPS/HTTP)
// Wait for AppConfig to be available (it's set in index.blade.php)
const getBaseURL = () => {
    let url = window.AppConfig?.url || window.location.origin;
    
    // Ensure URL uses same protocol as current page (HTTPS/HTTP)
    if (window.location.protocol === 'https:' && url.startsWith('http:')) {
        url = url.replace('http:', 'https:');
    } else if (window.location.protocol === 'http:' && url.startsWith('https:')) {
        url = url.replace('https:', 'http:');
    }
    
    return url;
};

const baseURL = getBaseURL();
await axios.get(`${baseURL}/sanctum/csrf-cookie`, {
    withCredentials: true,
});

import "../js/echo";

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

localStorage.theme = "light";
document.documentElement.classList.remove("dark");

app.mount("#app");
