<template>
    <Head title="Clients"/>
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-xl font-semibold">
            Clients :
        </h1>
        <!-- search input -->
        <div class="hidden md:block">
            <form>
                <input type="search"
                       class="bg-transparent w-[250px] h-[38px] border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                       placeholder="Search...">
            </form>
        </div>
        <!-- end of search input -->
    </div>
    <div class="">
        <ClientsTable
        :clients="clients"
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

import AdminLayout from "@/Layouts/AdminLayout.vue";
import {Head} from "@inertiajs/vue3";
import ClientsTable from "@/Shared/Clients/ClientsTable.vue";

defineProps({
    clients:Array
})
</script>
