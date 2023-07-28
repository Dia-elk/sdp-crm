<template>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    E-mail
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Orders
                </th>
                <th scope="col" class="px-6 py-3">
                    Total
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 cursor-default"
            v-for="client in clients" :key="client.id">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{client.email}}
                </th>
                <td class="px-6 py-4">
                    {{client.name}}
                </td>
                <td class="px-6 py-4">
                    {{client.phone}}
                </td>
                <td class="px-6 py-4">
                    {{client.ordersCount}}
                </td>
                <td class="px-6 py-4">
                    {{client.totalSpent}} Dh
                </td>
                <td class=" py-4">
                    <div class="flex items-center justify-around">
                        <Link :href="route('clients.show',client.id)">
                            <EyeIcon/>
                        </Link>

                        <Link >
                            <EditIcon/>
                        </Link>

                        <Link >
                            <DeleteIcon/>
                        </Link>

                    </div>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
</template>

<script setup>

import EyeIcon from "@/Icons/EyeIcon.vue";
import DeleteIcon from "@/Icons/Drawer/DeleteIcon.vue";
import EditIcon from "@/Icons/EditIcon.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    clients:Array
})
</script>
