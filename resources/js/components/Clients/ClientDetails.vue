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
            :to="`/clients/${client.id}/edit`"
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
              Are you sure you want to delete this client? All of your data will be permanantly removed. This action cannot be undone.
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
      <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
          {{ client.company }}
        </h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
          Client Details
        </p>
      </div>
      <div>
        <dl>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Client
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              {{ client.company }}
            </dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Address
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              {{ client.address }} </br>
              {{ client.suburb }} </br>
              {{ client.city }} </br>
            </dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Email address
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              {{ client.email }}
            </dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Contact Number
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              {{ client.phone }}
            </dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Description
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              {{ client.description }}
            </dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Attachments
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              <ul class="border border-gray-200 rounded-md">
                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                  <div class="w-0 flex-1 flex items-center">
                    <svg
                      class="flex-shrink-0 h-5 w-5 text-gray-400"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="ml-2 flex-1 w-0 truncate">
                      resume_back_end_developer.pdf
                    </span>
                  </div>
                  <div class="ml-4 flex-shrink-0">
                    <a
                      href="#"
                      class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out"
                    >
                      Download
                    </a>
                  </div>
                </li>
                <li class="border-t border-gray-200 pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                  <div class="w-0 flex-1 flex items-center">
                    <svg
                      class="flex-shrink-0 h-5 w-5 text-gray-400"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="ml-2 flex-1 w-0 truncate">
                      coverletter_back_end_developer.pdf
                    </span>
                  </div>
                  <div class="ml-4 flex-shrink-0">
                    <a
                      href="#"
                      class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out"
                    >
                      Download
                    </a>
                  </div>
                </li>
              </ul>
            </dd>
          </div>
        </dl>
      </div>
      <div>
        <NoteComponent :notes="notes" />
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

import NoteComponent from '../reusecore/NoteComponent'

export default {
    name: 'ClientDetails',

    components: {
      NoteComponent
    },

    data() {
        return {
            loading: true,
            modal: false,
            client: [],
            notes: [],
        }
    },

    mounted() {
        axios.get(`/api/clients/${this.$route.params.id}`)
            .then(response => {
                this.client = response.data;
                this.notes = response.data.notes
                console.log(response, 'success')

                this.loading = false;
            }).catch(error => {
                console.log(error)
                this.loading = false;
                
                if(error.response.status === 404) {
                  this.$router.push('/clients')
                }
            })
    },

    methods: {
      destroy() {
        axios.delete(`/api/clients/${this.$route.params.id}`)
          .then(res => {
            console.log('success', res)
            this.$router.push('/clients')
          }).catch(err => {
            console.log(err);
          })
      }
    }
}
</script>