<template>
    <div class="border-r-[0.6px] h-screen border-black border-opacity-20 transition-all ease-out duration-700"
         :class="isBigSideBar? 'lg:w-[250px] w-[180px]' : 'w-[50px]'">

        <div class="w-full h-12 relative" @click="sidebarToggle">
            <div class="absolute right-[-10px] bottom-4" v-show="isBigSideBar">
                <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="19.4633" height="16.56" fill="white"/>
                    <path d="M9.73167 13.56L5.385 9.21333C4.87167 8.7 4.87167 7.86 5.385 7.34667L9.73167 3"
                          stroke="black" stroke-opacity="0.2" stroke-miterlimit="10" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M14.4634 13.56L10.1167 9.21333C9.60336 8.7 9.60336 7.86 10.1167 7.34667L14.4634 3"
                          stroke="black" stroke-opacity="0.2" stroke-miterlimit="10" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>

            </div>
            <div class="absolute right-[-8px] bottom-4" v-show="!isBigSideBar">
                <svg width="16" height="16" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="10" height="10" fill="white"/>
                    <path
                        d="M3.29271 1.70002L6.00937 4.41669C6.33021 4.73752 6.33021 5.26252 6.00937 5.58335L3.29271 8.30002"
                        stroke="black" stroke-opacity="0.2" stroke-width="0.6" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>

        <div class="flex flex-col gap-[20px]">
            <!-- Dashboard link -->

            <SidebarLink :active="$page.url.startsWith('/dashboard')"
                         :is-big-side-bar="isBigSideBar"
                         :href="'/dashboard'"
            >
                <!-- icon -->
                <template v-slot:icon>
                    <DashboardIcon/>
                </template>
                <!-- hover icon -->
                <template v-slot:HoverIcon>
                    <HoverDashboardIcon/>
                </template>
                <!-- title -->
                <template v-slot:title>
                    Dashboard
                </template>
            </SidebarLink>

            <!-- End of Dashboard link -->

            <!-- Clients link -->

            <SidebarLink :active="$page.url.startsWith('/clients')"
                         :is-big-side-bar="isBigSideBar"
                         :href="'/clients'">
                <!-- icon -->
                <template v-slot:icon>
                    <ClientsIcon/>
                </template>
                <!-- hover icon -->
                <template v-slot:HoverIcon>
                    <HoverClientsIcon/>
                </template>
                <!-- title -->
                <template v-slot:title>
                    Clients
                </template>
            </SidebarLink>

            <!-- End of Clients link -->

            <!-- Orders link -->

            <SidebarLink :active="$page.url.startsWith('/orders')"
                         :is-big-side-bar="isBigSideBar"
                         :href="'/orders'">
                <!-- icon -->
                <template v-slot:icon>
                    <OrdersIcon/>
                </template>
                <!-- hover icon -->
                <template v-slot:HoverIcon>
                    <HoverOrdersIcon/>
                </template>
                <!-- title -->
                <template v-slot:title>
                    Orders
                </template>
            </SidebarLink>

            <!-- End of Orders link -->

            <!-- Products link -->

            <SidebarLink :active="$page.url.startsWith('/products')"
                         :is-big-side-bar="isBigSideBar"
                         :href="'/products'">
                <!-- icon -->
                <template v-slot:icon>
                    <ProductsIcon/>
                </template>
                <!-- hover icon -->
                <template v-slot:HoverIcon>
                    <HoverProductsIcon/>
                </template>
                <!-- title -->
                <template v-slot:title>
                    Products
                </template>
            </SidebarLink>

            <!-- End of Products link -->

            <!-- Fees link -->

            <SidebarLink :active="$page.url.startsWith('/fees')"
                         :is-big-side-bar="isBigSideBar"
                         :href="'/fees'">
                <!-- icon -->
                <template v-slot:icon>
                    <FeesIcon/>
                </template>
                <!-- hover icon -->
                <template v-slot:HoverIcon>
                    <HoverFeesIcon/>
                </template>
                <!-- title -->
                <template v-slot:title>
                    Fees
                </template>
            </SidebarLink>

            <!-- End of Fees link -->

            <!-- Reports link -->

            <SidebarLink :active="$page.url.startsWith('/reports')"
                         :is-big-side-bar="isBigSideBar"
                         :href="'/reports'"
                         v-show="$page.props.auth.user.is_admin === 1">
                <!-- icon -->
                <template v-slot:icon>
                    <ReportsIcon/>
                </template>
                <!-- hover icon -->
                <template v-slot:HoverIcon>
                    <HoverReportsIcon/>
                </template>
                <!-- title -->
                <template v-slot:title>
                    Reports
                </template>
            </SidebarLink>

            <!-- End of Reports link -->

            <!-- Team link -->
            <SidebarLink :active="$page.url.startsWith('/team')"
                         :is-big-side-bar="isBigSideBar"
                         :href="'/team'"
                         v-show="$page.props.auth.user.is_admin === 1">
                <!-- icon -->
                <template v-slot:icon>
                    <TeamIcon/>
                </template>
                <!-- hover icon -->
                <template v-slot:HoverIcon>
                    <HoverTeamIcon/>
                </template>
                <!-- title -->
                <template v-slot:title>
                    Team
                </template>
            </SidebarLink>
            <!-- End of Team link -->

            <!-- Settings link -->
            <SidebarLink :active="$page.url.startsWith('/settings')"
                         :is-big-side-bar="isBigSideBar"
                         :href="'/settings'">
                <!-- icon -->
                <template v-slot:icon>
                    <SettingIcon/>
                </template>
                <!-- hover icon -->
                <template v-slot:HoverIcon>
                    <HoverSettingIcon/>
                </template>
                <!-- title -->
                <template v-slot:title>
                    Settings
                </template>
            </SidebarLink>
            <!-- End of Settings link -->

            <!-- Logout link -->

            <SidebarLink :active="false"
                         :is-big-side-bar="isBigSideBar"
                         :href="'/logout'"
                         :method="'delete'">
                <!-- icon -->
                <template v-slot:icon>
                    <LogoutIcon/>
                </template>
                <!-- hover icon -->
                <template v-slot:HoverIcon>
                    <HoverLogoutIcon/>
                </template>
                <!-- title -->
                <template v-slot:title>
                    Logout
                </template>
            </SidebarLink>

            <!-- End of Logout link -->
        </div>
    </div>
