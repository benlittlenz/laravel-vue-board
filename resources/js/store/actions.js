import axios from 'axios';

export const getProjects = async ({ commit } ) => {
    let res = await axios.get('/api/projects');
   commit('PUSH_PROJECTS', res.data.data)

   return res;
}

export const getClients = async ({ commit }) => {
    let res = await axios.get('/api/clients');

    commit('PUSH_CLIENTS', res.data.data)

    return res;
}

