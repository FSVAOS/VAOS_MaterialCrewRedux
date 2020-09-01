<template>
    <div class="flights-card">
        <div class="flights-title">Flights</div>
        <div style="margin: 0 .25rem;">
            <v-btn block color="primary" to="flights/new"><v-icon left>mdi-plus</v-icon>New Flight</v-btn>
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
</template>

<script>
    export default {
        name: "SideNavFlightsCard"
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
        background: var(--v-secondary-base);
        text-align: center;
    }
    .flight-button:hover {
        transition: .2s;
        background: var(--v-primary-base);
        cursor: pointer;
    }
</style>
