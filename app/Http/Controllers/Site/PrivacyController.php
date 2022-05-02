<?php

namespace App\Http\Controllers\Site;

use Inertia\Inertia;
use Illuminate\Support\Str;

class PrivacyController extends Controller
{
    public function index()
    {
        return Inertia::render('Site/Privacy', [
            'privacy' => Str::markdown(file_get_contents(resource_path('markdown/privacy.md'))),
        ]);
    }
}
