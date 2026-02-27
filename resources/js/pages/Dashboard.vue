<script setup lang="ts">
import { Head, usePage } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';
import type { BreadcrumbItem } from '@/types';
import { Mic2, Heart, Users, TrendingUp } from 'lucide-vue-next';
import { computed } from 'vue';

interface Sermon {
    id: number;
    title: string;
    preacher: string;
    preached_at: string;
}

interface PrayerRequest {
    id: number;
    name: string;
    message: string;
    created_at: string;
}

interface Stats {
    totalSermons: number;
    totalPrayerRequests: number;
    recentPrayerRequests: number;
    totalUsers: number;
}

const props = defineProps<{
    stats: Stats;
    recentSermons: Sermon[];
    recentPrayers: PrayerRequest[];
}>();

const page = usePage();
const user = computed(() => page.props.auth?.user as unknown as { name: string; role: string } | undefined);

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/admin',
    },
];

const roleBadge = computed(() => {
    const role = user.value?.role;
    if (role === 'admin') return { label: 'Administrador', class: 'bg-church-gold/15 text-church-gold' };
    if (role === 'editor') return { label: 'Editor', class: 'bg-church-primary/15 text-church-primary' };
    return { label: 'Membro', class: 'bg-stone-100 text-church-text-muted' };
});

function formatDate(dateStr: string): string {
    return new Date(dateStr).toLocaleDateString('pt-BR', {
        day: '2-digit',
        month: 'short',
        year: 'numeric',
    });
}

function truncate(text: string, max: number): string {
    return text.length > max ? text.substring(0, max) + '…' : text;
}
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex flex-1 flex-col gap-6 p-6">
            <!-- Welcome -->
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-3">
                    <h1 class="text-2xl font-semibold text-church-text-dark">
                        Olá, {{ user?.name?.split(' ')[0] ?? 'Visitante' }} 👋
                    </h1>
                    <span
                        :class="[
                            'rounded-full px-3 py-0.5 text-[11px] font-bold uppercase tracking-wider',
                            roleBadge.class,
                        ]"
                    >
                        {{ roleBadge.label }}
                    </span>
                </div>
                <p class="text-sm text-church-text-muted">
                    Aqui está um resumo da sua comunidade.
                </p>
            </div>

            <!-- Stat Cards -->
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div
                    class="group flex items-center gap-4 rounded-xl border border-stone-200/80 bg-white p-5 shadow-sm transition-all duration-300 hover:shadow-md"
                >
                    <div class="flex size-12 items-center justify-center rounded-lg bg-church-primary/10 text-church-primary transition-colors group-hover:bg-church-primary group-hover:text-white">
                        <Mic2 :size="22" />
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-church-text-dark">{{ stats.totalSermons }}</p>
                        <p class="text-xs font-medium uppercase tracking-wider text-church-text-muted">Sermões</p>
                    </div>
                </div>

                <div
                    class="group flex items-center gap-4 rounded-xl border border-stone-200/80 bg-white p-5 shadow-sm transition-all duration-300 hover:shadow-md"
                >
                    <div class="flex size-12 items-center justify-center rounded-lg bg-red-50 text-red-500 transition-colors group-hover:bg-red-500 group-hover:text-white">
                        <Heart :size="22" />
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-church-text-dark">{{ stats.totalPrayerRequests }}</p>
                        <p class="text-xs font-medium uppercase tracking-wider text-church-text-muted">Pedidos de Oração</p>
                    </div>
                </div>

                <div
                    class="group flex items-center gap-4 rounded-xl border border-stone-200/80 bg-white p-5 shadow-sm transition-all duration-300 hover:shadow-md"
                >
                    <div class="flex size-12 items-center justify-center rounded-lg bg-church-gold/10 text-church-gold transition-colors group-hover:bg-church-gold group-hover:text-white">
                        <TrendingUp :size="22" />
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-church-text-dark">{{ stats.recentPrayerRequests }}</p>
                        <p class="text-xs font-medium uppercase tracking-wider text-church-text-muted">Últimos 7 dias</p>
                    </div>
                </div>

                <div
                    class="group flex items-center gap-4 rounded-xl border border-stone-200/80 bg-white p-5 shadow-sm transition-all duration-300 hover:shadow-md"
                >
                    <div class="flex size-12 items-center justify-center rounded-lg bg-blue-50 text-blue-500 transition-colors group-hover:bg-blue-500 group-hover:text-white">
                        <Users :size="22" />
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-church-text-dark">{{ stats.totalUsers }}</p>
                        <p class="text-xs font-medium uppercase tracking-wider text-church-text-muted">Membros</p>
                    </div>
                </div>
            </div>

            <!-- Data Tables -->
            <div class="grid gap-6 lg:grid-cols-2">
                <!-- Recent Sermons -->
                <div class="rounded-xl border border-stone-200/80 bg-white shadow-sm">
                    <div class="flex items-center justify-between border-b border-stone-100 px-5 py-4">
                        <h2 class="text-sm font-bold uppercase tracking-wider text-church-text-dark">Sermões Recentes</h2>
                        <Mic2 :size="16" class="text-church-text-muted" />
                    </div>
                    <div v-if="recentSermons.length > 0" class="divide-y divide-stone-50">
                        <div
                            v-for="sermon in recentSermons"
                            :key="sermon.id"
                            class="flex items-center justify-between px-5 py-3.5 transition-colors hover:bg-church-accent/30"
                        >
                            <div class="min-w-0 flex-1">
                                <p class="truncate text-sm font-medium text-church-text-dark">{{ sermon.title }}</p>
                                <p class="text-xs text-church-text-muted">{{ sermon.preacher }}</p>
                            </div>
                            <span class="ml-4 shrink-0 text-xs text-church-text-muted">
                                {{ formatDate(sermon.preached_at) }}
                            </span>
                        </div>
                    </div>
                    <div v-else class="px-5 py-8 text-center text-sm text-church-text-muted">
                        Nenhum sermão cadastrado.
                    </div>
                </div>

                <!-- Recent Prayers -->
                <div class="rounded-xl border border-stone-200/80 bg-white shadow-sm">
                    <div class="flex items-center justify-between border-b border-stone-100 px-5 py-4">
                        <h2 class="text-sm font-bold uppercase tracking-wider text-church-text-dark">Pedidos de Oração</h2>
                        <Heart :size="16" class="text-church-text-muted" />
                    </div>
                    <div v-if="recentPrayers.length > 0" class="divide-y divide-stone-50">
                        <div
                            v-for="prayer in recentPrayers"
                            :key="prayer.id"
                            class="flex items-center justify-between px-5 py-3.5 transition-colors hover:bg-church-accent/30"
                        >
                            <div class="min-w-0 flex-1">
                                <p class="truncate text-sm font-medium text-church-text-dark">{{ prayer.name }}</p>
                                <p class="truncate text-xs text-church-text-muted">{{ truncate(prayer.message, 60) }}</p>
                            </div>
                            <span class="ml-4 shrink-0 text-xs text-church-text-muted">
                                {{ formatDate(prayer.created_at) }}
                            </span>
                        </div>
                    </div>
                    <div v-else class="px-5 py-8 text-center text-sm text-church-text-muted">
                        Nenhum pedido de oração recebido.
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
