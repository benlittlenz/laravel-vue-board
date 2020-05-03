<template>
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
</template>

<script>
export default {
    
}
</script>