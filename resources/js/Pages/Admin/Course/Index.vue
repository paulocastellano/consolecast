<template>
    <AdminLayout>
        <Head title="Courses" />

        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">
                        Courses ({{ courses.length }})
                    </h1>
                    <p class="mt-2 text-sm text-gray-700">
                        A list of all the courses in ConsoleCast.com including
                        drafts.
                    </p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <CsButtonLink
                        :href="route('admin.courses.create')"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                    >
                        Add course
                    </CsButtonLink>
                </div>
            </div>
            <div
                class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg"
            >
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                        <tr>
                            <th
                                scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6"
                            >
                                Name
                            </th>
                            <th
                                scope="col"
                                class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell"
                            >
                                Lessons
                            </th>
                            <th
                                scope="col"
                                class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell"
                            >
                                Watch Time
                            </th>
                            <th
                                scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                            >
                                Level
                            </th>
                            <th
                                scope="col"
                                class="relative py-3.5 pl-3 pr-4 sm:pr-6"
                            >
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        <tr v-for="course in courses" :key="course.id">
                            <td
                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6"
                            >
                                <div class="flex flex-col">
                                    <div
                                        class="flex items-center space-x-2 mb-1"
                                    >
                                        <div class="font-medium text-gray-900">
                                            {{ course.name }}
                                        </div>
                                        <div>
                                            <span
                                                v-if="course.published"
                                                class="inline-flex rounded bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800"
                                            >
                                                {{ course.published }}
                                            </span>

                                            <span
                                                v-else
                                                class="inline-flex rounded bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800"
                                            >
                                                {{ course.published }}
                                            </span>
                                        </div>
                                    </div>
                                    <div
                                        class="text-gray-500"
                                        v-for="topic in course.topics"
                                        :key="topic.id"
                                    >
                                        <span
                                            class="inline-flex rounded bg-gray-100 px-2 text-xs font-semibold leading-5 text-gray-800"
                                        >
                                            {{ topic.name }}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td
                                class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 sm:table-cell"
                            >
                                {{ course.lessons_count }}
                            </td>
                            <td
                                class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell"
                            >
                                {{ course.watch_time }}
                            </td>
                            <td
                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                            >
                                {{ course.level }}
                            </td>
                            <td
                                class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6"
                            >
                                <a
                                    :href="
                                        route('admin.courses.edit', course.id)
                                    "
                                    class="text-indigo-600 hover:text-indigo-900"
                                >
                                    Edit
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
