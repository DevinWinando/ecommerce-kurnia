import { createApp } from "vue";
import App from "./App.vue";
import router from "./router/index.ts";

import "./assets/css/remixicon.css";
import "./assets/css/style.css";

import "swiper/css/bundle";

const app = createApp(App).use(router);
app.mount("#app");
