<template>
    <div
        class="px-4 py-4 sm:px-6 sm:py-6 bg-gray-800 rounded-xl border border-gray-700 text-gray-100"
    >
        <jet-section-title>
            <template #title>
                <div class="flex items-center text-gray-100">
                    <slot name="title"></slot></div
            ></template>
            <template #description>
                <div class="text-gray-300">
                    <slot name="description"></slot>
                </div>
            </template>
        </jet-section-title>

        <form @submit.prevent="$emit('submitted')">
            <div class="pt-4">
                <div class="grid gap-6">
                    <slot name="form"></slot>
                </div>
            </div>

            <div class="flex items-center justify-start pt-4" v-if="hasActions">
                <slot name="actions"></slot>
            </div>
        </form>
    </div>
</template>

<script>
import JetSectionTitle from "./SectionTitle.vue";
export default {
    emits: ["submitted"],
    components: {
        JetSectionTitle,
    },
    computed: {
        hasActions() {
            return !!this.$slots.actions;
        },
    },
};
</script>
