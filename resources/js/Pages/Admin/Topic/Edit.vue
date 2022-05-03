<template>
    <AdminLayout>
        <Head title="Create Topic" />

        <cs-form-section @submitted="store">
            <template #title> Update Topic </template>

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
                                            consolecast.com/topics/
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
                            </div>
                        </div>
                    </div>

                    <div class="pt-5">
                        <div class="flex justify-end">
                            <CsSecondaryButtonLink
                                :href="route('admin.topics.index')"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                Cancel
                            </CsSecondaryButtonLink>
                            <CsButton
                                type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                Update Topic
                            </CsButton>
                        </div>
                    </div>
                </div>
            </template>
        </cs-form-section>
    </AdminLayout>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import CsButton from "@/Components/Button.vue";
import CsButtonLink from "@/Components/ButtonLink.vue";
import CsSecondaryButtonLink from "@/Components/SecondaryButtonLink.vue";
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
        CsButton,
        CsSecondaryButtonLink,

        CsInput,
        CsLabel,
        CsSelect,
        CsTextarea,
        CsCheckbox,
        CsFormSection,
        CsInputError,
    },

    props: ["topic"],

    data() {
        return {
            form: this.$inertia.form({
                name: this.topic.name,
                description: this.topic.description,
                slug: this.topic.slug,
            }),
        };
    },
    methods: {
        store() {
            this.form.put(route("admin.topics.update", { id: this.topic.id }), {
                preserveScroll: true,
                preserveState: true,
                onSuccess: () => this.form.reset(),
            });
        },
    },
};
</script>
