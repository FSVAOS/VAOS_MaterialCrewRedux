<template>
    <div>
        <v-navigation-drawer app>
            <v-img :aspect-ratio="16/9" src="/img/vaos_df_bg-01.svg" gradient="rgba(100,115,201,.33), rgba(25,32,72,.7)">
                <v-layout pa-2 column align-center fill-height class="lightbox white--text">
                    <v-spacer></v-spacer>
                    <v-avatar size="84">
                        <img src="https://pbs.twimg.com/profile_images/1151671407228706822/UZxOws2b_400x400.jpg" alt="John" style="border: white 3px solid;">
                    </v-avatar>
                    <v-flex shrink style="text-align:center">
                        <div class="headline">Taylor Broad</div>
                        <div class="body-1">BossOfGames | Senior Captain</div>
                    </v-flex>
                </v-layout>
            </v-img>
            <v-toolbar flat class="transparent">
                <v-list class="pa-0">
                    <div class="flights-card">
                        <div class="flights-title">Flights</div>
                        <div style="margin: 0 .25rem;">
                            <v-btn block color="primary"><v-icon left>add</v-icon>New Flight</v-btn>
                        </div>
                        <div class="flight-flex-container">
                            <div class="flight-button">
                                <div style="font-size: 32px; line-height: 32px;">0</div>
                                <div>Upcoming</div>
                            </div>
                            <div class="flight-button">
                                <div style="font-size: 32px; line-height: 32px;">0</div>
                                <div>Completed</div>
                            </div>
                        </div>
                    </div>
                    <v-list-tile
                            v-for="item in items"
                            :key="item.title"
                            @click="">
                        <v-list-tile-action>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-divider></v-divider>
                    <v-list-tile avatar>
                        <v-list-tile-avatar tile>
                            <img src="https://flyspark.org/img/AirlineLogos/LogoIcon.png">
                        </v-list-tile-avatar>

                        <v-list-tile-content>
                            <v-list-tile-title>Jet Connect Airlines</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-toolbar>
        </v-navigation-drawer>
        <v-toolbar app>
            <v-toolbar-side-icon></v-toolbar-side-icon>
            <v-toolbar-title>Community Name</v-toolbar-title>
        </v-toolbar>
        <v-content>
            <slot></slot>
        </v-content>
        <v-footer app>
            Connected Flight Simulator Clients: 0 |
        </v-footer>
    </div>
</template>

<script>
    import SideNavMenu from "../../components/SideNavMenu";
    export default {
        name: "MainLayout",
        components: {SideNavMenu},
        data() {
            return {
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
    .flights-card {
        background: #1a1a1a;
        padding: .5rem;
    }
    .flights-title {
        font-size: 18px;
        text-align: center;
        font-weight: bold;
    }
    .flight-flex-container {
        display: flex;
        margin: .5rem 0;
        align-content: stretch;
    }
    .flight-button {
        margin: 0 .25rem;
        width: 100%;
        padding: 1rem 0;
        min-height: 50px;
        background: var(--v-accent-base);
        text-align: center;
    }
    .flight-button:hover {
        transition: .2s;
        background: var(--v-primary-base);
        cursor: pointer;
    }
</style>
