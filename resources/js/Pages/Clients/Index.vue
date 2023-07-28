<template>
    <Head title="Clients"/>
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-xl font-semibold">
            Clients :
        </h1>
        <!-- search input -->
        <div class="hidden md:flex items-center gap-4">


            <form>
                <input type="search"
                       class="bg-transparent w-[350px] h-[40px]  rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                       placeholder="Search..."
                       v-model="search"
                >
            </form>


            <Link :href="route('clients.create')">
                <div
                    class="px-6 h-[39px] cursor-pointer hover:bg-blue-700 transition-all duration-300 flex justify-center items-center bg-blue-600 rounded-lg">
                    <p class=" text-white text-sm  font-semibold">
                        Add Client
                    </p>
                </div>
            </Link>
        </div>
        <!-- end of search input -->

    </div>
    <div>
        <ClientsTable
            :clients="clients.data"
        />
    </div>

    <div class="mt-4 flex justify-center">
        <Pagination
            :pagination-links="clients.links"
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
import ClientsTable from "@/Shared/Clients/ClientsTable.vue";
import {Link} from "@inertiajs/vue3";
import Pagination from "@/Shared/Pagination.vue";
import {ref} from "vue";


defineProps({
    clients: Array
})

let search = ref('')


</script>
