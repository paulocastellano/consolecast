<template>
    <div class="py-8">
        <div
            :key="course.id"
            class="flex flex-col rounded-lg overflow-hidden bg-white p-12"
        >
            <div class="flex-1">
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
                    <div class="text-4xl font-semibold text-gray-800">
                        {{ course.name }}
                    </div>
                    <div class="mt-3 prose font-medium text-gray-600">
                        {{ course.description }}
                    </div>
                </div>

                <div class="flex items-center space-x-4 mt-4">
                    <div class="flex items-center space-x-1">
                        <FilmIcon class="h-4 w-4 text-gray-400" />
                        <div class="text-xs text-gray-400 font-medium">
                            {{ course.lessons_count }} Lessons
                        </div>
                    </div>

                    <div class="flex items-center space-x-1">
                        <ClockIcon class="h-4 w-4 text-gray-400" />
                        <div class="text-xs text-gray-400 font-medium">
                            {{ course.watch_time }}
                        </div>
                    </div>
                </div>

                <div class="flex items-center space-x-4 mt-6">
                    <a
                        :href="
                            route('lessons.show', {
                                slug: course.slug,
                                lesson: firstLesson.slug,
                            })
                        "
                        class="text-center items-center px-4 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue transition ease-in-out duration-150"
                    >
                        Start Watching
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { ClockIcon, FilmIcon } from "@heroicons/vue/outline";
export default {
    props: {
        course: {
            required: true,
        },
        firstLesson: {
            required: true,
        },
    },

    components: {
        ClockIcon,
        FilmIcon,
    },
};
</script>
