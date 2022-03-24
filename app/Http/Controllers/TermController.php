<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Str;

class TermController extends Controller
{
    public function index()
    {
        return Inertia::render('Term', [
            'term' => Str::markdown(file_get_contents(resource_path('markdown/terms.md'))),
        ]);
    }
}
