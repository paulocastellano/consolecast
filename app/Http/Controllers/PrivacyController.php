<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Str;

class PrivacyController extends Controller
{
    public function index()
    {
        return Inertia::render('Privacy', [
            'privacy' => Str::markdown(file_get_contents(resource_path('markdown/privacy.md'))),
        ]);
    }
}
