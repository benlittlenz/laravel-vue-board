import Vue from 'vue';
import VueRouter from 'vue-router';

//Clients
import ClientCreate from './components/Clients/ClientCreate'
import ClientIndex from './components/Clients/ClientIndex'
import ClientDetails from './components/Clients/ClientDetails'
import ClientEdit from './components/Clients/ClientEdit'
//Projects
import ProjectTimeline from './components/Projects/ProjectTimeline.vue'

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        //Projects
        { path: '/jobs', component: ProjectTimeline },

        //Clients
        { path: '/clients', component: ClientIndex },
        { path: '/clients/create', component: ClientCreate },
        { path: '/clients/:id', component: ClientDetails },
        { path: '/clients/:id/edit', component: ClientEdit }
    ],
    mode: 'history'
})