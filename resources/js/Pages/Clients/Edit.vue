<template>
    <Head :title="'Edit ' + client.name"/>
    <div class="flex gap-4 items-center">
        <h1 class="text-xl font-semibold">
            Edit  Client  that have {{client.order_count}} orders:
        </h1>
        <Link v-if="$page.props.auth.user.is_admin === 1" method="delete" :href="route('clients.destroy',client.id)">
            <DeleteIcon/>
        </Link>
    </div>

    <div>
        Form here
    </div>
</template>

<script setup>
import {Head, Link} from "@inertiajs/vue3";
import DeleteIcon from "@/Icons/Drawer/DeleteIcon.vue";

defineProps({
    client:Object
})
</script>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}

</script>
