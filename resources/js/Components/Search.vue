<template>
    <div>
        <TransitionRoot :show="open" as="template" @after-leave="query = ''">
            <Dialog
                as="div"
                class="fixed inset-0 z-10 overflow-y-auto p-4 sm:p-6 md:p-20"
                @close="open = false"
            >
                <TransitionChild
                    as="template"
                    enter="ease-out duration-300"
                    enter-from="opacity-0"
                    enter-to="opacity-100"
                    leave="ease-in duration-200"
                    leave-from="opacity-100"
                    leave-to="opacity-0"
                >
                    <DialogOverlay
                        class="fixed inset-0 bg-gray-800 bg-opacity-80 transition-opacity"
                    />
                </TransitionChild>

                <TransitionChild
                    as="template"
                    enter="ease-out duration-300"
                    enter-from="opacity-0 scale-95"
                    enter-to="opacity-100 scale-100"
                    leave="ease-in duration-200"
                    leave-from="opacity-100 scale-100"
                    leave-to="opacity-0 scale-95"
                >
                    <Combobox
                        as="div"
                        class="mx-auto max-w-2xl transform divide-y divide-gray-500 divide-opacity-20 overflow-hidden rounded-xl bg-gray-900 shadow-2xl transition-all"
                        @update:modelValue="onSelect"
                    >
                        <div class="relative">
                            <SearchIcon
                                class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-gray-500"
                                aria-hidden="true"
                            />
                            <ComboboxInput
                                class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-white placeholder-gray-500 focus:ring-0 sm:text-sm"
                                placeholder="Search..."
                                @change="query = $event.target.value"
                            />
                        </div>

                        <ComboboxOptions
                            v-if="query === '' || courses.length > 0"
                            static
                            class="max-h-96 scroll-py-2 divide-y divide-gray-500 divide-opacity-20 overflow-y-auto"
                        >
                            <li class="p-2" v-if="courses.length > 0">
                                <h2
                                    class="mt-4 mb-2 px-3 text-xs font-semibold text-gray-200"
                                >
                                    Courses
                                </h2>
                                <ul class="text-sm text-gray-400">
                                    <ComboboxOption
                                        v-for="server in courses"
                                        :key="server.id"
                                        :value="{
                                            type: 'server',
                                            data: server,
                                        }"
                                        as="template"
                                        v-slot="{ active }"
                                    >
                                        <li
                                            :class="[
                                                'flex cursor-default select-none items-center rounded-md px-3 py-2',
                                                active &&
                                                    'bg-gray-800 text-white',
                                            ]"
                                        >
                                            <AcademicCapIcon
                                                :class="[
                                                    'h-6 w-6 flex-none',
                                                    active
                                                        ? 'text-white'
                                                        : 'text-gray-500',
                                                ]"
                                                aria-hidden="true"
                                            />
                                            <span
                                                class="ml-3 flex-auto truncate"
                                                >{{ server.name }}</span
                                            >
                                            <span
                                                v-if="active"
                                                class="ml-3 flex-none text-gray-400 text-xs"
                                                >Jump to...</span
                                            >
                                        </li>
                                    </ComboboxOption>
                                </ul>
                            </li>
                        </ComboboxOptions>

                        <div
                            v-if="query !== '' && courses.length === 0"
                            class="py-14 px-6 text-center sm:px-14"
                        >
                            <ExclamationIcon
                                class="mx-auto h-6 w-6 text-gray-500"
                                aria-hidden="true"
                            />
                            <p class="mt-4 text-sm text-gray-200">
                                We couldn't find data with that term. Please try
                                again.
                            </p>
                        </div>

                        <div
                            class="flex flex-wrap items-center py-2 px-4 space-x-4"
                        >
                            <span class="flex items-center space-x-1.5">
                                <kbd class="text-gray-100 text-base">↑↓</kbd>
                                <span class="text-gray-500 text-xs"
                                    >select</span
                                >
                            </span>

                            <span class="flex items-center space-x-1.5">
                                <kbd class="text-gray-100 text-base">↵</kbd>
                                <span class="text-gray-500 text-xs">open</span>
                            </span>
                        </div>
                    </Combobox>
                </TransitionChild>
            </Dialog>
        </TransitionRoot>
    </div>
</template>

<script>
import hotkeys from "hotkeys-js";
import { SearchIcon } from "@heroicons/vue/solid";
import {
    ExclamationIcon,
    AcademicCapIcon,
    LightningBoltIcon,
    GlobeAltIcon,
} from "@heroicons/vue/outline";
import {
    Combobox,
    ComboboxInput,
    ComboboxOptions,
    ComboboxOption,
    Dialog,
    DialogOverlay,
    TransitionChild,
    TransitionRoot,
} from "@headlessui/vue";
export default {
    name: "GlobalSearch",
    components: {
        Combobox,
        ComboboxInput,
        ComboboxOptions,
        ComboboxOption,
        Dialog,
        DialogOverlay,
        AcademicCapIcon,
        ExclamationIcon,
        SearchIcon,
        LightningBoltIcon,
        TransitionChild,
        TransitionRoot,
        GlobeAltIcon,
    },

    data() {
        return {
            open: false,
            query: "",

            courses: [],
        };
    },

    mounted() {
        this.startShortcuts();
    },

    watch: {
        query: {
            handler(query) {
                // // servers
                // query == ""
                //     ? (this.courses = this.$page.props.servers)
                //     : (this.courses = this.$page.props.servers.filter(
                //           (server) => {
                //               return server.name
                //                   .toLowerCase()
                //                   .includes(query.toLowerCase());
                //           }
                //       ));

                axios
                    .get(route("courses.global-search", { q: query }))
                    .then((response) => {
                        this.courses = response.data;
                    });
            },
            deep: true,
        },
    },

    methods: {
        openGlobalSearch() {
            this.open = true;
        },

        startShortcuts() {
            hotkeys("/", (event, handler) => {
                event.preventDefault();
                this.openGlobalSearch();
            });
        },

        onSelect(item) {
            window.location = route("courses.show", item.data.slug);
        },
    },
};
</script>
