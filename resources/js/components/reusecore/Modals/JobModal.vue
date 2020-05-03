<template>
  <div>
    <!---<button
      class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
      type="button"
      style="transition: all .15s ease"
      @click="toggleModal()"
    >
      Open regular modal
    </button>

    -->

    <div
      v-if="showModal"
      class="overflow-x-hidden overflow-y-auto inline-block fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
    >
      <div class="relative w-auto my-4 mx-auto max-w-3xl min-w-1/2 flex-1 min-h-0 overflow-y-auto">
        <!--content-->
        <div class="min-h-1/2 border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none overflow-y-auto">
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

          <!--body-->
          <div class="overflow-y-auto modal-height">
            <form class="">
              <div 
                class="relative px-6 flex-auto"
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
                      name="client"
                    >
                    <div
                      class="error"
                    >
                      <span
                        class="text-danger"
                      >arrr </span>
                    </div>
                  </div>
                </div>

                <div class=" md:flex mb-6">
                  <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label
                      class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                      for="grid-first-name"
                    >
                      Contact Name
                    </label>
                    <input
                      id="grid-first-name"

                      class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                      type="text"
                      name="name"
                      placeholder="Jane"
                    >
                  </div>
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
                      type="tel"
                      placeholder=""
                      name="phone"
                    >
                  </div>
                </div>
                <div class=" md:flex mb-6">
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
                      name="email"
                      placeholder=""
                    >
                  </div>
                </div>
                <div class=" md:flex mb-6 min-h-1/2 mt-4">
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
                      name="street"
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
                      name="suburb"
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
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 mb-3 px-4"
                    type="text"
                    name="city"
                    placeholder=""
                  >
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
              <!--footer-->
              <div class="flex items-center justify-end p-4 rounded-b">
                <button
                  class="text-red-500 hover:text-red-700 bg-transparent border border-solid border-red-500 hover:border-red-700 active:bg-red-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-2 mb-1"
                  type="button"
                  style="transition: all .15s ease"
                  @click="toggleModal()"
                >
                  Close
                </button>
                <div>
                  <input
                    class="bg-green-600 hover:bg-green-700 rounded-lg text-white font-bold uppercase px-3 py-3 text-sm outline-none focus:outline-none mr-1 mb-1"
                    style="transition: all .15s ease"
                    value="Create Client"
                    type="submit"
                  >
                </div>
              </div>
            </form>
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
  name: "JobModal",
  data() {
    return {
      showModal: true,

    }
  },


}
</script>