<template>
    <a
        :href="
            route('lessons.show', {
                slug: course.slug,
                lesson: lesson.slug,
            })
        "
        class="flex justify-start border border-gray-200 rounded-lg px-4 py-4 hover:bg-gray-100 hover:border-gray-100 group"
    >
        <div class="flex items-center w-full">
            <div
                class="flex justify-center items-center mr-5 ml-1 rounded-full bg-gray-100 group-hover:bg-white p-2"
            >
                <PlayIcon
                    v-if="
                        (lesson.access == 'free') |
                            (lesson.access == 'free_logged')
                    "
                    class="h-5 w-5 text-gray-400"
                />
                <LockClosedIcon v-else class="h-5 w-5 text-gray-400" />
            </div>
            <div
                :class="{
                    'text-sm font-medium line-clamp-1 mr-4': true,
                    'text-gray-600': true,
                    'text-blue-600': false,
                }"
            >
                {{ lesson.name }}
            </div>
            <div
                class="text-xs text-gray-600 opacity-75 flex items-center ml-auto"
            >
                <ClockIcon class="w-4 h-4 text-gray-600 mr-1" />

                <div class="whitespace-nowrap">
                    {{ lesson.watch_time }}
                </div>
            </div>
        </div>
    </a>
</template>

<script>
import {
    ClockIcon,
    FilmIcon,
    LockClosedIcon,
    PlayIcon,
} from "@heroicons/vue/outline";
export default {
    props: {
        course: {
            required: true,
        },
        lesson: {
            required: true,
        },
    },

    components: {
        ClockIcon,
        FilmIcon,
        LockClosedIcon,
        PlayIcon,
    },
};
</script>
