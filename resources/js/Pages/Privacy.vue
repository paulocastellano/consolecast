<template>
    <div class="pt-12 pb-16 bg-gray-900">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <img
                    src="{{ asset('images/tweet-growth/logo-color.svg')  }}"
                    class="h-16"
                />
            </div>

            <div
                v-html="privacy"
                class="w-full sm:max-w-2xl mt-6 p-6 rounded-xl bg-gray-800 border border-gray-700 overflow-hidden sm:rounded-lg prose prose prose-invert"
            ></div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["privacy"],
};
</script>
