<template>
  <div>
    <div v-if="loading">
      Loading..
    </div>
    <div
      v-else
      class="flex flex-col "
    >
      <div v-if="items.length === 0">
        <p>
          You have no Items yet.. <router-link to="/items/create">
            Create Item
          </router-link>
        </p>
      </div>
      <div
        v-else
        class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8"
      >
        <router-link 
          class="button"
          to="/items/create"
        >
          Create Client
        </router-link>
        
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
          <table class="min-w-full table-fixed">
            <thead>
              <tr>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Item
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Description
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Unit
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Price
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Added on
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50" />
              </tr>
            </thead>
            <tbody
              v-for="item in items"
              :key="item.id"
              class="bg-white"
            >
              <tr>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm leading-5 font-medium text-gray-900 break-all">
                        <router-link
                          :to="`/items/${item.id}`"
                          class="text-blue-400 font-bold"
                        >
                          <p class="break-words">
                            {{ item.name }}
                          </p>
                        </router-link>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-3/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ item.description }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-1/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ item.unit }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-1/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ item.price }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-1/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ item.created_at }}
                    </p>
                  </div>
                </td>

                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                  <a
                    href="#"
                    class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline"
                  >Edit</a>
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

export default {
    name: 'ItemsIndex',
    data() {
        return {
            loading: true
        }
    },

    computed: {
      ...mapGetters({
        items: 'items'
      })
    },

    mounted() {
      this.getItems();
      this.loading = false;
    },

    methods: {
      ...mapActions({
        getItems: 'getItems'
      })
    }
}
</script>