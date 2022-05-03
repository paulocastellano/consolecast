<template>
    <AdminLayout>
        <Head title="Create Course" />

        <cs-form-section @submitted="store">
            <template #title> New Course </template>

            <template #description> </template>

            <template #form>
                <div class="space-y-8 divide-y divide-gray-200">
                    <div class="space-y-8 divide-y divide-gray-200">
                        <div>
                            <div
                                class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6"
                            >
                                <div class="sm:col-span-6">
                                    <CsLabel
                                        for="name"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Name
                                    </CsLabel>
                                    <div class="mt-1">
                                        <CsInput
                                            type="text"
                                            v-model="form.name"
                                            id="name"
                                        />
                                        <CsInputError
                                            :message="form.errors.name"
                                            class="mt-1"
                                        />
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <CsLabel
                                        for="description"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Description
                                    </CsLabel>
                                    <div class="mt-1">
                                        <CsTextarea
                                            type="text"
                                            v-model="form.description"
                                            id="description"
                                        />
                                        <CsInputError
                                            :message="form.errors.description"
                                            class="mt-1"
                                        />
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <CsLabel
                                        for="slug"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Slug
                                    </CsLabel>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <span
                                            class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm"
                                        >
                                            consolecast.com/courses/
                                        </span>
                                        <CsInput
                                            type="text"
                                            v-model="form.slug"
                                            id="name"
                                            class="flex-1 block w-full min-w-0 rounded-none rounded-r-md"
                                        />
                                    </div>
                                    <CsInputError
                                        :message="form.errors.slug"
                                        class="mt-1"
                                    />
                                </div>

                                <div class="sm:col-span-6">
                                    <CsLabel
                                        for="level"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Level
                                    </CsLabel>
                                    <div class="mt-1">
                                        <CsSelect
                                            :values="{
                                                beginner: 'beginner',
                                                intermediate: 'intermediate',
                                                advanced: 'advanced',
                                            }"
                                            v-model="form.level"
                                            class="w-full"
                                            id="level"
                                        />
                                        <CsInputError
                                            :message="form.errors.level"
                                            class="mt-1"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-8">
                            <div>
                                <h3
                                    class="text-lg leading-6 font-medium text-gray-900"
                                >
                                    Settings
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    We'll always let you know about important
                                    changes, but you pick what else you want to
                                    hear about.
                                </p>
                            </div>
                            <div class="mt-2">
                                <fieldset>
                                    <div class="mt-4 space-y-4">
                                        <div class="relative flex items-start">
                                            <div class="flex items-center h-5">
                                                <CsCheckbox
                                                    v-model="form.published"
                                                    id="published"
                                                />
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <CsLabel
                                                    for="published"
                                                    class="font-medium text-gray-700"
                                                    >Published</CsLabel
                                                >
                                                <CsInputError
                                                    :message="
                                                        form.errors.published
                                                    "
                                                />
                                            </div>
                                        </div>

                                        <div class="relative flex items-start">
                                            <div class="flex items-center h-5">
                                                <CsCheckbox
                                                    v-model="
                                                        form.in_development
                                                    "
                                                    id="in_development"
                                                />
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <CsLabel
                                                    for="in_development"
                                                    class="font-medium text-gray-700"
                                                    >In Development</CsLabel
                                                >
                                                <CsInputError
                                                    :message="
                                                        form.errors
                                                            .in_development
                                                    "
                                                />
                                            </div>
                                        </div>

                                        <div class="relative flex items-start">
                                            <div class="flex items-center h-5">
                                                <CsCheckbox
                                                    v-model="form.home_featured"
                                                    id="home_featured"
                                                />
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <CsLabel
                                                    for="home_featured"
                                                    class="font-medium text-gray-700"
                                                    >Home Featured</CsLabel
                                                >
                                                <CsInputError
                                                    :message="
                                                        form.errors
                                                            .home_featured
                                                    "
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="pt-5">
                        <div class="flex justify-end">
                            <a
                                href="#"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                Cancel
                            </a>
                            <button
                                type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                Add course
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </cs-form-section>
    </AdminLayout>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import CsButtonLink from "@/Components/ButtonLink.vue";
import AdminLayout from "@/Layouts/Admin/Master.vue";
import CsInput from "@/Components/Input.vue";
import CsLabel from "@/Components/Label.vue";
import CsTextarea from "@/Components/Textarea.vue";
import CsSelect from "@/Components/Select.vue";

import CsCheckbox from "@/Components/Checkbox.vue";
import CsFormSection from "@/Components/FormSection.vue";
import CsInputError from "@/Components/InputError.vue";

export default {
    components: {
        Head,
        AdminLayout,
        CsButtonLink,

        CsInput,
        CsLabel,
        CsSelect,
        CsTextarea,
        CsCheckbox,
        CsFormSection,
        CsInputError,
    },
    props: ["courses"],

    data() {
        return {
            form: this.$inertia.form({
                name: null,
                description: null,
                slug: null,
                level: null,
                published: false,
                in_development: false,
                home_featured: false,
            }),
        };
    },
    methods: {
        store() {
            this.form.post(route("admin.courses.store"), {
                preserveScroll: true,
                preserveState: true,
                onSuccess: () => this.form.reset(),
            });
        },
    },
};
</script>
