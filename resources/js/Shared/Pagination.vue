<template>
    <nav aria-label="Page navigation example">
        <ul class="inline-flex -space-x-px text-sm">
            <li v-for="link in paginationLinks">
                <a :href="link.url"
                   class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                   :class="link.active?'text-blue-600 bg-blue-50 hover:bg-blue-100 hover:text-blue-700':''"
                   v-html="link.label"
                />
            </li>
        </ul>
    </nav>
</template>

<script setup>
defineProps({
    paginationLinks: Array,
})
</script>

