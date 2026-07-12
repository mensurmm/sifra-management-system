<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // 💡 FIXED: Import Auth facade

class CheckRole
{
    /**
     * Handle an incoming request and verify the user has the required permission tier.
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // 1. If not logged in, kick them back to login page securely
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // 2. Check if the user's role is in the allowed array
        // 💡 FIXED: Uses the $request->user() method directly to resolve code analysis tracking
        $user = $request->user();
        if (!$user || !in_array($user->role, $roles)) {
            abort(403, 'Unauthorized action. You do not possess the necessary administrative authorization tier.');
        }

        return $next($request);
    }
}