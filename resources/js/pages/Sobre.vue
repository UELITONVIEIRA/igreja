<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
import { useScrollReveal } from '@/composables/useScrollReveal';
import { ref } from 'vue';

const pageRef = ref<HTMLElement | null>(null);
useScrollReveal(pageRef, '.scroll-reveal', { staggerDelay: 120 });
</script>

<template>
    <Head title="Sobre" />
    <PublicLayout>
        <div ref="pageRef">
            <!-- Hero -->
            <section class="relative w-full overflow-hidden bg-church-text-dark px-6 py-32 md:px-16">
                <div
                    class="absolute inset-0 bg-cover bg-center opacity-30"
                    style="
                        background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDd26st43Un9Ei4ezemTjGM-PhgaFR1KrtCqkKwgV7Fwuiwp90IX7_OJoMBBHA27c0UdHyOuXYA2CLltyCL00_7WnmybL8G5u1FZAajvlHoWo3uNN2uPl8y125ZRDqnkOsHvbRa4XHaiytC-uTfNo9_dHapHYaYmHfPnr6zWOBCD91-cu3gL1FyTBMCXo_O3OMjPnVsTutfBI6NH-pSMqQQGnwtUfoOVifDahcp_EhHZkXZBGfTBkaDKgggWQARlh1c1ukNuscclkie');
                    "
                />
                <!-- Gradient overlay for depth -->
                <div class="absolute inset-0 bg-gradient-to-t from-church-text-dark via-transparent to-church-text-dark/50" />
                <div class="relative z-10 mx-auto max-w-4xl text-center">
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-church-gold">Nossa História</span>
                    <h1 class="mt-4 font-display text-5xl leading-tight font-bold text-white drop-shadow-lg md:text-7xl">
                        Igreja de Jesus Cristo
                    </h1>
                    <p class="mx-auto mt-6 max-w-2xl font-serif text-xl leading-relaxed italic text-stone-300">
                        Uma comunidade dedicada a amar a Deus, amar as pessoas e servir o mundo através da reflexão e da
                        graça.
                    </p>
                </div>
            </section>

            <!-- Missão, Visão, Valores -->
            <section class="w-full px-6 py-24 md:px-16">
                <div class="mx-auto grid max-w-7xl grid-cols-1 gap-16 md:grid-cols-3">
                    <div class="scroll-reveal flex flex-col gap-6 text-center" data-reveal-delay="0">
                        <div class="mx-auto flex size-20 items-center justify-center rounded-full bg-church-accent transition-all duration-500 hover:bg-church-gold/10 hover:shadow-lg hover:shadow-church-gold/10">
                            <span class="material-symbols-outlined text-[36px] text-church-gold">favorite</span>
                        </div>
                        <h3 class="font-display text-2xl font-semibold text-church-text-dark">Nossa Missão</h3>
                        <p class="font-serif text-lg leading-relaxed text-church-text-muted">
                            Glorificar a Deus fazendo discípulos que amam profundamente, servem fielmente e compartilham o
                            evangelho com coragem e compaixão.
                        </p>
                    </div>

                    <div class="scroll-reveal flex flex-col gap-6 text-center" data-reveal-delay="150">
                        <div class="mx-auto flex size-20 items-center justify-center rounded-full bg-church-accent transition-all duration-500 hover:bg-church-gold/10 hover:shadow-lg hover:shadow-church-gold/10">
                            <span class="material-symbols-outlined text-[36px] text-church-gold">visibility</span>
                        </div>
                        <h3 class="font-display text-2xl font-semibold text-church-text-dark">Nossa Visão</h3>
                        <p class="font-serif text-lg leading-relaxed text-church-text-muted">
                            Ser uma igreja que transforma vidas e comunidades através do poder do evangelho, formando
                            gerações que impactam o mundo com fé e propósito.
                        </p>
                    </div>

                    <div class="scroll-reveal flex flex-col gap-6 text-center" data-reveal-delay="300">
                        <div class="mx-auto flex size-20 items-center justify-center rounded-full bg-church-accent transition-all duration-500 hover:bg-church-gold/10 hover:shadow-lg hover:shadow-church-gold/10">
                            <span class="material-symbols-outlined text-[36px] text-church-gold">auto_awesome</span>
                        </div>
                        <h3 class="font-display text-2xl font-semibold text-church-text-dark">Nossos Valores</h3>
                        <p class="font-serif text-lg leading-relaxed text-church-text-muted">
                            Fé autêntica, comunidade acolhedora, crescimento espiritual contínuo, generosidade radical e
                            serviço sacrificial ao próximo.
                        </p>
                    </div>
                </div>
            </section>

            <!-- História -->
            <section class="w-full border-y border-stone-200 bg-church-accent px-6 py-24 md:px-16">
                <div class="scroll-reveal mx-auto max-w-4xl text-center">
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-church-gold">
                        Desde o Início
                    </span>
                    <h2 class="mt-4 font-display text-4xl italic text-church-text-dark md:text-5xl">
                        Uma Jornada de Fé
                    </h2>
                    <div class="mt-10 space-y-6 text-left font-serif text-lg leading-relaxed text-church-text-muted">
                        <p>
                            A Igreja de Jesus Cristo nasceu de um sonho: criar um espaço onde pessoas de todas as origens pudessem
                            encontrar comunidade, propósito e uma conexão profunda com Deus.
                        </p>
                        <p>
                            Fundada com um pequeno grupo de famílias comprometidas, nossa igreja cresceu não apenas em
                            números, mas em profundidade de fé. Acreditamos que a verdadeira transformação acontece quando
                            nos reunimos, estudamos as Escrituras e praticamos o amor ao próximo.
                        </p>
                        <p>
                            Hoje, continuamos fiéis a essa missão original, adaptando nossos métodos para alcançar novas
                            gerações, mas mantendo firmes os fundamentos eternos da Palavra de Deus.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Equipe Pastoral -->
            <section class="w-full px-6 py-24 md:px-16">
                <div class="mx-auto max-w-7xl">
                    <div class="scroll-reveal mb-16 text-center">
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-church-gold">Liderança</span>
                        <h2 class="mt-4 font-display text-4xl text-church-text-dark md:text-5xl">Equipe Pastoral</h2>
                    </div>

                    <div class="grid grid-cols-1 gap-12 md:grid-cols-3">
                        <div class="scroll-reveal group flex flex-col items-center gap-4 text-center" data-reveal-delay="0">
                            <div
                                class="size-32 rounded-full bg-church-accent bg-cover bg-center shadow-lg shadow-stone-200/50 ring-4 ring-white transition-all duration-500 group-hover:shadow-xl group-hover:shadow-church-gold/20"
                                style="
                                    background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAaudWh3tKW2HOJizXztaN-TrXCVKKhYE2OSbqtupz9bw7rjsQm3fe7IiJkUrEvpXpWmf0S5qtcy_sRPBZqma7lPWrHiPXkvWrZ-zcndm3Qaec9s2kVdHLko_I9m6Xq5WvB6WXw3YB-55xRKW4IaP9jRE1Xk8bWlJWONegCJHsfl74nWWDIV99IwvfymT1XRLSaFqwY3H449q-VFZmHNbAtjZF31wftlLx73o0IUEc39kAi_OSEh4-rCYXfagdf43p7v5S5FZHBzIaw');
                                "
                            />
                            <h4 class="font-display text-xl font-semibold text-church-text-dark">Pr. Michael Davis</h4>
                            <p class="text-xs font-bold uppercase tracking-widest text-church-gold">Pastor Sênior</p>
                            <p class="font-serif text-church-text-muted">
                                Liderando nossa comunidade com sabedoria e compaixão desde a fundação.
                            </p>
                        </div>
                        <div class="scroll-reveal group flex flex-col items-center gap-4 text-center" data-reveal-delay="150">
                            <div
                                class="size-32 rounded-full bg-church-accent bg-cover bg-center shadow-lg shadow-stone-200/50 ring-4 ring-white transition-all duration-500 group-hover:shadow-xl group-hover:shadow-church-gold/20"
                                style="
                                    background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBJHSAOLynvXfhoMguzZBrBG8Zs7lxRxpDrqt8thVe2y26qutLNOgV9RoV1YOAwrXDhiUi-wKs2yP7ewAFX88Sc7RY0K4iZz64cyWEJUftP-BC2o6K5Wgbxomv3iiilMmGBTuJOWRq8H_eIhVMyO3bEGjp_2_l_XuuWL0XF1v2yOzhb9oJ4Ues2C_42GCtjtwONsxdaJtaCRrld1VF5bxkkzDiD09pH1XUqMed6jMW0m4GitfuecOwbecSgwcOnQ_nn_vd89pXSo-ID');
                                "
                            />
                            <h4 class="font-display text-xl font-semibold text-church-text-dark">Pra. Ana Oliveira</h4>
                            <p class="text-xs font-bold uppercase tracking-widest text-church-gold">
                                Pastora de Família
                            </p>
                            <p class="font-serif text-church-text-muted">
                                Dedicada ao cuidado e ao fortalecimento das famílias.
                            </p>
                        </div>
                        <div class="scroll-reveal group flex flex-col items-center gap-4 text-center" data-reveal-delay="300">
                            <div
                                class="size-32 rounded-full bg-church-accent bg-cover bg-center shadow-lg shadow-stone-200/50 ring-4 ring-white transition-all duration-500 group-hover:shadow-xl group-hover:shadow-church-gold/20"
                                style="
                                    background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA-HB3uktKx4JtSyDBNpmLDhe0qqjdoqe0kgfrORG4ALulnFXi98xAfSuERBLYBvneXDMYmlpO03UkthG3bXDefj3V7yBrcXSyXOfTRYIk7uP3KtPT-hdK4zzzjcDt6bD1JNXXSJKFE6hoj_jKH22vzE70_RMviV2orVRrXlWIT2Z8wX2I-9gtlUK_9urOuIhgMGTPY8AfmCGUnMITMrbrDv4w-pXZLu3rhFjrf4mUPcxSbjxwOJc3yEFk2adp0ulUUK4QL06pKzo-K');
                                "
                            />
                            <h4 class="font-display text-xl font-semibold text-church-text-dark">Rev. Mark Thompson</h4>
                            <p class="text-xs font-bold uppercase tracking-widest text-church-gold">
                                Pastor de Jovens
                            </p>
                            <p class="font-serif text-church-text-muted">
                                Inspirando a próxima geração a viver com propósito e impacto.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </PublicLayout>
</template>
