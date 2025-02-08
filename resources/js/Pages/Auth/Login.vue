<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import TextInput from '@/Components/TextInput.vue';
import Alert from '@/Components/Alert.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>

    <Head title="Log in" />
    <AuthenticationCard>

        <template #header>
            Sign In
        </template>
        <Alert v-if="status">
                {{status}}
        </Alert>
        <form @submit.prevent="submit">
            <div class="mb-6">
                <TextInput id="email" v-model="form.email" type="email" class="mt-1 block w-full" required autofocus
                    autocomplete="username" placeholder="email.." />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div class="mb-6">
                <TextInput id="password" v-model="form.password" type="password" class="mt-1 block w-full" required
                    autocomplete="current-password" placeholder="password.." />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>
            <div class="mb-6">
                <label class="flex items-center">
                    <Checkbox v-model:checked="form.remember" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                </label>
            </div>
            <div class="mb-10">
                <PrimaryButton
                    class="w-full cursor-pointer rounded-md border border-primary justify-center px-5 py-3 font-medium text-white transition hover:bg-opacity-50"
                    :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
        <Link v-if="canResetPassword" :href="route('password.request')"
            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md">
        Forgot your password?
        </Link>
        <p class="text-base text-body-color dark:text-gray-600 mt-6">
            <span class="pr-0.5">Not a member yet?</span>
            <Link :href="route('register')"
                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md">
            Sign Up
            </Link>
        </p>
    </AuthenticationCard>
</template>
