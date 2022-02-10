require('./bootstrap');

import Vue from 'vue'
import App from './App.vue'
import axios from 'axios'
import router from './router'

import Default from "./layouts/Default";
import Board from "./layouts/Board";

Vue.component("default-layout", Default)
Vue.component("board-layout", Board)

new Vue({
    router,
    render: h => h(App)
}).$mount("#app")
