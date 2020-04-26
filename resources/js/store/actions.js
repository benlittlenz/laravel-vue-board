import axios from 'axios';

//GET
export const getProjects = async ({ commit }) => {
    let res = await axios.get('/api/projects');
    commit('PUSH_PROJECTS', res.data.data)

    return res;
}

export const getClients = async ({ commit }) => {
    let res = await axios.get('/api/clients');
    commit('PUSH_CLIENTS', res.data.data)

    return res;
}

export const getStaff = async ({ commit }) => {
    let res = await axios.get('api/staff');
    commit('PUSH_STAFF', res.data.data);

    return res;
}

export const getItems = async ({ commit }) => {
    let res = await axios.get('api/items');
    commit('PUSH_ITEMS', res.data.date)
    return res;
}

//CREATE
export const createProject = async ({ commit }, { data }) => {
    console.log("DATA", data)
    commit('CREATE_PROJECT', { data })

    return await axios.post('/api/projects', data)
}

export const createClient = async ({ commit }, { data }) => {
    console.log("DATA", data)
    commit('CREATE_CLIENT', { data })

    return await axios.post('/api/clients', data)
}