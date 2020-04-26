<template>
  <div>
    <div v-if="loading">
      Loading..
    </div>
    <div
      v-else
      class="relative"
    >
      <div class="px-4 md:px-10 mx-auto w-full">
        <div>
          <!-- Card stats -->
          <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                      <h5 class="text-gray-500 uppercase font-bold text-xs">
                        Total Jobs
                      </h5>
                      <span class="font-semibold text-xl text-gray-800">
                        {{ projects.length }}
                      </span>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                        <i class="far fa-chart-bar" />
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-gray-500 mt-4">
                    <span class="text-green-500 mr-2">
                      <i class="fas fa-arrow-up" /> 
                    </span>
                    <span class="whitespace-no-wrap" />
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                      <h5 class="text-gray-500 uppercase font-bold text-xs">
                        Jobs Completed (Current Month)
                      </h5>
                      <span class="font-semibold text-xl text-gray-800">
                        12
                      </span>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                        <i class="fas fa-chart-pie" />
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-gray-500 mt-4">
                    <span class="text-green-500 mr-2">
                      <i class="fas fa-arrow-down" /> 3.48%
                    </span>
                    <span class="whitespace-no-wrap">
                      Last Month
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                      <h5 class="text-gray-500 uppercase font-bold text-xs">
                        Sales (Current Month)
                      </h5>
                      <span class="font-semibold text-xl text-gray-800">
                        $10, 000
                      </span>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                        <i class="fas fa-users" />
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-gray-500 mt-4">
                    <span class="text-orange-500 mr-2">
                      <i class="fas fa-arrow-down" /> 1.10%
                    </span>
                    <span class="whitespace-no-wrap">
                      Last Month
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                      <h5 class="text-gray-500 uppercase font-bold text-xs">
                        Performance
                      </h5>
                      <span class="font-semibold text-xl text-gray-800">
                        49,65%
                      </span>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                        <i class="fas fa-percent" />
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-gray-500 mt-4">
                    <span class="text-green-500 mr-2">
                      <i class="fas fa-arrow-up" /> 12%
                    </span>
                    <span class="whitespace-no-wrap">
                      Since last month
                    </span>
                  </p>
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
import { mapGetters, mapActions } from 'vuex'

export default {

    data() {
        return {
          loading: true
        }
    },

    computed: {
        ...mapGetters({
            projects: 'projects',
            clients: 'clients',
            staff: 'staff'
        })
    },

    mounted() {
      this.getProjects()
      this.loading = false
    },

    methods: {
      ...mapActions({
        getProjects: 'getProjects'
      }),
    }
}
</script>