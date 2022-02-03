import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./views/Home";
import Login from "./views/Login";
import Posts from "./views/Posts";
import Dashboard from "./views/Dashboard";

Vue.use(VueRouter)

import middleware from './middleware';

export default new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/home",
            name: "home",
            component: Home,
            beforeEnter: middleware.guest,
        },
        {
            path: "/login",
            name: "login",
            component: Login,
            beforeEnter: middleware.guest,
        },
        {
            path: "/dashboard",
            name: "dashboard",
            component: Dashboard,
            meta: {layout: 'board'},
            beforeEnter: middleware.user,
        },
        {
            path: '/posts',
            name: 'posts',
            component: Posts,
            beforeEnter: middleware.user
        },
    ]
})
