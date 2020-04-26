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
    console.log("RES", res)
    return res;
}

export const getItems = async ({ commit }) => {
    let res = await axios.get('api/items');
    console.log(res)
    commit('PUSH_ITEMS', res.data.data)
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

export const createItem = async ({ commit }, { data }) => {
    console.log("DATA", data)
    commit('CREATE_ITEM', { data })

    return await axios.post('/api/items', data)
}