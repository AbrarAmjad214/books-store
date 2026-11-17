<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->load('children.products');

        $products = Product::active()->inStock()
            ->where(function ($q) use ($category) {
                $q->where('category_id', $category->id)
                  ->orWhereHas('category.children', fn ($c) => $c->where('id', $category->id));
            })
            ->with(['author', 'publisher', 'defaultVariant'])
            ->paginate(12)
            ->withQueryString();

        $breadcrumbs = [];
        $current = $category;
        while ($current) {
            $breadcrumbs[] = $current;
            $current = $current->parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);

        return view('shop.category', compact('category', 'products', 'breadcrumbs'));
    }
}
