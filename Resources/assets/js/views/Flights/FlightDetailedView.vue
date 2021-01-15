<template>
    <div>
        <FlightBriefing v-if="flight.state === 0" :flight="flight" :updateFlight="getFlight"></FlightBriefing>
        <FlightActive v-if="flight.state === 1" :flight="flight" :updateFlight="getFlight"></FlightActive>
        <PostFlight v-if="flight.state === 2" :flight="flight" :updateFlight="getFlight"></PostFlight>
    </div>
</template>

<script>
    import FlightBriefing from "./components/FlightBriefing";
    import FlightActive from "./components/FlightActive";
    import PostFlight from "./components/PostFlight";
    export default {
        name: "FlightDetailedView",
        components: {PostFlight, FlightActive, FlightBriefing},
        data() {
            return {
                flight: {state: 0}
            }
        },
        props: ['id'],
        created() {
            this.getFlight()
        },
        methods: {
            getFlight() {
                this.$http.get(`/api/materialcrewredux/flights/${this.$route.params.id}`).then(res => {
                    this.flight = res.data;
                })
            }
        }
    }
</script>

<style scoped>

</style>
