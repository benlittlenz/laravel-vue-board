<template>
  <li class="block p-5 bg-white rounded-md shadow z-0">
    <div class="flex justify-between">
      <p>{{ task.title }}</p>
      <div class="flex ">
        <Dropdown />
      </div>
    </div>
    <div class="flex justify-between items-baseline">
      <div class="text-sm text-gray-600">
        Sep 14
      </div>
      <CardBadge
        v-if="task.type"
        :color="badgeColor"
      >
        {{ task.type }}
      </CardBadge>
    </div>
  </li>
</template>

<script>
import CardBadge from './CardBadge.vue'
import Dropdown from '../reusecore/Dropdown.vue'
export default {
    components: {
      CardBadge,
      Dropdown
    },

    props: {
        task: {
            type: Object,
            default: () => ({})
        }
  },
    computed: {
        badgeColor() {
        const mappings = {
            New: "purple",
            "In Progress": "teal",
            Completed: "green",
            Paid: 'orange',
            "Invoice Sent": 'pink',
            default: "teal"
        };
        return mappings[this.task.type] || mappings.default;
        }
  }
}
</script>