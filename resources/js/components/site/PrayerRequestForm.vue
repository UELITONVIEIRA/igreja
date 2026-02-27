<script setup lang="ts">
import { useForm, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();

const form = useForm({
    name: '',
    email: '',
    message: '',
});

const successMessage = computed(() => page.props.flash?.success as string | undefined);

function submit() {
    form.post('/oracao', {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
}
</script>

<template>
    <section class="w-full border-y border-stone-200 bg-church-accent px-6 py-20 md:px-16">
        <div class="mx-auto flex max-w-4xl flex-col items-center gap-10 text-center">
            <div class="flex flex-col gap-4">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-church-gold">
                    Apoio Espiritual
                </span>
                <h2 class="font-display text-4xl italic text-church-text-dark md:text-5xl">
                    Como podemos orar por você hoje?
                </h2>
                <p class="max-w-2xl font-serif text-lg leading-relaxed italic text-church-text-muted md:text-xl">
                    "Onde dois ou três estiverem reunidos em meu nome, ali eu estarei no meio deles." Acreditamos no
                    poder da oração e queremos caminhar com você em seus momentos de necessidade.
                </p>
            </div>

            <!-- Success message -->
            <div
                v-if="successMessage"
                class="w-full rounded-2xl border border-green-200 bg-green-50 p-6 text-center text-green-800"
            >
                <span class="material-symbols-outlined mb-2 block text-[32px] text-green-600">check_circle</span>
                <p class="font-serif text-lg italic">{{ successMessage }}</p>
            </div>

            <div class="relative w-full overflow-hidden rounded-2xl border border-stone-100 bg-white p-10 shadow-lg shadow-stone-200/40 md:p-14">
                <!-- Decorative gold top border -->
                <div class="absolute top-0 left-0 h-1 w-full bg-gradient-to-r from-transparent via-church-gold/60 to-transparent" />

                <form class="grid grid-cols-1 gap-8 text-left md:grid-cols-2" @submit.prevent="submit">
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-church-text-muted">
                            Seu Nome
                        </label>
                        <input
                            v-model="form.name"
                            class="rounded-lg border-stone-200 bg-church-bg-light p-4 font-serif italic placeholder:text-stone-400 transition-all duration-300 focus:border-church-gold focus:ring-2 focus:ring-church-gold/20"
                            placeholder="Como deseja ser chamado?"
                            type="text"
                        />
                        <p v-if="form.errors.name" class="text-xs text-red-500">{{ form.errors.name }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-church-text-muted">
                            E-mail (opcional)
                        </label>
                        <input
                            v-model="form.email"
                            class="rounded-lg border-stone-200 bg-church-bg-light p-4 font-serif italic placeholder:text-stone-400 transition-all duration-300 focus:border-church-gold focus:ring-2 focus:ring-church-gold/20"
                            placeholder="Para mantermos contato"
                            type="email"
                        />
                        <p v-if="form.errors.email" class="text-xs text-red-500">{{ form.errors.email }}</p>
                    </div>
                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-church-text-muted">
                            Seu Pedido
                        </label>
                        <textarea
                            v-model="form.message"
                            class="rounded-lg border-stone-200 bg-church-bg-light p-4 font-serif italic placeholder:text-stone-400 transition-all duration-300 focus:border-church-gold focus:ring-2 focus:ring-church-gold/20"
                            placeholder="Compartilhe seu coração com nossa equipe de intercessão..."
                            rows="4"
                        />
                        <p v-if="form.errors.message" class="text-xs text-red-500">{{ form.errors.message }}</p>
                    </div>
                    <div class="flex justify-center md:col-span-2">
                        <button
                            :disabled="form.processing"
                            class="rounded-lg bg-gradient-to-r from-church-primary to-church-secondary px-12 py-5 text-xs font-bold uppercase tracking-widest text-white shadow-lg shadow-church-primary/20 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-church-primary/30 disabled:opacity-50"
                            type="submit"
                        >
                            {{ form.processing ? 'Enviando...' : 'Enviar Pedido de Oração' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>
