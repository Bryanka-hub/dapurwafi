<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is not authenticated
        if (!auth()->check()) {
            return redirect('/');
        }

        // Check if the authenticated user is an admin
        if (!auth()->user()->is_admin) {
            return abort(403);
        }

        return $next($request);
    }
}
