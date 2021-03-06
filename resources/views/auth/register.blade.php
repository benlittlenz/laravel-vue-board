@extends('layouts.app')

@section('content')
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
          {{ __('Register') }}
        </p>
        <form 
          method="POST"
          action="{{ route('register') }}"
          class="flex flex-col pt-3 md:pt-8"
        >
        @csrf
          <div class="flex flex-col pt-4">
            <label
              for="name"
              class="text-lg"
            >{{ __('Name') }}</label>
            <input 
              id="name" 
              type="text" 
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline
              @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" 
              required autocomplete="name" autofocus
            >
            @error('name')
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
              for="email"
              class="text-lg"
            >{{ __('E-Mail Address') }}</label>
            <input 
              id="email"
              type="email"
              name="email" 
              value="{{ old('email') }}" 
              required 
              autocomplete="email"
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
              name="password" 
              required 
              autocomplete="new-password"
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

          <div class="flex flex-col pt-4">
            <label
              for="password-confirm"
              class="text-lg"
            >{{ __('Confirm Password') }}</label>
            <input
              id="password-confirm"
              type="password"
              placeholder="Password"
              name="password_confirmation" 
              required 
              autocomplete="new-password"
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


    
          <button
            type="submit"
            class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8"
          >
            {{ __('Register') }}
          </button>
        </form>
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
@endsection
