<template>
  <div>
    <div
      class="flex flex-col "
    >
      <div v-if="notes.length === 0">
        <p>
          There are no Notes for this project yet
        </p>
      </div>
      <div
        v-else
        class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8"
      >
        {{ notes[0].body }}
        <h1>Notes</h1>

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
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
          <table class="min-w-full table-fixed">
            <thead>
              <tr>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Date Added
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Note
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  File
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Added By
                </th>
           
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50" />
              </tr>
            </thead>
            <tbody
              v-for="note in noteData"
              :key="note.id"
              class="bg-white"
            >
              <tr>
                <td class="px-6 py-4 border-b border-gray-200 w-1/6">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm leading-5 font-medium text-gray-900 break-all">
                        <p class="break-words">
                          {{ formatDate(note.created_at) }}
                        </p>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ note.body }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-1/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      jghhj
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ note.added_by[0].name }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                  <router-link 
                    :to="`/`"
                    class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline"
                  >
                    Edit
                  </router-link>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                  <button
                    class="text-red-600 hover:text-red-800 focus:outline-none focus:underline overflow-visible"
                    @click="modal = !modal, modalId = note.id"
                  >
                    Delete
                  </button>
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
import moment from 'moment';
import axios from 'axios'
export default {
    name: 'NoteComponent',
    props: {
        notes: {
            type: Array,
            required: false,
            default: function() {
                return []
            }
        }
    },
    data() {
        return {
            noteData: this.notes,
            modal: false,
            modalId: null,
        }
    },

    methods: {
      formatDate(date) {
        return moment(date).utc().format('DD/MM/YYYY HH:m')
      },

    destroy() {
        console.log(this.modalId)
        axios.delete(`/api/notes/${this.modalId}`)
          .then(res => {
            console.log('success', res)
          }).catch(err => {
            console.log(err);
          })
      }
    }
}
</script>