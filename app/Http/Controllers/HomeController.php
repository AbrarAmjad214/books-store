<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function __invoke()
    {
        $featured = Product::active()->featured()->inStock()->latest()->take(8)->get();
        $bestsellers = Product::active()->bestseller()->inStock()->latest()->take(8)->get();
        $newArrivals = Product::active()->newArrival()->inStock()->latest()->take(8)->get();

        return view('home', compact('featured', 'bestsellers', 'newArrivals'));
    }
}
