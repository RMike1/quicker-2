<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: String,
});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        ref="input"
        class="rounded-md dark:border-gray-700 dark:bg-zinc-900 dark:text-gray-300 border border-stroke bg-transparent px-5 py-3 text-base border-gray-700 text-body-color outline-none focus:border-gray-500 focus-visible:shadow-none"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
    >
</template>
