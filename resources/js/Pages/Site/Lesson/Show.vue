<template>
    <div class="flex bg-gray-100">
        <Head :title="`${lesson.name} - ${course.name}`" />
        <div
            class="hidden md:flex md:w-[450px] md:flex-col md:fixed md:inset-y-0 bg-white px-4 py-8 h-full overflow-y-auto"
        >
            <div class="mb-4">
                <a
                    :href="route('courses.show', { slug: course.slug })"
                    class="flex items-center space-x-1"
                >
                    <ChevronLeftIcon class="h-4 w-4" />
                    <span class=""> Course overview </span>
                </a>
            </div>
            <div class="mb-4">
                <div>
                    <div class="text-xl font-semibold mb-1">
                        {{ course.name }}
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-1">
                        <FilmIcon class="h-4 w-4" />
                        <div class="text-xs">
                            {{ course.lessons_count }} Lessons
                        </div>
                    </div>

                    <div class="flex items-center space-x-1">
                        <ClockIcon class="h-4 w-4" />
                        <div class="text-xs">
                            {{ course.watch_time }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <!-- <div v-for="courseLesson in course.lessons" :key="lesson.id"> -->
                <LessonCard
                    :course="course"
                    :lesson="lesson"
                    v-for="lesson in course.lessons"
                    :key="lesson.id"
                />
                <!-- <a
                        :href="
                            route('lessons.show', {
                                slug: course.slug,
                                lesson: courseLesson.slug,
                            })
                        "
                        class="flex justify-start border border-gray-700 rounded px-4 py-4 hover:bg-gray-800"
                    >
                        <div class="flex items-center w-full">
                            <div
                                class="flex justify-center items-center mr-5 ml-1 rounded-full bg-gray-700 p-2"
                            >
                                <PlayIcon
                                    v-if="courseLesson.is_free"
                                    class="h-4 w-4 text-gray-400"
                                />
                                <LockClosedIcon
                                    v-else
                                    class="h-4 w-4 text-gray-400"
                                />
                            </div>
                            <div
                                :class="{
                                    'text-sm font-semibold': true,
                                    'text-white': courseLesson.id != lesson.id,
                                    'text-blue-600':
                                        courseLesson.id == lesson.id,
                                }"
                            >
                                {{ courseLesson.name }}
                            </div>
                            <div
                                class="text-xs text-gray-400 opacity-75 flex items-center ml-auto"
                            >
                                <ClockIcon class="w-4 h-4 text-gray-400 mr-1" />

                                <div class="whitespace-nowrap">
                                    {{ courseLesson.duration }}
                                </div>
                            </div>
                        </div>
                    </a> -->
                <!-- </div> -->
            </div>
        </div>
        <div class="md:pl-[450px] flex flex-col flex-1 min-h-screen">
            <main class="h-full w-full px-4 lg:px-8 py-4 lg:py-8">
                <div class="">
                    {{ lesson.name }}
                </div>
                <div class="video-player rounded-md" ref="video"></div>
                <div>
                    <div class="py-8">
                        <div class="text-5xl font-bold text-gray-800">
                            Comments
                        </div>
                    </div>

                    <div class="space-y-8">
                        <div
                            v-for="lessonComment in lesson.lesson_comments"
                            :key="lessonComment.id"
                            class="flex items-start w-full"
                        >
                            <div>
                                <span class="flex h-8 w-8">
                                    <img
                                        class="rounded-full object-cover"
                                        :src="lessonComment.user.avatar"
                                        :alt="lessonComment.user.name"
                                    />
                                </span>
                            </div>

                            <div class="w-full ml-3">
                                <div
                                    class="mb-1 flex items-center justify-start text-gray-900 font-semibold text-sm transition"
                                >
                                    {{ lessonComment.user.name }}
                                </div>
                                <div
                                    class="mb-0 text-gray-600 transition text-xs"
                                >
                                    {{ formatDate(lessonComment.created_at) }}
                                </div>
                                <div
                                    class="prose prose-img:rounded max-w-none transition"
                                    v-html="markdownToHtml(lessonComment.body)"
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>

<script>
import LessonCard from "@/Components/LessonCard.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Player from "@vimeo/player";
import { marked } from "marked";

import {
    LockClosedIcon,
    PlayIcon,
    ClockIcon,
    FilmIcon,
    ChevronLeftIcon,
} from "@heroicons/vue/outline";

export default {
    props: ["course", "lesson"],

    components: {
        LessonCard,
        Head,
        LockClosedIcon,
        PlayIcon,
        FilmIcon,
        ClockIcon,
        ChevronLeftIcon,
    },

    data() {
        return {
            player: null,
        };
    },

    mounted() {
        this.startPlayer();
    },

    methods: {
        startPlayer() {
            const player = new Player(this.$refs.video, {
                id: this.lesson.video_id,
                width: 640,
                height: 360,
                responsive: true,
            });

            //  duração do video
            player.getDuration().then((duration) => {
                console.log(`duração ${duration}`);
            });

            // deu play
            player.on("play", () => {
                console.log("video start");
            });

            // finalizou o video
            player.on("ended", () => {
                console.log("video end");
            });
        },

        markdownToHtml(data) {
            marked.setOptions({
                renderer: new marked.Renderer(),
                highlight: function (code, lang) {
                    const hljs = require("highlight.js");
                    const language = hljs.getLanguage(lang)
                        ? lang
                        : "plaintext";
                    return hljs.highlight(code, { language }).value;
                },
                langPrefix: "hljs language-", // highlight.js css expects a top-level 'hljs' class.
                pedantic: false,
                gfm: true,
                breaks: false,
                sanitize: false,
                smartLists: true,
                smartypants: false,
                xhtml: false,
            });

            return marked(data);
        },
        formatDate(date) {
            return dayjs(date).fromNow();
        },
    },
};
</script>
