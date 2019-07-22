
import Vue from 'vue'
import Router from 'vue-router'


import Dashboard from '../views/Dashboard'
import FlightListView from "../views/Flights/FlightListView";
import FlightDetailedView from "../views/Flights/FlightDetailedView";

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            name: 'dashboard',
            component: Dashboard
        },
        {
            path: '/flights/upcoming',
            name: 'upcoming_flights',
            component: FlightListView
        },
        {
            path: '/flights/:id',
            name: 'flight_detailed',
            component: FlightDetailedView
        }
    ]
});
