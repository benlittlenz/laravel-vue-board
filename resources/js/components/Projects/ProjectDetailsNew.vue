<template>
  <div class="bg-white shadow overflow-hidden sm:rounded-lg flex">
    <div class="flex">
      <nav
        id="nav"
        class="w-48 relative"
      >
        <span
          class="absolute h-10 w-full bg-white rounded-lg shadow ease-out transition-transform transition-medium"
          :style="{ transform: `translateY(calc(100% * ${selected}))` }"
        />
        <ul class="relative">
          <li>
            <button
              type="button"
              :aria-selected="selected === 0"
              class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline"
              @click="select(0)"
            >
              <svg
                :class="selected === 0 ? 'text-indigo-400' : 'text-gray-500'"
                class="h-6 w-6 transition-all ease-out transition-medium"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M12.707 2.293a1 1 0 00-1.414 0l-9 9a1 1 0 101.414 1.414L4 12.414V21a1 1 0 001 1h5a1 1 0 001-1v-6h2v6a1 1 0 001 1h5a1 1 0 001-1v-8.586l.293.293a1 1 0 001.414-1.414l-9-9zM18 10.414l-6-6-6 6V20h3v-6a1 1 0 011-1h4a1 1 0 011 1v6h3v-9.586z"
                />
              </svg>
              <span
                :class="selected === 0 ? 'text-indigo-600' : 'text-gray-700'"
                class="ml-2 text-sm font-medium transition-all ease-out transition-medium"
              >
                Job Summary
              </span>
            </button>
          </li>
          <li>
            <button
              type="button"
              :aria-selected="selected === 1"
              class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline"
              @click="select(1)"
            >
              <svg
                :class="selected === 1 ? 'text-indigo-400' : 'text-gray-500'"
                class="h-6 w-6 transition-all ease-out transition-medium"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13 16H11V18H13V16Z"
                  fill="currentColor"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5 4C5 2.89543 5.89543 2 7 2H17C18.1046 2 19 2.89543 19 4V20C19 21.1046 18.1046 22 17 22H7C5.89543 22 5 21.1046 5 20V4ZM7 4H17V20H7L7 4Z"
                  fill="currentColor"
                />
              </svg>
              <span
                :class="selected === 1 ? 'text-indigo-600' : 'text-gray-700'"
                class="ml-2 text-sm font-medium transition-all ease-out transition-medium"
              >
                Contacts
              </span>
            </button>
          </li>
          <li>
            <button
              type="button"
              :aria-selected="selected === 2"
              class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline"
              @click="select(2)"
            >
              <svg
                :class="selected === 2 ? 'text-indigo-400' : 'text-gray-500'"
                class="h-6 w-6 transition-all ease-out transition-medium"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M12 7a1 1 0 011-1h8a1 1 0 011 1v8a1 1 0 11-2 0V8h-7a1 1 0 01-1-1z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M20.707 7.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0L9 12.414l-5.293 5.293a1 1 0 01-1.414-1.414l6-6a1 1 0 011.414 0L13 13.586l6.293-6.293a1 1 0 011.414 0z"
                />
              </svg>
              <span
                :class="selected === 2 ? 'text-indigo-600' : 'text-gray-700'"
                class="ml-2 text-sm font-medium transition-all ease-out transition-medium"
              >
                Costings
              </span>
            </button>
          </li>
          <li>
            <button
              type="button"
              :aria-selected="selected === 3"
              class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline"
              @click="select(3)"
            >
              <svg
                :class="selected === 3 ? 'text-indigo-400' : 'text-gray-500'"
                class="h-6 w-6 transition-all ease-out transition-medium"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M7 10a3 3 0 013-3h8a3 3 0 013 3v8a3 3 0 01-3 3h-8a3 3 0 01-3-3v-8zm3-1a1 1 0 00-1 1v8a1 1 0 001 1h8a1 1 0 001-1v-8a1 1 0 00-1-1h-8z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M3 6a3 3 0 013-3h10a1 1 0 110 2H6a1 1 0 00-1 1v10a1 1 0 11-2 0V6z"
                />
              </svg>
              <span
                :class="selected === 3 ? 'text-indigo-600' : 'text-gray-700'"
                class="ml-2 text-sm font-medium transition-all ease-out transition-medium"
              >
                Files & Notes
              </span>
            </button>
          </li>
          <li>
            <button
              type="button"
              :aria-selected="selected === 4"
              class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline"
              @click="select(4)"
            >
              <svg
                :class="selected === 4 ? 'text-indigo-400' : 'text-gray-500'"
                class="h-6 w-6 transition-all ease-out transition-medium"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4 5a3 3 0 013-3h10a3 3 0 013 3v16a1 1 0 01-1.447.894L12 18.618l-6.553 3.276A1 1 0 014 21V5zm3-1a1 1 0 00-1 1v14.382l5.553-2.776a1 1 0 01.894 0L18 19.382V5a1 1 0 00-1-1H7z"
                />
              </svg>
              <span
                :class="selected === 4 ? 'text-indigo-600' : 'text-gray-700'"
                class="ml-2 text-sm font-medium transition-all ease-out transition-medium"
              >
                Tasks
              </span>
            </button>
          </li>
          <li>
            <button
              type="button"
              :aria-selected="selected === 5"
              class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline"
              @click="select(5)"
            >
              <svg
                :class="selected === 5 ? 'text-indigo-400' : 'text-gray-500'"
                class="h-6 w-6 transition-all ease-out transition-medium"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M13 11.586l2.536 2.535a1 1 0 11-1.415 1.415l-2.828-2.829A.997.997 0 0111 12V8a1 1 0 112 0v3.586z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5 1a1 1 0 011 1v1.998c3.918-2.945 9.506-2.635 13.071.93 3.905 3.906 3.905 10.238 0 14.143-3.905 3.905-10.237 3.905-14.142 0A9.972 9.972 0 012 12a1 1 0 112 0 8 8 0 101.777-5.029A1 1 0 014 6.341V2a1 1 0 011-1z"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M11.293 12.707A.997.997 0 0111 12V8a1 1 0 112 0v3.586l2.536 2.535a1 1 0 11-1.415 1.415l-2.828-2.829zM5.934 1.643A1 1 0 004 2v4.342a1 1 0 001.777.63A8 8 0 114 12v-.001a1 1 0 10-2 0c0 2.558.977 5.119 2.929 7.071 3.905 3.905 10.237 3.905 14.142 0 3.844-3.844 3.904-10.04.18-13.957A10.004 10.004 0 006 3.999V2a.998.998 0 00-.066-.357zM5 2.25z"
                />
              </svg>
              <span
                :class="selected === 5 ? 'text-indigo-600' : 'text-gray-700'"
                class="ml-2 text-sm font-medium transition-all ease-out transition-medium"
              >
                Timesheets
              </span>
            </button>
          </li>
        </ul>
      </nav>
    </div>
    <div 
      v-if="selected === 0"
      class="w-full"
    >
      <ProjectMainDetails />
    </div>
    <div 
      v-if="selected === 5"
      class="w-full"
    >
      <ProjectTimesheets />
    </div>
    <div 
      v-if="selected === 1"
      class="w-full"
    >
      <ProjectContacts />
    </div>
  </div>
</template>

<script>
import ProjectMainDetails from './ProjectMainDetails'
import ProjectTimesheets from './ProjectTimesheets'
import ProjectContacts from './ProjectContacts'

export default {
    name: 'ProjectDetails',

    components: {
        ProjectMainDetails,
        ProjectTimesheets,
        ProjectContacts
    },

    data() {
        return {
            selected: 0
        }
  },
  methods: {
    select(i) {
      this.selected = i;
    }
  }
}
</script>