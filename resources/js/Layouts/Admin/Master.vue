<template>
    <div>
        <Head :title="title" />
        <Sidebar />
        <Banner />
        <div class="md:pl-64 flex flex-col flex-1">
            <main class="flex-1">
                <div class="py-16">
                    <div class="max-w-7xl mx-auto">
                        <slot></slot>
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Sidebar from "./Sidebar.vue";
import Banner from "@/Components/Banner";

export default {
    props: {
        title: {
            required: false,
            default: "",
        },
    },
    components: {
        Banner,
        Head,
        Sidebar,
    },

    data() {
        return {};
    },
};
</script>
