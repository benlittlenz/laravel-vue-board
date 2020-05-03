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
          class="w-5 h-5 text-gray-600 mr-2"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          stroke="currentColor"
          viewBox="0 0 24 24"
        ><path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" /></svg> 
        
        <p class="text-gray-900">
          Details
        </p>
      </router-link>
    </VDropdownItem>
    <VDropdownItem>
      <router-link
        :to="`${url}/edit`"
        class="no-underline text-sm text-gray-600 flex items-center py-3 hover:bg-gray-200"
      >
        <svg
          class="w-5 h-5 text-gray-600 mr-2"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          stroke="currentColor"
          viewBox="0 0 24 24"
        ><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg> 
        
        <p class="text-gray-900">
          Edit
        </p>
      </router-link>
    </VDropdownItem>
    <VDropdownItem>
      <router-link
        :to="`${url}/edit`"
        class="no-underline text-sm text-gray-600 flex items-center py-3 hover:bg-gray-200"
      >
        <svg
          class="w-5 h-5 text-gray-600 mr-2"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          stroke="currentColor"
          viewBox="0 0 24 24"
        ><path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" /></svg>
        
        <p class="text-gray-900">
          Delete
        </p>
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