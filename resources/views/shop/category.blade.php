@extends('layouts.frontend')

@section('content')
    <div class="flex lg:flex-row gap-8">
        <!-- Breadcrumb -->
        <nav class="flex flex-wrap items-center gap-2 text-sm text-text-secondary/60 mb-6 col-span-full lg:col-span-2">
            <ol class="flex flex-wrap items-center gap-2">
                <li><a href="{{ route('home') }}" class="hover:text-accent">Home</a></li>
                <li><span class="mx-1">/</span></li>
                @foreach ($breadcrumbs as $index => $crumb)
                    @if ($index < count($breadcrumbs) - 1)
                        <li>
                            <a href="{{ route('category.show', $crumb->slug) }}" class="hover:text-accent">{{ $crumb->name }}</a>
                        </li>
                        <li><span class="mx-1">/</span></li>
                    @else
                        <li><span class="text-text-primary font-medium">{{ $crumb->name }}</span></li>
                    @endif
                @endforeach
            </ol>
        </nav>

        <!-- Sidebar Filters -->
        <aside class="lg:w-1/4 flex-shrink-0 mb-8">
            <div class="bg-surface border border-border p-6 rounded-lg">
                <h3 class="font-bold text-lg mb-4 text-text-primary">Subcategories</h3>
                <ul class="space-y-2">
                    @foreach ($category->children as $child)
                        <li>
                            <a href="{{ route('category.show', $child->slug) }}" class="block py-2 text-sm {{ request('category') === $child->slug ? 'text-accent font-medium' : 'text-text-secondary hover:text-primary' }}">{{ $child->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>

        <!-- Products -->
        <div class="flex-1 lg:col-span-2">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="font-display font-bold text-2xl text-text-primary">{{ $category->name }}</h1>
                    <p class="text-text-secondary">{{ $products->total() }} products</p>
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
                        <p class="text-text-secondary">No products in this category.</p>
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
