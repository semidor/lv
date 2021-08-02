require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './components/app'
import Books from './components/books'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)






const router = new VueRouter({
    mode: 'history',
    routes: [{path: '/', name: 'books', component: Books}]})

const app = new Vue({el: '#app', components: {App, Books, BootstrapVue}, router})



 