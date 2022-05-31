<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <MasterLayout :bgIsDark="true">
        <Head title="Home" />
    </MasterLayout>
</template>

<script>
import MasterLayout from "@/Layouts/Master.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { CheckCircleIcon } from "@heroicons/vue/solid";
import { CheckIcon } from "@heroicons/vue/outline";

import CourseCard from "@/Components/CourseCard.vue";

export default {
    props: ["featuredCourses", "lastCourses", "trendingCourses"],
    components: {
        MasterLayout,
        Head,
        CourseCard,
        CheckIcon,

        CheckCircleIcon,
    },

    data() {
        return {};
    },
};
</script>
