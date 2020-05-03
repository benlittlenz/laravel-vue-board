<template>
  <div class="mt-2">
    <span 
      :class="`bg-${color}-100 text-${color}-700`"
      class="px-2 py-1 leading-tight inline-flex items-center rounded"
    >
      <span
        class="w-2 h-2 rounded-full mr-1"
        :class="`bg-${color}-400`"
      />
      <span class="text-sm font-medium">
        <slot />
      </span>
    </span>
  </div>
</template>

<script>
export default {
  props: {
    color: {
      type: String,
      default: "teal"
    }
  }
}
</script>