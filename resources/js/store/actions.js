import axios from 'axios';

export const getProjects = async ({ commit } ) => {
    let res = await axios.get('/api/projects');
    console.log("RESS", res)
   commit('PUSH_PROJECTS', res.data.data)

   return res;
}