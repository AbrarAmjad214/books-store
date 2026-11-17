<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = Product::active()->inStock()->with(['category', 'author', 'publisher', 'defaultVariant']);

        if ($request->filled('q')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->q . '%')
                  ->orWhere('isbn', 'like', '%' . $request->q . '%')
                  ->orWhere('sku', 'like', '%' . $request->q . '%')
                  ->orWhereHas('author', fn ($a) => $a->where('name', 'like', '%' . $request->q . '%'))
                  ->orWhereHas('publisher', fn ($p) => $p->where('name', 'like', '%' . $request->q . '%'));
            });
        }

        $products = $query->paginate(12)->withQueryString();

        return view('shop.index', compact('products', 'request'));
    }
}
