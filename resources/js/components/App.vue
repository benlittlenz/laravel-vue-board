<template>
  <div class="h-screen antialiased bg-white">
    <ProjectNav />
    <div
      class="h-screen"
    >

      <router-view class="py-10 px-20 overflow-x-hidden" />
    </div>
  </div>
</template>

<script>
 // import ProjectSideNav from './Projects/styles/ProjectSideNav.vue'
  import ProjectNav from './Projects/styles/ProjectNav.vue'

export default {
    name: 'App',
    props: ['company'],

    components: {
        //ProjectSideNav,
        ProjectNav
    },

    mounted() {
      console.log(this.company)
    }
}
</script>



