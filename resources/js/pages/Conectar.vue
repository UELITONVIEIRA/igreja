<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
import { useScrollReveal } from '@/composables/useScrollReveal';
import { ref } from 'vue';

const sections = [
    {
        icon: 'waving_hand',
        title: 'Novo Aqui?',
        description:
            'Seja muito bem-vindo! Queremos que você se sinta em casa. Nossos cultos acontecem aos domingos às 10:30 e às quartas às 19:30. Vista-se como se sentir confortável e venha como você é.',
    },
    {
        icon: 'groups',
        title: 'Ministérios',
        description:
            'Temos ministérios para todas as faixas etárias: Infantil, Jovens, Casais, Mulheres, Homens, Louvor e Missões. Cada um oferece oportunidades únicas de crescimento e serviço.',
    },
    {
        icon: 'event',
        title: 'Eventos',
        description:
            'Ao longo do ano, realizamos conferências, retiros espirituais, ações sociais, encontros de oração e celebrações especiais. Fique atento à nossa agenda de eventos.',
    },
    {
        icon: 'volunteer_activism',
        title: 'Células',
        description:
            'Acreditamos que a vida cristã é vivida em comunidade. Nossas células se reúnem semanalmente em lares, oferecendo um espaço íntimo de estudo bíblico, oração e cuidado mútuo.',
    },
];

const pageRef = ref<HTMLElement | null>(null);
useScrollReveal(pageRef, '.scroll-reveal', { staggerDelay: 0 });
</script>

