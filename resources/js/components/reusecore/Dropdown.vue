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
        :to="`/jobs/${project}`"
        class="dropdown-item"
      >
        Details
      </router-link>
      <router-link
        :to="`/clients`"
        class="dropdown-item"
      />
    </VDropdownItem>
    <VDropdownItem>
      <a
        class="dropdown-item"
        href="#/"
      >

        hfhfg
      </a>
    </VDropdownItem>
    <VDropdownItem>
      <a
        class="dropdown-item"
        href="#/"
      >

        heyy
      </a>
    </VDropdownItem>
    <VDropdownItem>
      <div
        class="dropdown-item"
      />
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
    props: ['project'],

    mounted() {
        console.log('hey', this.project)
    }
}
</script>