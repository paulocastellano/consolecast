<?php

namespace App\Http\Controllers\Site;

use Inertia\Inertia;

use App\Models\Course;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function show($slug, $lessonSlug)
    {
        $course = Course::where('slug', $slug)
            ->with('lessons')
            ->withCount('lessons')
            ->first()
            ->append('watch_time');


        if (!$course) {
            abort(404);
        }

        $lesson = Lesson::where('course_id', $course->id)
            ->where('slug', $lessonSlug)
            ->with('lesson_comments')
            ->first();

        if (!$lesson) {
            abort(404);
        }

        return Inertia::render('Site/Lesson/Show', [
            'course' => $course,
            'lesson' => $lesson
        ]);
    }
}
