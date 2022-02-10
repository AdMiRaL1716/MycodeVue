<template>
    <div>
        <BoardNavbar/>
        <slot></slot>
    </div>
</template>

<script>
import BoardNavbar from "../components/BoardNavbar";
export default {
    name: "Board",
    components: {
        BoardNavbar
    }
}
</script>

<style scoped>

</style>
