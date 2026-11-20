<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function __invoke(Product $product)
    {
        $product->load(['category', 'author', 'publisher', 'variants', 'reviews.user']);

        $related = Product::active()->inStock()->with(['author', 'category'])
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->latest()
            ->take(4)
            ->get();

        return view('product.show', compact('product', 'related'));
    }
}
