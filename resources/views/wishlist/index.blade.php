@extends('layouts.frontend')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h1 class="font-display font-bold text-2xl text-text-primary mb-8">Wishlist</h1>

        @if (count($products) === 0)
            <div class="bg-surface border border-border p-12 rounded-lg text-center">
                <div class="w-12 h-12 rounded-full bg-border flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-text-secondary/40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <p class="text-text-secondary">Your wishlist is empty.</p>
                <a href="{{ route('shop') }}" class="btn-primary mt-4 inline-block">Start Shopping</a>
            </div>
        @else
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    @include('partials.product-card', ['product' => $product])
                @endforeach
            </div>
        @endif
    </div>
@endsection
