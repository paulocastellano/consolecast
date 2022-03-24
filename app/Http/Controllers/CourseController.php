<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return Inertia::render('Course/Index');
    }

    public function show($slug)
    {
        $course = Course::where('slug', $slug)->with('lessons')->first();
        if (!$course) {
            abort(404);
        }
        return Inertia::render('Course/Show', [
            'course' => $course
        ]);
    }
}
