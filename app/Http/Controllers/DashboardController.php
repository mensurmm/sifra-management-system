<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\BookCopy;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request for the operational dashboard hub.
     */
    public function __invoke(Request $request)
    {
        // 1. Fetch real aggregate metrics directly from your database storage engines
        $totalCategoriesCount = BookCategory::count();
        $totalAuthorsCount = Author::count();
        $totalPublishersCount = Publisher::count();
        $totalBooksVolume = Book::count();
        
        // 2. Calculate dynamic volume metrics for physical inventory tracking
        // Assuming your book copies table has a boolean status or availability column
        $totalCopiesCount = BookCopy::count();

        // 3. Optional: Pass real, live data downstream into your middle analytics charts instead of mock values
        // For example: Grouping products by amount sold to pass into your products donut component
        $topProductsBreakdown = [
            ['name' => 'Americano', 'amount' => '2,850', 'color' => '#78350F'],
            ['name' => 'Latte', 'amount' => '2,100', 'color' => '#FDBA74'],
            ['name' => 'Cappuccino', 'amount' => '1,950', 'color' => '#FCA5A5'],
            ['name' => 'Mocha', 'amount' => '1,350', 'color' => '#A78BFA'],
            ['name' => 'Others', 'amount' => '1,200', 'color' => '#94A3B8'],
        ];

        // 4. Return the complete package to your optimized index layout file view channel
        return view('dashboard.index', compact(
            'totalCategoriesCount',
            'totalAuthorsCount',
            'totalPublishersCount',
            'totalBooksVolume',
            'totalCopiesCount',
            'topProductsBreakdown'
        ));
    }
}
