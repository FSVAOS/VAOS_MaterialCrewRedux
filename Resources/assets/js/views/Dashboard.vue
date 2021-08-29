<template>
    <div>
        <div style="position: fixed; height: inherit; width: 100%; z-index: 0">
            <v-img :aspect-ratio="16/9" src="/img/default_background.jpg"></v-img>
        </div>
        <div style="position: relative; z-index: 1; padding-top: 5rem">
            <v-container grid-list-lg>
                <img :src="app_settings.community_logo" style="display: block; height: 200px; max-width: 500px;"/>
                <v-layout grid row>
                    <v-flex lg4 md6 sm12>
                        <v-card class="mx-auto mb-4">
                            <v-img class="white--text align-end" height="150px" src="https://upload.wikimedia.org/wikipedia/commons/2/2c/SLC_airport%2C_2010.jpg"></v-img>
                            <v-card-title>Welcome Back {{ user.first_name }}!</v-card-title>
                            <!--
                            <v-card-subtitle class="pb-0">Currently at <b>{{ user.current_location.name }}</b></v-card-subtitle>
                            <v-card-actions>
                                <v-btn text color="primary">Start Flight Here</v-btn>
                            </v-card-actions>
                            -->
                        </v-card>
                        <v-card class="mx-auto">
                            <v-card-title>Statistics</v-card-title>
                            <v-list>
                                <v-list-item>Total Flights: {{ user.flight_count }}</v-list-item>
                                <v-list-item>Total Hours: {{user.total_hours}}h</v-list-item>
                            </v-list>
                            <v-card-actions>
                                <v-btn text color="primary">View Profile</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                    <v-flex lg8 md6 sm12>
                        <v-card>
                            <v-responsive :aspect-ratio="16/9">
                                <iframe style="height: 100%; width: 100%; border: none;" src="https://simvector.net/engine"></iframe>
                            </v-responsive>
                        </v-card>
                    </v-flex>
                </v-layout>
                <v-layout grid row>
                    <v-flex md6 sm12>
                        <v-card class="mx-auto">
                            <v-card-title>Recent Flights</v-card-title>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Dashboard",
        computed: {
            app_settings() {
                return window.appSettings;
            },
            user() {
                return window.appSettings.user;
            }
        }
    }
</script>

<style scoped>

</style>
