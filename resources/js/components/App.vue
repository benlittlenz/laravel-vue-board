<template>
  <div class="h-screen antialiased bg-white">
    <notifications
      classes="notification success"
      group="create_client_modal"
    />
    <notifications
      classes="notification error"
      group="error_client_modal"
    />
    <ProjectNav :user="currentUser" />
    <div
      class="h-screen z-0 bg-gray-200"
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

    data() {
      return {
        currentUser: []
      }
    },

    mounted() {
      this.currentUser = JSON.parse(this.company)
      console.log(this.currentUser)
    }
}
</script>



