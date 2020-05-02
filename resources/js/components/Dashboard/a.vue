<template>
  <div class="max-w-3xl mx-auto px-4 py-10 bg-indigo-600 rounded-lg mt-6">
    <!-- Top Navigation -->
    <div class="py-4">
      <div class="uppercase tracking-wide text-xs font-bold text-white mb-1 leading-tight">
        Step {{ step }} of 3
      </div>
      <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div class="flex-1">
          <div v-if="step === 1">
            <div class="text-xl text-center font-bold text-white leading-tight">
              Company Details
            </div>

            <div class="-mb-12 flex items-center justify-center">
              <img
                class="mt-6 h-20 w-20 icon float-left z-0"
                src="https://s3.amazonaws.com/jebbles-codepen/icon.png"
              >
            </div>
          </div>

          <div v-if="step === 2">
            <div class="text-xl text-center font-bold text-white leading-tight">
              Company Logo
            </div>
          </div>
          <div v-if="step === 3">
            <div class="text-xl text-center font-bold text-white leading-tight">
              Your Details
            </div>
            <div class="-mb-12 flex items-center justify-center">
              <img
                class=" h-40 w-40 icon float-left z-0"
                src="https://s3.amazonaws.com/jebbles-codepen/file_icon_1.png"
              >
            </div>
          </div>

          <div v-if="step === 4">
            <div class="text-lg font-bold text-gray-700 leading-tight">
              Create account
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Top Navigation -->

    <!-- Step Content -->
    <div class="py-10">
      <div v-if="step === 1">
        <div class="mb-5">
          <label
            for="firstname"
            class="font-bold mb-1 text-white block"
          >Company Name</label>
          <input
            v-model="form.companyName"
            type="text"
            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
            placeholder="Enter Company Name"
          >
        </div>

        <div class="mb-5">
          <label
            for="email"
            class="font-bold mb-1 text-white block"
          >Company Email</label>
          <input
            v-model="form.companyEmail"
            type="email"
            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
            placeholder="Enter Company Email"
          >
        </div>
        <div class="mb-5 w-1/2">
          <label
            for="email"
            class="font-bold mb-1 text-white block"
          >Number of Employees</label>
          <input
            v-model="form.employees"
            type="number"
            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
            placeholder="0"
          >
        </div>
      </div>

      <div v-if="step === 2">
        <div class="mb-5 text-center">
          <div class="mx-auto w-32 h-32 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset">
            <img
              id="image"
              class="object-cover w-full h-32 rounded-full"
              :src="image"
            >
          </div>

          <label
            for="fileInput"
            type="button"
            class="cursor-pointer inine-flex justify-between items-center focus:outline-none rounded-lg 
            py-2 px-4 rounded-lg shadow-sm text-left text-gray-800 bg-gray-300 hover:bg-gray-100 font-medium"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <rect
                x="0"
                y="0"
                width="24"
                height="24"
                stroke="none"
              />
              <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
              <circle
                cx="12"
                cy="13"
                r="3"
              />
            </svg>
            Company Logo
          </label>

          <div class="mx-auto w-48 text-gray-300 text-xs text-center mt-1">
            Click to add a company logo
          </div>
        </div>
      </div>

      <div v-if="step === 3">
        <div class=" md:flex mb-6">
          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label
              for="firstname"
              class="font-bold mb-1 text-white block"
            >Name</label>
            <input
              v-model="form.companyName"
              type="text"
              class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
              placeholder="Full Name"
            >
          </div>
          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label
              for="firstname"
              class="font-bold mb-1 text-white block"
            >Email</label>
            <input
              v-model="form.companyName"
              type="text"
              class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
              placeholder="Email Address"
            >
          </div>
        </div>
        <div class="mb-5 md:w-1/2 px-3">
          <label
            for="firstname"
            class="font-bold mb-1 text-white block "
          >Contact Number</label>
          <input
            v-model="form.companyName"
            type="phone"
            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
            placeholder="Enter Contact #"
          >
        </div>
        <div class="mb-5">
          <label
            for="password"
            class="font-bold mb-1 text-white block text-center text-xl"
          >Set up password</label>
          <div class="text-white mt-2 mb-4">
            Create a secure password including the following criteria below.

            <ul class="list-disc text-sm ml-4 mt-2">
              <li>lowercase letters</li>
              <li>numbers</li>
              <li>capital letters</li>
              <li>special characters</li>
            </ul>
          </div>

          <div class="relative">
            <input
              v-model="password"
              :type="togglePassword ? 'text' : 'password'"
              class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
              placeholder="Password"
              @keydown="checkPasswordStrength()"
            >

            <div
              class="absolute right-0 bottom-0 top-0 px-3 py-3 cursor-pointer"
              @click="togglePassword = !togglePassword"
            >
              <svg
                :class="{'hidden': !togglePassword, 'block': togglePassword }"
                xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6 fill-current text-gray-500"
                viewBox="0 0 24 24"
              ><path d="M12 19c.946 0 1.81-.103 2.598-.281l-1.757-1.757C12.568 16.983 12.291 17 12 17c-5.351 0-7.424-3.846-7.926-5 .204-.47.674-1.381 1.508-2.297L4.184 8.305c-1.538 1.667-2.121 3.346-2.132 3.379-.069.205-.069.428 0 .633C2.073 12.383 4.367 19 12 19zM12 5c-1.837 0-3.346.396-4.604.981L3.707 2.293 2.293 3.707l18 18 1.414-1.414-3.319-3.319c2.614-1.951 3.547-4.615 3.561-4.657.069-.205.069-.428 0-.633C21.927 11.617 19.633 5 12 5zM16.972 15.558l-2.28-2.28C14.882 12.888 15 12.459 15 12c0-1.641-1.359-3-3-3-.459 0-.888.118-1.277.309L8.915 7.501C9.796 7.193 10.814 7 12 7c5.351 0 7.424 3.846 7.926 5C19.624 12.692 18.76 14.342 16.972 15.558z" /></svg>

              <svg
                :class="{'hidden': togglePassword, 'block': !togglePassword }"
                xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6 fill-current text-gray-500"
                viewBox="0 0 24 24"
              ><path d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z" /><path d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z" /></svg>
            </div>
          </div>

          <div class="flex items-center mt-4 h-3">
            <div class="w-2/3 flex justify-between h-2">
              <div
                :class="{ 'bg-red-400': passwordStrengthText == 'Too weak' || passwordStrengthText == 'Could be stronger' || passwordStrengthText == 'Strong password' }"
                class="h-2 rounded-full mr-1 w-1/3 bg-gray-300"
              />
              <div
                :class="{ 'bg-orange-400': passwordStrengthText == 'Could be stronger' || passwordStrengthText == 'Strong password' }"
                class="h-2 rounded-full mr-1 w-1/3 bg-gray-300"
              />
              <div
                :class="{ 'bg-green-400': passwordStrengthText == 'Strong password' }"
                class="h-2 rounded-full w-1/3 bg-gray-300"
              />
            </div>
            <div
              x-text="passwordStrengthText"
              class="text-gray-500 font-medium text-sm ml-3 leading-none"
            />
          </div>
          <div class="mt-5">
            <label
              for="password"
              class="font-bold mb-1 text-white block text-center text-xl"
            >Verify Password</label>
            <input
              :type="password"
              class="w-full px-4 py-3 border-solid border-2 border-green-500 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
              placeholder="Password"
              @keydown="checkPasswordStrength()"
            >
          </div>
        </div>
      </div>
      <!-- Bottom Navigation -->
      <div
        v-if="step != 'complete'"
        class="-mr-10"
      >
        <div class="max-w-3xl mx-auto px-4">
          <div class="flex justify-between">
            <div class="w-1/2">
              <button
                v-if="step > 1"
                class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border"
                @click="step--"
              >
                Previous
              </button>
            </div>

            <div class="w-1/2 text-right">
              <button
                v-if="step < 3"
                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
                @click="step++"
              >
                Next
              </button>

              <button
                v-if="step === 3"
                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
                @click="step = 'complete'"
              >
                Complete
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>


export default {
  data() {
    return {
      step: 1,
      passwordStrengthText: '',
      togglePassword: false,
      password: '',
      form: {
        companyName: '',
        companyEmail: '',
        employees: ''
      }
    }
  },

  methods: {
    checkPasswordStrength() {
					var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
					var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

					let value = this.password;

					if (strongRegex.test(value)) {
						this.passwordStrengthText = "Strong password";
					} else if(mediumRegex.test(value)) {
						this.passwordStrengthText = "Could be stronger";
					} else {
						this.passwordStrengthText = "Too weak";
					}
          console.log(this.passwordStrengthText)
				} 
  }
}
</script>