</template>

<script setup>

import SidebarLink from "@/Shared/Sidebar/SidebarLink.vue";
import DashboardIcon from "@/Icons/SideBarIcons/DashboardIcon/DashboardIcon.vue";
import HoverDashboardIcon from "@/Icons/SideBarIcons/DashboardIcon/HoverDashboardIcon.vue";
import {ref} from "vue";
import HoverClientsIcon from "@/Icons/SideBarIcons/ClientsIcon/HoverClientsIcon.vue";
import ClientsIcon from "@/Icons/SideBarIcons/ClientsIcon/ClientsIcon.vue";
import OrdersIcon from "@/Icons/SideBarIcons/Ordersicon/OrdersIcon.vue";
import HoverOrdersIcon from "@/Icons/SideBarIcons/Ordersicon/HoverOrdersIcon.vue";
import ProductsIcon from "@/Icons/SideBarIcons/ProductsIcon/ProductsIcon.vue";
import HoverProductsIcon from "@/Icons/SideBarIcons/ProductsIcon/HoverProductsIcon.vue";
import FeesIcon from "@/Icons/SideBarIcons/FeesIcon/FeesIcon.vue";
import HoverFeesIcon from "@/Icons/SideBarIcons/FeesIcon/HoverFeesIcon.vue";
import ReportsIcon from "@/Icons/SideBarIcons/ReportsIcon/ReportsIcon.vue";
import HoverReportsIcon from "@/Icons/SideBarIcons/ReportsIcon/HoverReportsIcon.vue";
import TeamIcon from "@/Icons/SideBarIcons/TeamIcon/TeamIcon.vue";
import HoverTeamIcon from "@/Icons/SideBarIcons/TeamIcon/HoverTeamIcon.vue";
import SettingIcon from "@/Icons/SideBarIcons/SettingsIcon/SettingIcon.vue";
import HoverSettingIcon from "@/Icons/SideBarIcons/SettingsIcon/HoverSettingIcon.vue";
import {Link} from "@inertiajs/vue3";
import LogoutIcon from "@/Icons/SideBarIcons/Logout/LogoutIcon.vue";
import HoverLogoutIcon from "@/Icons/SideBarIcons/Logout/HoverLogoutIcon.vue";

let isBigSideBar = ref(true)

function sidebarToggle() {
    isBigSideBar.value = !isBigSideBar.value
}
</script>
