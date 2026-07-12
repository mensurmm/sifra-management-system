<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Intelligently routes single search terms to their respective modules.
     */
    public function handle(Request $request)
    {
        $query = trim($request->input('query'));

        if (empty($query)) {
            return redirect()->back();
        }

        // 1. Check if the string matches an invoice/borrowing context prefix
        if (str_starts_with(strtolower($query), 'inv-') || is_numeric($query)) {
            return redirect()->to('/library/borrowing?search=' . urlencode($query));
        }

        // 2. Check if searching specifically for an email domain format (Members lookup)
        if (filter_var($query, FILTER_VALIDATE_EMAIL)) {
            return redirect()->to('/library/members?email=' . urlencode($query));
        }

        // Default redirect fallback: Routes term directly to your books index catalog table filter
        return redirect()->to('/library/books?search=' . urlencode($query));
    }
}
