<template>
    <div id="app">
        <component :is="layout">
            <router-view></router-view>
        </component>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
const defaultLayout = "default"
export default {
    data() {
        return {
            loading: false,
            error: false,
        }
    },
    name: "App",
    computed: {
        ...mapGetters({
            authenticated: 'authenticated'
        }),
        layout() {
            return (this.$route.meta.layout || defaultLayout) + "-layout"
        }
    },
    methods: {
        async logout() {
            this.loading = true;
            try {
                await this.$store.dispatch('logout');
                await this.$router.push({ name: 'login' })
            } catch (error) {
                this.error = error;
            } finally {
                this.loading = false;
            }
        }
    }
}
</script>

<style scoped>

</style>
