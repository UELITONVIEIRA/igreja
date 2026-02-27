<script setup lang="ts">
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

defineProps<{
    sermon: Sermon;
}>();

function formatDate(dateStr: string): string {
    if (!dateStr) return '';
    const date = new Date(dateStr);
    if (isNaN(date.getTime())) return dateStr;
    return date.toLocaleDateString('pt-BR', {
        day: '2-digit',
        month: 'short',
        year: 'numeric',
    });
}
</script>

<template>
    <div class="group flex cursor-pointer flex-col gap-6">
        <div class="relative aspect-video overflow-hidden rounded-xl bg-stone-200 shadow-lg shadow-stone-200/60 transition-shadow duration-500 group-hover:shadow-xl group-hover:shadow-stone-300/50">
            <div
                class="absolute inset-0 bg-cover bg-center transition-transform duration-[1s] ease-out group-hover:scale-110"
                :style="sermon.thumbnail_url ? `background-image: url('${sermon.thumbnail_url}')` : ''"
            />
            <div
                class="absolute inset-0 flex items-center justify-center bg-gradient-to-t from-black/20 to-transparent opacity-0 transition-all duration-500 group-hover:opacity-100"
            >
                <div
                    class="flex size-16 scale-75 items-center justify-center rounded-full bg-white/95 shadow-xl transition-all duration-500 group-hover:scale-100"
                >
                    <span class="material-symbols-outlined fill-current text-[32px] text-church-gold">
                        play_arrow
                    </span>
                </div>
            </div>
            <div
                v-if="sermon.duration"
                class="absolute right-4 bottom-4 rounded-full bg-black/60 px-3 py-1 text-[10px] font-bold text-white backdrop-blur-md"
            >
                {{ sermon.duration }}
            </div>
        </div>

        <div class="flex flex-col gap-3">
            <span v-if="sermon.series" class="text-[10px] font-bold uppercase tracking-[0.2em] text-church-gold">
                Série: {{ sermon.series }}
            </span>
            <h3
                class="font-display text-2xl font-semibold text-church-text-dark transition-colors duration-300 group-hover:text-church-primary"
            >
                {{ sermon.title }}
            </h3>
            <p v-if="sermon.description" class="line-clamp-2 font-serif text-lg leading-relaxed text-church-text-muted">
                {{ sermon.description }}
            </p>
            <div class="mt-2 flex items-center gap-3 text-xs font-bold uppercase tracking-widest text-stone-400">
                <span>{{ sermon.preacher }}</span>
                <span class="size-1 rounded-full bg-church-gold/50" />
                <span>{{ formatDate(sermon.preached_at) }}</span>
            </div>
        </div>
    </div>
</template>
