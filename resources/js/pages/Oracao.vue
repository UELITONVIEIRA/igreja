<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
import PrayerRequestForm from '@/components/site/PrayerRequestForm.vue';
</script>

<template>
    <Head title="Pedido de Oração" />
    <PublicLayout>
        <PrayerRequestForm />
    </PublicLayout>
</template>
