<script setup lang="ts">
import SermonCard from './SermonCard.vue';

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
    sermons: Sermon[];
}>();
</script>

<template>
    <div class="grid grid-cols-1 gap-x-10 gap-y-16 md:grid-cols-2 lg:grid-cols-3">
        <SermonCard v-for="sermon in sermons" :key="sermon.id" :sermon="sermon" />
    </div>
</template>
