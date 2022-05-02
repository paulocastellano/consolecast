<template>
    <div class="bg-blue-900">
        <Disclosure as="nav" class="" v-slot="{ open }">
            <div class="px-4 max-w-7xl mx-auto">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="-ml-2 mr-2 flex items-center md:hidden">
                            <!-- Mobile menu button -->
                            <DisclosureButton
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            >
                                <span class="sr-only">Open main menu</span>
                                <MenuIcon
                                    v-if="!open"
                                    class="block h-6 w-6"
                                    aria-hidden="true"
                                />
                                <XIcon
                                    v-else
                                    class="block h-6 w-6"
                                    aria-hidden="true"
                                />
                            </DisclosureButton>
                        </div>
                        <div class="flex-shrink-0 flex items-center">
                            <a
                                :href="route('home')"
                                class="flex items-center font-bold text-white lg:w-auto title-font lg:items-center lg:justify-center md:mb-0"
                            >
                                <span class="text-xl leading-none select-none">
                                    Console Cast
                                    <span class="text-indigo-500">.</span>
                                </span>
                            </a>
                        </div>
                        <div
                            class="hidden md:ml-8 md:flex md:items-center md:space-x-4"
                        ></div>
                    </div>
                    <div class="flex items-center">
                        <div
                            class="hidden md:ml-4 md:flex-shrink-0 md:flex md:items-center"
                        >
                            <div v-if="$page.props.auth.user">
                                <div class="ml-3 relative">
                                    <jet-dropdown align="right" width="64">
                                        <template #trigger>
                                            <button
                                                class="flex text-sm border-2 border-transparent rounded-md focus:outline-none text-gray-400 hover:text-gray-100 px-4 py-2 transition"
                                            >
                                                <div
                                                    class="flex items-center space-x-2"
                                                >
                                                    <div
                                                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-200 border-gray-600 hover:bg-white hover:text-blue-900 hover:border-white"
                                                    >
                                                        Account
                                                    </div>
                                                </div>
                                            </button>
                                        </template>

                                        <template #content>
                                            <div
                                                class="block px-4 py-2 text-xs text-gray-100"
                                            >
                                                Management
                                            </div>

                                            <jet-dropdown-link
                                                :href="route('profile.edit')"
                                            >
                                                <div
                                                    class="flex items-center text-gray-400"
                                                >
                                                    <UserCircleIcon
                                                        class="mr-2 h-5 w-5"
                                                    />
                                                    <span class="text-xs"
                                                        >Profile</span
                                                    >
                                                </div>
                                            </jet-dropdown-link>

                                            <jet-dropdown-link
                                                :href="route('billing')"
                                            >
                                                <div
                                                    class="flex items-center text-gray-400"
                                                >
                                                    <CreditCardIcon
                                                        class="mr-2 h-5 w-5"
                                                    />
                                                    <span class="text-xs"
                                                        >Billing</span
                                                    >
                                                </div>
                                            </jet-dropdown-link>

                                            <div
                                                class="border-t border-gray-700"
                                            ></div>

                                            <!-- Account Management -->
                                            <div
                                                class="block px-4 py-2 text-xs text-gray-400"
                                            >
                                                Help
                                            </div>

                                            <a
                                                href="mailto:talk@tweetgrowth.com?subject=I need help with Tweet Growth&body=Hello, i need help with Tweet Growth!"
                                                class="block px-4 py-2 text-xs leading-5 text-gray-700 focus:outline-none hover:bg-gray-800 transition"
                                            >
                                                <div class="flex items-center">
                                                    <SupportIcon
                                                        class="mr-2 h-5 w-5 text-gray-400"
                                                    />
                                                    <span class="text-gray-400"
                                                        >Get Help</span
                                                    >
                                                </div>
                                            </a>

                                            <a
                                                href="mailto:talk@tweetgrowth.com?subject=I want to make a suggestion&body=Hello, my suggestion for Tweet Growth is..."
                                                target="_blank"
                                                class="block px-4 py-2 text-xs leading-5 focus:outline-none hover:bg-gray-800 transition"
                                            >
                                                <div class="flex items-center">
                                                    <ChatAltIcon
                                                        class="mr-2 h-5 w-5 text-gray-400"
                                                    />
                                                    <span class="text-gray-400"
                                                        >Send Feedback</span
                                                    >
                                                </div>
                                            </a>

                                            <div
                                                class="border-t border-gray-700"
                                            ></div>

                                            <div>
                                                <jet-dropdown-link
                                                    @click.prevent="logout"
                                                    as="button"
                                                >
                                                    <div
                                                        class="flex items-center"
                                                    >
                                                        <LogoutIcon
                                                            class="mr-2 h-5 w-5 text-gray-400"
                                                        />
                                                        <span
                                                            class="text-gray-400 text-xs"
                                                            >Log Out</span
                                                        >
                                                    </div>
                                                </jet-dropdown-link>
                                            </div>
                                        </template>
                                    </jet-dropdown>
                                </div>
                            </div>
                            <div v-else>
                                <a
                                    :href="route('login')"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white hover:underline"
                                >
                                    Sign in
                                </a>
                                <a
                                    :href="route('register')"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-200 border-gray-600 hover:bg-white hover:text-blue-900 hover:border-white"
                                >
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <DisclosurePanel class="md:hidden">
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="flex items-center px-5 sm:px-6">
                        <div class="flex-shrink-0">
                            <img
                                class="h-10 w-10 rounded-full"
                                :src="$page.props.auth.user.avatar"
                                :alt="$page.props.auth.user.name"
                            />
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium text-white">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="text-sm font-medium text-gray-400">
                                {{ $page.props.auth.user.email }}
                            </div>
                        </div>
                        <button
                            class="ml-auto flex-shrink-0 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                        >
                            <span class="sr-only">View notifications</span>
                            <BellIcon class="h-6 w-6" aria-hidden="true" />
                        </button>
                    </div>
                    <div class="mt-3 px-2 space-y-1 sm:px-3">
                        <!-- <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">abc</a> -->

                        <!-- Authentication -->
                        <form @submit.prevent="logout">
                            <jet-dropdown-link as="button">
                                <div class="flex items-center">
                                    <LogoutIcon class="h-5 w-5 text-gray-400" />
                                    <div
                                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700"
                                    >
                                        Log Out
                                    </div>
                                </div>
                            </jet-dropdown-link>
                        </form>
                    </div>
                </div>
            </DisclosurePanel>
        </Disclosure>
    </div>
