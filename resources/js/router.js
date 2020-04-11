import Vue from 'vue';
import VueRouter from 'vue-router';
//import ExampleComponent from './components/ExampleComponent'
import ClientCreate from './components/Clients/ClientCreate'
import ProjectTimeline from './components/Projects/ProjectTimeline.vue'

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        { path: '/jobs', component: ProjectTimeline },
        { path: '/clients', component: ClientCreate }
    ],
    mode: 'history'
})