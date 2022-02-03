<template>
    <div>
        <h2>Hello, this is the board</h2>
        <button @click.prevent="logout">Logout</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: null
        }
    },
    methods: {
      logout() {
          axios.post('/api/logout').then(() => {
              this.$router.push({name: "home"})
          })
      }
    },
    mounted() {
        axios.get('/api/user').then((res) => {
            this.user = res.data
        })
    }
}
</script>

<style scoped>

</style>
