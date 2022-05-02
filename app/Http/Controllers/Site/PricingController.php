<?php

namespace App\Http\Controllers\Site;

use Inertia\Inertia;

class PricingController extends Controller
{
    public function index()
    {
        return Inertia::render('Site/Pricing');
    }
}
