<script setup>
    import { Link } from '@inertiajs/vue3';
</script>
<template>
    <section class="bg-gray-1 py-20 lg:py-[120px] dark:bg-zinc-900">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div
                        class="relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-zinc-700/5 px-10 py-16 text-center sm:px-12 md:px-[60px] dark:bg-dark-2">
                        <div class="mb-10 text-center md:mb-16">
                            <h2 class="text-zinc-400 text-4xl mb-6">
                                <slot name="header" />
                            </h2>
                            <Link :href="'/'" class="mx-auto inline-block max-w-[160px]">
                            <img src="assets/images/logo.png" alt="logo" />
                            </Link>
                        </div>

                        <slot />

                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
