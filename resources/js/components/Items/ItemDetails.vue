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
            :to="`/items/${item.id}/edit`"
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
              Are you sure you want to delete this item? 
              All of your data will be permanantly removed. This action cannot be undone.
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
          Item Details
        </h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
          {{ item.name }}
        </p>
      </div>
      <div>
        <dl>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Item Description
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              {{ item.description }}
            </dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Unit
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              {{ item.unit }}
            </dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm leading-5 font-medium text-gray-500">
              Item Price
            </dt>
            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              {{ item.price }}
            </dd>
          </div>
        </dl>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'ItemDetails',

    data() {
        return {
            loading: true,
            modal: false,
            item: []
        }
    },
    
    mounted() {
        axios.get(`/api/items/${this.$route.params.id}`)
            .then(response => {
                console.log(response)
                this.item = response.data
                this.loading = false
            }).catch(err => {
                console.error(err);
                this.loading = false

                if(err.response.status === 404) {
                  this.$router.push('/items')
                }
            })
    },

    methods: {
      destroy() {
        axios.delete(`/api/items/${this.$route.params.id}`)
          .then(res => {
            console.log('success', res)
            this.$router.push('/items')
          }).catch(err => {
            console.log(err);
          })
      }
    }
}
</script>