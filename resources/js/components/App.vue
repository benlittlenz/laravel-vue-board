<template>
  <div class="h-screen antialiased bg-white">
    <project-nav />
    <div
      id="main"
      class="pt-16 h-screen"
    >
      <div class="bg-gray-200 w-48 border-r-2 border-gray-400">
        <project-side-nav />
      </div>
      <project-timeline />
    </div>
  </div>
</template>

<script>

export default {
    name: 'App',

}
</script>



