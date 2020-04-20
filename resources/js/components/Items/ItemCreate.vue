<template>
  <body class="bg-cream text-charcoal min-h-screen font-sans leading-normal overflow-x-hidden lg:overflow-auto">
    <main class="flex-1 md:p-0 lg:pt-8 lg:px-8 md:ml-24 flex flex-col">
      <section class="bg-cream-lighter p-4 shadow">
        <div class="md:flex">
          <h2 class="md:w-1/3 uppercase tracking-wide text-sm sm:text-lg mb-6 ">
            Create New Item
          </h2>
        </div>
        <form @submit.prevent="submit">
          <div class="md:flex mb-8">
            <div class="md:w-1/3 bg-gray-200" />
            
            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3 bg-gray-200">
              <div class="mb-4">
                <label class="block uppercase tracking-wide text-xs font-bold">Item</label>
                
                <input
                  v-model="form.name"
                  class="w-full shadow-inner p-4 border-0"
                  type="text"
                  name="client"
                >
                <p
                  class="text-xs font-light text-red-500"
                  :errors="errors"
                />
              </div>
              <div class="md:flex mb-4">
                <div class="md:flex-1 md:pr-3">
                  <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Item Description</label>
                  <input
                    v-model="form.description"
                    class="w-full shadow-inner p-4 border-0"
                    type="text"
                    name="street"
                  >
                </div>
                <div class="md:flex-1 md:pl-3">
                  <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Unit</label>
                  <input
                    v-model="form.unit"
                    class="w-full shadow-inner p-4 border-0"
                    type="text"
                    name="suburb"
                  >
                  <span class="text-xs mb-4 font-thin text-red-600" />
                </div>
              </div>
              <div class="md:flex mb-4">
                <div class="md:flex-1 md:pr-3">
                  <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Price</label>
                  <input
                    v-model="form.price"
                    class="w-full shadow-inner p-4 border-0"
                    type="text"
                    name="city"
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="md:flex mb-6">
            <div class="md:flex-1 px-3 text-center md:text-right">
              <button class="py-2 px-4 rounded text-red-700 mr-5">
                Cancel
              </button>
              <input
                class="text-cream-lighter bg-blue-500 py-2 px-4 text-white rounded"
                type="submit"
                value="Create Item"
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
    name: 'ItemCreate',

    props: [
      'user'
    ],

    data() {
        return {
            form: {
                name: '',
                description: '',
                unit: '',
                price: ''
            },
            errors: null,
        }
    },
    methods: {
        async submit () {
           axios.post('/api/items', this.form)
                .then(response => {
                    this.$router.push(`/items/${response.data.id}`)
                }).catch(error => {
                    if (error.response.status == 422){
                        this.errors = error.response.data.errors
                    }
                })
        //    try {
        //         await axios.post('/api/clients', this.form)
        //    } catch(err) {
        //        console.log(err.data.errors)
        //        //this.errors = err.response.data.data.errors
        //    }
           
        },

        errorMessage (field) {
            if(this.errors && this.errors[field] && this.errors[field].length > 0) {
                return this.errors[field][0]
            } 
        }
    }
}
</script>