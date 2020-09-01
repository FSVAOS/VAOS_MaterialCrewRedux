<template>
    <v-app id="inspire" dark>
        <component :is="layout">
            <router-view></router-view>
        </component>
    </v-app>
</template>

<style>
    .v-application {
        font-family: Europa Roboto sans-serif;
    }
</style>
<script>
    const default_layout = "main";
    export default {
        computed: {
            layout() {
                return (this.$route.meta.layout || default_layout) + '-layout';
            }
        }
    }
</script>
