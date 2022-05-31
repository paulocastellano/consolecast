<template>
    <MasterLayout :bgIsDark="false">
        <Head :title="course.name" />

        <section
            class="bg-no-repeat bg-primary-500 bg-[url('/images/courses/hero-bg.svg')] bg-center bg-auto"
        >
            <div class="max-w-7xl mx-auto">
                <div
                    class="flex flex-col rounded-lg overflow-hidden px-12 pt-12"
                >
                    <div class="flex">
                        <div class="flex-1">
                            <div class="space-x-2">
                                <span
                                    v-for="topic in course.topics"
                                    :key="topic.id"
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-white bg-opacity-10 text-white uppercase"
                                >
                                    {{ topic.name }}
                                </span>

                                <!-- <span
                                v-if="course.in_development"
                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-900 text-white uppercase"
                            >
                                In Development
                            </span> -->
                            </div>

                            <div class="mt-4">
                                <div class="text-4xl font-bold text-green-500">
                                    {{ course.name }}
                                </div>
                                <div
                                    class="mt-3 prose text-base font-medium text-[#EBF3FA]"
                                >
                                    {{ course.description }}
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 mt-6">
                                <a
                                    :href="
                                        route('lessons.show', {
                                            slug: course.slug,
                                            lesson: lessons[0].slug,
                                        })
                                    "
                                    class="text-center flex items-center px-4 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue transition ease-in-out duration-150"
                                >
                                    <PlayIcon class="w-4 h-4 mr-2" />
                                    <div>Start Watching</div>
                                </a>

                                <a
                                    :href="
                                        route('lessons.show', {
                                            slug: course.slug,
                                            lesson: lessons[0].slug,
                                        })
                                    "
                                    class="text-center items-center px-4 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue transition ease-in-out duration-150"
                                >
                                    Add to watchlist
                                </a>
                            </div>
                        </div>

                        <div>
                            <div>
                                <img
                                    :src="asset('images/courses/hero.svg')"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto bg-[#221D53]">
                <div class="flex items-center divide-x space-x-4 py-4 px-12">
                    <div class="flex items-center space-x-1">
                        <FilmIcon class="h-6 w-6 text-white" />
                        <div class="text-sm font-bold text-white">
                            {{ course.lessons_count }} Lessons
                        </div>
                    </div>

                    <div class="flex items-center space-x-1">
                        <ClockIcon class="h-6 w-6 text-white" />
                        <div class="text-sm font-bold text-white">
                            {{ course.watch_time }}
                        </div>
                    </div>

                    <div class="flex items-center space-x-1">
                        <ChartSquareBarIcon class="h-6 w-6 text-white" />
                        <div class="text-sm font-bold text-white">
                            {{ course.level }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-20 pb-36">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-2 gap-x-8">
                    <div class="space-y-8">
                        <div class="">
                            <div class="font-semibold text-xl mb-4">
                                Your teacher
                            </div>
                            <div class="flex items-start">
                                <div>
                                    <span class="flex h-10 w-10">
                                        <img
                                            class="rounded-full object-cover"
                                            src="https://changelogfy.nyc3.digitaloceanspaces.com/users/avatar/264893d25d7123a97b1c597bd3f9a20068fa79ce14b86a685c377d03d181b513.png"
                                            alt="Paulo Castellano"
                                        />
                                    </span>
                                </div>

                                <div class="ml-3">
                                    <div class="font-bold text-lg">
                                        Paulo Castellano
                                    </div>
                                    <div class="prose">
                                        Hey, I'm the founder of Console Cast and
                                        a full-stack developer of over 10 years.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <div>
                            <div class="text-white text-xl font-bold">
                                Course episodes ({{ course.lessons_count }})
                            </div>
                        </div>
                        <LessonCard
                            :course="course"
                            :lesson="lesson"
                            v-for="lesson in lessons"
                            :key="lesson.id"
                        />
                    </div>
                </div>
            </div>
        </section>
    </MasterLayout>
</template>

<script>
import MasterLayout from "@/Layouts/Master.vue";
import { Head } from "@inertiajs/inertia-vue3";

import LessonCard from "@/Components/LessonCard.vue";

import {
    ClockIcon,
    FilmIcon,
    ChartSquareBarIcon,
} from "@heroicons/vue/outline";
import { PlayIcon } from "@heroicons/vue/solid";

export default {
    props: ["course", "lessons"],
    components: {
        MasterLayout,
        Head,
        LessonCard,
        PlayIcon,
        ClockIcon,
        FilmIcon,
        ChartSquareBarIcon,
    },

    data() {
        return {};
    },
};
</script>
