@extends('layouts.frontend')

@section('content')
    <div class="flex lg:flex-row gap-8">
        <!-- Sidebar Filters -->
        <aside class="lg:w-1/4 flex-shrink-0">
            <div class="bg-surface border border-border p-6 rounded-lg mb-8">
                <h3 class="font-bold text-lg mb-4 text-text-primary">Categories</h3>
                <ul class="space-y-2">
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('category.show', $category->slug) }}" class="block py-2 text-sm {{ request('category') === $category->slug ? 'text-accent font-medium' : 'text-text-secondary hover:text-primary' }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="bg-surface border border-border p-6 rounded-lg">
                <h3 class="font-bold text-lg mb-4 text-text-primary">Price</h3>
                <div class="flex gap-2">
                    <input type="number" name="min_price" value="{{ old('min_price') ?? request('min_price') }}" placeholder="Min" class="input w-1/2">
                    <input type="number" name="max_price" value="{{ old('max_price') ?? request('max_price') }}" placeholder="Max" class="input w-1/2">
                </div>
                <div class="mt-3">
                    <a href="{{ route('shop') }}" class="btn-outline text-sm w-full py-2">Clear filters</a>
                </div>
            </div>
        </aside>

        <!-- Products -->
        <div class="flex-1">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="font-display font-bold text-2xl text-text-primary">Shop</h1>
                    <p class="text-text-secondary">{{ $products->total() }} products found</p>
                </div>
                <div class="flex items-center gap-3">
                    <select id="sort" class="input w-auto px-3 text-sm rounded-md border">
                        <option value="featured" {{ request('sort', 'featured') === 'featured' ? 'selected' : '' }}>Featured</option>
                        <option value="price_asc" {{ request('sort') === 'price_asc' ? 'selected' : '' }}>Price: Low to High</option>
                        <option value="price_desc" {{ request('sort') === 'price_desc' ? 'selected' : '' }}>Price: High to Low</option>
                        <option value="name" {{ request('sort') === 'name' ? 'selected' : '' }}>Name: A to Z</option>
                        <option value="newest" {{ request('sort') === 'newest' ? 'selected' : '' }}>Newest First</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                @if ($products->count() > 0)
                    @foreach ($products as $product)
                        @include('partials.product-card', ['product' => $product])
                    @endforeach
                @else
                    <div class="col-span-full py-12 text-center">
                        <p class="text-text-secondary">No products found matching your criteria.</p>
                    </div>
                @endif
            </div>

            {{ $products->links() }}
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.getElementById('sort')?.addEventListener('change', function () {
        const url = new URL(window.location.href);
        url.searchParams.set('sort', this.value);
        url.searchParams.set('page', 1);
        window.location.href = url.toString();
    });
</script>
@endpush
