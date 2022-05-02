<template>
    <MasterLayout>
        <Head title="Home" />

        <div
            class="relative pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8"
        >
            <div class="relative max-w-7xl mx-auto">
                <div class="text-center">
                    <h2
                        class="text-3xl tracking-tight font-extrabold text-white sm:text-4xl"
                    >
                        Courses
                    </h2>
                    <p
                        class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4"
                    >
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Ipsa libero labore natus atque, ducimus sed.
                    </p>
                </div>
                <div
                    class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none"
                >
                    <CourseCard
                        :course="course"
                        v-for="course in courses"
                        :key="course.id"
                    />
                </div>
            </div>
        </div>
    </MasterLayout>
</template>

<script>
import MasterLayout from "@/Layouts/Master.vue";
import { Head } from "@inertiajs/inertia-vue3";
import CourseCard from "@/Components/CourseCard.vue";

export default {
    props: ["courses"],
    components: {
        MasterLayout,
        Head,

        CourseCard,
    },

    data() {
        return {};
    },
};
</script>
