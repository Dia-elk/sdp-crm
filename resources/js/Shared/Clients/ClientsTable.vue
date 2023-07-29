<template>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
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

            <tr class="bg-white border-b  cursor-default"
                v-for="client in clients" :key="client.id">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{ client.email }}
                </th>
                <td class="px-6 py-4">
                    {{ client.name }}
                </td>
                <td class="px-6 py-4">
                    {{ client.phone }}
                </td>
                <td class="px-6 py-4">
                    <p v-show="client.ordersCount">{{ client.ordersCount }}</p>
                    <p v-show="!client.ordersCount">-</p>
                </td>
                <td class="px-6 py-4">
                    <p v-show="client.totalSpent">{{ client.totalSpent }}  Dh</p>
                    <p v-show="!client.totalSpent">-</p>
                </td>

                <td>
                    <div class="flex items-center justify-center gap-4">
                        <Link :href="route('clients.show',client.id)">
                            <EyeIcon/>
                        </Link>

                        <Link :href="route('clients.edit',client.id)">
                            <EditIcon/>
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
    clients: Array
})
</script>
