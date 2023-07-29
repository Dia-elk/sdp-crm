<template>
    <Head title="Orders"/>
    <div class="mb-4 flex  justify-between items-center">
        <h1 class="text-xl font-semibold">
            Orders :
        </h1>
        <!-- search input -->
        <div class="w-[330px] hidden md:block">
            <form>
                <input type="search"
                       class="bg-transparent border rounded-lg border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                       placeholder="Search..."
                >
            </form>
        </div>
        <!-- end of search input -->
        <div class="flex items-center gap-4">
            <Link href="/orders" class="text-xs sm:text-sm  cursor-pointer"
                  :class="!decodeURIComponent($page.url).startsWith('/orders?statut=')? 'text-blue-600 font-bold ':'text-black text-opacity-40'"
            >
                All
            </Link>

            <Link class="text-xs sm:text-sm  cursor-pointer"
                  v-for="statut in statuts"
                  :key="statut.id"
                  :class="decodeURIComponent($page.url).startsWith('/orders?statut=' + statut.name)? 'text-blue-600 font-bold ':'text-black text-opacity-40'"

            >
                {{ statut.name }}
            </Link>
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
import Pagination from "@/Shared/Pagination.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    orders: Array,
    statuts: Array,
})


// function filterByStatut(statut) {
//
//  Inertia.get(route('orders.index', {statut: statut},));
//
// }


</script>
