@extends('layouts.ebukz')

@section('title', $product->title)
@section('description', \Illuminate\Support\Str::limit(strip_tags($product->description), 155))

@section('content')
  <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.png') }}">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Book Details</h1>
        <div class="breadcumb-menu-wrap">
          <div class="breadcumb-menu">
            <span><a href="{{ route('home') }}">Home</a></span>
            <span><a href="{{ route('shop') }}">Shop</a></span>
            @if ($product->category)
              <span><a href="{{ route('category.show', $product->category->slug) }}">{{ $product->category->name }}</a></span>
            @endif
            <span>{{ \Illuminate\Support\Str::limit($product->title, 40) }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="vs-product-wrapper space-top space-extra-bottom">
    <div class="container">
      <div class="row gx-60">
        <div class="col-lg-6">
          <div class="product-slide-row">
            <div class="product-big-img">
              <div class="img"><img src="{{ $product->cover_url }}" alt="{{ $product->title }}"></div>
            </div>
            @if ($product->gallery_images && count($product->gallery_images) > 0)
              <div class="d-flex gap-2 mt-3 flex-wrap">
                @foreach ($product->gallery_images as $img)
                  <img src="{{ $img }}" alt="{{ $product->title }}" style="width:80px;height:110px;object-fit:cover;border-radius:8px;">
                @endforeach
              </div>
            @endif
          </div>
        </div>
        <div class="col-lg-6">
          <div class="product-about">
            <div class="product-rating">
              <div class="star-rating" role="img" aria-label="Rated {{ number_format($product->rating, 2) }} out of 5">
                <span style="width: {{ min(100, $product->rating / 5 * 100) }}%"></span>
              </div>
              <span class="product-rating__total">Review ({{ sprintf('%02d', $product->review_count) }})</span>
            </div>
            <h2 class="product-title">{{ $product->title }}</h2>
            @if ($product->author)
              <span class="product-author"><strong>By:</strong> {{ $product->author->name }}</span>
            @endif
            <p class="product-price">
              @money($product->price)
              @if ($product->compare_at_price && $product->compare_at_price > $product->price)
                <del>@money($product->compare_at_price)</del>
              @endif
            </p>
            @if ($product->subtitle)
              <p class="text">{{ $product->subtitle }}</p>
            @endif
            <span class="product-instock">
              <p>Availability:</p>
              @if ($product->is_in_stock)
                <span><i class="fas fa-check-square"></i>In Stock</span>
              @else
                <span class="text-danger"><i class="fas fa-times-circle"></i>Out of Stock</span>
              @endif
            </span>

            @if ($product->is_in_stock)
              <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">

                @if ($product->variants->count() > 1)
                  <div class="mb-4">
                    <p class="mb-3"><strong>Format:</strong></p>
                    <div class="d-flex flex-wrap gap-4">
                      @foreach ($product->variants as $variant)
                        <div>
                          <input type="radio" id="variant-{{ $variant->id }}" name="variant_id" value="{{ $variant->id }}" @checked($variant->is_default || ($loop->first && !$product->defaultVariant))>
                          <label for="variant-{{ $variant->id }}">{{ $variant->title }} — @money($variant->price)</label>
                        </div>
                      @endforeach
                    </div>
                  </div>
                @elseif ($product->variants->count() === 1)
                  <input type="hidden" name="variant_id" value="{{ $product->variants->first()->id }}">
                @endif

                <div class="actions">
                  <div class="quantity">
                    <div class="quantity__field quantity-container">
                      <div class="quantity__buttons">
                        <button type="button" class="quantity-plus qty-btn"><i class="fal fa-plus"></i></button>
                        <input type="number" class="qty-input" step="1" min="1" max="{{ max(1, $product->stock_quantity) }}" name="quantity" value="1" title="Qty">
                        <button type="button" class="quantity-minus qty-btn"><i class="fal fa-minus"></i></button>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="vs-btn"><i class="fa-solid fa-basket-shopping"></i>Add to Cart</button>
                  <button type="submit" form="wishlist-form" class="icon-btn" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
                </div>
              </form>
            @else
              <div class="actions">
                <button type="submit" form="wishlist-form" class="vs-btn"><i class="far fa-heart"></i>Add to Wishlist</button>
              </div>
            @endif
            <form id="wishlist-form" action="{{ route('wishlist.toggle', $product) }}" method="POST" class="d-none">@csrf</form>

            <div class="product_meta">
              <h4 class="h5">Information:</h4>
              @if ($product->sku)
                <span class="sku_wrapper"><p>SKU:</p> <span class="sku">{{ $product->sku }}</span></span>
              @endif
              @if ($product->isbn)
                <span><p>ISBN:</p> <span>{{ $product->isbn }}</span></span>
              @endif
              @if ($product->category)
                <span class="posted_in"><p>Category:</p> <a href="{{ route('category.show', $product->category->slug) }}" rel="tag">{{ $product->category->name }}</a></span>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="product-description">
        <div class="product-description__tab">
          <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-desc-tab" data-bs-toggle="pill" data-bs-target="#pills-desc" type="button" role="tab" aria-controls="pills-desc" aria-selected="true">Description</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews" aria-selected="false">Reviews ({{ sprintf('%02d', $product->review_count) }})</button>
            </li>
          </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-desc" role="tabpanel" aria-labelledby="pills-desc-tab">
            <div class="description">
              <div class="text">{!! $product->description !!}</div>
              <div class="product_meta">
                <span><p>Publisher</p> <span>{{ $product->publisher?->name ?? 'N/A' }}</span></span>
                <span><p>Format</p> <span>{{ $product->format ? ucfirst($product->format) : 'N/A' }}</span></span>
                <span><p>Pages</p> <span>{{ $product->pages ?? 'N/A' }}</span></span>
                <span><p>Language</p> <span>{{ $product->language ?? 'N/A' }}</span></span>
                <span><p>Publish Date</p> <span>{{ $product->publish_date?->format('M d, Y') ?? 'N/A' }}</span></span>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
            <div class="woocommerce-reviews">
              <div class="vs-comments-wrap">
                @if ($product->reviews->isEmpty())
                  <p class="text">No reviews yet.</p>
                @else
                  <ul class="comment-list">
                    @foreach ($product->reviews as $review)
                      <li class="review vs-comment-item">
                        <div class="vs-post-comment">
                          <div class="comment-content">
                            <div class="comment-content__header">
                              <div class="review-rating">
                                <div class="star-rating" role="img" aria-label="Rated {{ $review->rating }} out of 5">
                                  <span style="width: {{ $review->rating / 5 * 100 }}%"></span>
                                </div>
                              </div>
                              <h4 class="name h4">{{ $review->user?->name ?? 'Anonymous' }}</h4>
                            </div>
                            @if ($review->title)<p class="mb-1"><strong>{{ $review->title }}</strong></p>@endif
                            <p class="text">{{ $review->comment }}</p>
                            <span class="commented-on">Published {{ $review->created_at?->diffForHumans() }}</span>
                          </div>
                        </div>
                      </li>
                    @endforeach
                  </ul>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>

      @if ($related->isNotEmpty())
        <div class="pt-5">
          <div class="title-area mb-4">
            <h2 class="sec-title">You May Also Like</h2>
          </div>
          <div class="row g-4">
            @foreach ($related as $item)
              <div class="col-xl-3 col-lg-4 col-sm-6">
                @include('partials.product-card', ['product' => $item])
              </div>
            @endforeach
          </div>
        </div>
      @endif
    </div>
  </div>
@endsection
