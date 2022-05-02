<template>
    <div>
        <Head :title="title" />
        <Sidebar />
        <div class="md:pl-64 flex flex-col flex-1">
            <main class="flex-1">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <h1 class="text-2xl font-semibold text-gray-900">
                            {{ title }}
                        </h1>
                    </div>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <div class="py-4">
                            <slot></slot>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Sidebar from "./Sidebar.vue";

export default {
    props: {
        title: {
            required: false,
            default: "",
        },
    },
    components: {
        Head,
        Sidebar,
    },

    data() {
        return {};
    },
};
</script>
