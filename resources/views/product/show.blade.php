@extends('layouts.frontend')

@section('content')
    <div class="flex lg:flex-row gap-10">
        <!-- Product Images -->
        <div class="lg:w-1/2">
            <div class="aspect-[3/4] bg-background/50 rounded-xl border border-border overflow-hidden relative mb-4">
                <img src="{{ $product->cover_image ?? 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=800&q=80' }}" alt="{{ $product->title }}" class="w-full h-full object-cover">
            </div>
            @if ($product->gallery_images && count($product->gallery_images) > 0)
                <div class="flex gap-2 overflow-x-auto pb-2">
                    @foreach ($product->gallery_images as $img)
                        <img src="{{ $img }}" alt="{{ $product->title }}" class="w-20 h-28 object-cover rounded-lg border border-border hover:border-accent cursor-pointer">
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Product Info -->
        <div class="lg:w-1/2">
            @if ($product->category)
                <a href="{{ route('category.show', $product->category->slug) }}" class="text-xs text-accent font-medium mb-2 block">{{ $product->category->name }}</a>
            @endif
            <h1 class="font-display font-bold text-3xl text-text-primary mb-2">{{ $product->title }}</h1>
            @if ($product->subtitle)
                <p class="text-text-secondary text-lg mb-6 italic">{{ $product->subtitle }}</p>
            @endif

            <div class="flex items-baseline gap-3 mb-6">
                <span class="text-3xl font-bold text-text-primary">{{ $product->price }} ₨</span>
                @if ($product->compare_at_price && $product->compare_at_price > $product->price)
                    <span class="text-xl text-text-secondary/50 line-through">{{ $product->compare_at_price }} ₨</span>
                    <span class="badge badge-error text-sm">Save {{ $product->discount_percentage }}%</span>
                @endif
            </div>

            <div class="mb-6">
                <div class="flex items-center gap-3 mb-3">
                    <span class="font-medium text-text-primary">Availability:</span>
                    <span class="badge badge-{{ $product->is_in_stock ? 'success' : 'error' }}">{{ $product->is_in_stock ? 'In Stock' : 'Out of Stock' }}</span>
                </div>
                <div class="flex items-center gap-3 mb-3">
                    <span class="font-medium text-text-primary">ISBN:</span>
                    <span class="text-text-secondary">{{ $product->isbn ?? 'N/A' }}</span>
                </div>
                <div class="flex items-center gap-3 mb-3">
                    <span class="font-medium text-text-primary">Format:</span>
                    <span class="text-text-secondary">{{ ucfirst($product->format) }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="font-medium text-text-primary">Pages:</span>
                    <span class="text-text-secondary">{{ $product->pages ?? 'N/A' }}</span>
                </div>
            </div>

            @if ($product->variants->count() > 0)
                <div class="mb-6">
                    <p class="font-medium text-text-primary mb-3">Select Variant</p>
                    <div class="flex gap-2">
                        @foreach ($product->variants as $variant)
                            <label class="cursor-pointer">
                                <input type="radio" name="variant" value="{{ $variant->id }}" class="peer sr-only" {{ $variant->is_default ? 'checked' : '' }}>
                                <div class="border border-border px-4 py-2.5 rounded-md text-sm {{ $variant->is_default ? 'bg-primary/10 text-accent border-accent' : 'text-text-secondary hover:text-primary' }} transition-colors">
                                    {{ $variant->title }}
                                    @if ($variant->price != $product->price)
                                        <span class="text-xs {{ $variant->price > $product->price ? 'text-accent' : 'text-success' }} ml-2">
                                            {{ $variant->price > $product->price ? '+' : '-' }}₨{{ number_format(abs($variant->price - $product->price), 2) }}
                                        </span>
                                    @endif
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($product->is_in_stock)
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    @if ($product->variants->count() > 0)
                        <input type="hidden" name="variant_id" value="{{ $product->defaultVariant?->id ?? $product->variants->first()->id }}">
                    @endif
                    <div class="flex flex-col sm:flex-row gap-3 mb-6">
                        <input type="number" name="quantity" value="1" min="1" max="{{ $product->stock_quantity }}" class="input w-full sm:w-24">
                        <button type="submit" class="btn-primary flex-1 py-3 text-lg font-medium">
                            Add to Cart
                        </button>
                    </div>
                </form>
                <button class="btn-outline w-full py-3 mb-4">Save for Later</button>

                <form action="{{ route('wishlist.toggle', $product) }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit" class="btn-outline w-full py-3 mb-4">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        Add to Wishlist
                    </button>
                </form>
            @else
                <div class="bg-error/10 border border-error/20 p-4 rounded-lg text-error text-sm">
                    Out of stock. Notify me when available.
                </div>
            @endif
        </div>
    </div>

    <!-- Description Tabs -->
    <div class="mt-12">
        <div class="flex gap-8 mb-6 border-b border-border">
            <button class="pb-2 border-b-2 border-accent text-accent font-medium">Description</button>
            <button class="pb-2 border-b-transparent text-text-secondary/60 hover:text-primary transition-colors">Details</button>
            <button class="pb-2 border-b-transparent text-text-secondary/60 hover:text-primary transition-colors">Reviews ({{ $product->review_count }})</button>
        </div>

        <div class="prose prose-sm max-w-none text-text-secondary/80 mb-12">
            {!! $product->description !!}
        </div>

        <!-- Specs -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-12">
            <div class="bg-surface border border-border p-4 rounded-lg">
                <p class="text-xs text-text-secondary/50">ISBN</p>
                <p class="font-medium text-text-primary">{{ $product->isbn ?? 'N/A' }}</p>
            </div>
            <div class="bg-surface border border-border p-4 rounded-lg">
                <p class="text-xs text-text-secondary/50">Publisher</p>
                <p class="font-medium text-text-primary">{{ $product->publisher?->name ?? 'N/A' }}</p>
            </div>
            <div class="bg-surface border border-border p-4 rounded-lg">
                <p class="text-xs text-text-secondary/50">Language</p>
                <p class="font-medium text-text-primary">{{ $product->language }}</p>
            </div>
            <div class="bg-surface border border-border p-4 rounded-lg">
                <p class="text-xs text-text-secondary/50">Publish Date</p>
                <p class="font-medium text-text-primary">{{ $product->publish_date?->format('M d, Y') ?? 'N/A' }}</p>
            </div>
        </div>

        <!-- Reviews -->
        <div class="mb-12">
            <h3 class="font-display font-bold text-2xl mb-6">Customer Reviews</h3>
            <div class="flex items-center gap-4 mb-6">
                <span class="text-4xl font-bold text-text-primary">{{ $product->rating }}</span>
                <div class="flex gap-1">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="text-yellow-400 {{ $i <= round($product->rating) ? 'text-yellow-500' : 'text-text-secondary/20' }}">★</span>
                    @endfor
                </div>
                <span class="text-text-secondary">{{ $product->review_count }} reviews</span>
            </div>
            <div class="space-y-4">
                @foreach ($product->reviews as $review)
                    <div class="border-b border-border pb-4 last:border-0">
                        <div class="flex justify-between mb-2">
                            <span class="font-medium text-text-primary">{{ $review->user?->name ?? 'Anonymous' }}</span>
                            <span class="text-sm text-text-secondary/50">{{ $review->created_at?->format('M d, Y') }}</span>
                        </div>
                        <div class="flex gap-1 mb-2">
                            @for ($i = 1; $i <= 5; $i++)
                                <span class="text-yellow-400 {{ $i <= $review->rating ? 'text-yellow-500' : 'text-text-secondary/20' }}">★</span>
                            @endfor
                        </div>
                        @if ($review->title)
                            <p class="font-medium text-text-primary mb-1">{{ $review->title }}</p>
                        @endif
                        <p class="text-text-secondary/80 text-sm">{{ $review->comment }}</p>
                    </div>
                @endforeach
                @if ($product->reviews->isEmpty())
                    <p class="text-text-secondary">No reviews yet.</p>
                @endif
            </div>
        </div>

        <!-- Related Products -->
        <div>
            <h3 class="font-display font-bold text-2xl mb-6">You May Also Like</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($related as $product)
                    @include('partials.product-card', ['product' => $product])
                @endforeach
            </div>
        </div>
    </div>
@endsection
