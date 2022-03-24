<template>
    <div
        class="px-4 py-4 sm:px-6 sm:py-6 bg-gray-800 rounded-xl border border-gray-700 text-gray-100"
    >
        <jet-section-title>
            <template #title>
                <div class="text-gray-100">
                    <slot name="title"></slot>
                </div>
            </template>
            <template #description>
                <div class="text-gray-300">
                    <slot name="description"></slot>
                </div>
            </template>
        </jet-section-title>

        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="pt-4 text-gray-400">
                <slot name="content"></slot>
            </div>
        </div>
    </div>
</template>

<script>
import JetSectionTitle from "./SectionTitle.vue";
export default {
    components: {
        JetSectionTitle,
    },
};
</script>
