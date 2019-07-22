<template>
    <v-img height="200px" src="https://i.imgur.com/Fj4dbUx.png" gradient="rgba(100,115,201,.33), rgba(25,32,72,.7)" class="elevation-5">
        <div class="flight-card-content">
            <div class="flight-callsign">{{info.callsign}}</div>
            <div class="bottom-info">
                <span><v-icon>flight_takeoff</v-icon>Test</span>
                <span><v-icon>flight_land</v-icon>Test</span>
                <span><v-icon>flight</v-icon>Test</span>
            </div>
        </div>
    </v-img>
</template>

<script>
    export default {
        name: "FlightCard",
        props: [
            'info'
        ]
    }
</script>

<style scoped>
    .flight-card-content {
        padding: 1rem;
        height: 100%;
        display: flex;
        flex-direction: column;
        text-shadow: 0 0 8px rgba(0,0,0,.75);
    }
    .bottom-info {
        margin-top: auto;
        width: 100%;
        display: flex;
        font-size: 18px;
        justify-content: space-between;
    }
    .flight-callsign {
        font-size: 42px;
        font-weight: bold;
    }
</style>