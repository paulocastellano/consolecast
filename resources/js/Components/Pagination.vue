<template>
    <div>
        <nav v-if="style == 'table'" aria-label="Pagination">
            <div
                v-if="data.links.length > 3"
                class="bg-gray-50 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6"
            >
                <div class="hidden sm:block">
                    <p class="text-sm text-gray-700">
                        Showing
                        <span class="font-medium">{{ data.from }}</span>
                        to
                        <span class="font-medium">{{ data.to }}</span>
                        of
                        <span class="font-medium">{{ data.total }}</span>
                        results
                    </p>
                </div>
                <div class="flex-1 flex justify-between sm:justify-end">
                    <a
                        v-if="data.prev_page_url"
                        :href="data.prev_page_url"
                        class="relative inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
                        >Previous</a
                    >
                    <div
                        v-else
                        class="relative inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded-md text-gray-400 bg-gray-100"
                    >
                        Previous
                    </div>

                    <a
                        v-if="data.next_page_url"
                        :href="data.next_page_url"
                        class="ml-2 relative inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
                        >Next</a
                    >
                    <div
                        v-else
                        class="ml-2 relative inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded-md text-gray-400 bg-gray-100"
                    >
                        Next
                    </div>
                </div>
            </div>
        </nav>

        <nav v-if="style == 'list'" aria-label="Pagination">
            <div
                v-if="data.links.length > 3"
                class="py-2 flex items-center justify-between"
            >
                <div class="hidden sm:block">
                    <p class="text-sm text-gray-700">
                        Showing
                        <span class="font-medium">{{ data.from }}</span>
                        to
                        <span class="font-medium">{{ data.to }}</span>
                        of
                        <span class="font-medium">{{ data.total }}</span>
                        results
                    </p>
                </div>
                <div class="flex-1 flex justify-between sm:justify-end">
                    <a
                        v-if="data.prev_page_url"
                        :href="`${data.prev_page_url}${appendParams}`"
                        class="relative inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
                        >Previous</a
                    >
                    <div
                        v-else
                        class="relative inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded-md text-gray-400 bg-gray-100"
                    >
                        Previous
                    </div>

                    <a
                        v-if="data.next_page_url"
                        :href="`${data.next_page_url}${appendParams}`"
                        class="ml-2 relative inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
                        >Next</a
                    >
                    <div
                        v-else
                        class="ml-2 relative inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded-md text-gray-400 bg-gray-100"
                    >
                        Next
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    props: {
        data: {
            type: Object,
            required: true,
        },

        style: {
            type: String,
            required: false,
            default: "table",
        },
    },

    data() {
        return {
            params: null,
            appendParams: "",
        };
    },

    mounted() {
        // se filtro por label
        if (route(null, null, false).params) {
            let params = route(null, null, false).params;

            for (let key in params) {
                // se nao for paginacao append
                if (key != "page" && key != "subdomain" && key != "locale") {
                    if (key == "page") {
                    }

                    this.appendParams += `&${key}=${params[key]}`;
                }
            }
        }
    },
};
</script>
