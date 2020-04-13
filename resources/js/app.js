/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import Vuex from 'vuex'
import vSelect from 'vue-select'
require('./bootstrap');

import App from './components/App'
import router from './router';
import timeline from './store/project-timeline'

Vue.use(Vuex);
Vue.component('v-select', vSelect)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const store = new Vuex.Store({
    modules: {
        timeline
    }
})

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
