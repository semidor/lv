require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


// Vue.component('pagination', require('laravel-vue-pagination'));



import App from './components/app'
import Books from './components/books'

const router = new VueRouter({
    mode: 'history',
    routes: [
            {
            path: '/',
            name: 'books',
            component: Books
            },
            ]
})


const app = new Vue({
    el: '#app',
    components: {App},
    router
})
