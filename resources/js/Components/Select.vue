<template>
    <select
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
        id="location"
        name="location"
        class="bg-gray-700 text-gray-100 autofill:bg-gray-700 border-gray-600 focus:outline-none rounded-md text-sm placeholder-gray-400 shadow-sm"
    >
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
