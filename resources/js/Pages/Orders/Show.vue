<template>
    <Head title="Order"/>

      <p> Order quantity : {{order.quantity}}</p>
    <p> Client name : {{order.client.name}}</p>
    <p> Client Address : {{order.client.address.country}}</p>
    <p> Product: {{order.product.name}}</p>
    <p> Statut: {{order.statut.name}}</p>
    <p> user: {{order.user.name}}</p>


</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {Head} from "@inertiajs/vue3";

defineProps({
    order :Object,
})
</script>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}
</script>
