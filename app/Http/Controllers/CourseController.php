<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class CourseController extends Controller
{
    public function index()
    {
        return Inertia::render('Course/Index');
    }

    public function show($slug)
    {
        return Inertia::render('Course/Show');
    }
}
