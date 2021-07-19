require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
// Vue.component('app', require('./components/app.vue').default)

Vue.use(VueRouter)


// Vue.component('pagination', require('laravel-vue-pagination'));



import App from './components/app'
import Home from './components/home'

const router = new VueRouter({
    mode: 'history',
    routes: [
            {
            path: '/',
            name: 'home',
            component: Home
            },
            ]
})


const app = new Vue({
    el: '#app',
    components: {App},
    router
})
