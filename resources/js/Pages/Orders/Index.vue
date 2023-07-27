<template>
    <Head title="Orders"/>
   <div class="mb-4 flex justify-between items-center">
       <h1 class="text-xl font-semibold">
           Orders :
       </h1>
       <div class="flex items-center gap-4">
           <p class="text-xs sm:text-sm font-bold text-blue-600 cursor-pointer">All</p>
           <p class="text-xs sm:text-sm text-black text-opacity-40 cursor-pointer">In Progress</p>
           <p class="text-xs sm:text-sm text-black text-opacity-40 cursor-pointer">Done</p>
           <p class="text-xs sm:text-sm text-black text-opacity-40 cursor-pointer">Cancelled</p>

       </div>
   </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 w-full h-full">
        <div v-for="order in orders">
            <OrderCard
                :order="order"
            />
        </div>
    </div>

</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}
</script>

<script setup>

import AdminLayout from "@/Layouts/AdminLayout.vue";
import {Head} from "@inertiajs/vue3";
import OrderCard from "@/Shared/Orders/OrderCard.vue";
import InProgressStatut from "@/Shared/Statuts/InProgressStatut.vue";
import DoneStatut from "@/Shared/Statuts/DoneStatut.vue";
import CancelledStatut from "@/Shared/Statuts/CancelledStatut.vue";

defineProps({
    orders:Array,
})
</script>
