<template>
  <div>
    <div
      class="flex flex-col"
    >
      <div
        class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8"
      >
        <h1>Timesheets</h1>
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
          <table class="min-w-full table-fixed">
            <thead>
              <tr>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Staff Name
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Start Time
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Finish Time
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Total Hours
                </th>
           
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50" />
              </tr>
            </thead>
            <tbody
              class="bg-white"
            >
              <tr>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm leading-5 font-medium text-gray-900 break-all">
                        <p class="break-words">
                          Ben Little
                        </p>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      22/05/20 11:40am
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      22/05/20 12:40pm
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      1 Hour
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
                  class="absolute bg-white text-white rounded-lg z-20 p-8 right-0 mt-2 mr-20 mt-8 width-80 border border-gray-300"
                >
                  <p class="text-lg leading-6 font-medium text-gray-900 text-center">
                    Are you sure you wish to delete this timesheet record?
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
import moment from 'moment';

export default {
    name: 'ProjectTimesheets',

    data() {
        return {
            loading: true,
            modal: false,
        }
    },

    methods: {
      formatDate(date) {
        return moment(date).utc().format('DD/MM/YYYY HH:m')
      },

      calcHours(start, finish) {
        if(finish) {
          const startTime = moment(start);
          const finishTime = moment(finish);

          const duration = moment.duration(finishTime.diff(startTime))
          const hours = parseInt(duration.asHours())
          const minutes = parseInt(duration.asMinutes()) % 60

          return `${hours}h ${minutes}m`
        } else {
          return '';
        }
        
      }
    }
    

}
</script>