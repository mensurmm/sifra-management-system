<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // 💡 FIXED: Make sure this is imported at the top

class ForcePasswordReauth
{
    /**
     * Forces an active login session to verify their password when hitting the login view.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 💡 FIXED: Replaced auth() with the explicit Auth facade
        if (Auth::check()) {
            Auth::logout();
            
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return $next($request);
    }
}