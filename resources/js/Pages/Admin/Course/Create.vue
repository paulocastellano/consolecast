<template>
    <AdminLayout>
        <Head title="Create Course" />

        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">
                        New Course
                    </h1>
                    <p class="mt-2 text-sm text-gray-700">
                        A list of all the courses in ConsoleCast.com including
                        drafts.
                    </p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <CsButtonLink
                        :href="route('admin.courses.index')"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                    >
                        Cancel
                    </CsButtonLink>
                </div>
            </div>
            <div></div>
        </div>
    </AdminLayout>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import CsButtonLink from "@/Components/ButtonLink.vue";
import AdminLayout from "@/Layouts/Admin/Master.vue";

export default {
    components: {
        Head,
        AdminLayout,
        CsButtonLink,
    },
    props: ["courses"],
    methods: {},
};
</script>
