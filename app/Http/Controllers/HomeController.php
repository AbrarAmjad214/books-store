<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function __invoke()
    {
        $base = fn () => ShopController::baseQuery();

        $bestsellers = $base()->bestseller()->latest()->take(6)->get();
        $newArrivals = $base()->newArrival()->latest()->take(6)->get();
        $featured = $base()->featured()->latest()->take(2)->get();

        // Top-level genres with the number of books in them (incl. subcategories)
        $categories = Category::root()->active()->with('children')->get()->map(function (Category $category) {
            $ids = $category->children->pluck('id')->push($category->id);
            $category->books_count = Product::active()->whereIn('category_id', $ids)->count();
            $category->category_ids = $ids;

            return $category;
        });

        // Fiction picks for a genre showcase row
        $fiction = $categories->firstWhere('slug', 'fiction');
        $fictionPicks = $fiction
            ? $base()->whereIn('category_id', $fiction->category_ids)->orderByDesc('is_featured')->latest()->take(6)->get()
            : collect();

        // Author with the most books, for the "author of the month" block
        $featuredAuthor = Author::withCount(['products' => fn ($q) => $q->where('status', 'active')])
            ->orderByDesc('products_count')->first();
        $authorBooks = $featuredAuthor
            ? $base()->where('author_id', $featuredAuthor->id)->take(5)->get()
            : collect();

        return view('pages.home', compact(
            'bestsellers', 'newArrivals', 'featured', 'categories', 'fictionPicks', 'featuredAuthor', 'authorBooks'
        ));
    }
}
