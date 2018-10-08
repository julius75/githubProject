
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueResource from 'vue-resource'
import GitHubAPI from 'vue-github-api'
require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueResource);
Vue.use(GitHubAPI,{token:'3aff1211f71224be2755b9a140eb5769d3a55768'});



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('github', require('./components/Github.vue'));
Vue.component('gitrepo', require('./components/ListRepo.vue'));
Vue.component('repositories', require('./components/Repositories.vue'));


const app = new Vue({
    el: '#app'
});
