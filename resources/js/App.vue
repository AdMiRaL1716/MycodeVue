<template>
    <div id="app">
        <component :is="layout">
            <router-view></router-view>
        </component>
    </div>
</template>


<script>
const defaultLayout = "default"
export default {
    name: "App",
    computed: {
        layout() {
            return (this.$route.meta.layout || defaultLayout) + "-layout"
        }
    },
    data() {
        return {
            isLoggedIn: false,
        }
    },
    created() {
        if (window.Laravel.isLoggedin) {
            this.isLoggedIn = true
        }
    },
}
</script>
