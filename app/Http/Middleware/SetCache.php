<?php

namespace App\Http\Middleware;

use Inertia\Inertia;
use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;


use App\Models\Course;

class SetCache
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // search
        $searchCacheKey = 'global-search-cache';

        $searchCache = Cache::get($searchCacheKey);
        if (!$searchCache) {
            $courses = Course::orderBy('name', 'asc')->published()->with('topics')->get();
            $searchCache = Cache::put($searchCacheKey, $courses);
        }

        Inertia::share('searchCache', $searchCache);

        return $next($request);
    }
}
