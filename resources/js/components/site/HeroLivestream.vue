<script setup lang="ts">
withDefaults(
    defineProps<{
        title: string;
        subtitle?: string;
        verse?: string;
        isLive?: boolean;
        backgroundImage?: string;
    }>(),
    {
        subtitle: '',
        verse: '',
        isLive: false,
        backgroundImage: '',
    },
);
</script>

<template>
    <section class="w-full bg-white px-6 py-12 md:px-16">
        <div class="mx-auto max-w-7xl">
            <div
                class="group relative flex aspect-[21/9] w-full flex-col items-center justify-center overflow-hidden rounded-2xl bg-stone-200 text-center shadow-2xl shadow-stone-900/20"
            >
                <div
                    class="absolute inset-0 bg-cover bg-center transition-transform duration-[1.5s] ease-out group-hover:scale-105"
                    :style="backgroundImage ? `background-image: url('${backgroundImage}')` : ''"
                />
                <!-- Dramatic gradient overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/35 to-black/10" />

                <div class="relative z-10 flex flex-col items-center gap-6 p-8">
                    <!-- Live badge -->
                    <div v-if="isLive" class="flex items-center gap-3 rounded-full bg-red-600 px-5 py-1.5 shadow-xl shadow-red-600/30">
                        <span class="relative flex size-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-white opacity-75" />
                            <span class="relative inline-flex size-2 rounded-full bg-white" />
                        </span>
                        <span class="text-[10px] font-bold uppercase tracking-[0.3em] text-white">Ao Vivo Agora</span>
                    </div>

                    <div class="max-w-3xl">
                        <h3 v-if="subtitle" class="mb-4 font-serif text-xl italic text-white/80">
                            {{ subtitle }}
                        </h3>
                        <h1
                            class="mb-6 font-display text-5xl leading-tight font-bold text-white drop-shadow-lg md:text-7xl"
                        >
                            {{ title }}
                        </h1>
                        <p
                            v-if="verse"
                            class="mx-auto max-w-2xl font-serif text-xl leading-relaxed italic text-stone-200 md:text-2xl"
                        >
                            "{{ verse }}"
                        </p>
                    </div>

                    <slot name="action">
                        <button
                            class="mt-4 flex items-center gap-3 rounded-sm bg-white px-10 py-5 text-xs font-bold uppercase tracking-widest text-church-text-dark shadow-2xl transition-all duration-300 hover:-translate-y-1 hover:bg-stone-50 hover:shadow-church-gold/20"
                        >
                            <span class="material-symbols-outlined text-[20px] text-church-gold">play_arrow</span>
                            <span>Assista Agora</span>
                        </button>
                    </slot>
                </div>
            </div>
        </div>
    </section>
</template>
