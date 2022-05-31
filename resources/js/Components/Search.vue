<template>
    <div>
        <TransitionRoot
            :show="open"
            as="template"
            @after-leave="query = ''"
            appear
        >
            <Dialog as="div" class="relative z-10" @close="open = false">
                <TransitionChild
                    as="template"
                    enter="ease-out duration-300"
                    enter-from="opacity-0"
                    enter-to="opacity-100"
                    leave="ease-in duration-200"
                    leave-from="opacity-100"
                    leave-to="opacity-0"
                >
                    <div
                        class="fixed inset-0 bg-[#221D53] bg-opacity-60 transition-opacity"
                    />
                </TransitionChild>

                <div
                    class="fixed inset-0 z-10 overflow-y-auto p-4 sm:p-6 md:p-20"
                >
                    <TransitionChild
                        as="template"
                        enter="ease-out duration-300"
                        enter-from="opacity-0 scale-95"
                        enter-to="opacity-100 scale-100"
                        leave="ease-in duration-200"
                        leave-from="opacity-100 scale-100"
                        leave-to="opacity-0 scale-95"
                    >
                        <DialogPanel
                            class="mx-auto max-w-xl transform rounded-xl bg-white p-6 shadow-2xl ring-1 ring-black ring-opacity-5 transition-all"
                        >
                            <Combobox
                                @update:modelValue="onSelect"
                                v-model="comboBoxInput"
                            >
                                <div class="relative">
                                    <SearchIcon
                                        class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-[#45BCEC] text-opacity-40"
                                        aria-hidden="true"
                                    />
                                    <ComboboxInput
                                        class="h-12 w-full border border-[#45BCEC] rounded-lg bg-transparent pl-11 pr-4 text-gray-900 placeholder-[#B2B6F2] focus:ring-0 sm:text-sm"
                                        placeholder="What would you like to learn?"
                                        @change="query = $event.target.value"
                                    />
                                </div>

                                <div>
                                    <div
                                        class="font-semibold text-primary-500 mt-6 mb-4"
                                    >
                                        Suggested search
                                    </div>

                                    <div class="flex space-x-2">
                                        <div
                                            v-for="suggested in suggestedItems"
                                            :key="suggested"
                                            @click="setSearchValue(suggested)"
                                            class="cursor-pointer inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold text-lavander-600 uppercase hover:bg-[#EDEEFF]"
                                        >
                                            {{ suggested }}
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div
                                        class="font-semibold text-primary-500 mb-5 mt-6"
                                    >
                                        Top cast search
                                    </div>

                                    <ComboboxOptions
                                        v-if="filteredCourses.length > 0"
                                        static
                                        class="-mb-2 max-h-72 scroll-py-2 overflow-y-auto py-2 text-sm text-gray-800"
                                    >
                                        <ComboboxOption
                                            v-for="course in filteredCourses"
                                            :key="course.id"
                                            :value="course"
                                            as="template"
                                            v-slot="{ active }"
                                        >
                                            <li
                                                :class="[
                                                    'flex cursor-pointer select-none rounded-xl p-3',
                                                    active && 'bg-[#EDEEFF]',
                                                ]"
                                            >
                                                <div
                                                    :class="[
                                                        'flex h-12 w-12 flex-none items-center justify-center rounded-full border border-[#B2B6F2] bg-[#EDEEFF]',
                                                        course.color,
                                                    ]"
                                                >
                                                    <img
                                                        :src="
                                                            asset(
                                                                'images/search/course.svg'
                                                            )
                                                        "
                                                        class="h-8 w-8 text-white"
                                                        aria-hidden="true"
                                                    />
                                                </div>
                                                <div class="ml-4 flex-auto">
                                                    <p
                                                        class="text-sm font-medium text-[#4764AF]"
                                                    >
                                                        {{ course.name }}
                                                    </p>
                                                    <span
                                                        v-for="topic in course.topics"
                                                        :key="topic"
                                                        class="text-sm font-medium text-[#B2B6F2]"
                                                    >
                                                        {{ topic.name }}
                                                    </span>
                                                </div>
                                            </li>
                                        </ComboboxOption>
                                    </ComboboxOptions>
                                </div>

                                <div
                                    v-if="
                                        query !== '' &&
                                        filteredCourses.length === 0
                                    "
                                    class="py-14 px-4 text-center sm:px-14"
                                >
                                    <UsersIcon
                                        class="mx-auto h-6 w-6 text-gray-400"
                                        aria-hidden="true"
                                    />
                                    <p class="mt-4 text-sm text-gray-900">
                                        No course found using that search term.
                                    </p>
                                </div>
                            </Combobox>
                        </DialogPanel>
                    </TransitionChild>
                </div>
            </Dialog>
        </TransitionRoot>
    </div>
</template>

<script>
import hotkeys from "hotkeys-js";
import { SearchIcon } from "@heroicons/vue/solid";
import { UsersIcon } from "@heroicons/vue/outline";

import {
    Combobox,
    ComboboxInput,
    ComboboxOptions,
    ComboboxOption,
    Dialog,
    DialogPanel,
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
        DialogPanel,
        TransitionChild,
        TransitionRoot,

        SearchIcon,
        UsersIcon,
    },

    props: ["searchCache"],

    data() {
        return {
            open: false,
            query: "",
            comboBoxInput: null,

            filteredCourses: this.$page.props.searchCache,

            suggestedItems: [
                "laravel",
                "inertia",
                "livewire",
                "react",
                "vue",
                "docker",
            ],
        };
    },

    mounted() {
        this.startShortcuts();
    },

    watch: {
        query: {
            handler(query) {
                query == ""
                    ? (this.filteredCourses = this.$page.props.searchCache)
                    : (this.filteredCourses =
                          this.$page.props.searchCache.filter((course) => {
                              return course.name
                                  .toLowerCase()
                                  .includes(query.toLowerCase());
                          }));
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
            window.location = route("courses.show", item.slug);
        },

        setSearchValue(value) {
            this.query = value;
            this.comboBoxInput = value;
        },
    },
};
</script>
