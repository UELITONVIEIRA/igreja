<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
import HeroLivestream from '@/components/site/HeroLivestream.vue';
import SermonGrid from '@/components/site/SermonGrid.vue';
import PrayerRequestForm from '@/components/site/PrayerRequestForm.vue';
import { useScrollReveal } from '@/composables/useScrollReveal';
import { ref } from 'vue';

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

withDefaults(
    defineProps<{
        canRegister?: boolean;
        latestSermons?: Sermon[];
    }>(),
    {
        canRegister: true,
        latestSermons: () => [],
    },
);

const pageRef = ref<HTMLElement | null>(null);
useScrollReveal(pageRef, '.scroll-reveal', { staggerDelay: 120 });
</script>

<template>
    <Head title="Início" />
    <PublicLayout>
        <div ref="pageRef">
            <!-- Hero Section -->
            <HeroLivestream
                title="Caminhando em Fé: A Coragem de Crer"
                subtitle="Culto de Domingo • 10:30"
                verse="Junte-se a nós enquanto exploramos as profundezas de Hebreus 11, desafiando-nos a sair da nossa zona de conforto."
                :is-live="true"
                background-image="https://lh3.googleusercontent.com/aida-public/AB6AXuDd26st43Un9Ei4ezemTjGM-PhgaFR1KrtCqkKwgV7Fwuiwp90IX7_OJoMBBHA27c0UdHyOuXYA2CLltyCL00_7WnmybL8G5u1FZAajvlHoWo3uNN2uPl8y125ZRDqnkOsHvbRa4XHaiytC-uTfNo9_dHapHYaYmHfPnr6zWOBCD91-cu3gL1FyTBMCXo_O3OMjPnVsTutfBI6NH-pSMqQQGnwtUfoOVifDahcp_EhHZkXZBGfTBkaDKgggWQARlh1c1ukNuscclkie"
            />

            <!-- Prayer Request Section -->
            <div class="scroll-reveal">
                <PrayerRequestForm />
            </div>

            <!-- Latest Sermons -->
            <section class="mx-auto flex w-full max-w-7xl flex-col gap-16 px-6 py-24 md:px-16">
                <div class="scroll-reveal flex flex-col items-end justify-between gap-10 border-b border-stone-200 pb-12 lg:flex-row">
                    <div class="flex flex-col gap-3">
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-church-gold">
                            Últimas Mensagens
                        </span>
                        <h2 class="font-display text-5xl text-church-text-dark">Sermões Recentes</h2>
                    </div>
                    <Link
                        href="/sermoes"
                        class="flex items-center gap-2 rounded-sm border-2 border-church-primary/20 px-8 py-4 text-xs font-bold uppercase tracking-[0.2em] text-church-primary shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-church-primary hover:text-white hover:shadow-lg"
                    >
                        Ver Todos os Sermões
                    </Link>
                </div>

                <div class="scroll-reveal" data-reveal-delay="200">
                    <SermonGrid :sermons="latestSermons" />
                </div>
            </section>
        </div>
    </PublicLayout>
</template>
