<script setup lang="ts">
import SiteHeader from '@/components/site/SiteHeader.vue';
import SiteFooter from '@/components/site/SiteFooter.vue';
</script>

<template>
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden bg-church-bg-light font-sans-public text-church-text-dark">
        <SiteHeader />
        <main class="flex w-full flex-1 flex-col items-center">
            <slot />
        </main>
        <SiteFooter />
    </div>
</template>
