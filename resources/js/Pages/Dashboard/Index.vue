<template>
    <Head title="Dashboard"/>

    <div >

        <!-- Overview -->
       <div class="space-y-4" v-show="$page.props.auth.user.is_admin===1">
           <h1 class="text-2xl font-bold">
               Overview
           </h1>
           <IncomOverview
               :week-income="weekIncome"
               :month-income="monthIncome"
               :year-income="yearIncome"
           />
       </div>
        <!-- End of Overview -->
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
import IncomOverview from "@/Shared/Overview/IncomOverview.vue";
defineProps({
    weekIncome : Array,
    monthIncome : Array,
    yearIncome : Array,
})
</script>
