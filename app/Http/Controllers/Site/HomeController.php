<?php

namespace App\Http\Controllers\Site;

use Inertia\Inertia;

use App\Models\Course;

class HomeController extends Controller
{
    public function index()
    {
        $featuredCourses = Course::with('topics')
            ->withcount('lessons')
            ->where('home_featured', true)
            ->take(3)
            ->get()
            ->append('watch_time');

        $lastCourses = Course::with('topics')
            ->withcount('lessons')
            ->where('home_featured', false)
            ->take(3)
            ->get()
            ->append('watch_time');

        $trendingCourses = Course::with('topics')
            ->withcount('lessons')
            ->where('home_featured', false)
            ->take(3)
            ->get()
            ->append('watch_time');



        return Inertia::render('Site/Home', [
            'featuredCourses' => $featuredCourses,
            'lastCourses' => $lastCourses,
            'trendingCourses' => $trendingCourses
        ]);
    }
}
