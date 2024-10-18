<?php

namespace App\Http\Middleware;

use Closure;
use App\Enum\Role;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->user()->userType == Role::ADMIN->value) {
                return $next($request);
            }
        }


        return redirect()->route('home')->with('error', 'You do not have admin access.');
    }
}
