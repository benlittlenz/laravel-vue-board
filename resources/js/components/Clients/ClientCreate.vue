<template>
  <body class="bg-cream text-charcoal min-h-screen font-sans leading-normal overflow-x-hidden lg:overflow-auto">
    <main class="flex-1 md:p-0 lg:pt-8 lg:px-8 md:ml-24 flex flex-col">
      <section class="bg-cream-lighter p-4 shadow">
        <div class="md:flex">
          <h2 class="md:w-1/3 uppercase tracking-wide text-sm sm:text-lg mb-6 ">
            Create New Client
          </h2>
        </div>
        <form @submit.prevent="submit">
          <div class="md:flex mb-8">
            <div class="md:w-1/3 bg-gray-200">
              <legend class="uppercase tracking-wide text-sm">
                CLIENT
              </legend>
            </div>
            
            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3 bg-gray-200">
              <div class="mb-4">
                <label class="block uppercase tracking-wide text-xs font-bold">Client</label>
                
                <input
                  v-model="form.company"
                  class="w-full shadow-inner p-4 border-0"
                  type="text"
                  name="client"
                  placeholder="Client Name"
                >
                <p
                  class="text-xs font-light text-red-500"
                  :errors="errors"
                />
              </div>
              <div class="md:flex mb-4">
                <div class="md:flex-1 md:pr-3">
                  <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Street Address</label>
                  <input
                    v-model="form.address"
                    class="w-full shadow-inner p-4 border-0"
                    type="text"
                    name="street"
                    placeholder="123 Fake St."
                  >
                </div>
                <div class="md:flex-1 md:pl-3">
                  <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Suburb</label>
                  <input
                    v-model="form.suburb"
                    class="w-full shadow-inner p-4 border-0"
                    type="text"
                    name="suburb"
                    placeholder="Suburb"
                  >
                  <span class="text-xs mb-4 font-thin text-red-600" />
                </div>
              </div>
              <div class="md:flex mb-4">
                <div class="md:flex-1 md:pr-3">
                  <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">City</label>
                  <input
                    v-model="form.city"
                    class="w-full shadow-inner p-4 border-0"
                    type="text"
                    name="city"
                    placeholder="City"
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="md:flex mb-8">
            <div class="md:w-1/3 bg-gray-200">
              <legend class="uppercase tracking-wide text-sm">
                Contact
              </legend>
            </div>
            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3 bg-gray-200">
              <div class="mb-4">
                <label class="block uppercase tracking-wide text-xs font-bold">Contact Name</label>
                
                <input
                  v-model="form.contact"
                  class="w-full shadow-inner p-4 border-0"
                  type="text"
                  name="name"
                  placeholder=""
                >
                <p
                  class="text-xs font-light text-red-500"
                  :errors="errors"
                />
              </div>
              <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
                <div class="mb-4">
                  <label class="block uppercase tracking-wide text-xs font-bold">Phone</label>
                  <input
                    v-model="form.phone"
                    class="w-full shadow-inner p-4 border-0"
                    type="tel"
                    name="phone"
                    placeholder="(09) 945 3444"
                  >
                </div>
                <div class="mb-4">
                  <label class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Email</label>
                  
                  <input
                    v-model="form.email"
                    class="w-full shadow-inner p-4 border-0"
                    type="email"
                    name="email"
                    placeholder="contact@email.co.nz"
                  >
                  <p
                    class="text-xs font-light text-red-500"
                    :errors="errors"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="md:flex mb-6">
            <div class="md:w-1/3 bg-gray-200">
              <legend class="uppercase tracking-wide text-sm">
                Description
              </legend>
            </div>
            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3 bg-gray-200">
              <textarea
                v-model="form.description"
                class="w-full shadow-inner p-4 border-0"
                placeholder=""
                rows="6"
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
                value="Create Location"
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
    name: 'ClientCreate',

    data() {
        return {
            form: {
                company: '',
                address: '',
                suburb: '',
                city: '',
                description: '',
                email: '',
                phone: '',
                contact: ''
            },
            errors: null,
        }
    },
    methods: {
        async submit () {
           console.log(this.form)

           axios.post('/api/clients', this.form)
                .then(response => {
                    console.log('successful', response)
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