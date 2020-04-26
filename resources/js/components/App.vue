<template>
  <div class="h-screen antialiased bg-white">
    <ProjectNav />
    <div
      class="h-screen z-0"
    >
      <router-view class="py-10 px-20 z-0" />
    </div>
  </div>
</template>

<script>
 // import ProjectSideNav from './Projects/styles/ProjectSideNav.vue'
  import ProjectNav from './Projects/styles/ProjectNav.vue'

export default {
    name: 'App',

    components: {
        //ProjectSideNav,
        ProjectNav
    },
    props: ['company'],

    mounted() {
      console.log(this.company)
    }
}
</script>



