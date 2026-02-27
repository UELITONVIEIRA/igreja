<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer class="relative overflow-hidden bg-gradient-to-b from-church-text-dark to-[#1e1c19] px-6 py-24 text-stone-300 md:px-16">
        <!-- Decorative gold line at top -->
        <div class="absolute top-0 left-0 h-px w-full bg-gradient-to-r from-transparent via-church-gold/40 to-transparent" />

        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-20 md:grid-cols-4">
            <div class="col-span-1 flex flex-col gap-8 md:col-span-2">
                <div class="flex items-center gap-3 text-white">
                    <div class="size-8 text-church-gold">
                        <svg class="h-full w-full" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.8261 30.5736C16.7203 29.8826 20.2244 29.4783 24 29.4783C27.7756 29.4783 31.2797 29.8826 34.1739 30.5736C36.9144 31.2278 39.9967 32.7669 41.3563 33.8352L24.8486 7.36089C24.4571 6.73303 23.5429 6.73303 23.1514 7.36089L6.64374 33.8352C8.00331 32.7669 11.0856 31.2278 13.8261 30.5736Z"
                                fill="currentColor"
                            />
                        </svg>
                    </div>
                    <span class="font-display text-2xl font-bold tracking-tight">Igreja de Jesus Cristo</span>
                </div>
                <p class="max-w-md font-serif text-lg leading-relaxed italic opacity-70">
                    "Uma comunidade dedicada a amar a Deus, amar as pessoas e servir o mundo através da reflexão e da
                    graça."
                </p>
                <div class="flex gap-5">
                    <a class="flex size-10 items-center justify-center rounded-full bg-white/5 transition-all duration-300 hover:bg-church-gold/20 hover:text-church-gold" href="#">
                        <span class="material-symbols-outlined text-[20px]">social_leaderboard</span>
                    </a>
                    <a class="flex size-10 items-center justify-center rounded-full bg-white/5 transition-all duration-300 hover:bg-church-gold/20 hover:text-church-gold" href="#">
                        <span class="material-symbols-outlined text-[20px]">video_library</span>
                    </a>
                    <a class="flex size-10 items-center justify-center rounded-full bg-white/5 transition-all duration-300 hover:bg-church-gold/20 hover:text-church-gold" href="#">
                        <span class="material-symbols-outlined text-[20px]">photo_camera</span>
                    </a>
                </div>
            </div>

            <div class="flex flex-col gap-6">
                <h4 class="text-xs font-bold uppercase tracking-widest text-church-gold">Conectar</h4>
                <ul class="flex flex-col gap-4 text-sm font-medium tracking-wide">
                    <li>
                        <Link class="transition-colors duration-300 hover:text-white" href="/conectar">Novo aqui?</Link>
                    </li>
                    <li>
                        <Link class="transition-colors duration-300 hover:text-white" href="/conectar">Ministérios</Link>
                    </li>
                    <li>
                        <Link class="transition-colors duration-300 hover:text-white" href="/conectar">Eventos</Link>
                    </li>
                    <li>
                        <Link class="transition-colors duration-300 hover:text-white" href="/conectar">Contato</Link>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col gap-6">
                <h4 class="text-xs font-bold uppercase tracking-widest text-church-gold">Recursos</h4>
                <ul class="flex flex-col gap-4 text-sm font-medium tracking-wide">
                    <li>
                        <Link class="transition-colors duration-300 hover:text-white" href="/sermoes">
                            Biblioteca de Sermões
                        </Link>
                    </li>
                    <li>
                        <Link class="transition-colors duration-300 hover:text-white" href="/oracao">
                            Pedido de Oração
                        </Link>
                    </li>
                    <li>
                        <Link class="transition-colors duration-300 hover:text-white" href="/sobre">Blog Reflexivo</Link>
                    </li>
                    <li>
                        <Link class="transition-colors duration-300 hover:text-white" href="/contribua">
                            Dizimar Online
                        </Link>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="mx-auto mt-24 flex max-w-7xl flex-col items-center justify-between gap-6 border-t border-white/5 pt-12 text-[10px] font-bold uppercase tracking-[0.2em] text-stone-600 md:flex-row"
        >
            <p>© {{ new Date().getFullYear() }} Igreja de Jesus Cristo. Todos os direitos reservados.</p>
            <div class="flex gap-8">
                <a class="transition-colors duration-300 hover:text-church-gold" href="#">Política de Privacidade</a>
                <a class="transition-colors duration-300 hover:text-church-gold" href="#">Termos de Uso</a>
            </div>
        </div>
    </footer>
</template>
