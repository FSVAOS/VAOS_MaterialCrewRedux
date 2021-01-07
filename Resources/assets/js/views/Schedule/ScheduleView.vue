<template>
    <div>
        <div>
            <v-container class="flex">
                <v-layout grid row style="max-width: 400px; margin: 0 auto;">
                    <v-flex md6 sm12>
                        <ApiPullAutoComplete v-model="filter_options.depapt" label="Origin" :returnobj="true" itemtext="name_combined" url="/api/airports/search"/>
                        <ApiPullAutoComplete v-model="filter_options.arrapt" label="Destination" :returnobj="true" itemtext="name_combined" url="/api/airports/search"/>
                    </v-flex>
                </v-layout>
            </v-container>
        </div>
        <div>
            <v-container grid-list-lg>
                <v-pagination v-if="Math.ceil(filtered_list.length/perPage)" v-model="page" :length="Math.ceil(filtered_list.length/perPage)" total-visible="10"></v-pagination>
                <v-layout grid row>
                    <v-flex lg4 md6 sm12 v-for="flight in visibleSchedule" :key="flight.id">
                        <v-card class="mx-auto mb-4" v-if="card_mode">
                            <v-img class="white--text align-end" height="150px" src="https://upload.wikimedia.org/wikipedia/commons/2/2c/SLC_airport%2C_2010.jpg"></v-img>
                            <v-card-title>{{flight.callsign}}</v-card-title>
                            <v-card-subtitle class="pb-0">{{flight.depapt.icao}}-{{flight.arrapt.icao}}</v-card-subtitle>
                            <v-card-actions>
                                <v-btn color="primary" @click="create_bid(flight.id)">Create Bid</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </div>
    </div>
</template>

<script>
    import ApiPullAutoComplete from "../../components/ApiPullAutoComplete";
    import axios from 'axios'
    export default {
        name: "ScheduleView",
        components: {ApiPullAutoComplete},
        data() {
            return {
                schedule_list: [],
                perPage: 10,
                card_mode: true,
                page: 1,
                filter_options: {
                    depapt: null,
                    arrapt: null
                },
                filter_keys: {
                    depapt: {
                        value: "depapt_id",
                        filter: "id"
                    },
                    arrapt: {
                        value: "arrapt_id",
                        filter: "id"
                    }
                }
            }
        },
        created() {
            axios.get('/api/materialcrewredux/flights/schedule').then(res => {
                console.log(res);
                this.schedule_list = res.data
            })
        },
        methods: {
            create_bid(id) {
                axios.post('/api/materialcrewredux/flights', {type: 'schedule', id: id}).then(res => {
                    // Looks like it worked. Reload user data to update user account.
                    this.$store.dispatch('profile/Load_Profile_Data');
                }).catch(err => {
                    // Didn't work. Show a dialog saying we got the error and why.'
                    alert('There was a problem!!!');
                })
            }
        },
        computed: {
            filtered_list() {
                if (this.schedule_list.length === 0)
                    return [];
                let out = [];
                let filter_opt = JSON.parse(JSON.stringify(this.filter_options));
                let filter_keys = JSON.parse(JSON.stringify(this.filter_keys));
                let options_applied = false;
                Object.values(filter_opt).map(x => {
                    if (x !== null) {
                        options_applied = true;
                    }
                });
                console.log(options_applied);
                if (!options_applied)
                    return this.schedule_list;

                let filters = {};
                console.log(filter_opt);
                console.log('Going through Filters')
                Object.entries(filter_opt).map(([key,val]) => {
                    if (val !== null) {
                        let f = filter_keys[key];
                        console.log(`${f.value}: ${val[f.filter]}`);
                        filters[f.value] = val[f.filter];
                    }
                });
                console.log("filter output")
                console.log(filters);
                return this.schedule_list.filter(flight => {
                    for (let [key,val] of Object.entries(filters)) {
                        //console.log(`${key} ${val}`);
                        //console.log(flight[key]);
                        //console.log(val);
                        if (flight[key] !== val) { return false;}
                    }
                    console.log('We got past it!!!');
                    return true;
                })
                // this.schedule_list.forEach(flight => {
                //     Object.entries(obj).map(([key, value]) => {
                //         if (value !== null) {
                //             // console.log(flight[key][this.filter_keys[key]]);
                //             // console.log(value[this.filter_keys[key]]);
                //             console.log(`${flight.airline.icao}${flight.flightnum}: ${flight[key][this.filter_keys[key]] === value[this.filter_keys[key]]}`);
                //             if (flight[key][this.filter_keys[key]] === value[this.filter_keys[key]])
                //                 out.push(flight)
                //         }
                //     });
                // });
                // return out
            },
            visibleSchedule() {
                return this.filtered_list.slice((this.page - 1)* this.perPage, this.page* this.perPage)
            }
        }
    }
</script>

<style scoped>

</style>
