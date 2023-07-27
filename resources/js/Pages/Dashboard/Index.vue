<template>
    <Head title="Dashboard"/>

    <div class="space-y-4">

        <!-- Overview -->
       <div class="space-y-4" v-if="$page.props.auth.user.is_admin===1">
           <h1 class="text-2xl font-bold">
               Overview
           </h1>
           <IncomOverview
               :week-income="weekIncome"
               :month-income="monthIncome"
               :year-income="yearIncome"
               :orders-count="ordersCount"
           />
       </div>
        <!-- End of Overview -->

        <!-- orders -->
        <div >
            <h1 class="text-2xl font-bold">
                Orders
            </h1>
        </div>

    </div>

</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}
</script>

<script setup>
import {Head, Link} from "@inertiajs/vue3";
import IncomOverview from "@/Shared/Overview/Overview.vue";
defineProps({
    weekIncome : Array,
    monthIncome : Array,
    yearIncome : Array,
    ordersCount:Number,
})
</script>
