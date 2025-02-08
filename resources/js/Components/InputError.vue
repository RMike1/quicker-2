<script setup>
defineProps({
    message: String,
});
</script>

<template>
    <div v-show="message">
        <p class="text-sm text-red-600 dark:text-red-400 text-start">
            {{ message }}
        </p>
    </div>
</template>
