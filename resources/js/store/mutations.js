//GETTING

export const PUSH_PROJECTS = (state, projects) => {
    state.projects = projects;
}

export const PUSH_CLIENTS = (state, clients) => {
    state.clients = clients;
}

export const PUSH_STAFF = (state, staff) => {
    state.staff = staff;
}

export const PUSH_ITEMS = (state, items) => {
    state.items = items;
}


//CREATING
export const CREATE_PROJECT = (state, project) => {
    state.projects.push({ project })
}

export const CREATE_CLIENT = (state, client) => {
    state.clients.push({ client })
}

export const CREATE_ITEM = (state, item) => {
    state.items.push({ item })
}