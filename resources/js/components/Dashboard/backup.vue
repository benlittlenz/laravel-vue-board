<template>
  <div class="h-screen flex">
    <div class="w-64 px-8 py-3 bg-gray-100 border-r border-gray-200 overflow-auto">
      <nav class="mt-8">
        <h2 class="text-xs font-semibold text-gray-600 uppercase tracking-wide">
          Issues
        </h2>
        <div class="mt-2 -mx-3">
          <a
            href="#"
            class="flex justify-between items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-lgbg-gray-200"
          >
            <span>All</span>
            <span class="text-xs font-semibold text-gray-700">36</span>
          </a>
          <a
            href="#"
            class="flex justify-between items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-lgbg-gray-200"
          >
            <span>Asigned to me</span>
            <span class="text-xs font-semibold text-gray-700">2</span>
          </a>
          <a
            href="#"
            class="flex justify-between items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-lgbg-gray-200"
          >
            <span>Created by me</span>
            <span class="text-xs font-semibold text-gray-700">4</span>
          </a>
          <a
            href="#"
            class="flex justify-between items-center px-3 py-2 text-sm font-medium text-gray-900 rounded-lgbg-gray-200"
          >
            <span>Archived</span>
            <span class="text-xs font-semibold text-gray-700">12</span>
          </a>
        </div>
        <button class="mt-4 -ml-1 flex items-center text-sm font-medium text-gray-600">
          <svg
            class="h-4 w-4 text-gray-500"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path d="M12 4v16m8-8H4" />
          </svg>
          <span class="ml-1">Create Job</span>
        </button>
      </nav>
    </div>
    <div class="flex-1 min-w-0 flex flex-col bg-white">
      <div class="flex-shrink-0 border-b-2 border-gray-200"> 
        <header class="px-6">
          <div class="flex justify-between items-center py-3 border-b border-gray-200 ">
            <div class="flex-1">
              <div class="relative w-64">
                <span class="absolute inset-y-0 pl-3 left-0 flex items-center">
                  <svg
                    class="h-5 w-5 text-gray-600"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  ><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </span>
                <input
                  class="rounded-md border border-gray-400 pl-10 pr-4 py-2 text-sm text-gray-900 placeholder-gray-600 "
                  placeholder="Search"
                  type=""
                >
              </div>
            </div>
          </div>
          <div class="flex items-center justify-between py-2">
            <div class="">
              <h2 class="text-2xl font-semibold text-gray-900 leading-tight">
                All Jobs
              </h2>
            </div>
            <div class="flex">
              <span>
                <button class="flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 rounded-md">
                  <svg
                    class="h-5 w-5"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  ><path d="M12 4v16m8-8H4" /></svg>
                  <span class="ml-1">Create Job</span>
                </button>

              </span>
            </div>
          </div>
        </header>
      </div>
      <div class="flex-1 overflow-auto">
        <main class="p-3 h-full inline-flex overflow-hidden">
          <div class="ml-3 flex-shrink-0 flex flex-col py-3 w-72 bg-gray-100 rounded-md">
            <h2 class="px-3 pb-1 text-sm font-medium text-gray-700">
              Backlog
            </h2>
            <div class="flex-1 min-h-0 overflow-y-auto">
              <ul class="mt-2 ">
                <li>
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li><li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li><li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="ml-3 flex-shrink-0 flex flex-col py-3 w-72 bg-gray-100 rounded-md">
            <h2 class="text-sm font-medium text-gray-700">
              In Progress
            </h2>
            <div class="flex-1 min-h-0 overflow-y-auto">
              <ul class="mt-2 ">
                <li>
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li><li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li><li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="ml-3 flex-shrink-0 flex flex-col py-3 w-72 bg-gray-100 rounded-md">
            <h2 class="text-sm font-medium text-gray-700">
              Completed
            </h2>
            <div class="flex-1 min-h-0 overflow-y-auto">
              <ul class="mt-2 ">
                <li>
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li><li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li><li class="mt-2">
                  <a
                    href=""
                    class="block p-5 bg-white rounded-md shadow"
                  >
                    <div class="">
                      <p>Test title and test description</p>
                      <span />
                    </div>
                    <div class="flex justify-between items-baseline">
                      <div class="text-sm text-gray-600">
                        Sep 14
                      </div>
                      <div class="mt-2">
                        <span class="px-2 py-1 leading-tight inline-flex items-center bg-teal-100 rounded">
                          <svg
                            class="h-2 w-2 text-teal-500"
                            viewBox="0 0 8 8"
                            fill="currentColor"
                          >
                            <circle
                              cx="4"
                              cy="4"
                              r="3"
                            />
                          </svg>
                          <span class="ml-2 text-sm font-medium text-teal-500">Feature Request</span>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
.column-width {
  min-width: 320px;
  width: 320px;
}
/* Unfortunately @apply cannot be setup in codesandbox, 
but you'd use "@apply border opacity-50 border-blue-500 bg-gray-200" here */
.ghost-card {
  opacity: 0.5;
  background: #F7FAFC;
  border: 1px solid #4299e1;
}
</style>