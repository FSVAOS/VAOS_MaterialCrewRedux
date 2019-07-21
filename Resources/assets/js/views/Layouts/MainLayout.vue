<template>
    <div>
        <v-navigation-drawer app></v-navigation-drawer>
        <v-toolbar app></v-toolbar>
        <v-content>
            <v-container fluid>
                <slot></slot>
            </v-container>
        </v-content>
        <v-footer app></v-footer>
    </div>
</template>

<script>
    import SideNavMenu from "../../components/SideNavMenu";
    export default {
        name: "MainLayout",
        components: {SideNavMenu}
    }
</script>

<style scoped>

</style>
