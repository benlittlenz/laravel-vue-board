<template>
  <VDropdown>
    <a
      slot="activator"
      href="#/"
    >
      <DotIcon />
    </a>
    <VDropdownItem>
      <router-link
        :to="`${url}`"
        class="no-underline text-sm text-gray-600 flex items-center py-3 hover:bg-gray-200"
      >
        <svg
          class="h-4 w-4 fill-current mr-2 text-gray-800"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
          xmlns="http://www.w3.org/2000/svg"
          stroke="currentColor"
          viewBox="0 0 24 24"
        ><path
          d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"
        /></svg>  
        
        Details
      </router-link>
    </VDropdownItem>
    <VDropdownItem>
      <router-link
        :to="`${url}/edit`"
        class="no-underline text-sm text-gray-600 flex items-center py-3 hover:bg-gray-200"
      >
        <svg
          class="h-4 w-4 fill-current mr-2 text-gray-800"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
          xmlns="http://www.w3.org/2000/svg"
          stroke="currentColor"
          viewBox="0 0 24 24"
        ><path
          d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
        /></svg>  
        Edit
      </router-link>
    </VDropdownItem>
    <VDropdownItem>
      <router-link
        :to="`${url}/edit`"
        class="no-underline text-sm text-gray-600 flex items-center py-3 hover:bg-gray-200"
      >
        <svg
          class="h-4 w-4 fill-current mr-2 text-gray-800"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
          xmlns="http://www.w3.org/2000/svg"
          stroke="currentColor"
          viewBox="0 0 24 24"
        ><path
          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
        /></svg>  
        Delete
      </router-link>
    </VDropdownItem>
  </VDropdown>
</template>

<script>
import VDropdownItem from '../Dropdown/VdropdownItem.vue'
import VDropdown from '../Dropdown/VDropdown.vue'
import DotIcon from '../Dropdown/DotIcon.vue'

export default {
    components: {
        VDropdownItem,
        VDropdown,
        DotIcon
    },
    props: ['url'],

    mounted() {
        console.log('hey', this.url)
    }
}
</script>