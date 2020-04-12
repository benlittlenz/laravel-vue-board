<template>
  <body class="bg-cream text-charcoal min-h-screen font-sans leading-normal overflow-x-hidden lg:overflow-auto">
    <div class="flex justify-between">
      <a
        href="#"
        class="text-blue-400"
        @click="$router.back()"
      >
        Back
      </a>
    </div>
    <main class="flex-1 md:p-0 lg:pt-8 lg:px-8 md:ml-24 flex flex-col">
      <section class="bg-cream-lighter p-4 shadow">
        <div class="md:flex">
          <h2 class="md:w-1/3 uppercase tracking-wide text-sm sm:text-lg mb-6 ">
            Edit Job
          </h2>
        </div>
        <form @submit.prevent="submit">
          <div class="md:flex mb-8">
            <div class="md:w-1/3 bg-gray-200">
              <legend class="uppercase tracking-wide text-sm">
                Job
              </legend>
            </div>
            
            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3 bg-gray-200">
              <div class="mb-4">
                <label class="block uppercase tracking-wide text-xs font-bold">Job Title</label>
                
                <input
                  v-model="form.title"
                  class="w-full shadow-inner p-4 border-0"
                  type="text"
                  name="client"
                  placeholder="Client Name"
                  :data="form.title"
                >
                <p
                  class="text-xs font-light text-red-500"
                  :errors="errors"
                />
              </div>
            </div>
          </div>

          <div class="md:flex mb-6">
            <div class="md:w-1/3 bg-gray-200">
              <legend class="uppercase tracking-wide text-sm">
                Job Description
              </legend>
            </div>
            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3 bg-gray-200">
              <textarea
                v-model="form.description"
                class="w-full shadow-inner p-4 border-0"
                placeholder=""
                rows="6"
                :data="form.description"
              />
            </div>
          </div>
          <div class="md:flex mb-6 border border-t-1 border-b-0 border-x-0 border-cream-dark">
            <div class="md:flex-1 px-3 text-center md:text-right">
              <button class="py-2 px-4 rounded text-red-700 mr-5">
                Cancel
              </button>
              <input
                class="button text-cream-lighter bg-blue-500 py-2 px-4 text-white rounded"
                type="submit"
                value="Save"
              >
            </div>
          </div>
        </form>
      </section>
    </main>
  </body>
</template>

<script>
import axios from 'axios';

export default {
    name: 'ProjectEdit',

    data() {
        return {
            form: {
                title: '',
                description: ''
            },
            errors: null,
            id: null
        }
    },

    mounted() {
        console.log(this.$route)
        axios.get(`/api/projects/${this.$route.params.id}`)
            .then(response => {
                this.form = response.data;
                this.id = response.data.id;
                console.log(response, 'success')

                this.loading = false;
            }).catch(error => {
                console.log(error)
                this.loading = false;
                
                if(error.response.status === 404) {
                  this.$router.push('/jobs')
                }
            })
    },
    methods: {
        submit () {
           axios.patch(`/api/projects/${this.$route.params.id}`, this.form)
                .then(response => {
                    console.log(response, 'success hey')
                    this.$router.push(`/jobs/${this.id}`)
                }).catch(error => {
                    if (error.response.status == 422){
                        this.errors = error.response.data.errors
                    }
                })        
        },

        errorMessage (field) {
            if(this.errors && this.errors[field] && this.errors[field].length > 0) {
                return this.errors[field][0]
            } 
        },

        // watch: {
        //     data (val) {
        //         this.value = val;
        //     }
        // }
    }
}
</script>