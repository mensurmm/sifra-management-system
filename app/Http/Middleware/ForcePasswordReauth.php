<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForcePasswordReauth
{
    /**
     * Forces an active login session to verify their password when hitting the login view.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 💡 THE SECURITY WALL: If someone is logged in but clicks 'Member Login' on the website,
        // we forcefully log them out in the background right now! This destroys the active session cookie
        // so they cannot bypass the password input forms under any circumstance.
        if (auth()->check()) {
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return $next($request);
    }
}