<template>
    <Head title="Conectar" />
    <PublicLayout>
        <div ref="pageRef">
            <!-- Hero -->
            <section class="w-full bg-white px-6 py-24 md:px-16">
                <div class="mx-auto max-w-4xl text-center">
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-church-gold">
                        Faça Parte
                    </span>
                    <h1 class="mt-4 font-display text-5xl leading-tight font-bold text-church-text-dark md:text-7xl">
                        Conecte-se Conosco
                    </h1>
                    <p class="mx-auto mt-6 max-w-2xl font-serif text-xl leading-relaxed italic text-church-text-muted">
                        Estamos ansiosos para conhecer você. Descubra como fazer parte da nossa família e crescer junto em
                        comunidade.
                    </p>
                </div>
            </section>

            <!-- Cards -->
            <section class="w-full px-6 pb-24 md:px-16">
                <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 md:grid-cols-2">
                    <div
                        v-for="(section, index) in sections"
                        :key="section.title"
                        class="scroll-reveal group relative overflow-hidden rounded-2xl border border-stone-100 bg-white p-10 shadow-md shadow-stone-200/40 transition-all duration-500 hover:-translate-y-1 hover:shadow-xl hover:shadow-stone-300/40"
                        :data-reveal-delay="index * 120"
                    >
                        <!-- Decorative accent on hover -->
                        <div class="absolute top-0 left-0 h-1 w-0 bg-gradient-to-r from-church-gold to-church-primary transition-all duration-500 group-hover:w-full" />

                        <div class="mb-6 flex size-16 items-center justify-center rounded-full bg-church-accent transition-all duration-500 group-hover:bg-church-gold/15 group-hover:shadow-lg group-hover:shadow-church-gold/10">
                            <span
                                class="material-symbols-outlined text-[28px] text-church-primary transition-colors duration-300 group-hover:text-church-gold"
                            >
                                {{ section.icon }}
                            </span>
                        </div>
                        <h3 class="mb-4 font-display text-2xl font-semibold text-church-text-dark">
                            {{ section.title }}
                        </h3>
                        <p class="font-serif text-lg leading-relaxed text-church-text-muted">
                            {{ section.description }}
                        </p>
                    </div>
                </div>
            </section>

            <!-- Horários -->
            <section class="w-full border-y border-stone-200 bg-church-accent px-6 py-24 md:px-16">
                <div class="mx-auto max-w-4xl text-center">
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-church-gold">
                        Nos Encontre
                    </span>
                    <h2 class="mt-4 font-display text-4xl italic text-church-text-dark md:text-5xl">
                        Horários de Culto
                    </h2>

                    <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-3">
                        <div class="scroll-reveal rounded-2xl border border-stone-100 bg-white p-8 shadow-md shadow-stone-200/30 transition-all duration-500 hover:shadow-lg hover:shadow-stone-300/30" data-reveal-delay="0">
                            <span class="material-symbols-outlined mb-4 text-[32px] text-church-gold">wb_sunny</span>
                            <h4 class="mb-2 font-display text-xl font-semibold text-church-text-dark">
                                Culto de Domingo
                            </h4>
                            <p class="font-serif text-lg text-church-text-muted">Domingos às 10:30</p>
                        </div>
                        <div class="scroll-reveal rounded-2xl border border-stone-100 bg-white p-8 shadow-md shadow-stone-200/30 transition-all duration-500 hover:shadow-lg hover:shadow-stone-300/30" data-reveal-delay="150">
                            <span class="material-symbols-outlined mb-4 text-[32px] text-church-gold">
                                nights_stay
                            </span>
                            <h4 class="mb-2 font-display text-xl font-semibold text-church-text-dark">
                                Culto de Oração
                            </h4>
                            <p class="font-serif text-lg text-church-text-muted">Quartas às 19:30</p>
                        </div>
                        <div class="scroll-reveal rounded-2xl border border-stone-100 bg-white p-8 shadow-md shadow-stone-200/30 transition-all duration-500 hover:shadow-lg hover:shadow-stone-300/30" data-reveal-delay="300">
                            <span class="material-symbols-outlined mb-4 text-[32px] text-church-gold">
                                local_fire_department
                            </span>
                            <h4 class="mb-2 font-display text-xl font-semibold text-church-text-dark">Noite de Jovens</h4>
                            <p class="font-serif text-lg text-church-text-muted">Sextas às 20:00</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contato -->
            <section class="w-full px-6 py-24 md:px-16">
                <div class="mx-auto max-w-4xl text-center">
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-church-gold">
                        Fale Conosco
                    </span>
                    <h2 class="mt-4 font-display text-4xl text-church-text-dark md:text-5xl">Entre em Contato</h2>

                    <div class="mt-12 grid grid-cols-1 gap-8 text-left md:grid-cols-2">
                        <div class="scroll-reveal flex items-start gap-4" data-reveal-delay="0">
                            <span class="material-symbols-outlined mt-1 text-church-gold">location_on</span>
                            <div>
                                <h4 class="mb-1 font-display text-lg font-semibold text-church-text-dark">Endereço</h4>
                                <p class="font-serif text-church-text-muted">
                                    Rua da Fé, 123 — Centro<br />
                                    São Paulo, SP — 01000-000
                                </p>
                            </div>
                        </div>
                        <div class="scroll-reveal flex items-start gap-4" data-reveal-delay="100">
                            <span class="material-symbols-outlined mt-1 text-church-gold">phone</span>
                            <div>
                                <h4 class="mb-1 font-display text-lg font-semibold text-church-text-dark">Telefone</h4>
                                <p class="font-serif text-church-text-muted">(11) 1234-5678</p>
                            </div>
                        </div>
                        <div class="scroll-reveal flex items-start gap-4" data-reveal-delay="200">
                            <span class="material-symbols-outlined mt-1 text-church-gold">mail</span>
                            <div>
                                <h4 class="mb-1 font-display text-lg font-semibold text-church-text-dark">E-mail</h4>
                                <p class="font-serif text-church-text-muted">contato@igrejaDeJesusCristo.com.br</p>
                            </div>
                        </div>
                        <div class="scroll-reveal flex items-start gap-4" data-reveal-delay="300">
                            <span class="material-symbols-outlined mt-1 text-church-gold">schedule</span>
                            <div>
                                <h4 class="mb-1 font-display text-lg font-semibold text-church-text-dark">Secretaria</h4>
                                <p class="font-serif text-church-text-muted">
                                    Segunda a Sexta<br />
                                    9:00 às 17:00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </PublicLayout>
</template>
