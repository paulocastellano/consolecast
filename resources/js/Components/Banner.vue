<template>
    <div
        v-if="show && message"
        aria-live="assertive"
        class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start z-50"
    >
        <div
            class="w-full flex flex-col absolute bottom-0 right-0 mr-6 mb-6 items-center space-y-4 sm:items-end"
        >
            <transition
                enter-active-class="transform ease-out duration-300 transition"
                enter-from-class="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                enter-to-class="translate-y-0 opacity-100 sm:translate-x-0"
                leave-active-class="transition ease-in duration-100"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div
                    class="max-w-sm w-full bg-white shadow-2xl rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden"
                >
                    <div class="p-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <CheckCircleIcon
                                    v-if="style == 'success'"
                                    class="h-6 w-6 text-green-400"
                                    aria-hidden="true"
                                />
                                <CheckCircleIcon
                                    v-if="style == 'danger'"
                                    class="h-6 w-6 text-red-400"
                                    aria-hidden="true"
                                />
                            </div>
                            <div class="ml-3 w-0 flex-1 pt-0.5">
                                <p
                                    v-if="style == 'success'"
                                    class="text-sm font-medium text-gray-900"
                                >
                                    Success!
                                </p>
                                <p
                                    v-if="style == 'danger'"
                                    class="text-sm font-medium text-gray-900"
                                >
                                    Ops!
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    {{ message }}
                                </p>
                            </div>
                            <div class="ml-4 flex-shrink-0 flex">
                                <button
                                    @click="show = false"
                                    class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                >
                                    <span class="sr-only">Close</span>
                                    <XIcon class="h-5 w-5" aria-hidden="true" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </div>
    </div>
</template>

<script>
import { CheckCircleIcon } from "@heroicons/vue/outline";
import { XIcon } from "@heroicons/vue/solid";

export default {
    components: {
        CheckCircleIcon,
        XIcon,
    },

    data() {
        return {
            show: true,
        };
    },

    watch: {
        "$page.props.flash": {
            handler() {
                this.show = true;
                setTimeout(() => {
                    this.show = false;
                }, 3000);
            },
            deep: true,
        },
    },

    computed: {
        style() {
            return this.$page.props.flash?.bannerStyle || "success";
        },

        message() {
            return this.$page.props.flash?.banner || "";
        },
    },
};
</script>
