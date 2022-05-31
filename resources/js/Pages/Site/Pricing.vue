<template>
    <MasterLayout :bgIsDark="true">
        <Head title="Pricing" />

        <div class="bg-blue-dark">
            <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
                <h2
                    class="text-3xl font-extrabold text-gray-900 sm:text-5xl sm:leading-none sm:tracking-tight lg:text-6xl"
                >
                    Get unlimited access with a pro membership.
                </h2>
                <p class="mt-6 max-w-2xl text-xl text-gray-500">
                    Join thousands of developers improving their skills every
                    day.
                </p>

                <div
                    class="mt-24 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8"
                >
                    <div
                        class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col"
                    >
                        <div class="flex-1">
                            <div class="text-center">
                                <div class="flex justify-center">
                                    <img
                                        :src="
                                            asset('images/pricing/monthly.png')
                                        "
                                        alt=""
                                    />
                                </div>

                                <h3 class="text-xl font-bold text-gray-900">
                                    Monthly
                                </h3>
                                <p>Access to everything</p>
                                <p
                                    class="mt-4 flex items-baseline justify-center text-gray-900"
                                >
                                    <span
                                        class="text-5xl font-bold tracking-tight"
                                        >$12</span
                                    >
                                    <span class="ml-1 text-xl font-semibold"
                                        >/m</span
                                    >
                                </p>
                            </div>

                            <ul role="list" class="mt-6 space-y-6">
                                <li class="flex">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                    />
                                    <span class="ml-3 text-gray-500 font-medium"
                                        >Unlimited streaming of content</span
                                    >
                                </li>
                                <li class="flex">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                    />
                                    <span class="ml-3 text-gray-500 font-medium"
                                        >Download videos to take with you
                                    </span>
                                </li>
                                <li class="flex">
                                    <CheckCircleIcon
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                    />
                                    <span class="ml-3 text-gray-500 font-medium"
                                        >Access to full source code and
                                        resources</span
                                    >
                                </li>
                            </ul>
                        </div>

                        <Button> Start learning</Button>
                    </div>

                    <div
                        class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col"
                    >
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Startup
                            </h3>

                            <p
                                class="absolute top-0 py-1.5 px-4 bg-indigo-500 rounded-full text-xs font-semibold uppercase tracking-wide text-white transform -translate-y-1/2"
                            >
                                Most popular
                            </p>
                            <p class="mt-4 flex items-baseline text-gray-900">
                                <span
                                    class="text-5xl font-extrabold tracking-tight"
                                    >$32</span
                                >
                                <span class="ml-1 text-xl font-semibold"
                                    >/month</span
                                >
                            </p>
                            <p class="mt-6 text-gray-500">
                                A plan that scales with your rapidly growing
                                business.
                            </p>

                            <!-- Feature list -->
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="flex">
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="ml-3 text-gray-500"
                                        >25 products</span
                                    >
                                </li>

                                <li class="flex">
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="ml-3 text-gray-500"
                                        >Up to 10,000 subscribers</span
                                    >
                                </li>

                                <li class="flex">
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="ml-3 text-gray-500"
                                        >Advanced analytics</span
                                    >
                                </li>

                                <li class="flex">
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="ml-3 text-gray-500"
                                        >24-hour support response time</span
                                    >
                                </li>

                                <li class="flex">
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="ml-3 text-gray-500"
                                        >Marketing automations</span
                                    >
                                </li>
                            </ul>
                        </div>

                        <a
                            href="#"
                            class="bg-indigo-500 text-white hover:bg-indigo-600 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium"
                            >Monthly billing</a
                        >
                    </div>

                    <div
                        class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col"
                    >
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Enterprise
                            </h3>
                            <p class="mt-4 flex items-baseline text-gray-900">
                                <span
                                    class="text-5xl font-extrabold tracking-tight"
                                    >$48</span
                                >
                                <span class="ml-1 text-xl font-semibold"
                                    >/month</span
                                >
                            </p>
                            <p class="mt-6 text-gray-500">
                                Dedicated support and infrastructure for your
                                company.
                            </p>

                            <!-- Feature list -->
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="flex">
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="ml-3 text-gray-500"
                                        >Unlimited products</span
                                    >
                                </li>

                                <li class="flex">
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="ml-3 text-gray-500"
                                        >Unlimited subscribers</span
                                    >
                                </li>

                                <li class="flex">
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="ml-3 text-gray-500"
                                        >Advanced analytics</span
                                    >
                                </li>

                                <li class="flex">
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="ml-3 text-gray-500"
                                        >1-hour, dedicated support response
                                        time</span
                                    >
                                </li>

                                <li class="flex">
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="ml-3 text-gray-500"
                                        >Marketing automations</span
                                    >
                                </li>

                                <li class="flex">
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    <span class="ml-3 text-gray-500"
                                        >Custom integrations</span
                                    >
                                </li>
                            </ul>
                        </div>

                        <a
                            href="#"
                            class="bg-indigo-50 text-indigo-700 hover:bg-indigo-100 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium"
                            >Monthly billing</a
                        >
                    </div>
                </div>
            </div>

            <div class="">
                <div
                    class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8"
                >
                    <div class="max-w-3xl mx-auto">
                        <h2
                            class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl"
                        >
                            Frequently asked questions
                        </h2>
                        <dl class="mt-6 space-y-6">
                            <Disclosure
                                as="div"
                                v-for="faq in faqs"
                                :key="faq.question"
                                class="px-6 py-3 border border-[#4764AF] rounded-lg"
                                v-slot="{ open }"
                            >
                                <dt class="text-lg">
                                    <DisclosureButton
                                        class="text-left w-full flex items-start text-gray-400"
                                    >
                                        <span
                                            class="mr-4 h-7 flex items-center"
                                        >
                                            <PlusCircleIcon
                                                v-if="!open"
                                                class="h-6 w-6 text-white"
                                                aria-hidden="true"
                                            />

                                            <MinusCircleIcon
                                                v-else
                                                class="h-6 w-6 text-white"
                                                aria-hidden="true"
                                            />
                                        </span>
                                        <span class="font-semibold text-white">
                                            {{ faq.question }}
                                        </span>
                                    </DisclosureButton>
                                </dt>
                                <DisclosurePanel as="dd" class="mt-2 pr-12">
                                    <p class="text-base text-purple-medium">
                                        {{ faq.answer }}
                                    </p>
                                </DisclosurePanel>
                            </Disclosure>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </MasterLayout>
