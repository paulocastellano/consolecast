<template>
    <nav
        aria-label="Sections"
        class="hidden flex-shrink-0 w-56 xl:w-60 md:flex md:flex-col"
    >
        <div class="flex-shrink-0 pt-6 pb-2 px-8 flex items-center">
            <p
                class="text-sm text-gray-100 font-bold uppercase tracking-widest"
            >
                Settings
            </p>
        </div>
        <div class="flex-1 min-h-0 overflow-y-auto px-4 space-y-2">
            <a
                v-for="item in subNavigation"
                :key="item.name"
                :href="item.href"
                :class="[
                    item.current
                        ? 'bg-gray-800 border border-gray-700'
                        : 'hover:text-gray-400',
                    'group flex items-center px-3 py-2 text-sm font-medium text-gray-100 rounded ',
                ]"
            >
                <component
                    :is="item.icon"
                    class="mr-3 flex-shrink-0 h-5 w-5"
                    aria-hidden="true"
                />
                <div>
                    <p class="font-medium text-sm">
                        {{ item.name }}
                    </p>
                </div>
            </a>
        </div>
    </nav>
</template>

<script>
import {
    BellIcon,
    BookmarkAltIcon,
    CashIcon,
    CogIcon,
    FireIcon,
    HomeIcon,
    InboxIcon,
    KeyIcon,
    MenuIcon,
    PhotographIcon,
    SearchCircleIcon,
    UserIcon,
    ViewGridAddIcon,
    XIcon,
    UserCircleIcon,
    CreditCardIcon,
} from "@heroicons/vue/outline";

const subNavigation = [
    {
        name: "Profile",
        href: route("profile.edit"),
        icon: UserCircleIcon,
        current: route().current("profile.edit"),
    },
    // {
    //     name: "API Tokens",
    //     href: route("settings.api-tokens.index"),
    //     icon: KeyIcon,
    //     current: route().current("settings.api-tokens.index"),
    // },
    // {
    //     name: "Billing",
    //     href: route("spark.portal"),
    //     icon: CreditCardIcon,
    //     current: route().current("spark.portal"),
    // },
];

export default {
    components: {
        BellIcon,
        BookmarkAltIcon,
        CashIcon,
        CogIcon,
        FireIcon,
        HomeIcon,
        InboxIcon,
        KeyIcon,
        MenuIcon,
        PhotographIcon,
        SearchCircleIcon,
        UserIcon,
        ViewGridAddIcon,
        XIcon,
    },

    data() {
        return {};
    },

    setup() {
        return {
            subNavigation,
        };
    },
};
</script>
