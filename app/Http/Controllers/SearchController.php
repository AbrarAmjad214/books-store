<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $products = ShopController::applyFilters(ShopController::baseQuery(), $request)
            ->paginate(12)
            ->withQueryString();

        $categories = Category::root()->active()->get();
        $authors = Author::active()->get();
        $publishers = Publisher::active()->get();

        return view('shop.index', compact('products', 'categories', 'authors', 'publishers', 'request'));
    }
}
