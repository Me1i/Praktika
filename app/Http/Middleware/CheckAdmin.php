<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        if ($request->route() && $request->route()->getName() === 'admin.redirect') {
            if (Auth::check() && Auth::user()->isAdmin()) {
                return redirect()->route('dashboard')->with('message', 'You are an admin.');
            }
            return redirect()->route('home')->with('message', 'Access denied. Admins only.');
        }

        return $next($request);
    }
}
