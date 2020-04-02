<template>
    <div>
        <app-project 
            v-for="project in projects"
            :key="project.id"
            :project="project"
        />
    </div>
</template>


<script>

import axios from 'axios';

export default {
    data() {
        return {
            projects: []
        }
    },
    methods: {
        async getProjects() {
            let res = await axios.get('/api/projects')
            console.log(res)
            this.projects = res.data.data
        }
    },
    mounted() {
        this.getProjects()
    }
}

</script>
