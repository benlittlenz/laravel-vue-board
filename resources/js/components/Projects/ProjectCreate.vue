<template>
  <div 
    class="bg-cream text-charcoal min-h-screen font-sans leading-normal overflow-x-hidden lg:overflow-auto"
  >
    <main class="z-0 flex-1 md:p-0 lg:pt-8 lg:px-8 md:ml-24 flex flex-col">
      <section 
      
        class="bg-cream-lighter p-4 shadow"
      >
        <div class="md:flex">
          <h2 class="md:w-1/3 uppercase tracking-wide text-sm sm:text-lg mb-6 ">
            Create New Client
          </h2>
        </div>

        <p class="p-4">
          Staff
        </p>
        <div class="border-b-2 m-0">
          <p class="p-4">
            Select Staff:
          </p>
          <v-select
            multiple
            :options="staffOptions"
            label="name"
            @input="setSelected"
          />
        </div>
        

        <form @submit.prevent="submit">
          <div 
            class="md:flex mb-8"
          >
            <div class="md:w-1/3 bg-gray-200">
              <legend class="uppercase tracking-wide text-sm">
                job
              </legend>
            </div>
            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3 bg-gray-200">
              <div class="mb-4">
                <label class="block uppercase tracking-wide text-xs font-bold">Job</label>
                
                <input
                  v-model="form.title"
                  class="w-full shadow-inner p-4 border-0"
                  type="text"
                  name="client"
                  placeholder="Job Title"
                >
                <p
                  class="text-xs font-light text-red-500"
                  :errors="errors"
                />
              </div>
            </div>
            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3 bg-gray-200">
              <div class="mb-4">
                <label class="block uppercase tracking-wide text-xs font-bold">Client</label>
                <div 
                  class="relative" 
                  @click="clientModal = ! clientModal"
                >
                  <Searchbox 
                    :clients="clients"
                  />
                </div
                

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
                value="Create Job"
              >
            </div>
          </div>
        </form>
      </section>
    </main></section></form>
  </div>
  </form>
  </v-select>
  </section>
  </main>
  </div>
</template>

<script>
import axios from 'axios';
import VueSingleSelect from "vue-single-select";
import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';

import { mapActions, mapGetters } from 'vuex'
import Searchbox from '../reusecore/Searchbox.vue'

export default {
    name: 'ProjectCreate',
    
    components: {
        VueSingleSelect,
        vSelect,
        Searchbox
    },
    data() {
        return {
            value: null,
            staffOptions: [],
            staff: [],
            //clients: [],
            searchQuery: null,
            form: {
                title: '',
                description: '',
                client_id: null,
                company_id: 1,
                staff: []
            },
            errors: null,
            company: null,
            clientModal: false
        }
    },
    computed: {
      ...mapGetters({
        clients: 'clients',
        //staff: 'staff'
      }),
        resultQuery() {
            if(this.searchQuery) {
                return this.clients.filter(client => {
                    return this.searchQuery.toLowerCase().split(' ')
                        .every(item => client.company.toLowerCase().includes(item))
                })
            } else {
                return this.clients
            }
        }
    },

    mounted() {
      this.getClients();
      //this.getStaff();

      axios.get('/api/staff')
        .then(response => {
            this.staffOptions = response.data.data
            console.log('success', this.staffOptions)
            this.loading = false
        }).catch(err => {
            this.loading = false

            console.log(err, 'Unable to fetch staff')
        })
    },
    methods: {
      ...mapActions({
        createProject: 'createProject',
        getClients: 'getClients',
      }), 

      submit() {
        this.createProject({
          data: this.form
        }).then(res => {
          this.$router.push(`/jobs/${res.data.id}`)
        }).catch(err => {
          if (err.response.status == 422){
            this.errors = err.response.data.errors
          }
        })
        
      },


        errorMessage (field) {
            if(this.errors && this.errors[field] && this.errors[field].length > 0) {
                return this.errors[field][0]
            } 
        },

    setSelected(value) {
     //this.form.client_id = value.id;
      console.log('selected', value);
      value.map(item => {
        if(this.form.staff.indexOf(item.id) === -1) {
          this.form.staff.push(item.id)
        }
      })
    
    },

    setSelectedClient(value) {
      this.form.client_id = value.id;
    }
    }
    
}
</script>