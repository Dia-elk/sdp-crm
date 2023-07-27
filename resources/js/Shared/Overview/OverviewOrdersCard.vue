<template>
    <div class="w-full flex justify-center items-center h-32 border-[0.6px] border-black border-opacity-20 ">

        <div class="flex flex-col justify-between h-full w-full p-4">
            <h3 class="font-semibold text-opacity-60 text-black text-md">On-Going Orders</h3>
            <h1 class="font-bold text-orange-300  text-4xl">{{ ordersCount }}</h1>
        </div>

    </div>
</template>

<script setup>

defineProps({
    ordersCount:Number,
})


</script>

