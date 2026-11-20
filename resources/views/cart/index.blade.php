@extends('layouts.ebukz')

@section('title', 'Cart')

@section('content')
  <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.png') }}">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Cart</h1>
        <div class="breadcumb-menu-wrap">
          <div class="breadcumb-menu">
            <span><a href="{{ route('home') }}">Home</a></span>
            <span>Cart</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="vs-cart-wrapper space-top space-extra-bottom">
    <div class="container">
      @if (count($items) === 0)
        <div class="text-center py-5">
          <i class="fa-solid fa-basket-shopping fa-3x mb-4" style="color: var(--theme-color);"></i>
          <h3>Your cart is empty</h3>
          <p>Browse the shop and add some books.</p>
          <a href="{{ route('shop') }}" class="vs-btn">Continue Shopping</a>
        </div>
      @else
        <table class="cart_table">
          <thead>
            <tr>
              <th class="cart-col-image">Image</th>
              <th class="cart-col-productname">Product Name</th>
              <th class="cart-col-price">Price</th>
              <th class="cart-col-quantity">Quantity</th>
              <th class="cart-col-total">Total</th>
              <th class="cart-col-remove">Remove</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
              <tr class="cart_item">
                <td data-title="Product">
                  <a class="cart-productimage" href="{{ route('product.show', $item['slug']) }}"><img width="100" height="95" src="{{ $item['image'] ?: asset('assets/img/shop/product-1-1.jpg') }}" alt="{{ $item['title'] }}"></a>
                </td>
                <td data-title="Name">
                  <a class="cart-productname" href="{{ route('product.show', $item['slug']) }}">{{ $item['title'] }}</a>
                  @if ($item['variant'])
                    <br><small>{{ $item['variant']->title }}</small>
                  @endif
                  @unless ($item['in_stock'])
                    <br><small class="text-danger">Not enough stock</small>
                  @endunless
                </td>
                <td data-title="Price"><span class="amount"><bdi>@money($item['price'])</bdi></span></td>
                <td data-title="Quantity">
                  <form method="POST" action="{{ route('cart.update', $item['rowId']) }}" class="d-inline-flex align-items-center gap-2">
                    @csrf @method('PATCH')
                    <div class="quantity style2">
                      <div class="quantity__field quantity-container">
                        <div class="quantity__buttons">
                          <button type="button" class="quantity-plus qty-btn"><i class="fal fa-plus"></i></button>
                          <input type="number" class="qty-input" step="1" min="1" max="{{ $item['variant']?->stock_quantity ?? $item['product']->stock_quantity ?? 99 }}" name="quantity" value="{{ $item['quantity'] }}" title="Qty">
                          <button type="button" class="quantity-minus qty-btn"><i class="fal fa-minus"></i></button>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="icon-btn" title="Update quantity" aria-label="Update quantity"><i class="fal fa-sync"></i></button>
                  </form>
                </td>
                <td data-title="Total"><span class="amount"><bdi>@money($item['total'])</bdi></span></td>
                <td data-title="Remove">
                  <form method="POST" action="{{ route('cart.remove', $item['rowId']) }}">
                    @csrf @method('DELETE')
                    <button type="submit" class="remove border-0 bg-transparent" aria-label="Remove"><i class="fal fa-trash-alt"></i></button>
                  </form>
                </td>
              </tr>
            @endforeach
            <tr>
              <td colspan="6" class="actions">
                <form method="POST" action="{{ route('cart.clear') }}" class="d-inline">
                  @csrf @method('DELETE')
                  <button type="submit" class="vs-btn">Clear cart</button>
                </form>
                <a href="{{ route('shop') }}" class="vs-btn">Continue Shopping</a>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="row justify-content-end">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <h2 class="h4 summary-title">Cart Totals</h2>
            <table class="cart_totals">
              <tbody>
                <tr>
                  <td>Cart Subtotal</td>
                  <td data-title="Cart Subtotal"><span class="amount"><bdi>@money($subtotal)</bdi></span></td>
                </tr>
                <tr class="shipping">
                  <th>Shipping and Handling</th>
                  <td data-title="Shipping and Handling">Calculated at checkout</td>
                </tr>
              </tbody>
              <tfoot>
                <tr class="order-total">
                  <td>Order Total</td>
                  <td data-title="Total"><strong><span class="amount"><bdi>@money($subtotal)</bdi></span></strong></td>
                </tr>
              </tfoot>
            </table>
            <div class="wc-proceed-to-checkout mb-30">
              @auth
                <a href="{{ route('checkout') }}" class="vs-btn">Proceed to checkout</a>
              @else
                <p class="mb-3">Please <a href="{{ route('login') }}">sign in</a> or <a href="{{ route('register') }}">register</a> to checkout.</p>
                <a href="{{ route('login') }}" class="vs-btn">Sign in to checkout</a>
              @endauth
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
@endsection
