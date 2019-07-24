<template>
    <div>
        <div class="f-callsign">SPK2616</div>
        <div class="info-flex">
            <div class="dep-apt">
                <div class="icao">KLAX</div>
                <div class="apt-name">Los Angeles International</div>
            </div>
            <div class="arr-apt">
                <div class="icao">KLAX</div>
                <div class="apt-name">Los Angeles International</div>
            </div>
        </div>
        <div class="progress-container">
            <v-progress-linear v-model="progress"></v-progress-linear>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FlightProgresCard",
        computed: {
            progress() {
                return 50;
            }
        }
    }
</script>

<style scoped>
    .f-callsign {
        font-size: 36px;
        font-weight: bold;
    }
    .icao {
        font-size: 48px;
        line-height: 48px;
        font-weight: 200;
    }
    .apt-name {
        font-size: 24px;
    }
    .dep-apt {
        text-align: left;
    }
    .arr-apt {
        text-align: right;
    }
    .info-flex {
        margin-top: 1rem;
        display: flex;
        justify-content: space-between;
    }
    .progress-container {
        margin: 1rem 2rem;
    }
</style>