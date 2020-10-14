<template>
    <div class="tab-content">
        <div class="layout-col">
            <h2>{{ meta.title }}</h2>
            <input type="checkbox" id="jack" value="Jack" v-model="checkedNames">
            <label for="jack">Jack</label>
            <input type="checkbox" id="john" value="John" v-model="checkedNames">
            <label for="john">John</label>
            <input type="checkbox" id="mike" value="Mike" v-model="checkedNames">
            <label for="mike">Mike</label>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['meta'],

        mounted() {
            //
        },
    }
</script>

<style>
    /* Scoped Styles */
</style>
