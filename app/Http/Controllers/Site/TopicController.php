<?php

namespace App\Http\Controllers\Site;

use Inertia\Inertia;

class TopicController extends Controller
{
    public function index()
    {
        return Inertia::render('Site/Topic/Index');
    }

    public function show($slug)
    {
        return Inertia::render('Site/Topic/Show');
    }
}
