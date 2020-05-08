<template>
  <div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div v-if="loading">
      Loading...
    </div>
    <div v-else>
      <div class="flex justify-between">
        <a
          href="#"
          class="text-blue-400"
          @click="$router.back()"
        >
          Back
        </a>
        <div class="relative">
          <router-link 
            :to="`/jobs/${project.id}/edit`"
            class="px-4 py-2 rounded text-sm text-green-500 border border-green-500 font-bold mr-2"
          >
            Edit
          </router-link>
          <a 
            href="#"
            class="px-4 py-2 border border-red-500 rounded text-sm font-bold text-red-500"
            @click="modal = ! modal"
          >Delete</a>

          <div 
            v-if="modal"
            class="absolute bg-white text-white rounded-lg z-20 p-8 width-100 right-0 mt-2 mr-20 mt-8"
          >
            <p class="text-lg leading-6 font-medium text-gray-900">
              Are you sure you want to delete this job? All of your data will be permanantly removed. This action cannot be undone.
            </p>
            <div class="flex items-center mt-6 justify-end">
              <button
                class="mr-2 inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                @click="modal = !modal"
              >
                Cancel
              </button>
              <button 
                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                @click="destroy"
              >
                Delete
              </button>
            </div>
          </div>
        </div>
        <div 
          v-if="modal"
          class="bg-black opacity-25 absolute right-0 left-0 top-0 bottom-0 z-10"
          @click="modal = ! modal"
        />
      </div>
      <div class="max-w-4xl bg-white">
        <div class="flex items-center">
          <svg
            class="text-indigo-900"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M17 5.5H20C21.1046 5.5 22 6.39543 22 7.5V19.5C22 20.6046 21.1046 21.5 20 21.5H4C2.89543 21.5 2 20.6046 2 19.5V7.5C2 6.39543 2.89543 5.5 4 5.5H7C7 3.84315 8.34315 2.5 10 2.5H14C15.6569 2.5 17 3.84315 17 5.5ZM14 4.5H10C9.44772 4.5 9 4.94772 9 5.5H15C15 4.94772 14.5523 4.5 14 4.5ZM20 7.5H4V9.5H20V7.5ZM4 19.5V11.5H7V13.5H11V11.5H13V13.5H17V11.5H20V19.5H4Z"
              fill="currentColor"
            />
          </svg>
          <h3 class="ml-4 text-xl font-bold text-gray-700 leading-normal">
            Project Title
          </h3>
        </div>
        <div class="mt-4">
          <p>To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc,</p>
        </div>

        <div class="flex mt-10">
          <span class="flex items-center ">
            <svg  
              class="text-indigo-700"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M8 9C7.44772 9 7 9.44771 7 10C7 10.5523 7.44772 11 8 11H16C16.5523 11 17 10.5523 17 10C17 9.44771 16.5523 9 16 9H8Z"
                fill="currentColor"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM5 18V7H19V18C19 18.5523 18.5523 19 18 19H6C5.44772 19 5 18.5523 5 18Z"
                fill="currentColor"
              />
            </svg>
            <p class="text-gray-800 ml-2 font-semibold text-sm">Start Date</p>
            <span class="ml-12 flex items-center ">
              <svg
                class="text-indigo-700"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15 17C16.1046 17 17 16.1046 17 15C17 13.8954 16.1046 13 15 13C13.8954 13 13 13.8954 13 15C13 16.1046 13.8954 17 15 17Z"
                  fill="currentColor"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM5 18V7H19V18C19 18.5523 18.5523 19 18 19H6C5.44772 19 5 18.5523 5 18Z"
                  fill="currentColor"
                />
              </svg>
              <p class="text-gray-800 ml-2 font-semibold text-sm">Finish Date</p>
            </span>
          </span>
        </div>
        <span class="flex items-center">
          <p class="text-gray-600 font-semibold text-xs mt-1">21/08/2020</p>
          <p class="text-gray-600 font-semibold text-xs mt-1 ml-20">21/08/2020</p>
        </span>
      </div>
      <div>
        <dl>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Description
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              {{ project.description }}
            </dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Address
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              {{ project[0].address }} </br>
              {{ project[0].suburb }} </br>
              {{ project[0].city }} </br>
            </dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Staff Assigned
            </dt>
            <dd 
              v-for="user in project.users"
              :key="user.id"
              class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2"
            >
              {{ user.name }}
            </dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Email address
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              Test email
            </dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              {{ project[0].email }}
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              {{ project[0].phone }}
            </dd>
          </div>
        </dl>
      </div>
      
      <div>
        <ProjectTimesheets :timesheets="timesheets" />
      </div>
      <div>
        <NoteComponent :notes="notes" />
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import ProjectTimesheets from './ProjectTimesheets'
import NoteComponent from '../reusecore/NoteComponent'

export default {
    name: 'ProjectDetails',

        components: {
         ProjectTimesheets,
         NoteComponent
        },
    data() {
        return {
            project: [],
            timesheets: [],
            notes: [],
            loading: true,
            modal: false,
            id: null
        }
    },

    mounted() {
        axios.get(`/api/projects/${this.$route.params.id}`)
            .then(response => {
                this.project = response.data
                this.timesheets = response.data.timesheets
                this.notes = response.data.notes
                console.log('response', response);
                this.id = this.$route.params.id
                
                this.loading = false
            }).catch(error => {
                this.loading = false
                console.log('err', error);
    
                if(error.response.status === 404) {
                  this.$router.push('/projects')
                }
            })

            //console.log('project', this.project);
    },

    methods: {
      destroy() {
        console.log('aa', this.id);
        
        axios.delete(`/api/projects/${this.id}`)
          .then(res => {
            console.log('success', res)
            this.$router.push('/projects')
          }).catch(err => {
            console.log(err);
          })
      }
    }

    
    
}
</script>