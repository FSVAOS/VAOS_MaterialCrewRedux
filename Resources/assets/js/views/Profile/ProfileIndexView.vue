<template>
    <div>
        <v-container grid-list-lg>
            <v-layout grid row>
                <v-flex lg4 md6 sm12>
                    <v-card class="mx-auto mb-4">
                        <v-img class="white--text align-end" height="150px" style="display: flex" :src="cover">
                            <div style="display: flex; flex-direction: row; margin: 1rem;">
                                <div class="m-auto">
                                    <div class="headline">{{user.first_name}} {{user.last_name}}</div>
                                    <div class="subtitle-1">{{user.username}} | Senior Captain</div>
                                </div>
                            </div>
                        </v-img>
                        <v-list>
                            <v-list-item>Total Flights: 200</v-list-item>
                            <v-list-item>Total Hours: 156.2h</v-list-item>
                            <v-list-item>Total Airports Visited: 27</v-list-item>
                        </v-list>
                    </v-card>
                    <v-card class="mx-auto">

                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>
    </div>
</template>

<script>
    export default {
        name: "ProfileIndexView",
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
        }
    }
</script>

<style scoped>

</style>
