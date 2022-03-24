<template>
    <jet-form-section @submitted="updateProfileInformation">
        <template #title> Profile Information </template>

        <template #description>
            Update your account's profile information and email address.
        </template>

        <template #form>
            <!-- Name -->
            <div class="col-span-6 sm:col-span-3">
                <jet-label for="name" value="Name" />
                <jet-input
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    autocomplete="name"
                />
                <jet-input-error :message="form.errors.name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-3">
                <jet-label for="email" value="Email" />
                <jet-input
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                />
                <jet-input-error :message="form.errors.email" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <jet-button
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >
                Save
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
import JetButton from "@/Components/Button";
import JetFormSection from "@/Components/FormSection";
import JetInput from "@/Components/Input";
import JetSelect from "@/Components/Select";
import JetInputError from "@/Components/InputError";
import JetLabel from "@/Components/Label";
import JetActionMessage from "@/Components/ActionMessage";
import JetSecondaryButton from "@/Components/SecondaryButton";

export default {
    components: {
        JetActionMessage,
        JetButton,
        JetFormSection,
        JetInput,
        JetSelect,
        JetInputError,
        JetLabel,
        JetSecondaryButton,
    },

    props: ["user"],

    data() {
        return {
            form: this.$inertia.form({
                name: this.user.name,
                email: this.user.email,
            }),

            uploadHasErrors: null,
        };
    },

    mounted() {},

    methods: {
        updateProfileInformation() {
            this.form.post(route("profile.update", {}, false), {
                errorBag: "updateProfile",
                preserveScroll: true,
            });
        },
    },
};
</script>
