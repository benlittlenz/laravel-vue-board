<template>
  <div class="h-screen antialiased bg-white">
    <ProjectNav />
    <div
      id="main"
      class="pt-16 h-screen"
    >
      <div class="bg-gray-200 w-48 border-r-2 border-gray-400">
        <ProjectSideNav />
      </div>
      <router-view class="p-6 overflow-x-hidden" />
    </div>
  </div>
</template>

<script>
  import ProjectSideNav from './Projects/styles/ProjectSideNav.vue'
  import ProjectNav from './Projects/styles/ProjectNav.vue'

export default {
    name: 'App',
    props: ['company'],

    components: {
        ProjectSideNav,
        ProjectNav
    },

    mounted() {
      console.log(this.company)
    }
}
</script>



