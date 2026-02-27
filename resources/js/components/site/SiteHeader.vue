<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { ref, computed, onMounted, onUnmounted } from 'vue';

const page = usePage();
const mobileMenuOpen = ref(false);
const isScrolled = ref(false);

const currentRoute = computed(() => page.url);

const navLinks = [
    { label: 'Início', href: '/', route: '/' },
    { label: 'Sobre Nós', href: '/sobre', route: '/sobre' },
    { label: 'Ministérios', href: '/conectar', route: '/conectar' },
    { label: 'Contribua', href: '/contribua', route: '/contribua' },
    { label: 'Sermões', href: '/sermoes', route: '/sermoes' },
];

function isActive(route: string): boolean {
    if (route === '/') return currentRoute.value === '/';
    return currentRoute.value.startsWith(route);
}

function handleScroll() {
    isScrolled.value = window.scrollY > 20;
}

onMounted(() => {
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
    <header
        :class="[
            'sticky top-0 z-50 transition-all duration-500',
            isScrolled
                ? 'border-b border-church-gold/15 bg-white/95 shadow-lg shadow-stone-900/[0.04] backdrop-blur-md'
                : 'border-b border-stone-200/60 bg-white',
        ]"
    >
        <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 md:px-16">
            <!-- Logo -->
            <Link href="/" class="group flex items-center gap-3">
                <div
                    :class="[
                        'size-10 transition-all duration-300 group-hover:scale-105',
                        isScrolled ? 'text-church-gold' : 'text-church-primary',
                    ]"
                >
                    <svg class="h-full w-full" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 4L10 18H18V40H30V18H38L24 4Z" fill="currentColor" />
                        <path d="M24 24V32M20 28H28" stroke="white" stroke-linecap="round" stroke-width="2" />
                    </svg>
                </div>
                <div>
                    <h1 class="font-display text-2xl font-bold leading-none tracking-tight text-church-text-dark">
                        Igreja de Jesus Cristo
                    </h1>
                    <p class="mt-0.5 text-[10px] font-bold uppercase tracking-[0.2em] text-church-gold">
                        Comunidade Cristã
                    </p>
                </div>
            </Link>

            <!-- Desktop nav -->
            <div class="hidden items-center gap-8 lg:flex">
                <nav class="flex items-center gap-7">
                    <Link
                        v-for="link in navLinks"
                        :key="link.href"
                        :href="link.href"
                        :class="[
                            'group relative py-1 text-[13px] font-medium uppercase tracking-widest transition-colors duration-300',
                            isActive(link.route)
                                ? 'font-bold text-church-primary'
                                : 'text-church-text-muted hover:text-church-primary',
                        ]"
                    >
                        {{ link.label }}
                        <span
                            :class="[
                                'absolute -bottom-1 left-0 h-[2px] rounded-full bg-church-gold transition-all duration-300',
                                isActive(link.route) ? 'w-full' : 'w-0 group-hover:w-full',
                            ]"
                        />
                    </Link>
                </nav>

                <div class="h-6 w-px bg-stone-200" />

                <div class="flex items-center gap-3">
                    <Link
                        href="/oracao"
                        class="rounded-full border border-church-primary/20 px-5 py-2 text-[11px] font-bold uppercase tracking-widest text-church-primary transition-all duration-300 hover:border-church-gold/40 hover:bg-church-accent hover:text-church-gold"
                    >
                        Pedido de Oração
                    </Link>
                    <Link
                        href="/conectar"
                        class="rounded-full bg-church-primary px-6 py-2 text-[11px] font-bold uppercase tracking-widest text-white shadow-sm shadow-church-primary/20 transition-all duration-300 hover:-translate-y-0.5 hover:bg-church-secondary hover:shadow-md hover:shadow-church-primary/25"
                    >
                        Visite-nos
                    </Link>
                </div>
            </div>

            <!-- Mobile hamburger -->
            <button class="text-church-text-dark lg:hidden" @click="mobileMenuOpen = !mobileMenuOpen">
                <span class="material-symbols-outlined text-3xl">{{ mobileMenuOpen ? 'close' : 'menu' }}</span>
            </button>
        </div>

        <!-- Mobile menu -->
        <Transition
            enter-active-class="transition-all duration-300 ease-out"
            enter-from-class="-translate-y-4 opacity-0"
            enter-to-class="translate-y-0 opacity-100"
            leave-active-class="transition-all duration-200 ease-in"
            leave-from-class="translate-y-0 opacity-100"
            leave-to-class="-translate-y-4 opacity-0"
        >
            <div
                v-if="mobileMenuOpen"
                class="absolute top-full right-0 left-0 border-b border-church-gold/10 bg-white px-6 py-8 shadow-xl shadow-stone-900/[0.06] lg:hidden"
            >
                <nav class="flex flex-col gap-5">
                    <Link
                        v-for="link in navLinks"
                        :key="link.href"
                        :href="link.href"
                        :class="[
                            'text-sm font-medium uppercase tracking-widest transition-colors duration-300',
                            isActive(link.route)
                                ? 'font-bold text-church-primary'
                                : 'text-church-text-muted hover:text-church-primary',
                        ]"
                        @click="mobileMenuOpen = false"
                    >
                        <span class="flex items-center gap-3">
                            <span
                                v-if="isActive(link.route)"
                                class="inline-block h-4 w-0.5 rounded-full bg-church-gold"
                            />
                            {{ link.label }}
                        </span>
                    </Link>

                    <div class="my-2 h-px bg-stone-100" />

                    <Link
                        href="/oracao"
                        class="flex h-12 items-center justify-center rounded-full border border-church-primary/20 text-xs font-bold uppercase tracking-widest text-church-primary transition-all duration-300 hover:bg-church-accent"
                        @click="mobileMenuOpen = false"
                    >
                        Pedido de Oração
                    </Link>
                    <Link
                        href="/conectar"
                        class="flex h-12 items-center justify-center rounded-full bg-church-primary text-xs font-bold uppercase tracking-widest text-white shadow-sm"
                        @click="mobileMenuOpen = false"
                    >
                        Visite-nos
                    </Link>
                </nav>
            </div>
        </Transition>
    </header>
</template>

