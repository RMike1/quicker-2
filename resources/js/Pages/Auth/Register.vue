<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';


const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>

    <Head title="Register" />
    <AuthenticationCard>
        <template #header>
            Sign Up
        </template>
        <form @submit.prevent="submit">
            <div class="mb-6">
                <TextInput id="first-name" v-model="form.first_name" type="text" class="mt-1 block w-full" required
                    autofocus autocomplete="first name" placeholder="First Name..." />
                <InputError class="mt-2" :message="form.errors.first_name" />
            </div>
            <div class="mb-6">
                <TextInput id="second-name" v-model="form.last_name" type="text" class="mt-1 block w-full" required
                    autofocus autocomplete="second name" placeholder="Second Name..." />
                <InputError class="mt-2" :message="form.errors.last_name" />
            </div>
            <div class="mb-6">
                <TextInput id="email" v-model="form.email" type="email" class="mt-1 block w-full" required
                    autocomplete="username" placeholder="Email..." />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div class="mb-6">
                <TextInput id="password" v-model="form.password" type="password" class="mt-1 block w-full" required
                    autocomplete="new-password" placeholder="Passcode***" />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>
            <div class="mb-6">
                <TextInput id="password_confirmation" v-model="form.password_confirmation" type="password"
                    class="mt-1 block w-full" required autocomplete="new-password" placeholder="Confirm Passcode***" />
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
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
                    Sign Up
                </PrimaryButton>
            </div>
        </form>
        <Link :href="route('login')"
            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md">
        Already registered?
        </Link>
    </AuthenticationCard>
</template>