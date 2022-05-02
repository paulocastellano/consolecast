<template>
    <MasterLayout :bgIsDark="false">
        <Head :title="course.name" />

        <section class="bg-blue-900 divider-blue-900 py-20">
            <div class="max-w-7xl mx-auto">
                <CourseBanner
                    :course="course"
                    :first-lesson="lessons[0]"
                    class="mb-16"
                />
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

import CourseBanner from "@/Components/CourseBanner.vue";
import LessonCard from "@/Components/LessonCard.vue";

export default {
    props: ["course", "lessons"],
    components: {
        MasterLayout,
        Head,
        CourseBanner,
        LessonCard,
    },

    data() {
        return {};
    },
};
</script>
