<template>
  <nav class="pt-4 text-center">


    <p class="pt-12 text-gray-500 text-xs uppercase font-bold">
      Create
    </p>


    <p class="pt-12 text-gray-500 text-xs uppercase font-bold">
      General
    </p>
    <router-link
      to="/clients"
      class="flex items-center py-2 hover:text-blue-600 text-center"
    >
      <div class="tracking-wide pl-3 text-center">
        <p class="text-center">
          Clients
        </p>
      </div>
    </router-link>
    <router-link
      to="/projects"
      class="flex items-center py-2 hover:text-blue-600"
    >
      <div class="tracking-wide pl-3 text-center">
        Jobs
      </div>
    </router-link>
    <router-link
      to="/"
      class="flex items-center py-2 hover:text-blue-600"
    >
      <div class="tracking-wide pl-3 text-center">
        Staff
      </div>
    </router-link>
    <p class="pt-12 text-gray-500 text-xs uppercase font-bold">
      Settings
    </p>

    <router-link
      to="/"
      class="flex items-center py-2 hover:text-blue-600"
    >
      <div class="tracking-wide pl-3">
        Profile
      </div>
    </router-link>
    <router-link
      to="/"
      class="flex items-center py-2 hover:text-blue-600"
    >
      <div class="tracking-wide pl-3">
        Logout
      </div>
    </router-link>
  </nav>
</template>