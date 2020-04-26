/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import Vuex from 'vuex'
import vSelect from 'vue-select'
import vClickOutside from 'v-click-outside'
require('./bootstrap');

import App from './components/App'
import router from './router';
import store from './store'

Vue.use(vClickOutside)
Vue.use(Vuex);
Vue.component('v-select', vSelect)

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    data() {
        return {
            company: ''
        }
    },
    store,
    router
});
