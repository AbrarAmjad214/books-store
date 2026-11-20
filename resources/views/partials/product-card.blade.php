{{-- Ebukz product card. Expects $product (App\Models\Product). --}}
<div class="product-style1">
  <div class="product-img">
    <a href="{{ route('product.show', $product->slug) }}">
      <img src="{{ $product->cover_url }}" alt="{{ $product->title }}">
    </a>
    <div class="product-btns">
      <form action="{{ route('wishlist.toggle', $product) }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="icon-btn wishlist" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
      </form>
      @if ($product->is_in_stock)
        <form action="{{ route('cart.add') }}" method="POST" class="d-inline">
          @csrf
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          <input type="hidden" name="quantity" value="1">
          <button type="submit" class="icon-btn cart" aria-label="Add to cart"><i class="fa-solid fa-basket-shopping"></i></button>
        </form>
      @endif
    </div>
    @if ($product->is_new_arrival || $product->is_bestseller || $product->discount_percentage)
      <ul class="post-box">
        @if ($product->is_bestseller)<li>Hot</li>@elseif ($product->is_new_arrival)<li>New</li>@endif
        @if ($product->discount_percentage)<li>-{{ round($product->discount_percentage) }}%</li>@endif
      </ul>
    @endif
  </div>
  <div class="product-content">
    <div class="product-rating">
      @if ($product->review_count)
        <span class="star"><i class="fas fa-star"></i> ({{ number_format($product->rating, 1) }})</span>
      @else
        <span class="star"><i class="fa-solid fa-book"></i> {{ ucfirst($product->format ?: "Paperback") }}</span>
      @endif
      <ul class="price-list">
        @if ($product->compare_at_price && $product->compare_at_price > $product->price)
          <li><del>@money($product->compare_at_price)</del></li>
        @endif
        <li>@money($product->price)</li>
      </ul>
    </div>
    @if ($product->author)
      <span class="product-author"><strong>By:</strong> {{ $product->author->name }}</span>
    @endif
    <h2 class="product-title"><a href="{{ route('product.show', $product->slug) }}">{{ $product->title }}</a></h2>
  </div>
</div>
