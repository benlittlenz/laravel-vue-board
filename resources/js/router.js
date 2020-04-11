import Vue from 'vue';
import VueRouter from 'vue-router';

//Clients
import ClientCreate from './components/Clients/ClientCreate'
import AppClient from './components/Clients/AppClient'
import ClientDetails from './components/Clients/ClientDetails'

//Projects
import ProjectTimeline from './components/Projects/ProjectTimeline.vue'

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        //Projects
        { path: '/jobs', component: ProjectTimeline },

        //Clients
        { path: '/clients/create', component: ClientCreate },
        { path: '/clients', component: AppClient },
        // { path: '/clients/:id', component: ClientDetails }
    ],
    mode: 'history'
})