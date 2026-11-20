<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title', 'Online Bookstore') | {{ $store['name'] }}</title>
  <meta name="author" content="{{ $store['name'] }}">
  <meta name="description" content="@yield('description', $store['name'] . ' — ' . $store['tagline'] . '. Bestsellers, new releases and timeless classics across every genre.')">
  <meta name="keywords" content="@yield('keywords', 'online bookstore, buy books online, bestsellers, new releases, fiction, non-fiction, children books')">
  <meta name="robots" content="INDEX,FOLLOW">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- Favicons --}}
  <link rel="icon" href="{{ asset('assets/img/favicons/favicon.svg') }}" type="image/svg+xml">
  <link rel="icon" href="{{ asset('assets/img/favicons/favicon.png') }}" type="image/png" sizes="32x32">
  <link rel="shortcut icon" href="{{ asset('assets/img/favicons/favicon.ico') }}" type="image/x-icon">

  {{-- Google Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  {{-- All CSS Files --}}
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/nouislider.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/store.css') }}">
  @stack('styles')
</head>

<body>
  {{-- Preloader --}}
  <div class="preloader">
    <button class="vs-btn preloaderCls">Cancel Preloader</button>
    <div class="preloader-inner">
      <div class="preloader-brand">@include('partials.brand-logo')</div>
      <span class="loader"></span>
    </div>
  </div>

  {{-- Back to Top --}}
  <button class="back-to-top" id="backToTop" aria-label="Back to Top">
    <span class="progress-circle">
      <svg viewBox="0 0 100 100">
        <circle class="bg" cx="50" cy="50" r="40"></circle>
        <circle class="progress" cx="50" cy="50" r="40"></circle>
      </svg>
      <span class="progress-percentage" id="progressPercentage">0%</span>
    </span>
  </button>

  {{-- Mobile Menu --}}
  <div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
      <div class="mobile-logo">
        @include('partials.brand-logo')
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
      </div>
      <div class="vs-mobile-menu">
        <ul>
          @include('partials.nav-menu')
        </ul>
      </div>
    </div>
  </div>

  {{-- Popup Search Box --}}
  <div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="{{ route('search') }}" method="GET">
      <input type="text" name="q" class="border-theme" placeholder="Search by title, author or ISBN" value="{{ request('q') }}">
      <button type="submit"><i class="fal fa-search"></i></button>
    </form>
  </div>

  {{-- ============================================================
       HEADER
       ============================================================ --}}
  <header class="vs-header header-layout1 style2">
    {{-- Top Bar --}}
    <div class="header-top">
      <div class="container">
        <div class="row justify-content-md-between justify-content-center align-items-center">
          <div class="col-auto">
            <div class="header-links d-md-inline d-none">
              <ul>
                <li><i class="fa-solid fa-truck-fast"></i>Free worldwide shipping on orders over @money($store['free_shipping_over'])</li>
              </ul>
            </div>
          </div>
          <div class="col-auto">
            <div class="header-right">
              <div class="header-links d-sm-inline d-none">
                <ul>
                  <li><a href="mailto:{{ $store['email'] }}"><i class="fa-solid fa-envelope"></i>{{ $store['email'] }}</a></li>
                </ul>
              </div>
              <div class="header-social">
                <a href="{{ $store['social']['facebook'] }}" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ $store['social']['x'] }}" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="{{ $store['social']['instagram'] }}" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="{{ $store['social']['youtube'] }}" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
              </div>
              <div class="user-login">
                @auth
                  <a href="{{ route('profile.edit') }}" aria-label="My account"><i class="fa-solid fa-user"></i></a>
                @else
                  <a href="{{ route('login') }}" aria-label="Sign in"><i class="fa-solid fa-user"></i></a>
                @endauth
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Header Middle --}}
    <div class="header-middle">
      <div class="container">
        <div class="row justify-content-sm-between justify-content-center align-items-center gx-sm-0">
          <div class="col-auto">
            <div class="header-logo">
              @include('partials.brand-logo')
            </div>
          </div>
          <div class="col-auto">
            <div class="header-inner">
              <form class="header-search" action="{{ route('search') }}" method="GET">
                <button class="searchBoxTggler" type="button" aria-label="search-button">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <div class="d-flex align-items-center">
                  <div class="dropdown">
                    <div class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                      Categories
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      @foreach ($navCategories as $root)
                        <li><a class="dropdown-item" href="{{ route('category.show', $root->slug) }}">{{ $root->name }}</a></li>
                      @endforeach
                    </ul>
                  </div>
                  <input type="text" name="q" value="{{ request('q') }}" placeholder="Search by title, author or ISBN...">
                </div>
              </form>
              <div class="header-buttons">
                <a href="{{ route('wishlist.index') }}" class="vs-icon wishlist" aria-label="Wishlist"><i class="fal fa-heart"></i></a>
                <div class="header-info">
                  <div class="header-info_icon">
                    <i class="fas fa-headset"></i>
                  </div>
                  <div class="media-body">
                    <span class="header-info_label">Customer Support</span>
                    <div class="header-info_link"><a href="tel:{{ preg_replace('/[^0-9+]/', '', $store['phone']) }}">{{ $store['phone'] }}</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Header Bottom (Sticky Nav) --}}
    <div class="sticky-wrapper header-bottom">
      <div class="sticky-active">
        <div class="container">
          <div class="menu-top">
            <div class="row justify-content-between align-items-center gx-sm-0">
              <div class="col-xl-auto">
                <div class="menu-inner">
                  <div class="header-category">
                    <button class="category-toggler"><i class="fa-solid fa-bars-sort"></i>Browse Categories</button>
                    <div class="vs-box-nav">
                      <ul>
                        @php
                          $catIcons = ['fiction' => 'fa-feather-pointed', 'non-fiction' => 'fa-landmark', 'children-teens' => 'fa-child-reaching', 'science-tech' => 'fa-flask', 'lifestyle-arts' => 'fa-palette'];
                        @endphp
                        @foreach ($navCategories as $root)
                          <li><a href="{{ route('category.show', $root->slug) }}"><i class="fa-solid {{ $catIcons[$root->slug] ?? 'fa-book' }} cat-nav-icon"></i>{{ $root->name }}</a></li>
                        @endforeach
                        <li><a href="{{ route('shop', ['sort' => 'newest']) }}"><i class="fa-solid fa-sparkles cat-nav-icon"></i>New Arrivals</a></li>
                        <li><a href="{{ route('shop') }}"><i class="fa-solid fa-books cat-nav-icon"></i>All Books</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="header-logo">
                    @include('partials.brand-logo')
                  </div>
                  <div class="menu-area">
                    <nav class="main-menu menu-style1 d-none d-lg-block">
                      <ul>
                        @include('partials.nav-menu')
                      </ul>
                    </nav>
                    <button class="vs-menu-toggle d-inline-block d-lg-none" aria-label="Open menu"><i class="fal fa-bars"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-auto d-xl-block d-none">
                <div class="header-cart">
                  <a href="{{ route('cart.index') }}" class="vs-icon has-badge" aria-label="Cart">
                    <i class="fa-solid fa-basket-shopping"></i>
                    <span class="badge">{{ $miniCart['count'] ?? 0 }}</span>
                  </a>
                  <div class="woocommerce widget_shopping_cart">
                    <div class="widget_shopping_cart_content">
                      <ul class="cart_list">
                        @forelse($miniCart['items'] ?? [] as $item)
                        <li class="mini_cart_item">
                          <form action="{{ route('cart.remove', $item['rowId']) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="remove border-0" aria-label="Remove"><i class="far fa-times"></i></button>
                          </form>
                          <a href="{{ route('product.show', $item['slug']) }}" class="img">
                            <img src="{{ $item['image'] ?: asset('assets/img/cart/cat-img-1.jpg') }}" alt="{{ $item['title'] }}">
                          </a>
                          <a href="{{ route('product.show', $item['slug']) }}" class="product-title">{{ $item['title'] }}</a>
                          <span class="amount">{{ $item['quantity'] }} × @money($item['price'])</span>
                        </li>
                        @empty
                        <li style="padding:16px;text-align:center;color:#888;">Your cart is empty</li>
                        @endforelse
                      </ul>
                      <p class="total">
                        <strong>Subtotal:</strong>
                        <span class="amount">@money($miniCart['subtotal'] ?? 0)</span>
                      </p>
                      <p class="buttons">
                        <a href="{{ route('cart.index') }}" class="vs-btn">View cart</a>
                        <a href="{{ route('checkout') }}" class="vs-btn checkout">Checkout</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  {{-- Header End --}}

  {{-- ============================================================
       PAGE CONTENT
       ============================================================ --}}
  @foreach (['success' => 'woocommerce-message', 'info' => 'woocommerce-info', 'error' => 'woocommerce-message flash-error'] as $key => $class)
    @if (session($key))
      <div class="container pt-4"><div class="{{ $class }} mb-0">{{ session($key) }}</div></div>
    @endif
  @endforeach

  @yield('content')

  {{-- ============================================================
       FOOTER
       ============================================================ --}}
  <footer class="footer-layout1 style2 z-index-common">
    {{-- Newsletter CTA --}}
    <div class="container">
      <div class="cta-layout1 style2 z-index-common blog-title">
        <div class="row gx-60 align-items-center">
          <div class="col-lg-3">
            <div class="cta-logo">
              @include('partials.brand-logo', ['variant' => 'light'])
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row justify-content-xl-between justify-content-center align-items-center">
              <div class="col-lg-5">
                <div class="newsletter-inner">
                  <span class="newsletter-icon"><img src="{{ asset('assets/img/icons/mail-2.svg') }}" alt="icon"></span>
                  <div class="newsletter-content">
                    <h4 class="newsletter_title">Join Our Newsletter</h4>
                    <p class="newsletter-text">New releases, author picks &amp; exclusive offers</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <form class="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST">
                  @csrf
                  <div class="search-btn">
                    <input class="form-control" type="email" name="email" placeholder="Your Email Address" required>
                    <button type="submit" class="vs-btn"><i class="fa-solid fa-paper-plane"></i> Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Footer Top --}}
    <div class="footer-top">
      <div class="container">
        <div class="row g-5 justify-content-between">
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget footer-widget">
              <h3 class="widget_title">About Us<span class="title-shape"><img src="{{ asset('assets/img/shapes/footer-line-shape.svg') }}" alt="Shape Image"></span></h3>
              <p class="footer-about-text">{{ $store['name'] }} is an independent online bookstore bringing bestsellers, new releases and timeless classics to readers around the world.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-auto">
            <div class="widget widget_nav_menu footer-widget">
              <h3 class="widget_title">Shop<span class="title-shape"><img src="{{ asset('assets/img/shapes/footer-line-shape.svg') }}" alt="Shape Image"></span></h3>
              <ul class="menu">
                @foreach ($navCategories as $root)
                  <li><a href="{{ route('category.show', $root->slug) }}"><i class="far fa-angle-right"></i> {{ $root->name }}</a></li>
                @endforeach
                <li><a href="{{ route('shop', ['sort' => 'newest']) }}"><i class="far fa-angle-right"></i> New Arrivals</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-auto">
            <div class="widget widget_nav_menu footer-widget">
              <h3 class="widget_title">Help<span class="title-shape"><img src="{{ asset('assets/img/shapes/footer-line-shape.svg') }}" alt="Shape Image"></span></h3>
              <ul class="menu">
                <li><a href="{{ route('faq') }}"><i class="far fa-angle-right"></i> FAQ</a></li>
                <li><a href="{{ route('shipping') }}"><i class="far fa-angle-right"></i> Shipping &amp; Returns</a></li>
                <li><a href="{{ route('login') }}"><i class="far fa-angle-right"></i> My Account</a></li>
                <li><a href="{{ route('wishlist.index') }}"><i class="far fa-angle-right"></i> Wishlist</a></li>
                <li><a href="{{ route('about') }}"><i class="far fa-angle-right"></i> About Us</a></li>
                <li><a href="{{ route('contact') }}"><i class="far fa-angle-right"></i> Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget widget_nav_menu footer-widget">
              <h3 class="widget_title">Contact<span class="title-shape"><img src="{{ asset('assets/img/shapes/footer-line-shape.svg') }}" alt="Shape Image"></span></h3>
              <div class="list-style1">
                <ul class="list-unstyled">
                  <li><i class="fas fa-map-marked-alt"></i> <span>{{ $store['address'] }}</span></li>
                  <li><i class="fa-solid fa-headset"></i> <a href="tel:{{ preg_replace('/[^0-9+]/', '', $store['phone']) }}">{{ $store['phone'] }}</a></li>
                  <li><i class="fas fa-envelope"></i><a href="mailto:{{ $store['email'] }}">{{ $store['email'] }}</a></li>
                  <li><i class="fa-solid fa-clock"></i> <span>{{ $store['hours'] }}</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Bottom Info --}}
    <div class="bottom-info">
      <div class="container">
        <div class="row g-4 justify-content-lg-around align-items-center justify-content-center">
          <div class="col-lg-4">
            <div class="contact-body">
              <ul class="social-links">
                <li><a href="{{ $store['social']['facebook'] }}" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="{{ $store['social']['x'] }}" target="_blank" rel="noopener" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="{{ $store['social']['instagram'] }}" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="{{ $store['social']['youtube'] }}" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="copyright-menu">
              <ul class="list-unstyled">
                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                <li><a href="{{ route('terms') }}">Terms</a></li>
                <li><a href="{{ route('shipping') }}">Returns</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="copyright-img">
              <img src="{{ asset('assets/img/others/credit-payment.png') }}" alt="Accepted payment methods">
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Copyright --}}
    <div class="copyright-wrap">
      <div class="container">
        <p class="copyright-text">
          Copyright <i class="fal fa-copyright"></i> {{ date('Y') }}
          <a href="{{ route('home') }}">{{ $store['name'] }}</a>. All Rights Reserved.
        </p>
      </div>
    </div>
  </footer>
  {{-- Footer End --}}

  {{-- ============================================================
       ALL JS FILES
       ============================================================ --}}
  <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/slick.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ asset('assets/js/gsap-scroll-to-plugin.js') }}"></script>
  <script src="{{ asset('assets/js/SplitText.js') }}"></script>
  <script src="{{ asset('assets/js/lenis.min.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  @stack('scripts')
</body>
</html>
