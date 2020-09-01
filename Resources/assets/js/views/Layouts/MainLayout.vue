<template>
    <div>
        <v-navigation-drawer dark app width="300px" v-model="drawer">
            <v-img :aspect-ratio="16/9" :src="cover" gradient="rgba(100,100,100,.33), rgba(25,25,25,.7)">
                <v-layout pa-2 column align-center fill-height class="lightbox white--text">
                    <v-spacer></v-spacer>
                    <v-avatar size="84" style="border: white 3px solid; font-size: 24px;" rounded color="primary">
                        <img v-if="user.avatar_url" :src="user.avatar_url" alt="John" style="border: white 3px solid;">
                        <div v-if="!user.avatar_url">{{user.first_name.charAt(0)}}{{user.last_name.charAt(0)}}</div>
                    </v-avatar>
                    <v-flex shrink style="text-align:center">
                        <div class="headline">{{user.first_name}} {{user.last_name}}</div>
                        <div class="subtitle-1">{{user.username}} | Senior Captain</div>
                    </v-flex>
                </v-layout>
            </v-img>
            <SideNavFlightsCard></SideNavFlightsCard>
            <v-list flat>
                <v-list-item link to="/">
                    <v-list-item-icon>
                        <v-icon>mdi-view-dashboard</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Dashboard</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item link to="profile">
                    <v-list-item-icon>
                        <v-icon>mdi-account</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Profile</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item link to="map">
                    <v-list-item-icon>
                        <v-icon>mdi-map</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Live Map</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item link to="downloads">
                    <v-list-item-icon>
                        <v-icon>mdi-folder-download</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Download Center</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
            <!--
            <template slot="append">
                <v-layout pa-2 column align-center fill-height>
                    <img src="/img/vaos_logo.svg" width="80%"/>
                </v-layout>
            </template>
            -->
        </v-navigation-drawer>
        <v-app-bar app>
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>{{ comm_name }}</v-toolbar-title>
        </v-app-bar>
        <v-content style="min-height: 100vh;">
            <slot></slot>
        </v-content>
        <v-footer style="padding: 0" app>
            <div style="background: #38c172; padding: 0 1rem;"><v-icon>mdi-check</v-icon>Ignite Connected</div>
        </v-footer>
    </div>
</template>

<script>
    import SideNavMenu from "../../components/SideNavMenu";
    import SideNavFlightsCard from "../../components/SideNavFlightsCard";
    export default {
        name: "MainLayout",
        components: {SideNavFlightsCard, SideNavMenu},
        created() {
            console.log(this.$vuetify.breakpoint.lgAndUp);
            this.drawer = !!this.$vuetify.breakpoint.lgAndUp;
        },
        computed: {
            user() {
                return window.appSettings.user;
            },
            cover() {
                if (this.user.cover_url) {
                    return this.user.cover_url;
                } else {
                    return "/img/default_cover.png";
                }
            },
            ignite_status() {
                let status = this.$store.ignite.state.status;
                switch (status) {
                    case 0: return {text: "Disconnected",icon: "close", classes: {ignite_disconnected: true}}
                    case 1: return {text: "No Sim Data",icon: "plane", classes: {ignite_nosim: true}}
                    case 2: return {text: "Connected",icon: "check", classes: {ignite_disconnected: true}}
                }
            }
        },
        data() {
            return {
                comm_name: window.appSettings.community_name,
                drawer: false,
                items: [
                    {
                        icon: "dashboard",
                        title: "Dashboard"
                    },
                    {
                        icon: "person",
                        title: "Profile"
                    },
                    {
                        icon: "settings",
                        title: "Settings"
                    }
                ]
            }
        }
    }
</script>

<style scoped>
.ignite_connected {
    background: #38c172;
}
.ignite_nosim {
    background: #ffed4a;
    color: black;
}
.ignite_disconnected {
    background: #c70000;
}
</style>
