<template>
    <div>
        <v-container fluid grid-list-md>
            <v-layout row wrap>
                <v-flex md9 xs12>
                    <v-card>
                        <v-responsive :aspect-ratio="16/9">
                            <iframe style="height: 100%; width: 100%; border: none;" src="https://simvector.net/"></iframe>
                        </v-responsive>
                    </v-card>
                </v-flex>
                <v-flex md3 xs12>
                    <v-card>
                        <v-img :aspect-ratio="16/9" src="https://i.imgur.com/Fj4dbUx.png" gradient="rgba(30,30,30,0), rgba(30,30,30,.0),rgba(30,30,30,.75)">
                            <v-layout pa-2 column fill-height>
                                <v-spacer></v-spacer>
                                <v-flex shrink style="padding: 0;">
                                    <div class="acf-manufacturer">Daher</div>
                                    <div class="acf-model">TBM-900<span style="float: right">N102TB</span></div>
                                </v-flex>
                            </v-layout>
                        </v-img>
                        <v-list two-line>
                            <v-list-tile>
                                <v-list-tile-action>
                                    <v-icon>person</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title>Taylor Broad</v-list-tile-title>
                                    <v-list-tile-sub-title>Owner</v-list-tile-sub-title>
                                </v-list-tile-content>
                            </v-list-tile>
                            <v-list-tile>
                                <v-list-tile-action>
                                    <v-icon>person</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title>KPDX - Portland International Airport</v-list-tile-title>
                                    <v-list-tile-sub-title>Current Airport</v-list-tile-sub-title>
                                </v-list-tile-content>
                            </v-list-tile>
                            <v-list-tile>
                                <v-list-tile-action>
                                    <v-icon>access_time</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title>104.5</v-list-tile-title>
                                    <v-list-tile-sub-title>Hours</v-list-tile-sub-title>
                                </v-list-tile-content>
                            </v-list-tile>
                        </v-list>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>
        <!-- Comments and Timeline -->
        <v-container>

        </v-container>
    </div>
</template>

<script>
    export default {
        name: "PostFlight"
    }
</script>

<style scoped>
    .acf-manufacturer {
        font-size: 14px;
        line-height: 14px;
    }
    .acf-model {
        font-size: 28px;
        line-height:28px;
    }
</style>