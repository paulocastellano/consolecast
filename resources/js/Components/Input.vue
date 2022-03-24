<template>
    <input
        class="bg-gray-700 autofill:bg-gray-700 text-gray-100 border-gray-600 placeholder-gray-500 focus:outline-none focus:border-indigo-600 rounded-md text-sm shadow-sm"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    />
</template>

<script>
export default {
    props: ["modelValue"],

    emits: ["update:modelValue"],

    methods: {
        focus() {
            this.$refs.input.focus();
        },
    },
};
</script>
