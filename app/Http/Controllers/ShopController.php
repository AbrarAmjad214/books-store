<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = self::baseQuery();

        if ($request->filled('category')) {
            $category = Category::where('slug', $request->category)->firstOrFail();
            $query->whereIn('category_id', $category->children()->pluck('id')->push($category->id));
        }

        if ($request->filled('author')) {
            $query->where('author_id', $request->author);
        }

        if ($request->filled('publisher')) {
            $query->where('publisher_id', $request->publisher);
        }

        $products = self::applyFilters($query, $request)->paginate(12)->withQueryString();

        $categories = Category::root()->active()->get();
        $authors = Author::active()->get();
        $publishers = Publisher::active()->get();

        return view('shop.index', compact('products', 'categories', 'authors', 'publishers', 'request'));
    }

    /**
     * Active, in-stock products with the relations the product card needs.
     */
    public static function baseQuery(): Builder
    {
        return Product::active()->inStock()->with(['category', 'author', 'publisher', 'defaultVariant']);
    }

    /**
     * Price range, keyword search and sorting shared by shop, category and search pages.
     */
    public static function applyFilters(Builder $query, Request $request): Builder
    {
        if ($request->filled('min_price')) {
            $query->where('price', '>=', (float) $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', (float) $request->max_price);
        }

        if ($request->filled('q')) {
            $term = '%' . $request->q . '%';
            $query->where(function ($q) use ($term) {
                $q->where('title', 'like', $term)
                  ->orWhere('isbn', 'like', $term)
                  ->orWhere('sku', 'like', $term)
                  ->orWhereHas('author', fn ($a) => $a->where('name', 'like', $term))
                  ->orWhereHas('publisher', fn ($p) => $p->where('name', 'like', $term));
            });
        }

        match ($request->input('sort', 'featured')) {
            'price_asc' => $query->orderBy('price'),
            'price_desc' => $query->orderByDesc('price'),
            'name' => $query->orderBy('title'),
            'newest' => $query->latest(),
            default => $query->orderByDesc('is_featured')->latest(),
        };

        return $query;
    }
}
