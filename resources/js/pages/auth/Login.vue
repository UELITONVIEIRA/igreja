<script setup lang="ts">
import { Form, Head } from '@inertiajs/vue3';
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Spinner } from '@/components/ui/spinner';
import AuthBase from '@/layouts/AuthLayout.vue';
import { register } from '@/routes';
import { store } from '@/routes/login';
import { request } from '@/routes/password';

defineProps<{
    status?: string;
    canResetPassword: boolean;
    canRegister: boolean;
}>();
</script>

<template>
    <AuthBase
        title="Bem-vindo de volta"
        description="Entre com seu email e senha para acessar sua conta."
    >
        <Head title="Entrar" />

        <div
            v-if="status"
            class="mb-4 rounded-lg bg-green-50 px-4 py-3 text-center text-sm font-medium text-green-700"
        >
            {{ status }}
        </div>

        <Form
            v-bind="store.form()"
            :reset-on-success="['password']"
            v-slot="{ errors, processing }"
            class="flex flex-col gap-5"
        >
            <div class="grid gap-5">
                <div class="grid gap-2">
                    <Label for="email" class="text-sm font-medium text-church-text-dark">
                        E-mail
                    </Label>
                    <Input
                        id="email"
                        type="email"
                        name="email"
                        required
                        autofocus
                        :tabindex="1"
                        autocomplete="email"
                        placeholder="seu@email.com"
                        class="h-12 rounded-lg border-stone-200 bg-white px-4 text-church-text-dark placeholder:text-stone-400 transition-colors focus:border-church-gold focus:ring-2 focus:ring-church-gold/20"
                    />
                    <InputError :message="errors.email" />
                </div>

                <div class="grid gap-2">
                    <div class="flex items-center justify-between">
                        <Label for="password" class="text-sm font-medium text-church-text-dark">
                            Senha
                        </Label>
                        <TextLink
                            v-if="canResetPassword"
                            :href="request()"
                            class="text-xs font-medium text-church-text-muted transition-colors hover:text-church-gold"
                            :tabindex="5"
                        >
                            Esqueceu a senha?
                        </TextLink>
                    </div>
                    <Input
                        id="password"
                        type="password"
                        name="password"
                        required
                        :tabindex="2"
                        autocomplete="current-password"
                        placeholder="••••••••"
                        class="h-12 rounded-lg border-stone-200 bg-white px-4 text-church-text-dark placeholder:text-stone-400 transition-colors focus:border-church-gold focus:ring-2 focus:ring-church-gold/20"
                    />
                    <InputError :message="errors.password" />
                </div>

                <div class="flex items-center gap-3">
                    <Checkbox id="remember" name="remember" :tabindex="3" />
                    <Label for="remember" class="text-sm text-church-text-muted cursor-pointer">
                        Lembrar de mim
                    </Label>
                </div>

                <button
                    type="submit"
                    class="mt-2 flex h-12 w-full items-center justify-center rounded-lg bg-church-primary text-sm font-bold uppercase tracking-widest text-white shadow-sm shadow-church-primary/20 transition-all duration-300 hover:-translate-y-0.5 hover:bg-church-secondary hover:shadow-md disabled:cursor-not-allowed disabled:opacity-50"
                    :tabindex="4"
                    :disabled="processing"
                    data-test="login-button"
                >
                    <Spinner v-if="processing" />
                    <span v-else>Entrar</span>
                </button>
            </div>

            <div
                class="text-center text-sm text-church-text-muted"
                v-if="canRegister"
            >
                Não tem uma conta?
                <TextLink
                    :href="register()"
                    :tabindex="5"
                    class="font-semibold text-church-primary transition-colors hover:text-church-gold"
                >
                    Criar conta
                </TextLink>
            </div>
        </Form>
    </AuthBase>
</template>
