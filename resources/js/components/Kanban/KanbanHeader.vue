<template>
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
</template>

<script>
export default {
    
}
</script>