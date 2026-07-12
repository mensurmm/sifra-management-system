<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class GuestRedirectGateway
{
    /**
     * Intelligently guards fallback requests based on user authentication status and target paths.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. If the user is logged in, let them pass right through to their dashboards
        if (Auth::check()) { 
            return $next($request);
        }

        // 2. If they are a guest and want to read the public website OR log in, let them pass
        if ($request->is('web') || $request->is('web/*') || $request->is('login')) {
            return $next($request);
        }

        // 3. If they are a guest trying to hit ANY other URL, force them to log in!
        return redirect()->route('login');
    }
}