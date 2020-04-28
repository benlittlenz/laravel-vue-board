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
      class="overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex"
    >
      <div class="relative w-auto my-4 mx-auto max-w-3xl">
        <!--content-->
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
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
                  class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold"
                  href="#"
                >Client</a>
              </li>
              <li class="mr-1">
                <a
                  class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                  href="#"
                >Address</a>
              </li>
              <li class="mr-1">
                <a
                  class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                  href="#"
                >Contact</a>
              </li>
            </ul>
          </div>
          <!--body-->
          <div class="relative p-6 flex-auto">
            
          </div>
          <!--footer-->
          <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
            <button
              class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-500 hover:text-white active:bg-red-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1"
              type="button"
              style="transition: all .15s ease"
              @click="toggleModal()"
            >
              Close
            </button>
            <button
              class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1"
              type="button"
              style="transition: all .15s ease"
              @click="toggleModal()"
            >
              Save Changes
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
      showModal: false
    }
  },
  methods: {
    toggleModal: function(){
      this.showModal = !this.showModal;
    }
  }
}
</script>