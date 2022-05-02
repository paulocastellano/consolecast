<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <MasterLayout :bgIsDark="true">
        <Head title="Home" />

        <section class="bg-blue-900">
            <div class="mx-auto max-w-7xl z-10 py-36">
                <div class="">
                    <div
                        class="px-4 sm:px-6 text-center md:max-w-3xl md:mx-auto lg:col-span-6 lg:flex lg:items-center"
                    >
                        <div>
                            <h1
                                class="mt-4 text-4xl font-bold text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl"
                            >
                                <span class="md:block">
                                    Practical screencasts
                                </span>
                                <span class="text-green-500 md:block">
                                    for developers
                                </span>
                            </h1>

                            <!-- <h2
                                class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl"
                            >
                                Want screencasts that focus on building actual
                                stuff? If you're looking to learn Laravel,
                                Livewire, Vue, Nuxt and more, we've got you
                                covered
                            </h2> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="px-4 lg:py-16 bg-blue-900">
            <div class="relative max-w-7xl mx-auto">
                <div class="text-left mb-3">
                    <h2 class="text-xl font-bold text-gray-300 sm:text-3xl">
                        Featured
                    </h2>
                </div>
                <div
                    class="max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none"
                >
                    <CourseCard
                        :course="course"
                        v-for="course in featuredCourses"
                        :key="course.id"
                    />
                </div>
            </div>
        </div>

        <div class="px-4 lg:py-16 bg-blue-900">
            <div class="relative max-w-7xl mx-auto">
                <div class="text-left mb-3">
                    <h2 class="text-xl font-bold text-gray-300 sm:text-3xl">
                        Recently added
                    </h2>
                </div>
                <div
                    class="max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none"
                >
                    <CourseCard
                        :course="course"
                        v-for="course in lastCourses"
                        :key="course.id"
                    />
                </div>
            </div>
        </div>

        <div class="px-4 lg:py-16 bg-blue-900">
            <div class="relative max-w-7xl mx-auto">
                <div class="text-left mb-3">
                    <h2
                        class="text-xl tracking-tight font-bold text-gray-300 sm:text-3xl"
                    >
                        Trending
                    </h2>
                </div>
                <div
                    class="max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none"
                >
                    <CourseCard
                        :course="course"
                        v-for="course in trendingCourses"
                        :key="course.id"
                    />
                </div>
            </div>
        </div>

        <section class="bg-blue-900">
            <div class="relative px-6 sm:px-10 py-12 lg:py-48">
                <div class="relative max-w-7xl mx-auto">
                    <div class="mb-10 md:mb-16">
                        <h2
                            class="mb-4 text-3xl font-bold bg-gradient-to-br from-indigo-300 via-blue-300 to-green-300 text-transparent bg-clip-text lg:text-5xl text-center"
                        >
                            Get unlimited access with a pro membership.
                        </h2>

                        <p
                            class="max-w-screen-md mx-auto text-left text-gray-300 md:text-lg md:text-center"
                        >
                            Join thousands of developers improving their skills
                            every day.
                        </p>
                    </div>
                    <div
                        class="flex flex-wrap items-center justify-center gap-4 sm:gap-0"
                    >
                        <div
                            class="w-full p-6 bg-black border border-gray-700 rounded-lg sm:w-1/3 bg-opacity-20 sm:rounded-r-none sm:p-8"
                        >
                            <div class="mb-4">
                                <h3
                                    class="text-2xl font-semibold text-gray-100 sm:text-3xl"
                                >
                                    Monthly
                                </h3>
                                <p class="text-gray-300">
                                    Basic features for you start to grow your
                                    Twitter profile.
                                </p>
                            </div>
                            <div class="mb-4 space-x-2 flex items-center">
                                <span class="text-4xl font-bold text-gray-100"
                                    >$9</span
                                >
                                <span class="text-base text-gray-300"
                                    >/month</span
                                >
                            </div>
                            <ul class="mb-6 space-y-2 text-gray-300">
                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Write & Publish Threads</span>
                                </li>

                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Images & Gifs</span>
                                </li>
                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Multi Account</span>
                                </li>
                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Email Support</span>
                                </li>
                            </ul>
                            <a
                                href="{{ route('register') }}"
                                class="block px-8 py-3 text-sm font-semibold text-center text-gray-100 transition duration-100 bg-white rounded-lg outline-none bg-opacity-10 hover:bg-opacity-20 md:text-base"
                            >
                                Get Started Free</a
                            >
                        </div>

                        <!-- Premium Plan -->
                        <div
                            class="w-full p-6 rounded-lg shadow-xl sm:w-1/3 bg-gradient-to-br from-indigo-600 to-indigo-400 sm:p-8"
                        >
                            <div
                                class="flex flex-col items-start justify-between gap-4 mb-4 lg:flex-row"
                            >
                                <div>
                                    <h3
                                        class="text-2xl font-semibold text-white sm:text-3xl"
                                    >
                                        Yearly
                                    </h3>
                                    <p class="text-indigo-100">
                                        Pro features for you obtain the max
                                        power of your Twitter account.
                                    </p>
                                </div>
                            </div>
                            <div class="mb-4 space-x-2 flex items-center">
                                <span class="text-4xl font-bold text-white"
                                    >$79</span
                                >
                                <span class="text-base text-gray-300"
                                    >/year</span
                                >
                            </div>
                            <ul class="mb-6 space-y-2 text-indigo-100">
                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Scheduling</span>
                                </li>
                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Analytics</span>
                                </li>
                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Calendar View</span>
                                </li>
                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Share Preview</span>
                                </li>

                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Chat Support</span>
                                </li>
                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Supports Development ❤️</span>
                                </li>
                            </ul>
                            <a
                                href="{{ route('register') }}"
                                class="block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 bg-white rounded-lg outline-none bg-opacity-20 hover:bg-opacity-30 md:text-base"
                            >
                                Get Started
                            </a>
                        </div>

                        <div
                            class="w-full p-6 bg-black border border-gray-700 rounded-lg sm:w-1/3 bg-opacity-20 sm:rounded-l-none sm:p-8"
                        >
                            <div class="mb-4">
                                <h3
                                    class="text-2xl font-semibold text-gray-100 sm:text-3xl"
                                >
                                    Lifetime
                                </h3>
                                <p class="text-gray-300">
                                    Basic features for you start to grow your
                                    Twitter profile.
                                </p>
                            </div>
                            <div class="mb-4 space-x-2 flex items-center">
                                <span class="text-4xl font-bold text-gray-100"
                                    >$299</span
                                >
                                <span class="text-base text-gray-300"
                                    >/once</span
                                >
                            </div>
                            <ul class="mb-6 space-y-2 text-gray-300">
                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Write & Publish Threads</span>
                                </li>

                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Images & Gifs</span>
                                </li>
                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Multi Account</span>
                                </li>
                                <li class="flex items-center gap-1.5">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-5 h-5"
                                    />
                                    <span>Email Support</span>
                                </li>
                            </ul>
                            <a
                                href="{{ route('register') }}"
                                class="block px-8 py-3 text-sm font-semibold text-center text-gray-100 transition duration-100 bg-white rounded-lg outline-none bg-opacity-10 hover:bg-opacity-20 md:text-base"
                            >
                                Get Started Free</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </MasterLayout>
</template>

<script>
import MasterLayout from "@/Layouts/Master.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { CheckCircleIcon } from "@heroicons/vue/solid";
import { CheckIcon } from "@heroicons/vue/outline";

import CourseCard from "@/Components/CourseCard.vue";

export default {
    props: ["featuredCourses", "lastCourses", "trendingCourses"],
    components: {
        MasterLayout,
        Head,
        CourseCard,
        CheckIcon,

        CheckCircleIcon,
    },

    data() {
        return {};
    },
};
</script>
