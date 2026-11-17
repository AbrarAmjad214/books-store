<article class="card group relative">
    <div class="aspect-[2/3] overflow-hidden relative bg-background/50">
        <img src="{{ $product->cover_image ?? 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=400&q=80' }}" alt="{{ $product->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        @if ($product->discount_percentage)
            <span class="absolute top-2 left-2 bg-error text-white text-xs font-bold px-2 py-1 rounded">{{ $product->discount_percentage }}% OFF</span>
        @endif
        @if ($product->is_bestseller)
            <span class="absolute top-2 right-2 bg-accent text-white text-xs font-bold px-2 py-1 rounded">Bestseller</span>
        @endif
        @if ($product->is_new_arrival)
            <span class="absolute bottom-2 left-2 bg-primary text-white text-xs font-bold px-2 py-1 rounded">New</span>
        @endif
        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100">
            <a href="{{ route('product.show', $product->slug) }}" class="btn-outline text-sm text-white border-white hover:bg-white hover:text-primary">Quick View</a>
        </div>
    </div>
    <div class="p-4">
        @if ($product->category)
            <a href="{{ route('category.show', $product->category->slug) }}" class="text-xs text-accent font-medium">{{ $product->category->name }}</a>
        @endif
        <h3 class="font-display font-bold text-text-primary mt-1 text-base group-hover:text-accent transition-colors">
            <a href="{{ route('product.show', $product->slug) }}">{{ $product->title }}</a>
        </h3>
        @if ($product->author)
            <p class="text-xs text-text-secondary/60 mt-1">{{ $product->author->name }}</p>
        @endif
        <div class="flex items-baseline gap-2 mt-3">
            <span class="font-bold text-lg text-text-primary">{{ $product->price }} ₨</span>
            @if ($product->compare_at_price && $product->compare_at_price > $product->price)
                <span class="text-xs text-text-secondary/50 line-through">{{ $product->compare_at_price }}</span>
            @endif
        </div>
        <div class="mt-3 flex items-center gap-2">
            <span class="badge badge-success text-xs">{{ $product->is_in_stock ? 'In Stock' : 'Out of Stock' }}</span>
            <span class="text-xs text-text-secondary/50 ml-auto">{{ $product->review_count }} reviews</span>
        </div>
    </div>
</article>
