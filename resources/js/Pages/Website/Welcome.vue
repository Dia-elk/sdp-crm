<template>
    <Head title="Welcome"/>
    <div class="">
        <ul class="flex flex-col gap-10">
            <li v-for="client in clients" class="flex flex-col gap-4">
                <h1>{{client.name}}</h1>
                <p>{{client.address.country}}</p>
                <p v-for="order in client.order">
                    {{order.id}}
                </p>
            </li>
        </ul>
    </div>

</template>

<script setup>

import {Head, Link} from "@inertiajs/vue3";
import Button from "@/Shared/Button.vue";

defineProps({
    clients : Array
})
</script>

