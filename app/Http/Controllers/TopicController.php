<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class TopicController extends Controller
{
    public function index()
    {
        return Inertia::render('Topic/Index');
    }

    public function show($slug)
    {
        return Inertia::render('Topic/Show');
    }
}
