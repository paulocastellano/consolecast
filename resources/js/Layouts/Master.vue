<template>
    <div>
        <Head :title="title" />
        <Header />

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

export default {
    components: {
        Head,

        Header,
        Footer,
        JetBanner,
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
