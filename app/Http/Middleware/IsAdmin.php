<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class IsAdmin
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
        if (Auth::check()) {

            $allowerUsers = [
                'paulo@consolecast.com',
                'luiz@consolecast.com'
            ];

            if (!in_array(auth()->user()->email, $allowerUsers)) {
                abort(403);
            }
        }


        Inertia::setRootView('admin');

        return $next($request);
    }
}
