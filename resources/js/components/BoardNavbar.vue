<template>
    <div class="navbar-nav">
        <router-link to="/dashboard" class="nav-item nav-link">Dashboard</router-link>
        <router-link to="/categories" class="nav-item nav-link">Categories</router-link>
        <a class="nav-item nav-link" style="cursor: pointer;" @click="logout">Logout</a>
    </div>
</template>

<script>
export default {
    name: "BoardNavbar",
    methods: {
        logout(e) {
            console.log('ss')
            e.preventDefault()
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('/api/logout')
                    .then(response => {
                        if (response.data.success) {
                            window.location.href = "/"
                        } else {
                            console.log(response)
                        }
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            })
        }
    },
}
</script>

<style scoped>

</style>
