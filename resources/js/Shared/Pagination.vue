<template>
    <nav aria-label="Page navigation example">
        <ul class="inline-flex -space-x-px text-sm">
            <li v-for="link in paginationLinks">
                <a :href="link.url"
                   class="flex items-center justify-center px-3 h-8 leading-tight border border-gray-300 "
                   :class="link.active? 'text-blue-600 bg-blue-50 hover:bg-blue-100 hover:text-blue-700':'text-gray-500  bg-white hover:bg-gray-100 hover:text-gray-700 '"
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

