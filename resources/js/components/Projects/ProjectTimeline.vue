<template>
  <div class="">

    <div class="">
      <div class="h-16 px-6 flex items-center justify-between">
        <div>
          Jobs
        </div>
        <div class="justify-end">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add Job
          </button>
        </div>
        <div class="flex items-center" />
      </div>
    </div>
    
    <AppProject
      v-for="project in projects"
      :key="project.id"
      :project="project"
    />
    <div class="flex justify-end mr-8 mt-4">
      <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
        Prev
      </button>
      <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
        Next
      </button>
    </div>
  </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

import AppProject from './AppProject.vue'

export default {
    components: {
      AppProject
    },
  computed: {
    ...mapGetters({
      projects: 'timeline/projects'
    })
  },
  mounted() {
    this.getProjects()
    this.getClients();
  },

  methods: {
    ...mapActions({
        getProjects: 'timeline/getProjects',
        getClients: 'timeline/getClients',
    })
  }


};
</script>
