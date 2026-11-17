<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    private function wishlistKey(): string
    {
        return 'wishlist_' . (auth()->check() ? auth()->id() : 'guest');
    }

    public function __invoke(Request $request)
    {
        $wishlist = session($this->wishlistKey(), []);
        $products = [];

        foreach ($wishlist as $productId) {
            $product = Product::with(['defaultVariant'])->find($productId);
            if ($product) {
                $products[] = $product;
            }
        }

        return view('wishlist.index', compact('products'));
    }

    public function toggle(Request $request, Product $product)
    {
        $wishlist = session($this->wishlistKey(), []);
        $productId = $product->id;

        if (in_array($productId, $wishlist)) {
            $wishlist = array_values(array_diff($wishlist, [$productId]));
            $added = false;
        } else {
            $wishlist[] = $productId;
            $added = true;
        }

        session([$this->wishlistKey() => $wishlist]);
        session(['wishlist_count' => count($wishlist)]);

        if ($request->expectsJson()) {
            return response()->json(['added' => $added, 'count' => count($wishlist)]);
        }

        return back()->with($added ? 'success' : 'info', $added ? 'Added to wishlist.' : 'Removed from wishlist.');
    }
}
