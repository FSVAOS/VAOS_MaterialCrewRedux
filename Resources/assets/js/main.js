/*
 * Application Main Entry Point
 */


import Vue from 'vue'
import Vuetify from 'vuetify'
import store from './store'
import App from './App'
import router from './router'
import axios from 'axios'

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}


import 'vuetify/dist/vuetify.min.css'

import mainLayout from './views/Layouts/MainLayout'
Vue.component('main-layout', mainLayout);

Vue.use(Vuetify, {
    options: {
        customProperties: true
    }
});

new Vue({
    router,
    store,
    created()
    {
        console.log("Application Booted.");
    },
    mounted(){

    },
    render: h => h(App)
}).$mount('#app');
