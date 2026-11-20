<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private static function cartKey(): string
    {
        return 'cart_' . (auth()->check() ? auth()->id() : 'guest');
    }

    public function __invoke(Request $request)
    {
        return view('cart.index', self::summary());
    }

    /**
     * Cart lines with current prices, used by the cart page and the header mini-cart.
     */
    public static function summary(): array
    {
        $cart = session(self::cartKey(), []);
        $items = [];
        $subtotal = 0;

        foreach ($cart as $rowId => $item) {
            $product = Product::with(['defaultVariant'])->find($item['product_id']);
            if (!$product) continue;

            $variant = $product->variants->where('id', $item['variant_id'] ?? null)->first();
            $price = $variant?->price ?? $product->price;
            $lineTotal = $price * $item['quantity'];
            $subtotal += $lineTotal;

            $items[] = [
                'rowId' => $rowId,
                'product' => $product,
                'variant' => $variant,
                'quantity' => $item['quantity'],
                'price' => $price,
                'total' => $lineTotal,
                'image' => $product->cover_url,
                'title' => $product->title,
                'slug' => $product->slug,
                'in_stock' => ($variant?->stock_quantity ?? $product->stock_quantity) >= $item['quantity'],
            ];
        }

        $count = array_sum(array_column($items, 'quantity'));

        return compact('items', 'subtotal', 'count');
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'variant_id' => 'nullable|exists:product_variants,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);
        $variantId = $request->variant_id ?? ($product->defaultVariant?->id ?? $product->variants->first()?->id);
        $quantity = (int) $request->quantity;

        $variant = ProductVariant::find($variantId);
        $stock = $variant?->stock_quantity ?? $product->stock_quantity;

        if ($stock < $quantity) {
            return back()->with('error', 'Not enough stock available.');
        }

        $cart = session(self::cartKey(), []);
        $rowId = $product->id . '-' . $variantId;

        if (isset($cart[$rowId])) {
            $cart[$rowId]['quantity'] += $quantity;
        } else {
            $cart[$rowId] = [
                'product_id' => $product->id,
                'variant_id' => $variantId,
                'quantity' => $quantity,
                'price' => $variant?->price ?? $product->price,
            ];
        }

        session([self::cartKey() => $cart]);
        session(['cart_count' => array_sum(array_column($cart, 'quantity'))]);

        return back()->with('success', 'Added to cart.');
    }

    public function update(Request $request, $rowId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:0',
        ]);

        $cart = session(self::cartKey(), []);

        if (!isset($cart[$rowId])) {
            return back()->with('error', 'Item not found in cart.');
        }

        if ((int) $request->quantity === 0) {
            unset($cart[$rowId]);
        } else {
            $cart[$rowId]['quantity'] = $request->quantity;
        }

        session([self::cartKey() => $cart]);
        session(['cart_count' => array_sum(array_column($cart, 'quantity'))]);

        return back()->with('success', 'Cart updated.');
    }

    public function remove($rowId)
    {
        $cart = session(self::cartKey(), []);
        unset($cart[$rowId]);
        session([self::cartKey() => $cart]);
        session(['cart_count' => array_sum(array_column($cart, 'quantity'))]);

        return back()->with('success', 'Item removed from cart.');
    }

    public function clear()
    {
        session([self::cartKey() => [], 'cart_count' => 0]);
        return back()->with('success', 'Cart cleared.');
    }
}
