<template>
    <v-container grid-list-lg>
        <v-layout grid row>
            <v-flex lg4 md6 sm12 v-for="flight in flights" :key="flight.id">
                <v-card class="mx-auto mb-4">
                    <v-img class="white--text align-end" height="150px" src="https://upload.wikimedia.org/wikipedia/commons/2/2c/SLC_airport%2C_2010.jpg"></v-img>
                    <v-card-title>{{flight.callsign}}</v-card-title>
                    <v-card-subtitle class="pb-0">{{flight.depapt.icao}}-{{flight.arrapt.icao}}</v-card-subtitle>
                    <v-card-actions>
                        <v-btn text color="primary" @click="navToFlight(flight.id)">View Details</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
export default {
    name: "UpcomingFlightsView",
    data: () => ({
        flights: []
    }),
    methods: {
        navToFlight(id) {
            this.$router.push(`/flights/${id}`)
        }
    },
    created() {
        this.$http.get('/api/materialcrewredux/flights').then(res => {
            console.log(res)
            this.flights = res.data.filter(flight => flight.state === 0);
        })
    },
}
</script>

<style scoped>

</style>
