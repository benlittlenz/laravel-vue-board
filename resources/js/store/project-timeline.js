import axios from 'axios'

export default {
    namespaced: true,

    state: {
        projects: []
    },
    
    getters: {
        projects (state) {
            return state.projects
        } 
    },

    mutations: {
        PUSH_PROJECTS (state, data) {
            state.projects.push(...data)
        }
    },

    actions: {
        async getProjects({ commit }) {
            let res = await axios.get("/api/projects");

            commit('PUSH_PROJECTS', res.data.data)
        }
    }
}