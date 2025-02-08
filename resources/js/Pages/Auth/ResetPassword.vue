<script setup>
import { Head, useForm, Link } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    email: String,
    token: String,
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.update'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Reset Password" />
    <AuthenticationCard>
        <template #header>
            Reset Password
        </template>
        <form @submit.prevent="submit">
            <div class="mb-6">
                <TextInput id="email" v-model="form.email" type="email" class="mt-1 block w-full" required autofocus
                    autocomplete="username" placeholder="Email..." />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div class="mb-6">
                <TextInput id="password" v-model="form.password" type="password" class="mt-1 block w-full" required
                    autocomplete="new-password" placeholder="Passcode" />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>
            <div class="mb-6">
                <TextInput id="password_confirmation" v-model="form.password_confirmation" type="password"
                    class="mt-1 block w-full" required autocomplete="new-password" placeholder="Confirm Passcode" />
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>
            <div class="mb-10">
                <PrimaryButton
                    class="w-full cursor-pointer rounded-md border border-primary justify-center px-5 py-3 font-medium text-white transition hover:bg-opacity-50"
                    :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Reset Password
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>