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
        $topics = Topic::all()->pluck('name', 'id');

        return Inertia::render('Admin/Course/Create', [
            'topics' => $topics
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'slug' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
            'published' => ['required', 'boolean'],
            'in_development' => ['required', 'boolean'],
            'home_featured' => ['required', 'boolean'],
            'topics' => ['required', 'array'],
        ]);

        $course = new Course;
        $course->name = $request->name;
        $course->description = $request->description;
        $course->slug = $request->slug;
        $course->level = $request->level;
        $course->published = $request->published;
        $course->in_development = $request->in_development;
        $course->home_featured = $request->home_featured;
        $course->save();

        $course->topics()->attach(collect($request->topics));

        session()->flash('flash.banner', 'Course added successful.');
        session()->flash('flash.bannerStyle', 'success');

        return redirect(route('admin.courses.index'));
    }

    public function edit($id)
    {
        $topics = Topic::all()->pluck('name', 'id');

        $course = Course::with(['topics' => function ($query) {
            $query->select(['topics.id', 'topics.name']);
        }])
            ->where('id', $id)
            ->first();

        return Inertia::render('Admin/Course/Edit', [
            'topics' => $topics,
            'course' => $course
        ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'slug' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
            'published' => ['required', 'boolean'],
            'in_development' => ['required', 'boolean'],
            'home_featured' => ['required', 'boolean'],
            'topics' => ['required', 'array'],
        ]);

        $course = Course::where('id', $id)->first();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->slug = $request->slug;
        $course->level = $request->level;
        $course->published = $request->published;
        $course->in_development = $request->in_development;
        $course->home_featured = $request->home_featured;
        $course->save();

        // topics
        $course->topics()->sync(collect($request->topics));

        session()->flash('flash.banner', 'Course updated successful.');
        session()->flash('flash.bannerStyle', 'success');

        return redirect(route('admin.courses.index'));
    }
}
