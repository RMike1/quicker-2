<script setup>
import { Head, useForm, Link } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import Alert from '@/Components/Alert.vue';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <Head title="Forgot Password" />
    <AuthenticationCard>
        <template #header>
            Forgot Password?
        </template>
        <Alert v-if="status">
                {{status}}
        </Alert>
        <div
            class="flex w-full mb-4 rounded-lg border-l-[6px] border-transparent bg-white px-5 py-4 shadow-1 md:p-6 dark:text-zinc-400 dark:bg-zinc-800">
            <div
                class="mr-5 flex h-[32px] w-full max-w-[34px] items-center justify-center rounded-md bg-zinc-200/30 text-gray-dark">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.99998 0.506256C4.3031 0.506256 0.506226 4.30313 0.506226 9.00001C0.506226 13.6969 4.3031 17.5219 8.99998 17.5219C13.6969 17.5219 17.5219 13.6969 17.5219 9.00001C17.5219 4.30313 13.6969 0.506256 8.99998 0.506256ZM8.99998 16.2563C5.00623 16.2563 1.77185 12.9938 1.77185 9.00001C1.77185 5.00626 5.00623 1.77188 8.99998 1.77188C12.9937 1.77188 16.2562 5.03438 16.2562 9.02813C16.2562 12.9938 12.9937 16.2563 8.99998 16.2563Z"
                        fill="#0B76B7"></path>
                    <path
                        d="M10.125 7.65001H7.87496C7.53746 7.65001 7.22809 7.93126 7.22809 8.29688V13.9219C7.22809 14.2594 7.50934 14.5688 7.87496 14.5688H10.125C10.4625 14.5688 10.7718 14.2875 10.7718 13.9219V8.29688C10.7718 7.93126 10.4625 7.65001 10.125 7.65001ZM9.50621 13.275H8.52184V8.91563H9.50621V13.275Z"
                        fill="#0B76B7"></path>
                    <path
                        d="M8.99996 3.45938C8.04371 3.45938 7.22809 4.24688 7.22809 5.23126C7.22809 6.21563 8.01559 7.00313 8.99996 7.00313C9.98434 7.00313 10.7718 6.21563 10.7718 5.23126C10.7718 4.24688 9.95621 3.45938 8.99996 3.45938ZM8.99996 5.70938C8.71871 5.70938 8.49371 5.48438 8.49371 5.20313C8.49371 4.92188 8.71871 4.69688 8.99996 4.69688C9.28121 4.69688 9.50621 4.92188 9.50621 5.20313C9.50621 5.48438 9.28121 5.70938 8.99996 5.70938Z"
                        fill="#0B76B7"></path>
                </svg>
            </div>
            <div class="w-full">
                <p class="text-base leading-relaxed text-body-color dark:text-dark-6">
                    Forgot your password? No problem. Just let us know your email address.
                </p>
            </div>
        </div>
        <form @submit.prevent="submit">
            <div class="mb-6">
                <TextInput id="email" v-model="form.email" type="email" class="mt-1 block w-full" required autofocus
                    autocomplete="username" placeholder="Email..." />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div class="mb-10">
                <PrimaryButton
                    class="w-full cursor-pointer rounded-md border border-primary justify-center px-5 py-3 font-medium text-white transition hover:bg-opacity-50"
                    :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Email Password Reset Link
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>

</template>
