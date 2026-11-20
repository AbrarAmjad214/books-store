@extends('layouts.ebukz')

@section('title', 'Online Bookstore')

@section('content')
  {{-- ============================================================
       HERO
       ============================================================ --}}
  <section class="hero-layout1">
    <div class="hero-item" data-bg-src="{{ asset('assets/img/bg/hero-bg1.jpg') }}">
      <div class="container position-relative z-index">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 position-relative">
            <div class="hero-content">
              <span class="hero-badge wow animate__fadeInUp" data-wow-delay="0.40s"><i class="fa-solid fa-earth-americas"></i> Shipping worldwide</span>
              <h1 class="hero-title wow animate__fadeInUp" data-wow-delay="0.50s">Find Your Next <span class="title-highlight">Favourite</span> Book</h1>
              <p class="hero-text store-hero-text wow animate__fadeInUp" data-wow-delay="0.75s">Bestsellers, new releases and timeless classics — hand-picked for readers everywhere.</p>
              <form class="hero-search wow animate__fadeInUp" data-wow-delay="0.85s" action="{{ route('search') }}" method="GET">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="q" placeholder="Search by title, author or ISBN" aria-label="Search books">
                <button type="submit" class="vs-btn">Search</button>
              </form>
              <div class="hero-links wow animate__fadeInUp" data-wow-delay="0.95s">
                <span>Popular:</span>
                @foreach ($categories->take(4) as $category)
                  <a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-img">
              <img src="{{ asset('assets/img/hero/hero-img-1-1.png') }}" alt="Stack of books">
            </div>
          </div>
        </div>
      </div>
    </div>
    <span class="shape-mockup element1 z-index1 d-xxl-block d-none" style="right: 0px; top: -10px;"><img src="{{ asset('assets/img/shapes/hero-shape2.svg') }}" alt=""></span>
    <span class="shape-mockup element2 z-index1 d-xxl-block d-none" style="left: 0px; bottom: -10px;"><img src="{{ asset('assets/img/shapes/hero-shape3.svg') }}" alt=""></span>
    <span class="shape-mockup z-index1 wow animate__fadeInLeft d-xxl-block d-none" data-wow-delay="0.80s" style="left: 0px; top: 0px;"><img src="{{ asset('assets/img/shapes/hero-shape1.svg') }}" alt=""></span>
  </section>

  {{-- ============================================================
       SERVICE FEATURES
       ============================================================ --}}
  <div class="feature-layout1 space-top">
    <div class="container">
      <div class="row g-4">
        @foreach ([
            ['n' => 1, 'title' => 'Worldwide Delivery', 'text' => 'Free shipping on orders over ' . $store['currency_symbol'] . number_format($store['free_shipping_over'])],
            ['n' => 2, 'title' => 'Secure Payments', 'text' => 'Cards, PayPal & more — fully encrypted'],
            ['n' => 3, 'title' => 'Easy 30-Day Returns', 'text' => 'Changed your mind? Send it back free'],
        ] as $feature)
          <div class="col-lg-4 col-md-6 text-center wow animate__fadeInUp" data-wow-delay="0.{{ 2 + $loop->index * 2 }}0s">
            <div class="feature-style1">
              <span class="feature-icon">
                <img class="icon-1" src="{{ asset('assets/img/feature/feature-icon-1-' . $feature['n'] . '.png') }}" alt="">
                <img class="icon-2" src="{{ asset('assets/img/feature/feature-icon-2-' . $feature['n'] . '.png') }}" alt="">
              </span>
              <div class="feature-body">
                <h2 class="feature-title">{{ $feature['title'] }}</h2>
                <p class="feature-text">{{ $feature['text'] }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  {{-- ============================================================
       BESTSELLERS
       ============================================================ --}}
  @if ($bestsellers->isNotEmpty())
    <section class="trending-layout1 space">
      <div class="container">
        <div class="title-area2 animation-style1 title-anime">
          <span class="border-line d-xxl-block d-none"></span>
          <h2 class="sec-title title-anime__title">Bestsellers This Week</h2>
          <a class="vs-btn wow animate__flipInX" data-wow-delay="0.30s" href="{{ route('shop') }}">View All</a>
        </div>
        <div class="row g-4">
          @foreach ($bestsellers as $product)
            <div class="col-xl-2 col-md-4 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.{{ 3 + $loop->index }}0s">
              @include('partials.product-card', ['product' => $product])
            </div>
          @endforeach
        </div>
      </div>
    </section>
  @endif

  {{-- ============================================================
       FEATURED OFFERS
       ============================================================ --}}
  @if ($featured->count() === 2)
    <div class="offer-layout1 space-bottom">
      <div class="container">
        <div class="row g-4">
          @foreach ($featured as $book)
            <div class="col-xl-6 col-lg-6">
              <div class="offer-style1 {{ $loop->last ? 'white-style' : '' }} wow animate__fadeIn{{ $loop->first ? 'Left' : 'Right' }}" data-wow-delay="0.30s" data-bg-src="{{ asset('assets/img/bg/offer-bg' . $loop->iteration . '.jpg') }}">
                <div class="offer-img store-offer-img">
                  <img src="{{ $book->cover_url }}" alt="{{ $book->title }}">
                </div>
                <div class="offer-content">
                  <span class="offer-kicker">{{ $loop->first ? 'Editor’s Pick' : 'Staff Favourite' }}</span>
                  <h2 class="offer-title">{{ $book->title }}</h2>
                  <p class="offer-price">Only <span>@money($book->price)</span></p>
                  <a class="vs-btn" href="{{ route('product.show', $book->slug) }}">Shop Now</a>
                </div>
                <span class="shape-mockup element1 z-index1 d-xxl-block d-none" style="right: 0px; bottom: -5px;"><img src="{{ asset('assets/img/shapes/offer-shape' . $loop->iteration . '.png') }}" alt=""></span>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  @endif

  {{-- ============================================================
       SHOP BY GENRE
       ============================================================ --}}
  <section class="categories-layout1 space" data-bg-src="{{ asset('assets/img/bg/categorie-bg1.jpg') }}">
    <div class="container">
      <div class="title-area text-center animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Shop By Genre</h2>
      </div>
      <div class="row g-4 justify-content-center">
        @foreach ($categories as $category)
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <a href="{{ route('category.show', $category->slug) }}" class="categorie-style1 store-cat wow animate__fadeInUp" data-wow-delay="0.{{ 3 + $loop->index }}0s">
              <img src="{{ asset('assets/img/categoris/catigori-1-' . ($loop->iteration) . '.png') }}" alt="{{ $category->name }}">
              <h4 class="categorie-title">{{ $category->name }}</h4>
              <span class="store-cat__count">{{ $category->books_count }} {{ \Illuminate\Support\Str::plural('Book', $category->books_count) }}</span>
            </a>
          </div>
        @endforeach
        <div class="col-xl-2 col-lg-3 col-md-4 col-6">
          <a href="{{ route('shop', ['sort' => 'newest']) }}" class="categorie-style1 store-cat wow animate__fadeInUp" data-wow-delay="0.80s">
            <img src="{{ asset('assets/img/categoris/catigori-1-6.png') }}" alt="New arrivals">
            <h4 class="categorie-title">New Arrivals</h4>
            <span class="store-cat__count">Just in</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- ============================================================
       AUTHOR OF THE MONTH
       ============================================================ --}}
  @if ($featuredAuthor && $authorBooks->isNotEmpty())
    <section class="selling-layout1 space" data-bg-src="{{ asset('assets/img/bg/selling-bg.jpg') }}">
      <div class="container">
        <div class="row g-4 gx-40 align-items-center">
          <div class="col-xl-5">
            <div class="selling-content">
              <h2 class="selling-title wow animate__fadeInUp" data-wow-delay="0.20s">Author Of The Month</h2>
              <h4 class="author-name wow animate__fadeInUp" data-wow-delay="0.30s">{{ $featuredAuthor->name }}</h4>
              <span class="published wow animate__fadeInUp" data-wow-delay="0.40s">{{ $featuredAuthor->products_count }} {{ \Illuminate\Support\Str::plural('Book', $featuredAuthor->products_count) }} in our store</span>
              <p class="selling-text wow animate__fadeInUp" data-wow-delay="0.50s">{{ $featuredAuthor->bio }} Discover the stories readers can’t stop talking about.</p>
              <a class="vs-btn wow animate__flipInX" data-wow-delay="0.60s" href="{{ route('search', ['q' => $featuredAuthor->name]) }}">See All Books</a>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="selling-img-tag wow animate__fadeInUp" data-wow-delay="0.30s">
              <div class="wow animate__fadeInDownBig" data-wow-delay="0.30s">
                <div class="tag">
                  <img src="{{ asset('assets/img/selling/selling-icon.png') }}" alt="">
                  <h4 class="tag-title">Most Loved Author This Month</h4>
                </div>
              </div>
              <a href="{{ route('product.show', $authorBooks->first()->slug) }}">
                <img src="{{ $authorBooks->first()->cover_url }}" class="w-100 author-feature-cover" alt="{{ $authorBooks->first()->title }}">
              </a>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="selling-books">
              @foreach ($authorBooks->skip(1) as $book)
                <a href="{{ route('product.show', $book->slug) }}" class="book-item wow animate__{{ $loop->index < 2 ? 'fadeInDown' : 'fadeInUp' }}" data-wow-delay="0.{{ 3 + $loop->index }}0s">
                  <img src="{{ $book->cover_url }}" alt="{{ $book->title }}">
                </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  {{-- ============================================================
       FICTION PICKS
       ============================================================ --}}
  @if ($fictionPicks->isNotEmpty())
    <section class="trending-layout1 space">
      <div class="container">
        <div class="title-area2 animation-style1 title-anime">
          <span class="border-line d-xxl-block d-none"></span>
          <h2 class="sec-title title-anime__title">Fiction Favourites</h2>
          <a class="vs-btn wow animate__flipInX" data-wow-delay="0.30s" href="{{ route('category.show', 'fiction') }}">View All</a>
        </div>
        <div class="row g-4">
          @foreach ($fictionPicks as $product)
            <div class="col-xl-2 col-md-4 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.{{ 3 + $loop->index }}0s">
              @include('partials.product-card', ['product' => $product])
            </div>
          @endforeach
        </div>
      </div>
    </section>
  @endif

  {{-- ============================================================
       NEW ARRIVALS
       ============================================================ --}}
  @if ($newArrivals->isNotEmpty())
    <section class="books-layout1 space" data-bg-src="{{ asset('assets/img/bg/section-bg1.jpg') }}">
      <div class="container">
        <div class="title-area text-center animation-style1 title-anime">
          <span class="sec-subtitle justify-content-center">Just Landed</span>
          <h2 class="sec-title title-anime__title">New Arrivals</h2>
        </div>
        <div class="row g-4">
          @foreach ($newArrivals as $product)
            <div class="col-xl-2 col-md-4 col-sm-6 wow animate__fadeInUp" data-wow-delay="0.{{ 3 + $loop->index }}0s">
              @include('partials.product-card', ['product' => $product])
            </div>
          @endforeach
        </div>
        <div class="text-center mt-5">
          <a class="vs-btn" href="{{ route('shop', ['sort' => 'newest']) }}">Browse New Arrivals</a>
        </div>
      </div>
    </section>
  @endif

  @include('partials.store.counters')
  @include('partials.store.testimonials')
  @include('partials.store.brands')
@endsection
