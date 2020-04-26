<template>
  <div>
    <div v-if="loading">
      Loading..
    </div>
    <div
      v-else
      class="flex flex-col "
    >
      <div v-if="clients.length === 0">
        <p>
          You have no clients yet.. <router-link to="/clients/create">
            Create Client
          </router-link>
        </p>
      </div>
      <div
        v-else
        class="-my-2 py-2  sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8"
      >
        <router-link to="/clients/create">
          Create Client
        </router-link>
        <div class="align-middle inline-block min-w-full shadow sm:rounded-lg border-b border-gray-200 z-0 overflow-visible">
          <table class="min-w-full table-fixed ">
            <thead>
              <tr>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Company
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Contact
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Phone
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Status
                </th>
           
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50" />
              </tr>
            </thead>
            <tbody
              v-for="client in clients"
              :key="client.id"
              class="bg-white"
            >
              <tr>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm leading-5 font-medium text-gray-900 break-all">
                        <router-link
                          :to="`/clients/${client.id}`"
                          class="text-blue-400 font-bold"
                        >
                          <p class="break-words">
                            {{ client.company }}
                          </p>
                        </router-link>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ client.contact }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ client.phone }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 w-1/6">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Active
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                  <Dropdown 
                    :url="`/clients/${client.id}`"
                  />
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
import { mapGetters, mapActions } from 'vuex'
import Dropdown from '../reusecore/Dropdown.vue'

export default {
    name: 'ClientIndex',

    components: {
      Dropdown
    },
    data() {
        return {
            loading: true
        }
    },

    computed: {
      ...mapGetters({
        clients: 'clients'
      })
    },

    mounted() {
      this.getClients();
      this.loading = false;
    },

    methods: {
      ...mapActions({
        getClients: 'getClients'
      })
    }

    
}
</script>