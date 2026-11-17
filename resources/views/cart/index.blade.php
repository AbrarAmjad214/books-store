@extends('layouts.frontend')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h1 class="font-display font-bold text-2xl text-text-primary mb-8">Shopping Cart</h1>

        @if (count($items) === 0)
            <div class="bg-surface border border-border p-12 rounded-lg text-center">
                <div class="w-12 h-12 rounded-full bg-border flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-text-secondary/40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4m0 0l-4.586-4.586a2 2 0 112.828-2.828z"></path></svg>
                </div>
                <p class="text-text-secondary">Your cart is empty.</p>
                <a href="{{ route('shop') }}" class="btn-primary mt-4 inline-block">Continue Shopping</a>
            </div>
        @else
            <div class="bg-surface border border-border rounded-lg overflow-hidden">
                <table class="w-full text-left">
                    <thead class="bg-background/50 border-b border-border">
                        <tr>
                            <th class="px-6 py-4 text-sm font-medium text-text-secondary/60">Product</th>
                            <th class="px-6 py-4 text-sm font-medium text-text-secondary/60 text-right">Price</th>
                            <th class="px-6 py-4 text-sm font-medium text-text-secondary/60 text-center">Quantity</th>
                            <th class="px-6 py-4 text-sm font-medium text-text-secondary/60 text-right">Total</th>
                            <th class="px-6 py-4 text-sm font-medium text-text-secondary/60 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border">
                        @foreach ($items as $item)
                            <tr class="group hover:bg-background/50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-16 h-20 object-cover rounded-md border border-border">
                                        <div>
                                            <div class="font-medium text-text-primary">{{ $item['title'] }}</div>
                                            @if ($item['variant'])
                                                <div class="text-xs text-text-secondary/60">{{ $item['variant']->title }}</div>
                                            @endif
                                            <a href="{{ route('cart.remove', $item['rowId']) }}" class="text-xs text-error hover:underline mt-1">Remove</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-text-primary">{{ $item['price'] }} ₨</td>
                                <td class="px-6 py-4 text-center">
                                    <form method="POST" action="{{ route('cart.update', $item['rowId']) }}" class="flex items-center gap-2">
                                        @csrf @method('PATCH')
                                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="input w-16 text-center" max="{{ $item['variant']?->stock_quantity ?? 99 }}">
                                        <button type="submit" class="p-1.5 text-text-secondary/60 hover:text-accent">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                        </button>
                                    </form>
                                </td>
                                <td class="px-6 py-4 text-right text-text-primary font-medium">{{ $item['total'] }} ₨</td>
                                <td class="px-6 py-4 text-right"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-8 flex justify-between items-start">
                <div>
                    <a href="{{ route('shop') }}" class="text-text-secondary hover:text-primary">Continue Shopping</a>
                </div>
                <div class="text-right">
                    <div class="text-lg font-medium text-text-secondary mb-1">Subtotal</div>
                    <div class="text-2xl font-bold text-text-primary">{{ $subtotal }} ₨</div>
                    @if (auth()->check())
                        <a href="{{ route('checkout.index') }}" class="btn-primary mt-4 inline-block px-8 py-3">Proceed to Checkout</a>
                    @else
                        <div class="mt-4 p-4 bg-background/50 rounded-lg border border-border text-sm text-text-secondary">
                            <p class="mb-3">Please <a href="{{ route('login') }}" class="text-accent hover:underline">sign in</a> or <a href="{{ route('register') }}" class="text-accent hover:underline">register</a> to checkout.</p>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>
@endsection
