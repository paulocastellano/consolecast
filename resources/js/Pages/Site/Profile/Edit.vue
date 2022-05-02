<template>
    <master-layout title="Profile">
        <template #sidebar>
            <SettingSidebar />
        </template>
        <div>
            <div class="space-y-8">
                <div>
                    <update-profile-information-form :user="user" />
                </div>
                <div>
                    <update-password-form class="mt-10 sm:mt-0" />
                </div>
                <!-- <div>
                    <delete-user-form class="mt-10 sm:mt-0" />
                </div> -->
            </div>
        </div>
    </master-layout>
</template>

<script>
import MasterLayout from "@/Layouts/Master";
import SettingSidebar from "@/Layouts/SettingSidebar";

import DeleteUserForm from "./DeleteUserForm";
import UpdatePasswordForm from "./UpdatePasswordForm";
import UpdateProfileInformationForm from "./UpdateProfileInformationForm";

export default {
    components: {
        SettingSidebar,
        MasterLayout,
        DeleteUserForm,
        UpdatePasswordForm,
        UpdateProfileInformationForm,
    },

    props: ["user"],

    mounted() {},
};
</script>
