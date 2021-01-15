<template>
    <div>
        <div style="position: fixed; height: inherit; width: 100%; z-index: 0">
            <v-img :aspect-ratio="16/9" src="/img/default_background.jpg"></v-img>
        </div>
        <v-container grid-list-md style="position:relative; z-index: 1">
            <v-layout row wrap fill-height>
                <v-flex md9 xs12>
                    <div class="display-4" style="text-shadow: rgba(0,0,0,.75) 0 0 5px;">{{flight.callsign}}</div>
                </v-flex>
                <v-flex md3 xs12>
                    <v-card>
                        <v-card-title>Actions</v-card-title>
                        <v-btn @click="startFlight()">Start Flight</v-btn>
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
        props: ['flight'],
        data: () => ({
            fab: false
        }),
        methods: {
            startFlight() {
                this.$http.post('/api/materialcrewredux/flights/start', {id: this.flight.id})
                .then(res => {
                    this.$emit('updateFlight');
                })
            }
        }
    }
</script>

<style scoped>

</style>