</template>

<script>
import { ref } from "vue";
import {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
} from "@headlessui/vue";
import {
    BellIcon,
    MenuIcon,
    XIcon,
    CogIcon,
    LogoutIcon,
    KeyIcon,
    PlusCircleIcon,
    SparklesIcon,
    EyeIcon,
    ChatAltIcon,
    SupportIcon,
    UserCircleIcon,
    GiftIcon,
    PlusSmIcon,
    CreditCardIcon,
} from "@heroicons/vue/outline";

import JetApplicationMark from "@/Components/ApplicationMark";
import JetDropdown from "@/Components/Dropdown";
import JetDropdownLink from "@/Components/DropdownLink";
import JetNavLink from "@/Components/NavLink";
import JetResponsiveNavLink from "@/Components/ResponsiveNavLink";

export default {
    components: {
        JetApplicationMark,
        JetDropdown,
        JetDropdownLink,
        JetNavLink,
        JetResponsiveNavLink,

        Disclosure,
        DisclosureButton,
        DisclosurePanel,
        Menu,
        MenuButton,
        MenuItem,
        MenuItems,
        BellIcon,
        MenuIcon,
        XIcon,
        CogIcon,
        LogoutIcon,
        GiftIcon,
        CreditCardIcon,
        KeyIcon,
        PlusCircleIcon,
        SparklesIcon,
        EyeIcon,
        UserCircleIcon,
        PlusSmIcon,

        ChatAltIcon,
        SupportIcon,
    },

    setup() {
        const open = ref(false);

        return {
            open,
        };
    },

    mounted() {},

    methods: {
        logout() {
            this.$inertia.post(route("logout"));
        },
    },
};
</script>
