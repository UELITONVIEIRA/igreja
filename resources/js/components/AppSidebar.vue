<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { LayoutDashboard, Mic2, Heart, Users, Settings } from 'lucide-vue-next';
import NavFooter from '@/components/NavFooter.vue';
import NavMain from '@/components/NavMain.vue';
import NavUser from '@/components/NavUser.vue';
import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';
import type { NavItem } from '@/types';
import AppLogo from './AppLogo.vue';
import { computed } from 'vue';

const page = usePage();
const user = computed(() => page.props.auth?.user as { role?: string } | undefined);

const mainNavItems = computed<NavItem[]>(() => {
    const items: NavItem[] = [
        {
            title: 'Dashboard',
            href: '/admin',
            icon: LayoutDashboard,
        },
    ];

    if (user.value?.role === 'admin' || user.value?.role === 'editor') {
        items.push(
            {
                title: 'Sermões',
                href: '/admin/sermoes',
                icon: Mic2,
            },
            {
                title: 'Pedidos de Oração',
                href: '/admin/oracao',
                icon: Heart,
            },
        );
    }

    if (user.value?.role === 'admin') {
        items.push(
            {
                title: 'Usuários',
                href: '/admin/usuarios',
                icon: Users,
            },
            {
                title: 'Configurações',
                href: '/admin/configuracoes',
                icon: Settings,
            },
        );
    }

    return items;
});
</script>

<template>
    <Sidebar collapsible="icon" variant="inset">
        <SidebarHeader>
            <SidebarMenu>
                <SidebarMenuItem>
                    <SidebarMenuButton size="lg" as-child>
                        <Link href="/admin">
                            <AppLogo />
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarHeader>

        <SidebarContent>
            <NavMain :items="mainNavItems" />
        </SidebarContent>

        <SidebarFooter>
            <NavUser />
        </SidebarFooter>
    </Sidebar>
    <slot />
</template>
