<template>
    <div class="grid   gap-4"
         :class="$page.props.auth.user.is_admin === 1? 'sm:grid-cols-2 lg:grid-cols-4':'grid-cols-2'"

    >
        <!-- Last week income -->
        <OverviewPriceCard
            v-if="$page.props.auth.user.is_admin === 1"
            class="sm:block hidden"
            :title="'This-Week'"
            :sub-title="'From last week'"
            :price = "formatNumber(weekIncome.currentIncome)"
            :percentage="formatNumber(weekIncome.percentage)"
            :positive="weekIncome.percentage > 0"
        />

        <!-- Last month income -->
        <OverviewPriceCard
            v-if="$page.props.auth.user.is_admin === 1"
            class="sm:block hidden"
            :title="'This-Month'"
            :sub-title="'From last month'"
            :price = "formatNumber(monthIncome.currentIncome)"
            :percentage="formatNumber(monthIncome.percentage)"
            :positive="monthIncome.percentage > 0"
        />
        <!-- Last year income -->
        <OverviewPriceCard
            v-if="$page.props.auth.user.is_admin === 1"
            class="sm:block hidden"
            :title="'This-Year'"
            :sub-title="'From last year'"
            :price = "formatNumber(yearIncome.currentIncome)"
            :percentage="formatNumber(yearIncome.percentage)"
            :positive="yearIncome.percentage > 0"
        />
        <!-- OnProgress Orders -->
        <OverviewOrdersCard
            :title="'On-Going Orders'"
            :orders-count="pendingOrdersCount"
        />
        <OverviewOrdersCard
            v-if="$page.props.auth.user.is_admin !== 1"
            :title="'Done Orders'"
            :orders-count="doneOrdersCount"
        />


    </div>
</template>

<script setup>

import OverviewPriceCard from "@/Shared/Overview/OverviewPriceCard.vue";
import OverviewOrdersCard from "@/Shared/Overview/OverviewOrdersCard.vue";

defineProps({
    weekIncome:Array,
    monthIncome:Array,
    yearIncome:Array,
    pendingOrdersCount:Number,
    doneOrdersCount : Number,
})

function formatNumber(number)
{
    return number.toLocaleString();
}
</script>