</template>

<script>
import MasterLayout from "@/Layouts/Master.vue";
import { Head } from "@inertiajs/inertia-vue3";

import { Disclosure, DisclosureButton, DisclosurePanel } from "@headlessui/vue";
import { CheckCircleIcon } from "@heroicons/vue/solid";
import { PlusCircleIcon, MinusCircleIcon } from "@heroicons/vue/outline";

import Button from "@/Components/Button.vue";

export default {
    components: {
        MasterLayout,
        Head,
        CheckCircleIcon,
        PlusCircleIcon,
        MinusCircleIcon,

        Disclosure,
        DisclosureButton,
        DisclosurePanel,

        Button,
    },

    data() {
        return {
            faqs: [
                {
                    question: "What does a premium membership give me?",
                    answer: "To take this course, it is recommended to have basic knowledge of mathematics. You'll also need a computer with Node.js installed, as well as access to a web browser and word processor.",
                },
                {
                    question: "Can I cancel?",
                    answer: "To take this course, it is recommended to have basic knowledge of mathematics. You'll also need a computer with Node.js installed, as well as access to a web browser and word processor.",
                },
                {
                    question: "Do you offer student or non profit discounts?",
                    answer: "To take this course, it is recommended to have basic knowledge of mathematics. You'll also need a computer with Node.js installed, as well as access to a web browser and word processor.",
                },
                {
                    question: "May I pay with Paypal?",
                    answer: "To take this course, it is recommended to have basic knowledge of mathematics. You'll also need a computer with Node.js installed, as well as access to a web browser and word processor.",
                },
                {
                    question:
                        "Can I upgrade from a monthly to yearly subscription?",
                    answer: "To take this course, it is recommended to have basic knowledge of mathematics. You'll also need a computer with Node.js installed, as well as access to a web browser and word processor.",
                },
                {
                    question: "Was the movie, Total Recall, all a dream?",
                    answer: "To take this course, it is recommended to have basic knowledge of mathematics. You'll also need a computer with Node.js installed, as well as access to a web browser and word processor.",
                },
                {
                    question: "Are any of the videos free?",
                    answer: "To take this course, it is recommended to have basic knowledge of mathematics. You'll also need a computer with Node.js installed, as well as access to a web browser and word processor.",
                },
            ],
        };
    },
};
</script>
