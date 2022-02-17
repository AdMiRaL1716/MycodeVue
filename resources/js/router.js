import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./views/Home";
import Login from "./views/Login";
import Dashboard from "./views/Dashboard";
import Categories from "./views/categories/Categories";
import CreateCategory from "./views/categories/CreateCategory";
import UpdateCategory from "./views/categories/UpdateCategory";

Vue.use(VueRouter)

export default new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/home",
            name: "home",
            component: Home,
        },
        {
            path: "/login",
            name: "login",
            component: Login,
        },
        {
            path: "/dashboard",
            name: "dashboard",
            component: Dashboard,
            meta: {layout: 'board'},
            beforeEnter(to, from, next) {
                if (!window.Laravel.isLoggedin) {
                    window.location.href = "/login";
                }
                else {
                    next()
                }
            }
        },
        {
            path: "/categories",
            name: "categories",
            component: Categories,
            meta: {layout: 'board'},
            beforeEnter(to, from, next) {
                if (!window.Laravel.isLoggedin) {
                    window.location.href = "/login";
                }
                else {
                    next()
                }
            }
        },
        {
            path: "/categories/add",
            name: "createcategory",
            component: CreateCategory,
            meta: {layout: 'board'},
            beforeEnter(to, from, next) {
                if (!window.Laravel.isLoggedin) {
                    window.location.href = "/login";
                }
                else {
                    next()
                }
            }
        },
        {
            path: "/categories/edit/:id",
            name: "editcategory",
            component: UpdateCategory,
            meta: {layout: 'board'},
            beforeEnter(to, from, next) {
                if (!window.Laravel.isLoggedin) {
                    window.location.href = "/login";
                }
                else {
                    next()
                }
            }
        },
    ]
})
