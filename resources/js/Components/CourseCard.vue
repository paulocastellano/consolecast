<template>
    <div
        class="flex flex-col rounded-lg overflow-hidden bg-white p-8 hover:bg-gray-100"
    >
        <a :href="route('courses.show', { slug: course.slug })" class="flex-1">
            <div class="space-x-2">
                <span
                    v-for="topic in course.topics"
                    :key="topic.id"
                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gray-200 text-gray-800 uppercase"
                >
                    {{ topic.name }}
                </span>

                <span
                    v-if="course.in_development"
                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-900 text-white uppercase"
                >
                    In Development
                </span>
            </div>

            <div class="mt-4">
                <div class="text-2xl font-semibold text-gray-900">
                    {{ course.name }}
                </div>
                <div
                    class="mt-3 prose prose-sm font-medium text-gray-500 line-clamp-2"
                >
                    {{ course.description }}
                </div>
            </div>

            <div class="flex items-center space-x-4 mt-4">
                <div class="flex items-center space-x-1">
                    <FilmIcon class="h-4 w-4 text-gray-500" />
                    <div class="text-xs text-gray-500 font-medium">
                        {{ course.lessons_count }} Lessons
                    </div>
                </div>

                <div class="flex items-center space-x-1">
                    <ClockIcon class="h-4 w-4 text-gray-500" />
                    <div class="text-xs text-gray-500 font-medium">
                        {{ course.watch_time }}
                    </div>
                </div>
            </div>
            <div class="mt-6 w-full">
                <div
                    class="text-center items-center w-full px-4 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue transition ease-in-out duration-150"
                >
                    Start Watching
                </div>
            </div>
        </a>
    </div>
</template>

<script>
import { ClockIcon, FilmIcon } from "@heroicons/vue/outline";
export default {
    props: {
        course: {
            required: true,
        },
    },

    components: {
        ClockIcon,
        FilmIcon,
    },
};
</script>
