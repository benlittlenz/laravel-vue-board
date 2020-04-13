import Vue from 'vue';
import VueRouter from 'vue-router';

//Clients
import ClientCreate from './components/Clients/ClientCreate'
import ClientIndex from './components/Clients/ClientIndex'
import ClientDetails from './components/Clients/ClientDetails'
import ClientEdit from './components/Clients/ClientEdit'
//Projects
import ProjectIndex from './components/Projects/ProjectIndex.vue'
import ProjectDetails from './components/Projects/ProjectDetails'
import ProjectCreate from './components/Projects/ProjectCreate'
import ProjectEdit from './components/Projects/ProjectEdit'

import StaffIndex from './components/Staff/StaffIndex.vue'

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        //Projects
        { path: '/jobs', component: ProjectIndex },
        { path: '/jobs/create', component: ProjectCreate },
        { path: '/jobs/:id', component: ProjectDetails },
        { path: '/jobs/:id/edit', component: ProjectEdit },

        //Clients
        { path: '/clients', component: ClientIndex },
        { path: '/clients/create', component: ClientCreate },
        { path: '/clients/:id', component: ClientDetails },
        { path: '/clients/:id/edit', component: ClientEdit },

        //Staff
        { path: '/staff', component: StaffIndex },
    ],
    mode: 'history'
})