<template>
    <div class="w-full h-[250px] border border-opacity-20 overflow-hidden ">
        <!-- Order details -->
        <div>
            <div class="p-4 flex justify-between">
                <h1 class="font-bold">Order Details :</h1>
                <div  class="flex items-center gap-6">
                    <p class="text-xs text-black text-opacity-40">
                        {{moment(order.created_at).format("DD-MM-YYYY")}}
                    </p>
                    <Link :href="route('orders.show',order.id)">
                        <EyeIcon/>
                    </Link>
                </div>
            </div>
            <ul class="px-4 space-y-2">
                <li class="flex justify-between text-sm text-black text-opacity-40">
                    <h6># :</h6>
                    <p>{{order.id}}</p>
                </li>

                <li class="flex justify-between text-sm text-black text-opacity-40">
                    <h6>Product :</h6>
                    <p>{{order.product.name}}</p>
                </li>

                <li class="flex justify-between text-sm text-black text-opacity-40">
                    <h6>Qty :</h6>
                    <p>{{order.quantity}}</p>
                </li>

                <li class="flex justify-between text-sm text-black text-opacity-40">
                    <h6>Price :</h6>
                    <p>{{order.price}} Dh</p>
                </li>

                <li class="flex justify-between text-sm text-black text-opacity-40">
                    <h6>Phone number :</h6>
                    <p>{{order.client.phone}}</p>
                </li>
            </ul>
            <div class="p-4 flex  justify-end">
                <StatutsCard
                :statut="order.statut"
                />
            </div>
        </div>
        <!-- End of Order details -->

        <!-- Client details -->
        <!-- End of Client details -->

    </div>
</template>

<script setup>

import EyeIcon from "@/Icons/EyeIcon.vue";
import moment from "moment";
import {Link} from "@inertiajs/vue3";
import StatutsCard from "@/Shared/Statuts/StatutsCard.vue";


defineProps({
    order : Object,
})

</script>
