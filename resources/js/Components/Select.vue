<template>
    <select
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
        class="shadow-sm border border-gray-300 focus:outline-none focus:border-gray-800 focus:ring-0 rounded text-sm placeholder-gray-400 text-gray-800"
    >
        <option :value="null">Select...</option>
        <option v-for="(value, index) in values" :key="index" :value="index">
            {{ value }}
        </option>
    </select>
</template>

<script>
export default {
    props: ["values", "modelValue"],
    emits: ["update:modelValue"],
    methods: {
        focus() {
            this.$refs.input.focus();
        },
    },
};
</script>
