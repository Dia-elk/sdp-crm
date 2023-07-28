<template>
    <Head title="Orders"/>
   <div class="mb-4 flex  justify-between items-center">
       <h1 class="text-xl font-semibold">
           Orders :
       </h1>
       <!-- search input -->
      <div class="w-[350px] hidden md:block">
          <form>
              <input type="search"
                     class="bg-transparent border rounded-lg border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                     placeholder="Search..."
              >
          </form>
      </div>
       <!-- end of search input -->
       <div class="flex items-center gap-4">
           <p class="text-xs sm:text-sm font-bold text-blue-600 cursor-pointer">All</p>
           <p class="text-xs sm:text-sm text-black text-opacity-40 cursor-pointer">In Progress</p>
           <p class="text-xs sm:text-sm text-black text-opacity-40 cursor-pointer">Done</p>
           <p class="text-xs sm:text-sm text-black text-opacity-40 cursor-pointer">Cancelled</p>

       </div>
   </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 w-full min-h-full">
        <div v-for="order in orders.data">
            <OrderCard
                :order="order"
            />
        </div>
    </div>
    <div class="flex mt-4 justify-center">
        <Pagination
            :pagination-links="orders.links"
        />
    </div>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}
</script>

<script setup>
import {Head, useForm} from "@inertiajs/vue3";
import OrderCard from "@/Shared/Orders/OrderCard.vue";
import {ref, watch} from "vue";
import Pagination from "@/Shared/Pagination.vue";

defineProps({
    orders:Array,
})





</script>
