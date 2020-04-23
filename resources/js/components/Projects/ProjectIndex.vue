<template>
  <div>
    <div v-if="loading">
      Loading..
    </div>
    <div
      v-else
      class="flex flex-col "
    >
      <div v-if="projects.length === 0">
        <p>
          You have no projects yet.. <router-link to="/jobs/create">
            Create Job
          </router-link>
        </p>
      </div>
      <div
        v-else
        class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8"
      >
        <router-link to="/jobs/create">
          Create Job
        </router-link>
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
          <table class="min-w-full table-fixed">
            <thead>
              <tr>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Job Title
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Description
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Client
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Phone
                </th>
           
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50" />
              </tr>
            </thead>
            <tbody
              v-for="project in projects"
              :key="project.id"
              class="bg-white"
            >
              <tr>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm leading-5 font-medium text-gray-900 break-all">
                        <router-link
                          :to="`/jobs/${project.id}`"
                          class="text-blue-400 font-bold"
                        >
                          <p class="break-words">
                            {{ project.title }}
                          </p>
                        </router-link>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ project.description }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ project.client }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ project.client_phone }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 w-1/6">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Active
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                  <router-link 
                    :to="`/jobs/${project.id}/edit`"
                    class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline"
                  >
                    Edit
                  </router-link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import { mapGetters, mapActions } from 'vuex'

export default {
        name: 'ProjectIndex',
    data() {
        return {
            loading: true
        }
    },

    computed: {
      ...mapGetters({
        projects: 'projects'
      })
    },

    mounted() {
      // axios.get('/api/projects')
      //     .then(response => {
      //         this.projects = response.data.data
      //         console.log('success', response)
      //         this.loading = false
      //     }).catch(err => {
      //         this.loading = false

      //         console.log(err, 'Unable to fetch projects')
      //     })
      this.getProjects()
      this.loading = false
    },

    methods: {
      ...mapActions({
        getProjects: 'getProjects'
      }),


    }



};
</script>
