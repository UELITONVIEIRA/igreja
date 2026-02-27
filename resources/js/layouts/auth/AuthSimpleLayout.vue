<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

defineProps<{
    title?: string;
    description?: string;
}>();
</script>

<template>
    <div class="flex min-h-svh">
        <!-- Left panel — brand -->
        <div
            class="relative hidden w-[45%] flex-col justify-between overflow-hidden bg-gradient-to-br from-church-text-dark via-[#352f28] to-[#1e1c19] p-12 lg:flex"
        >
            <!-- Decorative gold line -->
            <div class="absolute top-0 right-0 h-full w-px bg-gradient-to-b from-transparent via-church-gold/20 to-transparent" />

            <!-- Logo + branding -->
            <Link href="/" class="group flex items-center gap-3">
                <div class="size-10 text-church-gold transition-transform duration-300 group-hover:scale-110">
                    <svg class="h-full w-full" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 4L10 18H18V40H30V18H38L24 4Z" fill="currentColor" />
                        <path d="M24 24V32M20 28H28" stroke="currentColor" stroke-linecap="round" stroke-width="2" opacity="0.4" />
                    </svg>
                </div>
                <div>
                    <span class="font-display text-xl font-bold leading-none tracking-tight text-white">
                        Igreja de Jesus Cristo
                    </span>
                    <p class="mt-0.5 text-[9px] font-bold uppercase tracking-[0.2em] text-church-gold/70">
                        Comunidade Cristã
                    </p>
                </div>
            </Link>

            <!-- Central testimonial -->
            <div class="flex flex-col gap-6">
                <div class="h-px w-16 bg-church-gold/30" />
                <blockquote class="max-w-sm font-serif text-2xl leading-relaxed italic text-white/80">
                    "Venham a mim, todos os que estão cansados e sobrecarregados, e eu lhes darei descanso."
                </blockquote>
                <cite class="text-xs font-bold not-italic uppercase tracking-[0.2em] text-church-gold/60">
                    Mateus 11:28
                </cite>
            </div>

            <!-- Footer -->
            <p class="text-[10px] font-medium uppercase tracking-[0.15em] text-stone-600">
                © {{ new Date().getFullYear() }} Igreja de Jesus Cristo
            </p>

            <!-- Decorative cross pattern (subtle) -->
            <div class="absolute right-12 bottom-48 size-64 opacity-[0.03]">
                <svg class="h-full w-full" fill="white" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 4L10 18H18V40H30V18H38L24 4Z" />
                </svg>
            </div>
        </div>

        <!-- Right panel — form -->
        <div class="flex flex-1 flex-col items-center justify-center bg-church-bg-light p-6 md:p-10">
            <div class="w-full max-w-[400px]">
                <!-- Mobile logo -->
                <div class="mb-10 flex flex-col items-center gap-3 lg:hidden">
                    <Link href="/" class="flex items-center gap-3">
                        <div class="size-9 text-church-primary">
                            <svg class="h-full w-full" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 4L10 18H18V40H30V18H38L24 4Z" fill="currentColor" />
                                <path d="M24 24V32M20 28H28" stroke="white" stroke-linecap="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span class="font-display text-xl font-bold tracking-tight text-church-text-dark">
                            Igreja de Jesus Cristo
                        </span>
                    </Link>
                </div>

                <!-- Title + description -->
                <div class="mb-8 flex flex-col gap-2">
                    <h1 class="font-display text-3xl font-bold tracking-tight text-church-text-dark">
                        {{ title }}
                    </h1>
                    <p v-if="description" class="text-sm leading-relaxed text-church-text-muted">
                        {{ description }}
                    </p>
                </div>

                <!-- Form slot -->
                <slot />
            </div>
        </div>
    </div>
</template>
