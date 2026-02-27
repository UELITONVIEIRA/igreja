<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
import { useScrollReveal } from '@/composables/useScrollReveal';
import { ref } from 'vue';

const pageRef = ref<HTMLElement | null>(null);
useScrollReveal(pageRef, '.scroll-reveal', { staggerDelay: 0 });
</script>

<template>
    <Head title="Contribua" />
    <PublicLayout>
        <div ref="pageRef">
            <!-- Hero -->
            <section class="w-full bg-white px-6 py-24 md:px-16">
                <div class="mx-auto max-w-4xl text-center">
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-church-gold">Generosidade</span>
                    <h1 class="mt-4 font-display text-5xl leading-tight font-bold text-church-text-dark md:text-7xl">
                        Contribua
                    </h1>
                    <p class="mx-auto mt-6 max-w-2xl font-serif text-xl leading-relaxed italic text-church-text-muted">
                        "Cada um contribua segundo propôs no seu coração, não com tristeza ou por necessidade; porque Deus
                        ama ao que dá com alegria." — 2 Coríntios 9:7
                    </p>
                </div>
            </section>

            <!-- Formas de Contribuir -->
            <section class="w-full px-6 pb-24 md:px-16">
                <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 md:grid-cols-2">
                    <!-- PIX -->
                    <div class="scroll-reveal group relative overflow-hidden rounded-2xl border border-stone-100 bg-white p-10 shadow-md shadow-stone-200/40 transition-all duration-500 hover:shadow-lg hover:shadow-stone-300/40" data-reveal-delay="0">
                        <div class="absolute top-0 left-0 h-1 w-0 bg-gradient-to-r from-church-gold to-church-primary transition-all duration-500 group-hover:w-full" />
                        <div class="mb-6 flex size-16 items-center justify-center rounded-full bg-church-accent">
                            <span class="material-symbols-outlined text-[28px] text-church-gold">qr_code</span>
                        </div>
                        <h3 class="mb-4 font-display text-2xl font-semibold text-church-text-dark">PIX</h3>
                        <p class="mb-6 font-serif text-lg leading-relaxed text-church-text-muted">
                            A maneira mais rápida e prática de contribuir. Use a chave PIX abaixo:
                        </p>
                        <div class="rounded-xl bg-church-bg-light p-6">
                            <p class="text-xs font-bold uppercase tracking-widest text-church-text-muted">Chave PIX (CNPJ)</p>
                            <p class="mt-2 font-display text-xl font-semibold text-church-text-dark">
                                00.000.000/0001-00
                            </p>
                            <p class="mt-1 text-sm text-church-text-muted">Igreja de Jesus Cristo</p>
                        </div>
                    </div>

                    <!-- Transferência -->
                    <div class="scroll-reveal group relative overflow-hidden rounded-2xl border border-stone-100 bg-white p-10 shadow-md shadow-stone-200/40 transition-all duration-500 hover:shadow-lg hover:shadow-stone-300/40" data-reveal-delay="150">
                        <div class="absolute top-0 left-0 h-1 w-0 bg-gradient-to-r from-church-gold to-church-primary transition-all duration-500 group-hover:w-full" />
                        <div class="mb-6 flex size-16 items-center justify-center rounded-full bg-church-accent">
                            <span class="material-symbols-outlined text-[28px] text-church-gold">account_balance</span>
                        </div>
                        <h3 class="mb-4 font-display text-2xl font-semibold text-church-text-dark">
                            Transferência Bancária
                        </h3>
                        <p class="mb-6 font-serif text-lg leading-relaxed text-church-text-muted">
                            Você também pode contribuir via transferência ou depósito bancário.
                        </p>
                        <div class="space-y-3 rounded-xl bg-church-bg-light p-6">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-widest text-church-text-muted">Banco</p>
                                <p class="font-display text-lg font-semibold text-church-text-dark">Banco do Brasil</p>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-widest text-church-text-muted">
                                        Agência
                                    </p>
                                    <p class="font-display text-lg font-semibold text-church-text-dark">0000-0</p>
                                </div>
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-widest text-church-text-muted">
                                        Conta Corrente
                                    </p>
                                    <p class="font-display text-lg font-semibold text-church-text-dark">00000-0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Informação Extra -->
            <section class="w-full border-y border-stone-200 bg-church-accent px-6 py-24 md:px-16">
                <div class="mx-auto max-w-4xl text-center">
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-church-gold">
                        Sua Contribuição Faz a Diferença
                    </span>
                    <h2 class="mt-4 font-display text-4xl italic text-church-text-dark md:text-5xl">
                        Para Onde Vão os Recursos?
                    </h2>

                    <div class="mt-12 grid grid-cols-1 gap-8 text-left md:grid-cols-3">
                        <div class="scroll-reveal flex flex-col items-center gap-4 rounded-2xl border border-stone-100 bg-white p-8 text-center shadow-md shadow-stone-200/30 transition-all duration-500 hover:shadow-lg hover:shadow-stone-300/30" data-reveal-delay="0">
                            <span class="material-symbols-outlined text-[32px] text-church-gold">church</span>
                            <h4 class="font-display text-lg font-semibold text-church-text-dark">Manutenção</h4>
                            <p class="font-serif text-church-text-muted">
                                Custos operacionais, manutenção do templo e equipamentos.
                            </p>
                        </div>
                        <div class="scroll-reveal flex flex-col items-center gap-4 rounded-2xl border border-stone-100 bg-white p-8 text-center shadow-md shadow-stone-200/30 transition-all duration-500 hover:shadow-lg hover:shadow-stone-300/30" data-reveal-delay="150">
                            <span class="material-symbols-outlined text-[32px] text-church-gold">public</span>
                            <h4 class="font-display text-lg font-semibold text-church-text-dark">Missões</h4>
                            <p class="font-serif text-church-text-muted">
                                Apoio a missionários nacionais e internacionais.
                            </p>
                        </div>
                        <div class="scroll-reveal flex flex-col items-center gap-4 rounded-2xl border border-stone-100 bg-white p-8 text-center shadow-md shadow-stone-200/30 transition-all duration-500 hover:shadow-lg hover:shadow-stone-300/30" data-reveal-delay="300">
                            <span class="material-symbols-outlined text-[32px] text-church-gold">
                                volunteer_activism
                            </span>
                            <h4 class="font-display text-lg font-semibold text-church-text-dark">Ação Social</h4>
                            <p class="font-serif text-church-text-muted">
                                Projetos comunitários e assistência a famílias carentes.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </PublicLayout>
</template>
