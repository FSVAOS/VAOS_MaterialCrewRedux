<template>
    <v-container grid-list-lg>
        <v-layout grid row>
            <v-flex lg4 md6 sm12>
                <v-card class="mx-auto mb-4">
                    <v-img class="white--text align-end" height="150px" src="https://upload.wikimedia.org/wikipedia/commons/2/2c/SLC_airport%2C_2010.jpg"></v-img>
                    <v-card-title>Welcome Back</v-card-title>
                    <v-card-subtitle class="pb-0">Currently at <b>Salt Lake City International Airport</b></v-card-subtitle>
                    <v-card-actions>
                        <v-btn text color="primary">Start Flight Here</v-btn>
                    </v-card-actions>
                </v-card>
                <v-card class="mx-auto">
                    <v-card-title>Statistics</v-card-title>
                    <v-list>
                        <v-list-item>Total Flights: 200</v-list-item>
                        <v-list-item>Total Hours: 156.2h</v-list-item>
                        <v-list-item>Total Airports Visited: 27</v-list-item>
                    </v-list>
                    <v-card-actions>
                        <v-btn text color="primary">View Profile</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
    export default {
        name: "NewFlightSelection"
    }
</script>

<style scoped>
    .lateral-flex-container {
        display: flex;
    }
    .left-box {
        width: 100%;
        background: #6cb2eb;
    }
    .right-box {
        width: 100%;
        height: 250px;
        background: #38c172;
    }
</style>
