<template>
  <Head title="Restaurants" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Restaurants</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 overflow-x-scroll">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Restaurant Name</th>
                  <th>City</th>
                  <th>Address</th>
                  <th>Owner Name</th>
                  <th>Owner Email</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="restaurant in restaurants" :key="restaurant.id">
                  <td>{{ restaurant.id }}</td>
                  <td>{{ restaurant.name }}</td>
                  <td>
                    <div class="badge badge-primary">{{ restaurant.city.name }}</div>
                  </td>
                  <td>{{ restaurant.address }}</td>
                  <a :href="'mailto:' + restaurant.owner.email" class="text-link">{{
                    restaurant.owner.email
                  }}</a>
                  <td>
                    <a :href="'mailto:' + restaurant.owner.email">{{ restaurant.owner.email }}</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head } from '@inertiajs/vue3'

defineProps({
  restaurants: {
    type: Array
  }
})
</script>