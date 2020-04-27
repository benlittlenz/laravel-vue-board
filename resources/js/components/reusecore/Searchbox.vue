<template>
  <div>
    <div class="border-b border-grey-light p-4 bg-grey-lighter py-8">
      <div class="shadow-lg rounded-lg">
        <div class="sm:flex sm:items-center px-2 py-4">
          <div class="flex-grow">
            <h3 class="font-normal px-2 py-3 leading-tight">
              Clients
            </h3>
            <input
              v-model="selected"
              type="text"
              placeholder="Search Clients"
              class="my-2 w-full text-sm bg-grey-light text-grey-darkest rounded h-10 p-3 focus:outline-none"
            >
            <div class="overflow-auto h-72">
              <div
                v-for="option in options"
                class="my-1 cursor-pointer hover:bg-gray-300 rounded"
                @click="selected = option; open=false;"
              >
                <p class="py-3 ml-4">
                  {{ option }}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex ml-10 bg-gray-200 items-center">
          <div class="flex-grow text-right -mb-px">
            <button
              class="no-underline text-purple-700 hover:text-purple-900 flex items-center justify-center py-4"
            >
              <svg
                class="h-6 w-6 mr-2"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                stroke="currentColor"
                viewBox="0 0 24 24"
              ><path d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" /></svg>             
              <p class="font-semibold">
                Add New Client
              </p>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    data() {
        return {
            options: [
                'Lebrr James', 'Tim Duncan', 'Michael Jordan',
'Lebrr James', 'Tim Duncan', 'Michael Jordan',
'Lebrr James', 'Tim Duncan', 'Michael Jordan',
            ],
            selected: '',
            open: false
        }
    }
}
</script>