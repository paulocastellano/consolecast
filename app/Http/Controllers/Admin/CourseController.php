<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Topic;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('topics')
            ->withcount('lessons')
            ->get()
            ->append('watch_time');

        return Inertia::render('Admin/Course/Index', [
            'courses' => $courses
        ]);
    }

    public function create()
    {
        $topics = Topic::all();
        return Inertia::render('Admin/Course/Create', [
            'topics' => $topics
        ]);
    }

    public function show($slug)
    {
        $course = Course::where('slug', $slug)
            ->withcount('lessons')
            ->with('topics')
            ->first()
            ->append('watch_time');

        if (!$course) {
            abort(404);
        }


        $lessons = Lesson::where('course_id', $course->id)->get()->append('watch_time');

        return Inertia::render('Course/Show', [
            'course' => $course,
            'lessons' => $lessons
        ]);
    }

    public function globalSearch(Request $request)
    {
        $courses = Course::search($request->q)->get();
        return response()->json($courses);
    }
}
