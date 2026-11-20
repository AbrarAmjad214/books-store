{{--
  Shared shop listing: sort bar, product grid, pagination and sidebar.
  Expects: $products (paginator), $sidebarTitle, $sidebarCategories (collection of Category)
--}}
<section class="books-layout1 space-top space-extra-bottom">
  <div class="container">
    <div class="row g-4">
      <div class="col-xl-9 col-lg-8">
        <div class="vs-sort-bar">
          <div class="row gap-4 align-items-center">
            <div class="col-md-auto flex-grow-1">
              <p class="woocommerce-result-count">
                @if ($products->total())
                  Showing <span>{{ $products->firstItem() }}-{{ $products->lastItem() }} of {{ $products->total() }}</span> results
                @else
                  Showing <span>0</span> results
                @endif
              </p>
            </div>
            <div class="col-md-auto">
              <form class="woocommerce-ordering" method="get">
                @foreach (request()->except(['sort', 'page']) as $key => $value)
                  @if (is_string($value))<input type="hidden" name="{{ $key }}" value="{{ $value }}">@endif
                @endforeach
                <select name="sort" class="orderby" aria-label="Shop order" onchange="this.form.submit()">
                  @foreach (['featured' => 'Sort by featured', 'newest' => 'Sort by latest', 'name' => 'Sort by name: A to Z', 'price_asc' => 'Sort by price: low to high', 'price_desc' => 'Sort by price: high to low'] as $value => $label)
                    <option value="{{ $value }}" @selected(request('sort', 'featured') === $value)>{{ $label }}</option>
                  @endforeach
                </select>
              </form>
            </div>
          </div>
        </div>

        <div class="row g-4">
          @forelse ($products as $product)
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
              @include('partials.product-card', ['product' => $product])
            </div>
          @empty
            <div class="col-12 text-center py-5">
              <h4>No books found</h4>
              <p>Try a different search or clear the filters.</p>
              <a href="{{ route('shop') }}" class="vs-btn">View all books</a>
            </div>
          @endforelse
        </div>

        {{ $products->links('partials.pagination') }}
      </div>

      <div class="col-xl-3 col-lg-4">
        <aside class="sidebar-area">
          <div class="widget widget_search">
            <h3 class="wp-block-heading widget_title title-shep">Search</h3>
            <form class="search-form" action="{{ route('search') }}" method="GET">
              <input type="text" name="q" value="{{ request('q') }}" placeholder="Search Here...">
              <button class="vs-btn" type="submit">Search</button>
            </form>
          </div>

          <div class="widget">
            <h3 class="widget_title title-shep">Filter By Price</h3>
            <form method="GET" action="{{ url()->current() }}">
              @foreach (request()->except(['min_price', 'max_price', 'page']) as $key => $value)
                @if (is_string($value))<input type="hidden" name="{{ $key }}" value="{{ $value }}">@endif
              @endforeach
              <div class="row g-2 mb-3">
                <div class="col-6"><input type="number" min="0" name="min_price" value="{{ request('min_price') }}" class="form-control" placeholder="Min $"></div>
                <div class="col-6"><input type="number" min="0" name="max_price" value="{{ request('max_price') }}" class="form-control" placeholder="Max $"></div>
              </div>
              <button class="vs-btn" type="submit">Filter</button>
              @if (request()->hasAny(['min_price', 'max_price', 'q', 'sort']))
                <a href="{{ url()->current() }}" class="ms-2">Clear</a>
              @endif
            </form>
          </div>

          @if ($sidebarCategories->isNotEmpty())
            <div class="widget">
              <div class="wp-block-group widget_categories">
                <h3 class="wp-block-heading widget_title title-shep">{{ $sidebarTitle }}</h3>
                <ul class="wp-block-categories-list wp-block-categories">
                  @foreach ($sidebarCategories as $cat)
                    <li class="cat-item {{ request()->route('category')?->id === $cat->id ? 'current-cat' : '' }}">
                      <a href="{{ route('category.show', $cat->slug) }}">{{ $cat->name }}</a>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          @endif
        </aside>
      </div>
    </div>
  </div>
</section>
