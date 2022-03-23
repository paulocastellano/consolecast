<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class LessonController extends Controller
{
    public function show($slug)
    {
        return Inertia::render('Lesson/Show');
    }
}
