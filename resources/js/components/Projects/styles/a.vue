<template>
  <div class="w-full flex flex-wrap">
    <!-- Login Section -->
    <div class="w-full md:w-1/2 flex flex-col">
      <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
        <a
          href="#"
          class="bg-black text-white font-bold text-xl p-4"
        >Logo</a>
      </div>

      <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
        <p class="text-center text-3xl">
          Welcome.
        </p>
        <form 
          method="POST"
          action="{{ route('login') }}"
          class="flex flex-col pt-3 md:pt-8"
          onsubmit="event.preventDefault();"
          @csrf
        >
          <div class="flex flex-col pt-4">
            <label
              for="email"
              class="text-lg"
            >{{ __('E-Mail Address') }}</label>
            <input 
              id="email"
              type="email"
              required
              placeholder="your@email.com" 
              class="
                         @error('email') is-invalid @enderror
                         shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
            >
            @error('email')
            <span
              class="invalid-feedback"
              role="alert"
            >
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
    
          <div class="flex flex-col pt-4">
            <label
              for="password"
              class="text-lg"
            >{{ __('Password') }}</label>
            <input
              id="password"
              type="password"
              placeholder="Password"
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
            >
            @error('password')
            <span
              class="invalid-feedback"
              role="alert"
            >
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="form-group row">
            <div class="col-md-6 offset-md-4">
              <div class="form-check">
                <input
                  id="remember"
                  class="form-check-input"
                  type="checkbox"
                  name="remember"
                  {{
                  old('remember')
                  ?
                  'checked'
                  :
                  ''
                  }}
                >

                <label
                  class="form-check-label"
                  for="remember"
                >
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div>
          </div>
    
          <button
            type="submit"
            value="Log In"
            class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8"
          >
            {{ __('Login') }}
          </button>
        </form>
        <div class="text-center pt-12 pb-12">
          <p>
            Don't have an account? <a
              href="register.html"
              class="underline font-semibold"
            >Register here.</a>
          </p>
        </div>
      </div>
    </div>

    <!-- Image Section -->
    <div class="w-1/2 shadow-2xl">
      <img
        class="object-cover w-full h-screen hidden md:block"
        src="https://source.unsplash.com/IXUM4cJynP0"
      >
    </div>
  </div>
</template>

