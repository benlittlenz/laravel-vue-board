<template>
  <div>
    <div
      class="flex flex-col"
    >
      <div
        class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8"
      >
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
          <table class="min-w-full table-fixed">
            <thead>
              <tr>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Contact Name
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Contact Phone
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Contact Mobile
                </th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Contact Email
                </th>
           
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50" />
              </tr>
            </thead>
            <tbody
              class="bg-white"
            >
              <tr>
                <td class="px-6 py-4 border-b border-gray-200 w-1/6">
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
                <td class="px-6 py-4 border-b border-gray-200 w-1/4">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      (09) 478 5665
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-1/4">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      021 4555 5666
                    </p>
                  </div>
                </td>
                <td class="px-6 py-4 border-b border-gray-200 w-2/6">
                  <div class="w-full text-sm leading-5 text-gray-900 break-words">
                    <p class="break-words">
                      ben@little.com
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
                  >Delete</a>
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

export default {
    name: 'ProjectContacts',

    

}
</script>