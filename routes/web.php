<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // 💡 FIXED: Import the Auth facade line at the top

// =========================================================================
// 🌐 LANE 1: THE PUBLIC WEBSITE (Completely Open to Guests)
// =========================================================================
Route::prefix('web')->name('public.')->group(function () {
    Route::get('/', function () { 
        return view('website.pages.home'); 
    })->name('home');

    Route::get('/explore-catalog', function () {
        $books = \App\Models\Book::take(6)->get(); 
        return view('website.pages.books', compact('books')); 
    })->name('catalog');
    
    // 💡 NAMED PUBLIC ROUTES: Ensures clear URL referencing throughout layouts
    Route::get('/cafe', function () { return view('website.pages.cafe'); })->name('cafe');
    Route::get('/events', function () { return view('website.pages.events'); })->name('events');
    Route::get('/services', function () { return view('website.pages.about'); })->name('services');
    Route::get('/about', function () { return view('website.pages.about'); })->name('about');
    Route::get('/news', function () { return view('website.pages.news'); })->name('news');
    Route::get('/contact', function () { return view('website.pages.contact'); })->name('contact');
    
    Route::view('/become-member', 'website.pages.membership')->name('join');
});


// =========================================================================
// 🔒 SHARED INTERNAL WORKSPACE (Both Admin and Manager Sessions)
// =========================================================================
Route::middleware(['auth'])->group(function () {
    
    // Central Global Search Controller Hook
    Route::get('/global-search', [SearchController::class, 'handle'])->name('global.search');

    // 💡 Core Dashboard Route Destination
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    // Library Resource Modules
    Route::prefix('library')->group(function () {
        Route::resource('books', BookController::class);
        Route::resource('categories', BookCategoryController::class)->names([
            'index'   => 'book-categories.index',
            'create'  => 'book-categories.create',
            'store'   => 'book-categories.store',
            'edit'    => 'book-categories.edit',
            'update'  => 'book-categories.update',
            'destroy' => 'book-categories.destroy',
        ]);
        Route::resource('authors', AuthorController::class);
        Route::resource('publishers', PublisherController::class);

        Route::get('/borrowing', function () { return view('library.borrowing.index'); })->name('borrowings.index');
        Route::get('/returns', function () { return view('library.returns.index'); })->name('returns.index');
        Route::get('/members', function () { return view('library.members.index'); })->name('members.index');
        Route::get('/reservations', function () { return view('library.reservations.index'); })->name('reservations.index');
    });

    // Café Resource Modules
    Route::prefix('cafe')->name('cafe.')->group(function () {
        Route::get('/pos', function () { return view('cafe.pos.index'); })->name('pos.index');
        Route::get('/products', function () { return view('cafe.products.index'); })->name('products.index');
        Route::get('/inventory', function () { return view('cafe.inventory.index'); })->name('inventory.index');
    });

    // Profile Account Management Settings
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});


// =========================================================================
// 🚫 STRICT HIGH-SECURITY AREA (Accessible by ADMIN ONLY)
// =========================================================================
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/reports', function () { return view('reports.index'); })->name('reports.index');
    Route::get('/settings', function () { return view('settings.index'); })->name('settings.index');
    Route::resource('staff', StaffController::class);
});


// =========================================================================
// 🧭 2. ROOT GATEWAY REDIRECT: http://127.0.0.1:8000/
// =========================================================================
Route::get('/', function () {
    return redirect()->to('/web');
});


// =========================================================================
// 📥 4. LARAVEL BREEZE AUTH ROUTE TRACKS SUBSYSTEM LOADERS
// =========================================================================
// 💡 FIXED: We load the baseline Breeze auth array layout files FIRST.
require __DIR__.'/auth.php';


// =========================================================================
// 🚫 5. THE RE-AUTHENTICATION FIREWALL OVERWRITE INTERCEPTOR
// =========================================================================
// 💡 FIXED: Placed BELOW the auth.php declaration. This guarantees that your 
// custom security middleware safely overrides Breeze and strips active cookies!
Route::get('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])
    ->middleware(['web', 'force.reauth'])
    ->name('login');


// =========================================================================
// 🧭 6. THE CATCH-ALL FALLBACK GATEWAY (Handles /anything seamlessly)
// =========================================================================
Route::fallback(function () {
    if (Auth::check()) {
        return redirect()->to('/dashboard');
    }
    
    return redirect()->route('login');
})->middleware('guest.gateway');
