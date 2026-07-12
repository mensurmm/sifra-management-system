<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

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

        // 2. If their role is not explicitly allowed in this route parameter list, block them
        if (!auth()->user()->hasRole($roles)) {
            abort(403, 'Unauthorized action. You do not possess the necessary administrative access tier.');
        }

        return $next($request);
    }
}
