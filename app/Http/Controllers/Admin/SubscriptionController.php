<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;

use Illuminate\Http\Request;

use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function index()
    {

        $subscriptions = Subscription::where('stripe_status', 'active')->with('user')->paginate(20);

        return Inertia::render('Admin/Subscription/Index', [
            'subscriptions' => $subscriptions
        ]);
    }
}
