<template>
    <Head :title="client.name"/>

       Client country : {{client.address.country}}
       <ul class="space-y-6 mt-16">
           <li v-for="order in client.order" :key="order.id">
               <p> order id : {{order.id}}</p>
               <p> product name : {{ order.product.name }}</p>
               <p> statut : {{order.statut.name}}</p>
           </li>
       </ul>

</template>

<script setup>

import AdminLayout from "@/Layouts/AdminLayout.vue";
import {Head} from "@inertiajs/vue3";

defineProps({
    client : Object,
})
</script>


<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}
</script>

