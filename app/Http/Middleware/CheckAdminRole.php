<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

         if (Auth::check()) {
            // Check if the user has the role of "student"
            if (Auth::user()->role->title === 'admin') {
                return $next($request);
            }
    }
    // If the user does not have the "student" role, redirect to a different page
    return redirect('/home')->with('error', 'Access denied.'); // or to any page you'd prefer
}
}
