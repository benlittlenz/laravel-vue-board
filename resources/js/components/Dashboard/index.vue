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
                        <svg
                          class=" h-8 w-8"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        ><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
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
                        <svg
                          class=" h-8 w-8"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        ><path d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
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
                        <svg
                          class=" h-8 w-8"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        ><path d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg>
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
                        <svg
                          class=" h-8 w-8"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        ><path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" /><path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" /></svg>
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

    <ClientModal />
    
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import ClientModal from '../reusecore/ClientModal.vue'

export default {
    components: {
      ClientModal
    },

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