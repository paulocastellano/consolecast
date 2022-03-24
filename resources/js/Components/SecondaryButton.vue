<template>
    <button
        :type="type"
        class="inline-flex items-center px-4 py-2 font-semibold text-xs text-gray-100 uppercase tracking-widest hover:text-gray-300 focus:outline-none focus:border-gray-300 active:text-gray-100 active:bg-gray-700 disabled:opacity-25 transition rounded-md bg-gray-700 border border-gray-700"
    >
        <slot></slot>
    </button>
</template>

<script>
export default {
    props: {
        type: {
            type: String,
            default: "button",
        },
    },
};
</script>
