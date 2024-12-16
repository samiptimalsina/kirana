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

            if (auth()->user()->usertype == Role::ADMIN->value) {
                return $next($request);
            }
        }


        return redirect()->route('index')->with('error', 'You do not have admin access.');
    }
}
