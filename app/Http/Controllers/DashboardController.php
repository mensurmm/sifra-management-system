<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\BookCopy;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request for the operational dashboard hub.
     */
    public function __invoke(Request $request)
    {
        $user = $request->user();

        // =========================================================================
        // 🔒 ROLE 1: STANDARD MEMBERS / GUEST USERS
        // =========================================================================
        if ($user->role === 'member' || !$user->role) {
            // Members only care about their personal borrow histories, reservations, etc.
            // Do not run massive global administrative counts for basic members!
            return view('dashboard.member');
        }

        // =========================================================================
        // 📊 ENTERPRISE LAYER: CACHED SYSTEM METRICS (For Admin & Manager)
        // =========================================================================
        // Running ::count() directly on every page load kills database performance at scale.
        // Cache these aggregates for 10 minutes to protect your CPU cores.
        $metrics = Cache::remember('dashboard_metrics', now()->addMinutes(10), function () {
            return [
                'totalCategoriesCount' => BookCategory::count(),
                'totalAuthorsCount'    => Author::count(),
                'totalPublishersCount' => Publisher::count(),
                'totalBooksVolume'     => Book::count(),
                'totalCopiesCount'     => BookCopy::count(),
            ];
        });

        // =========================================================================
        // 🔒 ROLE 2: CAFE MANAGER VIEW
        // =========================================================================
        if ($user->role === 'manager') {
            // Live café analytics or specialized breakdowns go here
            $topProductsBreakdown = [
                ['name' => 'Americano', 'amount' => '2,850', 'color' => '#78350F'],
                ['name' => 'Latte', 'amount' => '2,100', 'color' => '#FDBA74'],
                ['name' => 'Cappuccino', 'amount' => '1,950', 'color' => '#FCA5A5'],
                ['name' => 'Mocha', 'amount' => '1,350', 'color' => '#A78BFA'],
                ['name' => 'Others', 'amount' => '1,200', 'color' => '#94A3B8'],
            ];

            return view('dashboard.manager', array_merge($metrics, compact('topProductsBreakdown')));
        }

        // =========================================================================
        // 🔒 ROLE 3: HIGH-SECURITY SYSTEM ADMIN
        // =========================================================================
        if ($user->role === 'admin') {
            // The administrator view gets everything + system audit logs if necessary
            $topProductsBreakdown = [
                ['name' => 'Americano', 'amount' => '2,850', 'color' => '#78350F'],
                ['name' => 'Latte', 'amount' => '2,100', 'color' => '#FDBA74'],
                ['name' => 'Cappuccino', 'amount' => '1,950', 'color' => '#FCA5A5'],
                ['name' => 'Mocha', 'amount' => '1,350', 'color' => '#A78BFA'],
                ['name' => 'Others', 'amount' => '1,200', 'color' => '#94A3B8'],
            ];

            return view('dashboard.admin', array_merge($metrics, compact('topProductsBreakdown')));
        }

        // Fallback for unexpected states
        abort(403, 'Unauthorized dashboard execution context.');
    }
}