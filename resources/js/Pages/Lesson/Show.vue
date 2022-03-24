<template>
    <div class="flex bg-gray-200">
        <div
            class="hidden md:flex md:w-[450px] md:flex-col md:fixed md:inset-y-0 bg-gray-900 px-4 py-8 h-full overflow-y-auto"
        >
            <div class="mb-4">
                <h2 class="font-bold text-xl text-white">Lessons</h2>
            </div>

            <div class="space-y-4">
                <div v-for="courseLesson in course.lessons" :key="lesson.id">
                    <a
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
                    </a>
                </div>
            </div>
        </div>
        <div class="md:pl-[450px] flex flex-col flex-1 min-h-screen">
            <main class="h-full w-full px-4 lg:px-8 py-4 lg:py-8">
                <div class="">
                    {{ lesson.name }}
                </div>
                <div class="video-player" ref="video"></div>
                <div></div>
            </main>
        </div>
    </div>
</template>

<script>
import Player from "@vimeo/player";

import { LockClosedIcon, PlayIcon, ClockIcon } from "@heroicons/vue/outline";

export default {
    props: ["course", "lesson"],

    components: {
        LockClosedIcon,
        PlayIcon,
        ClockIcon,
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
    },
};
</script>
