<template>

    <div class="w-full max-w-md p-4 bg-white border border-opacity-20  sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Top Customers :</h5>
            <Link href="/clients" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                View all
            </Link>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                <Link href="/clients">
                <li class="py-3 sm:py-4 cursor-pointer"
                v-for="client in clients"
                >
                    <div class="flex items-center space-x-4">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                {{client.name}}
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                {{client.email}}
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            <p>
                                {{client.totalSpent}} Dh
                            </p>
                        </div>
                    </div>
                </li>
                </Link>
            </ul>
        </div>
    </div>

</template>

<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    clients : Array
})
</script>
