<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { ref, computed, onMounted, onUnmounted } from 'vue';

const page = usePage();
const mobileMenuOpen = ref(false);
const isScrolled = ref(false);

const currentRoute = computed(() => page.url);

const navLinks = [
    { label: 'Início', href: '/', route: '/' },
    { label: 'Sobre', href: '/sobre', route: '/sobre' },
    { label: 'Conectar', href: '/conectar', route: '/conectar' },
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
            'sticky top-0 z-50 flex items-center justify-between px-6 py-5 backdrop-blur-md transition-all duration-500 md:px-16',
            isScrolled
                ? 'border-b border-church-primary/10 bg-white/95 shadow-lg shadow-stone-900/[0.04]'
                : 'border-b border-transparent bg-white/80',
        ]"
    >
        <div class="flex items-center gap-4">
            <Link href="/" class="group flex items-center gap-4">
                <div class="size-9 text-church-primary transition-transform duration-300 group-hover:scale-110">
                    <svg class="h-full w-full" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.8261 30.5736C16.7203 29.8826 20.2244 29.4783 24 29.4783C27.7756 29.4783 31.2797 29.8826 34.1739 30.5736C36.9144 31.2278 39.9967 32.7669 41.3563 33.8352L24.8486 7.36089C24.4571 6.73303 23.5429 6.73303 23.1514 7.36089L6.64374 33.8352C8.00331 32.7669 11.0856 31.2278 13.8261 30.5736Z"
                            fill="currentColor"
                        />
                        <path
                            clip-rule="evenodd"
                            d="M39.998 35.764C39.9944 35.7463 39.9875 35.7155 39.9748 35.6706C39.9436 35.5601 39.8949 35.4259 39.8346 35.2825C39.8168 35.2403 39.7989 35.1993 39.7813 35.1602C38.5103 34.2887 35.9788 33.0607 33.7095 32.5189C30.9875 31.8691 27.6413 31.4783 24 31.4783C20.3587 31.4783 17.0125 31.8691 14.2905 32.5189C12.0012 33.0654 9.44505 34.3104 8.18538 35.1832C8.17384 35.2075 8.16216 35.233 8.15052 35.2592C8.09919 35.3751 8.05721 35.4886 8.02977 35.589C8.00356 35.6848 8.00039 35.7333 8.00004 35.7388C8.00004 35.739 8 35.7393 8.00004 35.7388C8.00004 35.7641 8.0104 36.0767 8.68485 36.6314C9.34546 37.1746 10.4222 37.7531 11.9291 38.2772C14.9242 39.319 19.1919 40 24 40C28.8081 40 33.0758 39.319 36.0709 38.2772C37.5778 37.7531 38.6545 37.1746 39.3151 36.6314C39.9006 36.1499 39.9857 35.8511 39.998 35.764ZM4.95178 32.7688L21.4543 6.30267C22.6288 4.4191 25.3712 4.41909 26.5457 6.30267L43.0534 32.777C43.0709 32.8052 43.0878 32.8338 43.104 32.8629L41.3563 33.8352C43.104 32.8629 43.1038 32.8626 43.104 32.8629L43.1051 32.865L43.1065 32.8675L43.1101 32.8739L43.1199 32.8918C43.1276 32.906 43.1377 32.9246 43.1497 32.9473C43.1738 32.9925 43.2062 33.0545 43.244 33.1299C43.319 33.2792 43.4196 33.489 43.5217 33.7317C43.6901 34.1321 44 34.9311 44 35.7391C44 37.4427 43.003 38.7775 41.8558 39.7209C40.6947 40.6757 39.1354 41.4464 37.385 42.0552C33.8654 43.2794 29.133 44 24 44C18.867 44 14.1346 43.2794 10.615 42.0552C8.86463 41.4464 7.30529 40.6757 6.14419 39.7209C4.99695 38.7775 3.99999 37.4427 3.99999 35.7391C3.99999 34.8725 4.29264 34.0922 4.49321 33.6393C4.60375 33.3898 4.71348 33.1804 4.79687 33.0311C4.83898 32.9556 4.87547 32.8935 4.9035 32.8471C4.91754 32.8238 4.92954 32.8043 4.93916 32.7889L4.94662 32.777L4.95178 32.7688ZM35.9868 29.004L24 9.77997L12.0131 29.004C12.4661 28.8609 12.9179 28.7342 13.3617 28.6282C16.4281 27.8961 20.0901 27.4783 24 27.4783C27.9099 27.4783 31.5719 27.8961 34.6383 28.6282C35.082 28.7342 35.5339 28.8609 35.9868 29.004Z"
                            fill="currentColor"
                            fill-rule="evenodd"
                        />
                    </svg>
                </div>
                <h2 class="font-display text-2xl font-semibold tracking-tight text-church-text-dark">
                    Igreja de Jesus Cristo
                </h2>
            </Link>
        </div>

        <!-- Desktop nav -->
        <div class="hidden flex-1 items-center justify-end gap-12 md:flex">
            <nav class="flex items-center gap-10">
                <Link
                    v-for="(link, index) in navLinks"
                    :key="link.href"
                    :href="link.href"
                    :class="[
                        'relative text-sm font-medium uppercase tracking-widest transition-all duration-300',
                        isActive(link.route)
                            ? 'font-bold text-church-primary'
                            : 'text-church-text-muted hover:text-church-primary',
                    ]"
                >
                    <span class="relative">
                        {{ link.label }}
                        <span
                            :class="[
                                'absolute -bottom-2 left-0 h-0.5 bg-church-gold transition-all duration-300',
                                isActive(link.route) ? 'w-full' : 'w-0 group-hover:w-full',
                            ]"
                        />
                    </span>
                </Link>
            </nav>
            <Link
                href="/conectar"
                class="flex h-12 items-center justify-center rounded-sm bg-church-primary px-8 text-xs font-bold uppercase tracking-[0.2em] text-white shadow-lg shadow-church-primary/20 transition-all duration-300 hover:-translate-y-0.5 hover:bg-church-primary/90 hover:shadow-xl hover:shadow-church-primary/30"
            >
                Planeje sua Visita
            </Link>
        </div>

        <!-- Mobile hamburger -->
        <button class="text-church-text-dark md:hidden" @click="mobileMenuOpen = !mobileMenuOpen">
            <span class="material-symbols-outlined">{{ mobileMenuOpen ? 'close' : 'menu' }}</span>
        </button>

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
                class="absolute top-full right-0 left-0 border-b border-church-primary/10 bg-white px-6 py-8 shadow-lg md:hidden"
            >
                <nav class="flex flex-col gap-6">
                    <Link
                        v-for="link in navLinks"
                        :key="link.href"
                        :href="link.href"
                        :class="[
                            'text-sm font-medium uppercase tracking-widest transition-colors',
                            isActive(link.route) ? 'font-bold text-church-primary' : 'text-church-text-muted',
                        ]"
                        @click="mobileMenuOpen = false"
                    >
                        {{ link.label }}
                    </Link>
                    <Link
                        href="/conectar"
                        class="mt-2 flex h-12 items-center justify-center rounded-sm bg-church-primary text-xs font-bold uppercase tracking-[0.2em] text-white"
                        @click="mobileMenuOpen = false"
                    >
                        Planeje sua Visita
                    </Link>
                </nav>
            </div>
        </Transition>
    </header>
</template>
