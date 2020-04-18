<template>
  <div class="h-screen antialiased bg-white">
    <ProjectNav />
    <div
      class="pt-16 h-screen"
    >

      <router-view class="p-10 overflow-x-hidden" />
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



