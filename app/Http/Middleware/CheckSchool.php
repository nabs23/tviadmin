<?php

namespace App\Http\Middleware;

use Closure;

class CheckSchool
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // check if user's school is set
        if (! auth()->user()->schoolUser)
        {
            return redirect()->route('school.create');
        }
        return $next($request);
    }
}
