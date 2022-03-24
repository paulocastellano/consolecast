<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use App\Models\Course;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function show($slug, $lessonSlug)
    {

        $course = Course::where('slug', $slug)->with('lessons')->first();
        if (!$course) {
            abort(404);
        }

        $lesson = Lesson::where('course_id', $course->id)->where('slug', $lessonSlug)->first();
        if (!$lesson) {
            abort(404);
        }

        return Inertia::render('Lesson/Show', [
            'course' => $course,
            'lesson' => $lesson
        ]);
    }
}
