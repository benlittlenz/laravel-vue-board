<template>
  <div>
    <div
      class="flex flex-col "
    >
      <div v-if="time.length === 0">
        <p>
          There are no Timesheets for this project yet
        </p>
      </div>
      <div
        v-else
        class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8"
      >
      gfdggffdg
      {{time[0].id}}
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
              v-for="timesheet in time"
              :key="timesheet.id"
              class="bg-white"
            >
              <tr>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm leading-5 font-medium text-gray-900 break-all">
                        <p class="break-words">
                          {{ timesheet.staff[0].name }}
                        </p>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ formatDate(timesheet.started_at) }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ formatDate(timesheet.stopped_at) }}
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      {{ calcHours(timesheet.started_at, timesheet.stopped_at) }}
                    </p>
                  </div>
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

export default {
    name: 'ProjectTimesheets',
    props: {
        timesheets: {
            type: Array,
            required: false,
            default: function() {
                return []
            }
        }
    },
    data() {
        return {
            time: this.timesheets
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
          return 0;
        }
        
      }
    }
    

}
</script>