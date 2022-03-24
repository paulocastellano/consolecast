<template>
    <button
        :type="type"
        class="inline-flex items-center justify-center px-4 py-2 bg-red-50 border border-red-100 text-red-500 rounded font-semibold text-xs uppercase tracking-widest hover:bg-red-200 focus:outline-none active:bg-red-600 disabled:opacity-25 transition"
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
