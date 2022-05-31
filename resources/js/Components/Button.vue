<template>
    <button
        :type="type"
        class="inline-flex items-center justify-center px-4 py-3 bg-blue-dark border border-transparent rounded-lg font-semibold text-sm text-white hover:bg-[#19153D] active:bg-[#19153D] focus:outline-none focus:border-[#19153D] focus:shadow-outline-blue transition ease-in-out duration-150"
    >
        <slot />
    </button>
</template>

<script>
export default {
    props: {
        type: {
            type: String,
            default: "submit",
        },
    },
};
</script>
