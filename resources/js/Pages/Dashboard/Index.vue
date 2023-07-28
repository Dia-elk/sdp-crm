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
                <div class=" col-span-3 lg:col-span-2 h-full  space-y-6   ">
                    <h1 class="text-xl font-semibold">
                        Orders :
                    </h1>
                    <div class="grid md:grid-cols-2 gap-4 ">
                        <div v-for="order in orders.data">
                            <OrderCard
                                :order="order"
                            />
                        </div>
                    </div>
                </div>
                <!-- End of Orders -->

                <!-- Top Clients -->
                <div class="h-full hidden space-y-6  lg:block">
                    <h1 class="text-xl text-transparent font-semibold">
                        dkof
                    </h1>
                    <div class="">
                        <TopClientsCard
                            :clients="topClients"
                        />
                    </div>
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
import TopClientsCard from "@/Shared/Clients/TopClientsCard.vue";

defineProps({
    weekIncome: Array,
    monthIncome: Array,
    yearIncome: Array,
    ordersCount: Number,
    orders: Object,
    topClients : Array,
})
</script>
