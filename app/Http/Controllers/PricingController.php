<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class PricingController extends Controller
{
    public function index()
    {
        return Inertia::render('Pricing');
    }
}
