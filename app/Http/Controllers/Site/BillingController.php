<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BillingController extends Controller
{
    public function __invoke(Request $request)
    {


        $checkout = $request->user()
            ->newSubscription('default', 'price_1KhIXqHP6x0jP6BWNOzYg9uv')
            ->checkout([
                'success_url' => route('home'),
                'cancel_url' => route('subscription')
            ]);

        return Inertia::render('Site/Billing/Manage', [
            'stripeKey' => config('services.stripe.key'),
            'checkoutSessionId' => $checkout->id
        ]);

        return $request->user()->redirectToBillingPortal(route('profile.edit'));
    }
}
