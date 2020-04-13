<div class="md:flex mb-8">
            <div class="md:w-1/3 bg-gray-200">
              <legend class="uppercase tracking-wide text-sm">
                Client
              </legend>
            </div>
            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3 bg-gray-200">
              <div class="">

                <div class="w-full max-w-screen-xl mx-auto">
                  <div class="flex justify-start p-4 px-3 py-8">
                    <div class="w-full max-w-md">
                      <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">
                        <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                          Client
                        </div>
                        <div class="flex items-center bg-gray-200 rounded-md">
                          <div class="pl-2">
                            <svg
                              class="fill-current text-gray-500 w-6 h-6"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                            >
                              <path
                                class="heroicon-ui"
                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"
                              />
                            </svg>
                          </div>
                          <input
                            id="search"
                            v-model="searchQuery"
                            class="w-full rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none py-2 px-2"
                            type="text"
                            placeholder="Search Client List"
                          >
                        </div>
                        <div 
                          v-if="clients.length && searchQuery"
                          class="py-3 text-sm"
                        >
                          <div 
                            v-for="item in resultQuery"
                      
                            :key="item.id"
                            class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2"
                          >
                            <span class="bg-green-400 h-2 w-2 m-2 rounded-full" />
                            <div class="flex-grow font-medium px-2">
                              {{ item.company }}
                            </div>
                            <div class="text-sm font-normal text-gray-500 tracking-wide">
                              Client
                            </div>
                          </div>
                        </div>
                        <div class="block bg-gray-200 text-sm text-right py-2 px-3 -mx-3 -mb-2 rounded-b-lg">
                          <button class="hover:text-gray-600 text-gray-500 font-bold py-2 px-4">
                            Cancel
                          </button>
                          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Invite
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>










              <div class="panel panel-default">
            <div class="panel-heading">
              <strong> All Resources</strong>
            </div>
            <div class="row">
              <div class="search-wrapper panel-heading col-sm-12">
                <input
                  v-model="searchQuery"
                  class="form-control"
                  type="text"
                  placeholder="Search"
                >
              </div>                        
            </div>
            <div class="table-responsive">
              <table
                v-if="clients.length"
                class="table"
              >
                <thead>
                  <tr>
                    <th>Resource</th>
                  </tr>
                </thead>
                <tbody
                  v-if="searchQuery"
                >
                  <tr 
                    v-for="item in resultQuery"
                    :key="item.id"
                  >
                    <td>
                      <a
                        :href="item.uri"
                        target="_blank"
                      >{{ item.company }}</a>
                    </td>
                  </tr>
                </tbody>
                <div v-else>
                  no search
                </div>
              </table>
            </div>
          </div>
          </div>