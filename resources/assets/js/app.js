
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('new-words', require('./components/NewWords.vue'));
Vue.component('show-words', require('./components/ShowWords.vue'));
Vue.component('one-day', require('./components/OneDay.vue'));
Vue.component('one-week', require('./components/OneWeek.vue'));
Vue.component('one-month', require('./components/OneMonth.vue'));

const app = new Vue({
    el: '#app'
});
