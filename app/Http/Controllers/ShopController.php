<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = Product::active()->inStock()->with(['category', 'author', 'publisher', 'defaultVariant']);

        // Filters
        if ($request->filled('category')) {
            $category = Category::where('slug', $request->category)->firstOrFail();
            $query->where(function ($q) use ($category) {
                $q->where('category_id', $category->id)
                  ->orWhereHas('category.children', fn ($c) => $c->where('id', $category->id));
            });
        }

        if ($request->filled('author')) {
            $query->where('author_id', $request->author);
        }

        if ($request->filled('publisher')) {
            $query->where('publisher_id', $request->publisher);
        }

        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        // Search
        if ($request->filled('q')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->q . '%')
                  ->orWhere('isbn', 'like', '%' . $request->q . '%')
                  ->orWhere('sku', 'like', '%' . $request->q . '%');
            });
        }

        // Sorting
        $sort = $request->get('sort', 'featured');
        match ($sort) {
            'price_asc' => $query->orderBy('price'),
            'price_desc' => $query->orderByDesc('price'),
            'name' => $query->orderBy('title'),
            'newest' => $query->latest(),
            default => $query->orderByDesc('is_featured')->latest(),
        };

        $products = $query->paginate(12)->withQueryString();

        $categories = Category::root()->get();
        $authors = \App\Models\Author::active()->get();
        $publishers = \App\Models\Publisher::active()->get();

        return view('shop.index', compact('products', 'categories', 'authors', 'publishers', 'request'));
    }
}
