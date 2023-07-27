<template>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Last week income -->
        <OverviewPriceCard
            class="sm:block hidden"
            :title="'This-Week'"
            :sub-title="'From last week'"
            :price = "formatNumber(weekIncome.currentIncome)"
            :percentage="formatNumber(weekIncome.percentage)"
            :positive="weekIncome.percentage>0? true : false"
        />

        <!-- Last month income -->
        <OverviewPriceCard
            class="sm:block hidden"
            :title="'This-Month'"
            :sub-title="'From last month'"
            :price = "formatNumber(monthIncome.currentIncome)"
            :percentage="formatNumber(monthIncome.percentage)"
            :positive="monthIncome.percentage>0? true : false"
        />
        <!-- Last year income -->
        <OverviewPriceCard
            class="sm:block hidden"
            :title="'This-Year'"
            :sub-title="'From last year'"
            :price = "formatNumber(yearIncome.currentIncome)"
            :percentage="formatNumber(yearIncome.percentage)"
            :positive="yearIncome.percentage>0? true : false"
        />
        <!-- OnProgress Orders -->
        <OverviewOrdersCard/>


    </div>
</template>

<script setup>

import OverviewPriceCard from "@/Shared/Overview/OverviewPriceCard.vue";
import OverviewOrdersCard from "@/Shared/Overview/OverviewOrdersCard.vue";

defineProps({
    weekIncome:Array,
    monthIncome:Array,
    yearIncome:Array,
})

function formatNumber(number)
{
    return number.toLocaleString();
}
</script>
