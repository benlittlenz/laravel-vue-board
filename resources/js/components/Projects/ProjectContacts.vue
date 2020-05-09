<template>
  <div>
    <div v-if="loading">
      Loading..
    </div>
    <div
      v-else
      class="flex flex-col"
    >
      <div
        class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8"
      >
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
          <table class="min-w-full table-fixed">
            <thead>
              <tr>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Contact Name
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Contact Phone
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Contact Mobile
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Contact Email
                </th>
           
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50" />
              </tr>
            </thead>
            <tbody
              v-for="contact in contacts"
              :key="contact.id"
              class="bg-white"
            >
              <tr>
                <td class="px-6 py-4 border-b border-gray-200 w-1/6">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm leading-5 font-medium text-gray-900 break-all">
                        <p class="break-words">
                          {{ contact.name }}
                        </p>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-1/4">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ contact.phone_number }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-1/4">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ contact.mobile_number }}

                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ contact.email }}

                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                  <a
                    href="#"
                    class="text-indigo-600 hover:text-indigo-900"
                  >Edit</a>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                  <a
                    href="#"
                    class="text-red-700 hover:text-red-900"
                    @click="modal = ! modal"
                  >Delete</a>
                </td>
                <div 
                  v-if="modal"
                  class="absolute bg-white text-white rounded-lg z-20 p-8 right-0 mt-2 mr-20 mt-8 width-80 border border-gray-300 mt-2"
                >
                  <p class="text-lg leading-6 font-medium text-gray-900 text-center">
                    Are you sure you wish to delete this contact record?
                  </p>
                  <div class="flex items-center mt-6 justify-end">
                    <button
                      class="mr-2 inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base 
                      leading-6 font-medium text-gray-800 shadow-sm hover:text-gray-900 focus:outline-none focus:border-blue-300 
                      focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                      @click="modal = !modal"
                    >
                      Cancel
                    </button>
                    <button 
                      class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 
                      bg-red-700 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-900 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                      @click="destroy"
                    >
                      Delete
                    </button>
                  </div>
                </div>
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

export default {
    name: 'ProjectContacts',

    data() {
        return {
            loading: true,
            modal: false,
            contacts: []
        }
    },
      mounted() {
        axios.get('/api/job_contacts').then(res => {
          console.log('res', res);
          this.loading = false
          res.data.data.filter(contact => {
            console.log('contact', contact);
            if(contact.project_id == this.$route.params.id) {
              this.contacts.push(contact)
            }
          })
        }).catch(err => {
          console.log(err)
        })
      },


}
</script>