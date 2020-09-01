/*
 * Application Main Entry Point
 */


import Vue from 'vue'
import Vuetify from 'vuetify'
import store from './store'
import App from './App'
import router from './router'
import axios from 'axios'

import ignite from './IgniteJS'

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}


import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.css'
import mainLayout from './views/Layouts/MainLayout'
import Blank from "./views/Layouts/Blank";
Vue.component('main-layout', mainLayout);
Vue.component('blank-layout', Blank);

Vue.use(Vuetify);

const vuetify = new Vuetify({
    theme: {
        dark: true,
        themes: {
            dark: {
                primary: window.appSettings.colors.primary,
                secondary: window.appSettings.colors.secondary,
                accent: window.appSettings.colors.accent,
            }
        },
        options: {
            customProperties: true
        }
    },
    icons: {
        iconfont: 'mdi', // 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4' || 'faSvg'
    },
});
new Vue({
    router,
    store,
    vuetify,
    data() {
        return {
            ignite: null
        }
    },
    created()
    {
        this.$ignite = new ignite("127.0.0.1:5989");
        this.$ignite.connect();
        console.log("Application Booted.");
    },
    mounted(){

    },
    render: h => h(App)
}).$mount('#app');
