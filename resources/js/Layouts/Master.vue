<template>
    <div>
        <Head :title="title" />
        <Header />

        <GlobalSearch />

        <jet-banner />

        <slot></slot>

        <Footer />
    </div>
</template>

<script>
import JetBanner from "@/Components/Banner";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Header from "@/Layouts/Header";
import Footer from "@/Layouts/Footer";

import GlobalSearch from "@/Components/Search.vue";

export default {
    components: {
        Head,

        Header,
        Footer,
        JetBanner,
        GlobalSearch,
    },

    props: {
        title: String,
        bgIsLight: {
            required: false,
        },
        bgIsDark: {
            required: false,
            default: true,
        },
    },

    data() {
        return {};
    },
};
</script>
