<template>
    <div class="h-screen sm:hidden w-[300px]  z-10 absolute flex flex-col gap-4  py-16 top-0 bg-white transition-all duration-500"
         :class="isOpen? 'right-0':' hidden right-[-300px]'">
        <!-- Dashboard link -->

        <SidebarLink :active="$page.url.startsWith('/dashboard')"
                     :is-big-side-bar="true"
                     :href="'/dashboard'" @click="drawerToggle">
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
                     :is-big-side-bar="true"
                     :href="'/clients'" @click="drawerToggle">
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
                     :is-big-side-bar="true"
                     :href="'/orders'" @click="drawerToggle">
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
                     :is-big-side-bar="true"
                     :href="'/products'" @click="drawerToggle">
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
                     :is-big-side-bar="true"
                     :href="'/fees'" @click="drawerToggle">
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
                     :is-big-side-bar="true"
                     :href="'/reports'" @click="drawerToggle"
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
                     :is-big-side-bar="true"
                     :href="'/team'" @click="drawerToggle"
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
                     :is-big-side-bar="true"
                     :href="'/settings'" @click="drawerToggle" >
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
                     :is-big-side-bar="true"
                     :href="'/logout'"
                     :method="'delete'" @click="drawerToggle">
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

    <!-- drawer background -->
    <div class="h-screen w-full sm:hidden bg-black opacity-40 transition-all duration-500 absolute  py-12 top-0"
         :class="isOpen? 'left-0':' hidden left-[-640px]'">
    </div>
</template>

<script setup>
import SidebarLink from "@/Shared/Sidebar/SidebarLink.vue";
import FeesIcon from "@/Icons/SideBarIcons/FeesIcon/FeesIcon.vue";
import HoverFeesIcon from "@/Icons/SideBarIcons/FeesIcon/HoverFeesIcon.vue";
import HoverProductsIcon from "@/Icons/SideBarIcons/ProductsIcon/HoverProductsIcon.vue";
import HoverTeamIcon from "@/Icons/SideBarIcons/TeamIcon/HoverTeamIcon.vue";
import HoverOrdersIcon from "@/Icons/SideBarIcons/Ordersicon/HoverOrdersIcon.vue";
import HoverLogoutIcon from "@/Icons/SideBarIcons/Logout/HoverLogoutIcon.vue";
import ReportsIcon from "@/Icons/SideBarIcons/ReportsIcon/ReportsIcon.vue";
import LogoutIcon from "@/Icons/SideBarIcons/Logout/LogoutIcon.vue";
import ProductsIcon from "@/Icons/SideBarIcons/ProductsIcon/ProductsIcon.vue";
import DashboardIcon from "@/Icons/SideBarIcons/DashboardIcon/DashboardIcon.vue";
import HoverReportsIcon from "@/Icons/SideBarIcons/ReportsIcon/HoverReportsIcon.vue";
import OrdersIcon from "@/Icons/SideBarIcons/Ordersicon/OrdersIcon.vue";
import TeamIcon from "@/Icons/SideBarIcons/TeamIcon/TeamIcon.vue";
import ClientsIcon from "@/Icons/SideBarIcons/ClientsIcon/ClientsIcon.vue";
import SettingIcon from "@/Icons/SideBarIcons/SettingsIcon/SettingIcon.vue";
import HoverClientsIcon from "@/Icons/SideBarIcons/ClientsIcon/HoverClientsIcon.vue";
import HoverSettingIcon from "@/Icons/SideBarIcons/SettingsIcon/HoverSettingIcon.vue";
import HoverDashboardIcon from "@/Icons/SideBarIcons/DashboardIcon/HoverDashboardIcon.vue";

defineProps({
    isOpen: Boolean,
    drawerToggle : Function,
})
</script>
