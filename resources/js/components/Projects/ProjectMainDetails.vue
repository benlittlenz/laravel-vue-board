<template>
  <div class="ml-6">
    <div class="max-w-4xl bg-white flex-1  border-b border-gray-200">
      <h3 class="text-gray-800 text-xl font-semibold">
        Project Title
      </h3>
      <div class="mt-4 w-5/6">
        <p>To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc,</p>
      </div>

      <div class="flex mt-10 ">
        <span class="flex items-center ">
          <svg  
            class="text-indigo-700"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M8 9C7.44772 9 7 9.44771 7 10C7 10.5523 7.44772 11 8 11H16C16.5523 11 17 10.5523 17 10C17 9.44771 16.5523 9 16 9H8Z"
              fill="currentColor"
            />
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM5 18V7H19V18C19 18.5523 18.5523 19 18 19H6C5.44772 19 5 18.5523 5 18Z"
              fill="currentColor"
            />
          </svg>
          <p class="text-gray-800 ml-2 font-semibold text-sm">Start Date</p>
          <span class="ml-12 flex items-center ">
            <svg
              class="text-indigo-700"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M15 17C16.1046 17 17 16.1046 17 15C17 13.8954 16.1046 13 15 13C13.8954 13 13 13.8954 13 15C13 16.1046 13.8954 17 15 17Z"
                fill="currentColor"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM5 18V7H19V18C19 18.5523 18.5523 19 18 19H6C5.44772 19 5 18.5523 5 18Z"
                fill="currentColor"
              />
            </svg>
            <p class="text-gray-800 ml-2 font-semibold text-sm">Due Date</p>
          </span>
        </span>
      </div>
      <span class="flex items-center ">
        <p class="text-gray-600 font-semibold text-xs mt-1">21/08/2020</p>
        <p class="text-gray-600 font-semibold text-xs mt-1 ml-20">21/08/2020</p>
      </span>
    </div>

    <div class="md:flex mb-4 mt-10 border-b border-gray-200">
      <div class="md:flex-1 md:pr-3">
        <span class="flex items-center ">
          <svg
            class="text-indigo-700"
            width="24"
            height="24"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            stroke="currentColor"
            viewBox="0 0 24 24"
          ><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>

          <p class="text-gray-800 ml-2 font-semibold">Site Address</p>
        </span>
        <div class="text-sm font-medium ml-8 text-gray-700 mt-2">
          <p>14 Rosedale Rd.</p>
          <p>Albany</p>
          <p>Auckland</p>
        </div>
      </div>
      <div class="md:flex-1 md:pl-3">
        <span class="flex items-center ">
          <svg
            class="text-indigo-700"
            width="24"
            height="24"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            stroke="currentColor"
            viewBox="0 0 24 24"
          ><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>

          <p class="text-gray-800 ml-2 font-semibold">Main Contact</p>
        </span>
        <div class="text-sm font-medium ml-8 text-gray-700 mt-2">
          <p>Joe Doe</p>
          <p>021 4567 644</p>
          <p>joe@doe.com</p>
        </div>
        <span class="text-xs mb-4 font-thin text-red-600" />
      </div>
    </div>
    <table class="w-64 table-fixed mt-10">
      <thead>
        <tr>
          <span class="flex items-center ">
            
            <svg
              class="text-indigo-700"
              width="24"
              height="24"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              stroke="currentColor"
              viewBox="0 0 24 24"
            ><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
            <th class=" py-3 border-b border-gray-200 bg-gray-50 text-left leading-4 text-gray-800 ml-2 font-semibold">
              Staff Assigned
            </th>
          </span>
        </tr>
      </thead>
      <tbody
        class="bg-white"
      >
        <tr>
          <td class="px-3 py-2 border-b border-gray-300">
            <div class="flex items-center">
              <div class="ml-4">
                <div class="text-sm leading-5 font-medium text-gray-700 break-all">
                  <p class="break-words">
                    Ben Little
                  </p>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="px-3 py-2 border-b border-gray-300">
            <div class="flex items-center">
              <div class="ml-4">
                <div class="text-sm leading-5 font-medium text-gray-700 break-all">
                  <p class="break-words">
                    Joe Doe
                  </p>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
    data() {
        return {
            
        }
    }
}
</script>