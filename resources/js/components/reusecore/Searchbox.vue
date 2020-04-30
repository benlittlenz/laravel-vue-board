<template>
  <div class="absolute w-full z-10 bg-gray-200">
    <div v-if="clientModalOpen === true">
      <ClientModal />
    </div>
  
    <div>
      <div>
        <div class="">
          <div class="relative text-gray-600 w-72 text-lg">
            <input
              v-model="searchQuery"
              type="search"
              name="search"
              placeholder="Search"
              class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none ml-2 w-72"
              @submit.prevent="submit"
            >

            <button
              @click="open = !open"
              @submit.prevent="submit"
            >
              <svg
                class="h-4 w-4 absolute right-0 top-0 mt-3 mr-2"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path d="M19 9l-7 7-7-7" />
              </svg>
            </button

            </div
            >
            <div 
              v-if="open === true"
              class=""
            >
              <div
                v-if="searchQuery === ''"
                class="overflow-auto h-56"
              >
                <div
                    
                  v-for="client in clients"

                  class="my-1 cursor-pointer hover:bg-gray-300 rounded"
                  @click="searchQuery = client.company; open = false;"
                >
                  <p class="py-3 ml-4">
                    {{ client.company }}
                  </p>
                </div>
              </div>
              <div 
                v-for="item in resultQuery"
                v-else
                class="overflow-auto max-h-full"
                @click="searchQuery = item; open = false;"
              >
                <div
                  class="my-1 cursor-pointer hover:bg-gray-300 rounded"
                >
                  <p class="py-3 ml-4">
                    {{ item }}
                  </p>
                </div>
              </div>
              <div class="flex ml-6 items-center bg-blue-100">
                <div class="flex-grow text-right -mb-px">
                  <button
                    class="no-underline text-purple-700 focus:outline-none hover:text-purple-900 flex items-center justify-center py-4"
                    @click="clientModalOpen = ! clientModalOpen"
                  >
                    <svg
                      class="h-6 w-6 mr-2"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    ><path d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" /></svg>             
                    <p class="font-semibold">
                      Add New Client
                    </p>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

import ClientModal from './ClientModal.vue'

export default {
    components: {
      ClientModal
    },
    props: ['clients'],

    data() {
        return {
            options: [
                'Lebrr James', 'Tim Duncan', 'Michael Jordan',
                'Jim Ham', 'Susan Boyal', 'Joe Doe',
                'Mike Doe', 'Tim Doe'
            ],
            selected: '',
            open: false,
            searchQuery: '',
            clientModalOpen: false,
        }
    },

    computed: {
        resultQuery() {
            if(this.searchQuery) {
                return this.clients.filter(client => {
                    return this.searchQuery.toLowerCase().split(' ')
                        .every(item => client.toLowerCase().includes(item))
                })
            } else {
                return this.clients
            }
        }
    },

    mounted() {
        console.log('hey', this.clients)
    }
}
</script>