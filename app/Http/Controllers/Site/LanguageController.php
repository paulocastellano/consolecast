<?php

namespace App\Http\Controllers\Site;

use Inertia\Inertia;
use App\Models\Topic;

class LanguageController extends Controller
{
    public function index()
    {
        return Inertia::render('Site/Language/Index');
    }

    public function show($slug)
    {
        $topic = Topic::where('slug', $slug)->firstOrFail();

        return Inertia::render('Site/Language/Show', [
            'topic' => $topic
        ]);
    }
}
