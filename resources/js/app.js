require('./bootstrap');

import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from "./store";

import Default from "./layouts/Default";
import Board from "./layouts/Board";

Vue.component("default-layout", Default)
Vue.component("board-layout", Board)

Vue.config.productionTip = false

new Vue({
    router,
    store,
    render: h => h(App)
}).$mount("#app")
