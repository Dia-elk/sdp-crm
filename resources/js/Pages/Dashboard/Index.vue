<template>
    <Head title="Dashboard"/>

    <div class="space-y-4 w-full h-full">

        <!-- Overview -->
        <div class="space-y-4" v-if="$page.props.auth.user.is_admin === 1">
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

        <!-- Dashboard for user and admin -->
        <div class="h-full">
            <div class="grid md:grid-cols-3 gap-4 w-full h-full">
                <!-- Orders -->
                <div class=" col-span-3 lg:col-span-2 h-full  space-y-6  lg:border-r-[0.6px] border-opacity-20">
                    <h1 class="text-xl font-semibold">
                        Orders :
                    </h1>
                    <div class="grid md:grid-cols-2 gap-4 pr-4">
                        <div v-for="order in orders">
                            <OrderCard
                                :order="order"
                            />
                        </div>
                    </div>
                </div>
                <!-- End of Orders -->

                <!-- Top Clients -->
                <div class="h-full hidden  lg:block">
                    <h1 class="text-xl font-semibold">
                        Top 3 Clients :
                    </h1>

                </div>
                <!-- End of Clients -->
            </div>
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
import OrderCard from "@/Shared/Orders/OrderCard.vue";

defineProps({
    weekIncome: Array,
    monthIncome: Array,
    yearIncome: Array,
    ordersCount: Number,
    orders : Array,
})
</script>
