<script setup lang="ts">
import { Head, router } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
import SermonGrid from '@/components/site/SermonGrid.vue';
import { ref, watch } from 'vue';
import { useScrollReveal } from '@/composables/useScrollReveal';

interface Sermon {
    id: number;
    title: string;
    preacher: string;
    series: string | null;
    description: string | null;
    thumbnail_url: string | null;
    video_url: string | null;
    duration: string | null;
    preached_at: string;
}

interface PaginatedSermons {
    data: Sermon[];
    current_page: number;
    last_page: number;
    next_page_url: string | null;
    prev_page_url: string | null;
}

const props = defineProps<{
    sermons: PaginatedSermons;
    filters: {
        search: string;
    };
}>();

const searchTerm = ref(props.filters.search || '');
let searchTimeout: ReturnType<typeof setTimeout>;

watch(searchTerm, (val) => {
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout(() => {
        router.get(
            '/sermoes',
            { search: val || undefined },
            {
                preserveState: true,
                preserveScroll: true,
                replace: true,
            },
        );
    }, 400);
});

function goToPage(url: string | null) {
    if (url) {
        router.get(url, {}, { preserveState: true, preserveScroll: true });
    }
}

const pageRef = ref<HTMLElement | null>(null);
useScrollReveal(pageRef, '.scroll-reveal', { staggerDelay: 0 });
</script>

<template>
    <Head title="Sermões" />
    <PublicLayout>
        <div ref="pageRef">
            <section class="mx-auto flex w-full max-w-7xl flex-col gap-16 px-6 py-24 md:px-16">
                <!-- Header + Search -->
                <div class="flex flex-col items-end justify-between gap-10 border-b border-stone-200 pb-12 lg:flex-row">
                    <div class="flex flex-col gap-3">
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-church-gold">
                            Arquivo de Mensagens
                        </span>
                        <h1 class="font-display text-5xl text-church-text-dark">Explore nossos Sermões</h1>
                    </div>
                    <div class="flex w-full flex-col gap-4 md:flex-row lg:max-w-3xl">
                        <div class="relative flex-1">
                            <div class="absolute top-1/2 left-4 -translate-y-1/2 text-stone-400">
                                <span class="material-symbols-outlined">search</span>
                            </div>
                            <input
                                v-model="searchTerm"
                                class="w-full rounded-lg border-stone-200 bg-white py-4 pr-4 pl-12 font-serif italic text-church-text-dark placeholder:text-stone-400 transition-all duration-300 focus:border-church-gold focus:ring-2 focus:ring-church-gold/20"
                                placeholder="Buscar por título, tema ou pregador..."
                                type="text"
                            />
                        </div>
                    </div>
                </div>

                <!-- Sermons Grid -->
                <div class="scroll-reveal">
                    <SermonGrid :sermons="sermons.data" />
                </div>

                <!-- Empty state -->
                <div
                    v-if="sermons.data.length === 0"
                    class="flex flex-col items-center gap-4 py-16 text-center"
                >
                    <span class="material-symbols-outlined text-[48px] text-stone-300">search_off</span>
                    <p class="font-serif text-xl italic text-church-text-muted">
                        Nenhum sermão encontrado para "{{ searchTerm }}".
                    </p>
                </div>

                <!-- Pagination -->
                <div
                    v-if="sermons.last_page > 1"
                    class="flex items-center justify-center gap-4"
                >
                    <button
                        :disabled="!sermons.prev_page_url"
                        class="flex items-center gap-2 rounded-lg border-2 border-church-primary/20 px-6 py-3 text-xs font-bold uppercase tracking-widest text-church-primary transition-all duration-300 hover:-translate-y-0.5 hover:bg-church-primary hover:text-white disabled:cursor-not-allowed disabled:opacity-30"
                        @click="goToPage(sermons.prev_page_url)"
                    >
                        <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                        Anterior
                    </button>
                    <span class="text-sm text-church-text-muted">
                        Página {{ sermons.current_page }} de {{ sermons.last_page }}
                    </span>
                    <button
                        :disabled="!sermons.next_page_url"
                        class="flex items-center gap-2 rounded-lg border-2 border-church-primary/20 px-6 py-3 text-xs font-bold uppercase tracking-widest text-church-primary transition-all duration-300 hover:-translate-y-0.5 hover:bg-church-primary hover:text-white disabled:cursor-not-allowed disabled:opacity-30"
                        @click="goToPage(sermons.next_page_url)"
                    >
                        Próxima
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </button>
                </div>
            </section>
        </div>
    </PublicLayout>
</template>
