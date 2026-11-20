@extends('layouts.ebukz')

@section('title', 'Wishlist')

@section('content')
  <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.png') }}">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Wishlist</h1>
        <div class="breadcumb-menu-wrap">
          <div class="breadcumb-menu">
            <span><a href="{{ route('home') }}">Home</a></span>
            <span>Wishlist</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="space-top space-extra-bottom">
    <div class="container">
      @if (count($products) === 0)
        <div class="text-center py-5">
          <i class="far fa-heart fa-3x mb-4" style="color: var(--theme-color);"></i>
          <h3>Your wishlist is empty</h3>
          <p>Tap the heart on any book to save it here.</p>
          <a href="{{ route('shop') }}" class="vs-btn">Start Shopping</a>
        </div>
      @else
        <div class="row g-4">
          @foreach ($products as $product)
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
              @include('partials.product-card', ['product' => $product])
            </div>
          @endforeach
        </div>
      @endif
    </div>
  </section>
@endsection
