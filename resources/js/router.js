import Vue from 'vue';
import VueRouter from 'vue-router';

//Dashboaard
import Kanban from './components/Dashboard/Kanban'

//Clients
import ClientCreate from './components/Clients/ClientCreate'
import ClientIndex from './components/Clients/ClientIndex'
import ClientDetails from './components/Clients/ClientDetails'
import ClientEdit from './components/Clients/ClientEdit'
//Projects
import ProjectIndex from './components/Projects/ProjectIndex.vue'
import ProjectDetailsNew from './components/Projects/ProjectDetailsNew'
import ProjectCreate from './components/Projects/ProjectCreate'
import ProjectEdit from './components/Projects/ProjectEdit'

import StaffIndex from './components/Staff/StaffIndex.vue'

import ItemIndex from './components/Items/ItemsIndex'
import ItemDetails from './components/Items/ItemDetails'
import ItemCreate from './components/Items/ItemCreate'
import ItemEdit from './components/Items/ItemEdit'

import JobModal from './components/reusecore/Modals/JobModal'

import RadioButtons from './components/Dashboard/RadioButtons'
import DashboardSection from './components/Dashboard/DashboardSection'


Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        { path: '/home', component: Kanban },
        { path: '/jobmodal', component: JobModal },
        { path: '/radio', component: RadioButtons },
        { path: '/section', component: DashboardSection },
        //Projects
        { path: '/jobs', component: ProjectIndex },
        { path: '/jobs/create', component: ProjectCreate },
        { path: '/jobs/:id', component: ProjectDetailsNew },
        { path: '/jobs/:id/edit', component: ProjectEdit },

        //Clients
        { path: '/clients', component: ClientIndex },
        { path: '/clients/create', component: ClientCreate },
        { path: '/clients/:id', component: ClientDetails },
        { path: '/clients/:id/edit', component: ClientEdit },

        //Staff
        { path: '/staff', component: StaffIndex },

        //Invoice Items
        { path: '/items', component: ItemIndex },
        { path: '/items/create', component: ItemCreate },
        { path: '/items/:id', component: ItemDetails },
        { path: '/items/:id/edit', component: ItemEdit },
    ],
    mode: 'history'
})