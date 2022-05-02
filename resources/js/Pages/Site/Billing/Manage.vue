<template>
    <MasterLayout :bgIsDark="true">
        <Head title="Billing" />
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Manage Subscription
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white p-8 overflow-hidden shadow-xl sm:rounded-lg"
                >
                    <h2 class="font-bold text-2xl">
                        Hang on there! You need an active subscription before
                        proceeding.
                    </h2>
                    <p>
                        <BreezeButton class="mt-4" @click.native="checkout"
                            >Head to checkout page</BreezeButton
                        >
                    </p>
                </div>
            </div>
        </div>
    </MasterLayout>
</template>

<script>
import BreezeButton from "@/Components/Button.vue";
import MasterLayout from "@/Layouts/Master.vue";

export default {
    components: {
        MasterLayout,
        BreezeButton,
    },
    props: ["stripeKey", "checkoutSessionId"],
    methods: {
        checkout() {
            window.Stripe(this.stripeKey).redirectToCheckout({
                sessionId: this.checkoutSessionId,
            });
        },
    },
};
</script>
