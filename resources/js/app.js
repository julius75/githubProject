
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueResource from 'vue-resource'
import GitHubAPI from 'vue-github-api'
require('./bootstrap');


import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

window.Vue = require('vue');
Vue.use(VueResource);
Vue.use(GitHubAPI,{token:'3c776d79fa79fe108b88f0d636425bbb6ed21230'});



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('github', require('./components/Github.vue'));
Vue.component('listrepo', require('./components/ListRepo.vue'));
Vue.component('repositories', require('./components/Repositories.vue'));
Vue.component('vuelinks', require('./components/Vuelinks.vue'));
Vue.component('countrepo', require('./components/CountRepo.vue'));

//create routes
// const routes = [
//     { path: '/repository', component: Repositories },
//     { path: '/branch', component: ListRepo }
// ]
//
// const router = new VueRouter({
//     routes // short for `routes: routes`
// })

const app = new Vue({
    el: '#app'

});
