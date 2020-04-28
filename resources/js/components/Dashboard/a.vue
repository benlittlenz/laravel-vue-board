<template>
  <div>
    <button
      class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
      type="button"
      style="transition: all .15s ease"
      @click="toggleModal()"
    >
      Open regular modal
    </button>
    <div
      v-if="showModal"
      class="min-h-3/4 overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex"
    >
      <div class="relative w-auto my-4 mx-auto max-w-3xl min-w-1/2">
        <!--content-->
        <div class="min-h-1/2 border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
          <!--header-->
          <div class="flex items-start justify-between p-5 rounded-t">
            <h3 class="text-3xl font-semibold">
              Create Client
            </h3>
            <button
              class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
              @click="toggleModal()"
            >
              <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                ×
              </span>
            </button>
          </div>
          <div class="-mt-2">
            <ul class="flex border-b">
              <li class="-mb-px mr-1">
                <a
                  :class="[currentTab === 'client' 
                    ? 'bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold' 
                    : 'bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold']"
                  href="#"
                  @click="currentTab = 'client'"
                >Client</a>
              </li>
              <li class="-mb-px mr-1">
                <a
                  :class="[currentTab === 'address' 
                    ? 'bg-white inline-block border-l border-t border-l border-r rounded-t py-2 px-4 text-blue-700 font-semibold' 
                    : 'bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold']"
                  href="#"
                  @click="currentTab = 'address'"
                >Address</a>
              </li>
            </ul>
          </div>
          <!--body-->
          <div 
            v-if="currentTab === 'client'"
            class="relative p-6 flex-auto"
          >
            <p class="my-4 text-gray-600 text-lg leading-relaxed" />
            <div class="md:flex mb-6">
              <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label
                  class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                  for="grid-first-name"
                >
                  Client Name
                </label>
                <input
                  id="grid-first-name"
                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                  type="text"
                  placeholder=""
                >
              </div>
            </div>

            <div class=" md:flex mb-6">
              <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label
                  class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                  for="grid-first-name"
                >
                  First Name
                </label>
                <input
                  id="grid-first-name"
                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                  type="text"
                  placeholder="Jane"
                >
              </div>
              <div class="md:w-1/2 px-3">
                <label
                  class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                  for="grid-last-name"
                >
                  Last Name
                </label>
                <input
                  id="grid-last-name"
                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                  type="text"
                  placeholder="Doe"
                >
              </div>
            </div>
            <div class=" md:flex mb-6">
              <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label
                  class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                  for="grid-first-name"
                >
                  Contact Number
                </label>
                <input
                  id="grid-first-name"
                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                  type="number"
                  placeholder=""
                >
              </div>
              <div class="md:w-1/2 px-3">
                <label
                  class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                  for="grid-last-name"
                >
                  Contact Email
                </label>
                <input
                  id="grid-last-name"
                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                  type="email"
                  placeholder=""
                >
              </div>
            </div>
            <div class="px-3">
              <label
                class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                for="grid-last-name"
              >
                Client Description
              </label>
              <textarea
                id="grid-last-name"
                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                placeholder=""
                row="4"
              />
            </div>
          </div>
          <div
            v-if="currentTab === 'address'"
            class="relative p-6 flex-auto min-h-1/2 min-h-3/4 "
          >
            <p class="my-4 text-gray-600 text-lg leading-relaxed" />
            <div class=" md:flex mb-6 min-h-1/2">
              <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label
                  class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                  for="grid-first-name"
                >
                  Street Address
                </label>
                <input
                  id="grid-first-name"
                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                  type="text"
                  placeholder=""
                >
              </div>
              <div class="md:w-1/2 px-3">
                <label
                  class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                  for="grid-last-name"
                >
                  Suburb
                </label>
                <input
                  id="grid-last-name"
                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                  type="text"
                  placeholder=""
                >
              </div>
            </div>
            <div class="md:w-1/2 px-3">
              <label
                class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                for="grid-last-name"
              >
                City
              </label>
              <input
                id="grid-last-name"
                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                type="text"
                placeholder=""
              >
            </div>
          </div>
          <!--footer-->
          <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
            <button
              class="text-red-500 hover:text-red-700 bg-transparent border border-solid border-red-500 hover:border-red-700 active:bg-red-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-2 mb-1"
              type="button"
              style="transition: all .15s ease"
              @click="toggleModal()"
            >
              Close
            </button>
            <button
              class="bg-green-400 hover:bg-green-500 rounded-lg text-white font-bold uppercase px-3 py-3 text-sm outline-none focus:outline-none mr-1 mb-1"
              type="button"
              style="transition: all .15s ease"
              @click="toggleModal()"
            >
              Create Client
            </button>
          </div>
        </div>
      </div>
    </div>
    <div
      v-if="showModal"
      class="opacity-25 fixed inset-0 z-40 bg-black"
    />
  </div>
</template>

<script>
export default {
  name: "RegularModal",
  data() {
    return {
      showModal: false,
      currentTab: 'client'
    }
  },
  methods: {
    toggleModal: function(){
      this.showModal = !this.showModal;
    }
  }
}
</script>