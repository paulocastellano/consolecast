<template>
    <div :class="{ 'bg-gray-900': bgIsDark, 'bg-white': bgIsLight }">
        <Head :title="title" />
        <Header />

        <GlobalSearch />

        <jet-banner />

        <div class="min-h-0 flex-1 flex">
            <div class="flex-1 overflow-y-auto">
                <main class="h-fit flex-1 flex max-w-7xl mx-auto">
                    <section
                        class="min-w-0 flex-1 flex flex-col lg:order-last px-6 py-6"
                    >
                        <slot v-if="$slots.pageHeader" name="pageHeader"></slot>
                        <slot></slot>
                    </section>
                    <aside
                        v-if="$slots.sidebar"
                        class="hidden lg:block lg:flex-shrink-0 lg:order-first min-h-full"
                    >
                        <div
                            class="flex flex-col w-72 border-r border-gray-700 min-h-full"
                        >
                            <div class="sticky top-0">
                                <slot name="sidebar"></slot>
                            </div>
                        </div>
                    </aside>
                </main>
            </div>
        </div>
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
