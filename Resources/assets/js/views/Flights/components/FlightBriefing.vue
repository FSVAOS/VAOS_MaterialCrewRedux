<template>
    <div>
        <v-container fluid grid-list-md>
            <v-layout row wrap fill-height>
                <v-flex md9 xs12>
                    <div class="display-3">{{flight.callsign}}</div>
                    <v-card>

                    </v-card>
                </v-flex>
                <v-flex md3 xs12>
                    <v-card>
                        <v-card-title>Actions</v-card-title>
                        <v-btn>Start Flight</v-btn>
                        <v-btn>Cancel Flight</v-btn>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>
    </div>
</template>

<script>
    import FlightProgressCard from "../../../components/FlightProgressCard";
    export default {
        name: "FlightBriefing",
        components: {FlightProgressCard},
        props: ['flight']
    }
</script>

<style scoped>

</style>
