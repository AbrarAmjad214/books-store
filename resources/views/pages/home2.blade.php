@extends('layouts.ebukz')

@section('title', 'Home-2')

@section('content')
<!--==============================
  Hero Area
  ==============================-->
  <section class="hero-layout1 style2" data-wow-delay="0.25s" aria-hidden="true">
    <div class="container-style2 position-relative z-index">
      <div class="hero-item" data-bg-src="{{ asset('assets/img/bg/hero-bg2.jpg') }}">
        <div class="container z-index1 position-relative">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6 position-relative">
              <div class="hero-content">
                <h1 class="hero-title wow animate__fadeInUp" data-wow-delay="0.50s">The Most Biggest <span class="title-highlight">Bookstore</span> in the world</h1>
                <p class="hero-text wow animate__fadeInUp" data-wow-delay="0.75s">We deliver books all over the world 10,000+ books in stock.</p>
                <a class="vs-btn wow animate__flipInX" data-wow-delay="0.95s" href="{{ route('shop') }}">Explore More</a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hero-img">
                <img src="{{ asset('assets/img/hero/hero-img-1-2.png') }}" alt="hero image">
              </div>
            </div>
          </div>
        </div>
        <span class="shape-mockup element1  d-xxl-block d-none" data-wow-delay="0.80s" style="left: -10px; top: -10px;"><img src="{{ asset('assets/img/shapes/hero-shape4.png') }}" alt="Hero shape"></span>
        <span class="shape-mockup element2 d-xxl-block d-none" data-wow-delay="0.80s" style="right: -30px; bottom: -30px;"><img src="{{ asset('assets/img/shapes/hero-shape5.png') }}" alt="Hero shape"></span>
      </div>
    </div>
  </section>
  <!-- feature area Start -->
  <div class="feature-layout1 space-top">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 text-center wow animate__fadeInUp" data-wow-delay="0.20s">
          <div class="feature-style1">
            <span class="feature-icon">
            <img class="icon-1" src="{{ asset('assets/img/feature/feature-icon-1-1.png') }}" alt="feature icon">
            <img class="icon-2" src="{{ asset('assets/img/feature/feature-icon-2-1.png') }}" alt="feature icon">
          </span>
            <div class="feature-body">
              <h2 class="feature-title"><a href="#">Free Delivery</a></h2>
              <p class="feature-text">To get free delivery order now</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center wow animate__fadeInUp" data-wow-delay="0.45s">
          <div class="feature-style1">
            <span class="feature-icon">
            <img class="icon-1" src="{{ asset('assets/img/feature/feature-icon-1-2.png') }}" alt="feature icon">
            <img class="icon-2" src="{{ asset('assets/img/feature/feature-icon-2-2.png') }}" alt="feature icon">
          </span>
            <div class="feature-body">
              <h2 class="feature-title"><a href="#">Secure Payments</a></h2>
              <p class="feature-text">To get free delivery order now</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center wow animate__fadeInUp" data-wow-delay="0.65s">
          <div class="feature-style1">
            <span class="feature-icon">
            <img class="icon-1" src="{{ asset('assets/img/feature/feature-icon-1-3.png') }}" alt="feature icon">
            <img class="icon-2" src="{{ asset('assets/img/feature/feature-icon-2-3.png') }}" alt="feature icon">
          </span>
            <div class="feature-body">
              <h2 class="feature-title"><a href="#">Support 24/7</a></h2>
              <p class="feature-text">To get free delivery order now</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- feature area End -->
  <!-- Trending Product Start -->
  <section class="trending-layout1 space">
    <div class="container">
      <div class="title-area2 animation-style1 title-anime">
        <span class="border-line d-xxl-block d-none"></span>
        <h2 class="sec-title title-anime__title">Trending On Ebukz</h2>
        <a class="vs-btn wow animate__flipInX" data-wow-delay="0.30s" href="{{ route('shop') }}">View More</a>
      </div>
      <div class="row g-4">
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.30s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-1-1.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Rat Phnory Mttke</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.40s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-1-2.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> H Abdul</span>
              <h2 class="product-title"> <a href="{{ route('shop') }}">Ali Tofail Tu</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.50s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-1-3.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> D Bellingham</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Green Journy</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.60s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-1-4.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Alex Jhon</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Fefcenting Pesentin</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.70s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-1-5.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Nicola joi</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Tevely Entiamile</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.80s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-1-6.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Gmerll Femed</a></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Trending Product End -->
  <!-- Book Of The Month End -->
  <section class="books-layout1 space" data-bg-src="{{ asset('assets/img/bg/section-bg2.jpg') }}">
    <div class="container-fluid">
      <div class="title-area text-center animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Book Of The Month</h2>
      </div>
      <div class="row vs-carousel book-carousel g-4" data-slide-show="6" data-xl-slide-show="5" data-ml-slide-show="4" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2" data-autoplay="true">
        <div class="col-xl-3 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.30s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-5-1.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">The Muke Guy</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.40s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-5-2.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> H Abdul</span>
              <h2 class="product-title"> <a href="{{ route('shop') }}">Levtimeline</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.50s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-5-3.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> D Bellingham</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Mick Weive Mockchapu</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.60s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-5-4.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Alex Jhon</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Fuarcnusk Preentine</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.70s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-5-5.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Nicola joi</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">L Art Du Subtiliste</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.80s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-5-6.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Vqirk Teur Mocgkcup</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.90s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-5-7.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Nicola joi</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Hd Pry Balir Ptonnrnle</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.95s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-5-8.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Beuto minimal Cork</a></h2>
            </div>
          </div>
        </div>
        <!-- <div class="text-center">
          <a class="vs-btn mt-10 wow animate__flipInX" data-wow-delay="0.40s" href="#">View More</a>
        </div> -->
      </div>
      <div class="arraw-area mt-40">
        <div class="d-flex justify-content-center align-items-center gap-2">
          <button class="icon-btn border-none" data-slick-prev=".book-carousel">
            <i class="fa-solid fa-arrow-left"></i>
          </button>
          <button class="icon-btn" data-slick-next=".book-carousel">
            <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- Book Of The Month End -->
  <!-- Romance Product Start -->
  <section class="romance-layout1 space-top">
    <div class="container space-bottom position-relative">
      <div class="row g-4">
        <div class="col-xl-8 col-lg-7">
          <div class="title-area2 animation-style1 title-anime">
            <h2 class="sec-title title-anime__title">Best Selling Romance Books</h2>
            <a class="vs-btn wow animate__flipInX" data-wow-delay="0.70s" href="#">View More</a>
          </div>
          <div class="row g-4">
            <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
              <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.30s">
                <div class="product-img">
                  <img src="{{ asset('assets/img/product/product-img-3-1.jpg') }}" alt="product image">
                  <div class="product-btns">
                    <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="{{ route('cart.index') }}" class="icon-btn cart">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </a>
                  </div>
                  <ul class="post-box">
                    <li>Hot</li>
                    <li>-30%</li>
                  </ul>
                </div>
                <div class="product-content">
                  <div class="product-rating">
                    <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                    <ul class="price-list">
                      <li><del>$39.99</del></li>
                      <li>$30.00</li>
                    </ul>
                  </div>
                  <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
                  <h2 class="product-title"><a href="{{ route('shop') }}">Rivetmane 10An</a></h2>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
              <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.40s">
                <div class="product-img">
                  <img src="{{ asset('assets/img/product/product-img-3-2.jpg') }}" alt="product image">
                  <div class="product-btns">
                    <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="{{ route('cart.index') }}" class="icon-btn cart">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </a>
                  </div>
                  <ul class="post-box">
                    <li>Hot</li>
                    <li>-30%</li>
                  </ul>
                </div>
                <div class="product-content">
                  <div class="product-rating">
                    <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                    <ul class="price-list">
                      <li><del>$39.99</del></li>
                      <li>$30.00</li>
                    </ul>
                  </div>
                  <span class="product-author"><strong>By:</strong> H Abdul</span>
                  <h2 class="product-title"> <a href="{{ route('shop') }}">Love Nature</a></h2>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
              <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.50s">
                <div class="product-img">
                  <img src="{{ asset('assets/img/product/product-img-3-3.jpg') }}" alt="product image">
                  <div class="product-btns">
                    <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="{{ route('cart.index') }}" class="icon-btn cart">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </a>
                  </div>
                  <ul class="post-box">
                    <li>Hot</li>
                    <li>-30%</li>
                  </ul>
                </div>
                <div class="product-content">
                  <div class="product-rating">
                    <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                    <ul class="price-list">
                      <li><del>$39.99</del></li>
                      <li>$30.00</li>
                    </ul>
                  </div>
                  <span class="product-author"><strong>By:</strong> D Bellingham</span>
                  <h2 class="product-title"><a href="{{ route('shop') }}">Love Story</a></h2>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
              <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.60s">
                <div class="product-img">
                  <img src="{{ asset('assets/img/product/product-img-3-4.jpg') }}" alt="product image">
                  <div class="product-btns">
                    <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="{{ route('cart.index') }}" class="icon-btn cart">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </a>
                  </div>
                  <ul class="post-box">
                    <li>Hot</li>
                    <li>-30%</li>
                  </ul>
                </div>
                <div class="product-content">
                  <div class="product-rating">
                    <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                    <ul class="price-list">
                      <li><del>$39.99</del></li>
                      <li>$30.00</li>
                    </ul>
                  </div>
                  <span class="product-author"><strong>By:</strong> Alex Jhon</span>
                  <h2 class="product-title"><a href="{{ route('shop') }}">Stotc Stoite Ust...</a></h2>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
              <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.70s">
                <div class="product-img">
                  <img src="{{ asset('assets/img/product/product-img-3-5.jpg') }}" alt="product image">
                  <div class="product-btns">
                    <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="{{ route('cart.index') }}" class="icon-btn cart">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </a>
                  </div>
                  <ul class="post-box">
                    <li>Hot</li>
                    <li>-30%</li>
                  </ul>
                </div>
                <div class="product-content">
                  <div class="product-rating">
                    <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                    <ul class="price-list">
                      <li><del>$39.99</del></li>
                      <li>$30.00</li>
                    </ul>
                  </div>
                  <span class="product-author"><strong>By:</strong> Nicola joi</span>
                  <h2 class="product-title"><a href="{{ route('shop') }}">Cook Design Psvter</a></h2>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
              <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.80s">
                <div class="product-img">
                  <img src="{{ asset('assets/img/product/product-img-3-6.jpg') }}" alt="product image">
                  <div class="product-btns">
                    <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="{{ route('cart.index') }}" class="icon-btn cart">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </a>
                  </div>
                  <ul class="post-box">
                    <li>Hot</li>
                    <li>-30%</li>
                  </ul>
                </div>
                <div class="product-content">
                  <div class="product-rating">
                    <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                    <ul class="price-list">
                      <li><del>$39.99</del></li>
                      <li>$30.00</li>
                    </ul>
                  </div>
                  <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
                  <h2 class="product-title"><a href="{{ route('shop') }}">Mocubpp</a></h2>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
              <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.70s">
                <div class="product-img">
                  <img src="{{ asset('assets/img/product/product-img-3-5.jpg') }}" alt="product image">
                  <div class="product-btns">
                    <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="{{ route('cart.index') }}" class="icon-btn cart">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </a>
                  </div>
                  <ul class="post-box">
                    <li>Hot</li>
                    <li>-30%</li>
                  </ul>
                </div>
                <div class="product-content">
                  <div class="product-rating">
                    <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                    <ul class="price-list">
                      <li><del>$39.99</del></li>
                      <li>$30.00</li>
                    </ul>
                  </div>
                  <span class="product-author"><strong>By:</strong> Nicola joi</span>
                  <h2 class="product-title"><a href="{{ route('shop') }}">Cook Design Psvter</a></h2>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
              <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.80s">
                <div class="product-img">
                  <img src="{{ asset('assets/img/product/product-img-3-7.jpg') }}" alt="product image">
                  <div class="product-btns">
                    <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="{{ route('cart.index') }}" class="icon-btn cart">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </a>
                  </div>
                  <ul class="post-box">
                    <li>Hot</li>
                    <li>-30%</li>
                  </ul>
                </div>
                <div class="product-content">
                  <div class="product-rating">
                    <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                    <ul class="price-list">
                      <li><del>$39.99</del></li>
                      <li>$30.00</li>
                    </ul>
                  </div>
                  <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
                  <h2 class="product-title"><a href="{{ route('shop') }}">Amazona Book</a></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="widget product-sidebar wow animate__fadeInUp" data-wow-delay="0.30s">
            <h3 class="widget_title title-shep">top Books This Week</h3>
            <div class="recent-post-wrap">
              <div class="recent-post">
                <div class="media-img">
                  <a href="{{ route('blog.details') }}"><img src="{{ asset('assets/img/product/product-sidebar-1-1.jpg') }}" alt="Blog Image"></a>
                </div>
                <div class="media-body">
                  <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
                  <h4 class="post-title"><a class="text-inherit" href="{{ route('blog.details') }}">Rat Phnory Mttke Srial</a></h4>
                  <ul class="price-list">
                    <li><del>$39.99</del></li>
                    <li>$30.00</li>
                  </ul>
                </div>
              </div>
              <div class="recent-post">
                <div class="media-img">
                  <a href="{{ route('blog.details') }}"><img src="{{ asset('assets/img/product/product-sidebar-1-2.jpg') }}" alt="Blog Image"></a>
                </div>
                <div class="media-body">
                  <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
                  <h4 class="post-title"><a class="text-inherit" href="{{ route('blog.details') }}">Amazona Book Cover</a></h4>
                  <ul class="price-list">
                    <li><del>$39.99</del></li>
                    <li>$30.00</li>
                  </ul>
                </div>
              </div>
              <div class="recent-post">
                <div class="media-img">
                  <a href="{{ route('blog.details') }}"><img src="{{ asset('assets/img/product/product-sidebar-1-4.jpg') }}" alt="Blog Image"></a>
                </div>
                <div class="media-body">
                  <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
                  <h4 class="post-title"><a class="text-inherit" href="{{ route('blog.details') }}">Negated Story</a></h4>
                  <ul class="price-list">
                    <li><del>$39.99</del></li>
                    <li>$30.00</li>
                  </ul>
                </div>
              </div>
              <div class="recent-post">
                <div class="media-img">
                  <a href="{{ route('blog.details') }}"><img src="{{ asset('assets/img/product/product-sidebar-1-3.jpg') }}" alt="Blog Image"></a>
                </div>
                <div class="media-body">
                  <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
                  <h4 class="post-title"><a class="text-inherit" href="{{ route('blog.details') }}">Quantum Entanglement</a></h4>
                  <ul class="price-list">
                    <li><del>$39.99</del></li>
                    <li>$30.00</li>
                  </ul>
                </div>
              </div>
              <a class="vs-btn wow animate__flipInX" data-wow-delay="0.70s" href="#">View More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Romance Product End -->
  <!-- Banner section Start -->
  <div class="banner-layout1 space-bottom">
    <div class="container">
      <div class="offer-style1 wow animate__fadeInUp" data-wow-delay="0.30s" data-bg-src="{{ asset('assets/img/bg/banner-bg14.jpg') }}">
        <div class="row gx-50 g-5 align-items-center">
          <div class="col-xl-6">
            <div class="offer-img">
              <img src="{{ asset('assets/img/offer/brand-img1.png') }}" alt="offer image">
            </div>
          </div>
          <div class="col-xl-6">
            <div class="offer-content">
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <span class="offer">Get 20% Off</span>
              <h2 class="offer-title">In Since Friction Books Categories </h2>
              <p class="offer-price">Only From <span>$85.00</span></p>
              <a class="vs-btn" href="{{ route('shop') }}">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner section End -->
  <!-- feature area Start -->
  <div class="feature-author space-bottom">
    <div class="container">
      <div class="title-area2 animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Featured Authors</h2>
        <a class="vs-btn wow animate__flipInX" data-wow-delay="0.70s" href="{{ route('author') }}">View More</a>
      </div>
      <div class="row g-4">
        <div class="col-xl-2 col-lg-3 col-md-4 col-6 wow animate__fadeInUp" data-wow-delay="0.20s">
          <div class="feature-style2">
            <span class="feature-img">
            <img src="{{ asset('assets/img/feature/feature-author-1-1.jpg') }}" alt="feature image">
          </span>
            <h2 class="feature-title"><a href="{{ route('author.details') }}">Jessica Kalvin</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-6 wow animate__fadeInUp" data-wow-delay="0.30s">
          <div class="feature-style2">
            <span class="feature-img">
            <img src="{{ asset('assets/img/feature/feature-author-1-2.jpg') }}" alt="feature image">
          </span>
            <h2 class="feature-title"><a href="{{ route('author.details') }}">Rodja Heartmann</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-6 wow animate__fadeInUp" data-wow-delay="0.40s">
          <div class="feature-style2">
            <span class="feature-img">
            <img src="{{ asset('assets/img/feature/feature-author-1-3.jpg') }}" alt="feature image">
          </span>
            <h2 class="feature-title"><a href="{{ route('author.details') }}">Ema Watson</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-6 wow animate__fadeInUp" data-wow-delay="0.50s">
          <div class="feature-style2">
            <span class="feature-img">
            <img src="{{ asset('assets/img/feature/feature-author-1-4.jpg') }}" alt="feature image">
          </span>
            <h2 class="feature-title"><a href="{{ route('author.details') }}">Rivanur R. Rafi</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-6 wow animate__fadeInUp" data-wow-delay="0.60s">
          <div class="feature-style2">
            <span class="feature-img">
            <img src="{{ asset('assets/img/feature/feature-author-1-5.jpg') }}" alt="feature image">
          </span>
            <h2 class="feature-title"><a href="{{ route('author.details') }}">Mrthina Kaiko</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-6 wow animate__fadeInUp" data-wow-delay="0.70s">
          <div class="feature-style2">
            <span class="feature-img">
            <img src="{{ asset('assets/img/feature/feature-author-1-6.jpg') }}" alt="feature image">
          </span>
            <h2 class="feature-title"><a href="{{ route('author.details') }}">Alison Baker</a></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- feature area End -->
  <!-- Top Categories Start -->
  <section class="categories-layout1 space" data-bg-src="{{ asset('assets/img/bg/categorie-bg1.jpg') }}">
    <div class="container">
      <div class="title-area text-center animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Top Categories</h2>
      </div>
      <div class="row g-4 mb-40 filter-menu-active">
        <div class="col-xl-2 col-lg-3 col-md-4 col-6 ">
          <div class="categorie-style1 active wow animate__fadeInUp" data-filter="*" data-wow-delay="0.30s">
            <img src="{{ asset('assets/img/categoris/catigori-1-1.png') }}" alt="categorie image">
            <h4 class="categorie-title">Romance</h4>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-6" data-filter=".thriller">
          <div class="categorie-style1  wow animate__fadeInUp" data-wow-delay="0.40s">
            <img src="{{ asset('assets/img/categoris/catigori-1-2.png') }}" alt="categorie image">
            <h4 class="categorie-title">Thriller</h4>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-6" data-filter=".fantasy">
          <div class="categorie-style1 wow animate__fadeInUp" data-wow-delay="0.50s">
            <img src="{{ asset('assets/img/categoris/catigori-1-3.png') }}" alt="categorie image">
            <h4 class="categorie-title">fantasy</h4>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-6" data-filter=".since-fiction">
          <div class="categorie-style1 wow animate__fadeInUp" data-wow-delay="0.60s">
            <img src="{{ asset('assets/img/categoris/catigori-1-4.png') }}" alt="categorie image">
            <h4 class="categorie-title">Since Fiction</h4>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-6" data-filter=".since">
          <div class="categorie-style1 wow animate__fadeInUp" data-wow-delay="0.70s">
            <img src="{{ asset('assets/img/categoris/catigori-1-5.png') }}" alt="categorie image">
            <h4 class="categorie-title">Since</h4>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-6" data-filter=".adventure">
          <div class="categorie-style1 wow animate__fadeInUp" data-wow-delay="0.80s">
            <img src="{{ asset('assets/img/categoris/catigori-1-6.png') }}" alt="categorie image">
            <h4 class="categorie-title">Adventure</h4>
          </div>
        </div>
      </div>
      <div class="row gy-30 mb-40 filter-active">
        <div class="col-xl-4 col-lg-6 col-md-6 filter-item fantasy adventure">
          <div class="product-style1 style2 wow animate__fadeInUp" data-wow-delay="0.30s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-2-1.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Feel The Bloosme Session</a></h2>
              <ul class="price-list">
                <li><del>$124</del></li>
                <li>$100</li>
              </ul>
              <div class="product-btn">
                <a class="vs-btn" href="{{ route('cart.index') }}">Add To Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 filter-item thriller since-fiction adventure">
          <div class="product-style1 style2 wow animate__fadeInUp" data-wow-delay="0.40s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-2-2.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">World Adventure Trekking</a></h2>
              <ul class="price-list">
                <li><del>$124</del></li>
                <li>$100</li>
              </ul>
              <div class="product-btn">
                <a class="vs-btn" href="{{ route('cart.index') }}">Add To Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 filter-item since-fiction fantasy">
          <div class="product-style1 style2 wow animate__fadeInUp" data-wow-delay="0.50s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-2-3.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <span class="product-author"><strong>By:</strong>Keep Clam Go to Mountain</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Feel The Bloosme Session</a></h2>
              <ul class="price-list">
                <li><del>$124</del></li>
                <li>$100</li>
              </ul>
              <div class="product-btn">
                <a class="vs-btn" href="{{ route('cart.index') }}">Add To Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 filter-item adventure since-fiction">
          <div class="product-style1 style2 wow animate__fadeInUp" data-wow-delay="0.60s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-2-4.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <span class="product-author"><strong>By:</strong>Learn From Nature</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Feel The Bloosme Session</a></h2>
              <ul class="price-list">
                <li><del>$124</del></li>
                <li>$100</li>
              </ul>
              <div class="product-btn">
                <a class="vs-btn" href="{{ route('cart.index') }}">Add To Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 filter-item thriller since-fiction since fantasy">
          <div class="product-style1 style2 wow animate__fadeInUp" data-wow-delay="0.70s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-2-5.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <span class="product-author"><strong>By:</strong>Rat Phnory Mttke Srial Tofairle</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Feel The Bloosme Session</a></h2>
              <ul class="price-list">
                <li><del>$124</del></li>
                <li>$100</li>
              </ul>
              <div class="product-btn">
                <a class="vs-btn" href="{{ route('cart.index') }}">Add To Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 filter-item since since-fiction">
          <div class="product-style1 style2 wow animate__fadeInUp" data-wow-delay="0.80s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-2-6.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <span class="product-author"><strong>By:</strong>Negated Story Life</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Feel The Bloosme Session</a></h2>
              <ul class="price-list">
                <li><del>$125</del></li>
                <li>$100</li>
              </ul>
              <div class="product-btn">
                <a class="vs-btn" href="{{ route('cart.index') }}">Add To Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <a class="vs-btn wow animate__flipInX" data-wow-delay="0.40s" href="{{ route('shop') }}">View More</a>
      </div>
    </div>
  </section>
  <!-- Top Categories End -->
  <!-- Kids Product Start -->
  <section class="Kids-layout1 space-top">
    <div class="container space-bottom position-relative">
      <div class="title-area2 animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Best Selling Kids Books</h2>
        <a class="vs-btn wow animate__flipInX" data-wow-delay="0.50s" href="{{ route('shop') }}">View More</a>
      </div>
      <div class="row g-4">
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.30s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-4-1.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Aelon Nacedile</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.40s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-4-2.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> H Abdul</span>
              <h2 class="product-title"> <a href="{{ route('shop') }}">Parer Book</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.50s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-4-3.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> D Bellingham</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Every Thought Sed</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.60s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-4-4.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Alex Jhon</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">A Sunny Day</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.70s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-4-5.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Nicola joi</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Present Trop Ical</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.80s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-4-6.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Whispers of Wild</a></h2>
            </div>
          </div>
        </div>
      </div>
      <span class="border-line"></span>
    </div>
  </section>
  <!-- Kids Product End -->
  <!-- Since Product Start -->
  <section class="romance-layout1 space">
    <div class="container">
      <div class="title-area2 animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Best Selling Since Books</h2>
        <a class="vs-btn wow animate__flipInX" data-wow-delay="0.70s" href="{{ route('shop') }}">View More</a>
      </div>
      <div class="row g-4">
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.30s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-6-1.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Physic For Future</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.40s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-6-2.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> H Abdul</span>
              <h2 class="product-title"> <a href="{{ route('shop') }}">Quantum Entangl.</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.50s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-6-3.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> D Bellingham</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Adventure Physics</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.60s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-6-4.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Alex Jhon</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Astrophysics</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.70s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-6-5.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Nicola joi</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Arhysgsd</a></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="product-style1 wow animate__fadeInUp" data-wow-delay="0.80s">
            <div class="product-img">
              <img src="{{ asset('assets/img/product/product-img-6-6.jpg') }}" alt="product image">
              <div class="product-btns">
                <a href="{{ route('wishlist.index') }}" class="icon-btn wishlist">
                  <i class="far fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="icon-btn cart">
                  <i class="fa-solid fa-basket-shopping"></i>
                </a>
              </div>
              <ul class="post-box">
                <li>Hot</li>
                <li>-30%</li>
              </ul>
            </div>
            <div class="product-content">
              <div class="product-rating">
                <span class="star"><i class="fas fa-star"></i> (4.5)</span>
                <ul class="price-list">
                  <li><del>$39.99</del></li>
                  <li>$30.00</li>
                </ul>
              </div>
              <span class="product-author"><strong>By:</strong> Fahim Al Bashar</span>
              <h2 class="product-title"><a href="{{ route('shop') }}">Electromagnetism</a></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Since Product End -->
  <!-- Testimonial Area  -->
  <section class="vs-testi__layout2 space">
    <div class="container">
      <div class="title-area2 justify-content-center animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Our Clint's feedbacks</h2>
      </div>
      <div class="row vs-carousel g-5 align-items-center" data-autoplay="true" data-slide-show="3" data-ml-slide-show="2" data-lg-slide-show="2">
        <div class="col-xl-4">
          <div class="vs-testi__style1">
            <div class="vs-testi__top">
              <div class="vs-testi__image">
                <img class="img1" src="{{ asset('assets/img/testimonial/testi-2-1.jpg') }}" alt="testimonials">
              </div>
              <div class="vs-testi__author">
                <div class="star-rating">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
                <h3 class="vs-testi__title">Mahadi Hassan</h3>
                <span class="vs-testi__desi">Designer, Vecurosoft</span>
              </div>
            </div>
            <div class="vs-testi__content">
              <p class="vs-testi__text">
                <span class="text-highlight"><img class="icon" src="{{ asset('assets/img/testimonial/testi-icon1.png') }}" alt="icon">Lorem ipsum dolor sit a met!</span>
                “Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali.”
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="vs-testi__style1">
            <div class="vs-testi__top">
              <div class="vs-testi__image">
                <img class="img1" src="{{ asset('assets/img/testimonial/testi-1-1.jpg') }}" alt="testimonials">
              </div>
              <div class="vs-testi__author">
                <div class="star-rating">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
                <h3 class="vs-testi__title">rodja hartmann</h3>
                <span class="vs-testi__desi">Designer, Vecurosoft</span>
              </div>
            </div>
            <div class="vs-testi__content">
              <p class="vs-testi__text">
                <span class="text-highlight"><img class="icon" src="{{ asset('assets/img/testimonial/testi-icon1.png') }}" alt="icon"> Lorem ipsum dolor sit a met!</span>
                “Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali.”
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="vs-testi__style1">
            <div class="vs-testi__top">
              <div class="vs-testi__image">
                <img class="img1" src="{{ asset('assets/img/testimonial/testi-2-2.jpg') }}" alt="testimonials">
              </div>
              <div class="vs-testi__author">
                <div class="star-rating">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
                <h3 class="vs-testi__title">Rivanur R. Rafi</h3>
                <span class="vs-testi__desi">Designer, Vecurosoft</span>
              </div>
            </div>
            <div class="vs-testi__content">
              <p class="vs-testi__text">
                <span class="text-highlight"><img class="icon" src="{{ asset('assets/img/testimonial/testi-icon1.png') }}" alt="icon"> Lorem ipsum dolor sit a met!</span>
                “Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali.”
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="vs-testi__style1">
            <div class="vs-testi__top">
              <div class="vs-testi__image">
                <img class="img1" src="{{ asset('assets/img/testimonial/testi-2-3.jpg') }}" alt="testimonials">
              </div>
              <div class="vs-testi__author">
                <div class="star-rating">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
                <h3 class="vs-testi__title">kishor Saha</h3>
                <span class="vs-testi__desi">Designer, Vecurosoft</span>
              </div>
            </div>
            <div class="vs-testi__content">
              <p class="vs-testi__text">
                <span class="text-highlight"><img class="icon" src="{{ asset('assets/img/testimonial/testi-icon1.png') }}" alt="icon"> Lorem ipsum dolor sit a met!</span>
                “Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali.”
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial Area End  -->
  <!-- Blog Area Start  -->
  <section class="custom-space-bottom space-top">
    <div class="container">
      <div class="title-area2 animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Blog And News</h2>
        <a class="vs-btn wow animate__flipInX" data-wow-delay="0.50s" href="{{ route('blog') }}">View More</a>
      </div>
      <div class="row vs-carousel blog-carousel wow animate__fadeInUp" data-wow-delay="0.25s" data-arrows="true" data-autoplay="true" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-center-mode="true">
        <div class="col-lg-4 col-md-6">
          <div class="vs-blog blog-style1">
            <div class="blog-img">
              <a href="{{ route('blog.details') }}"><img class="blog-img__img" src="{{ asset('assets/img/blog/blog-img-1-1.jpg') }}" alt="Blog Image"></a>
              <div class="blog-date">
                <span class="day"><strong class="month">15</strong>may</span>
              </div>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <a href="{{ route('blog') }}"><i class="fa-solid fa-user"></i>By Admin</a>
                <a href="{{ route('blog') }}"><i class="fa-solid fa-comments"></i>2 Comments</a>
              </div>
              <h2 class="blog-title">
                <a href="{{ route('blog.details') }}">Lorem ipsum dolor sit amet consectetur.</a>
              </h2>
              <div class="btn-area">
                <a class="vs-btn" href="{{ route('blog.details') }}">Read More<i class="fa-regular fa-arrow-right"></i></a>
                <div class="social-media">
                  <div class="member-links">
                    <a href="#" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" tabindex="-1"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" tabindex="-1"><i class="fab fa-instagram"></i></a>
                    <a href="#" tabindex="-1"><i class="fab fa-behance"></i></a>
                  </div>
                  <span class="icon-btn"><i class="fas fa-share-alt"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="vs-blog blog-style1">
            <div class="blog-img">
              <a href="{{ route('blog.details') }}"><img class="blog-img__img" src="{{ asset('assets/img/blog/blog-img-1-2.jpg') }}" alt="Blog Image"></a>
              <div class="blog-date">
                <span class="day"><strong class="month">16</strong>may</span>
              </div>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <a href="{{ route('blog') }}"><i class="fa-solid fa-user"></i>By Admin</a>
                <a href="{{ route('blog') }}"><i class="fa-solid fa-comments"></i>2 Comments</a>
              </div>
              <h2 class="blog-title">
                <a href="{{ route('blog.details') }}">Lorem ipsum dolor sit amet consectetur.</a>
              </h2>
              <div class="btn-area">
                <a class="vs-btn" href="{{ route('blog.details') }}">Read More<i class="fa-regular fa-arrow-right"></i></a>
                <div class="social-media">
                  <div class="member-links">
                    <a href="#" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" tabindex="-1"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" tabindex="-1"><i class="fab fa-instagram"></i></a>
                    <a href="#" tabindex="-1"><i class="fab fa-behance"></i></a>
                  </div>
                  <span class="icon-btn"><i class="fas fa-share-alt"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="vs-blog blog-style1">
            <div class="blog-img">
              <a href="{{ route('blog.details') }}"><img class="blog-img__img" src="{{ asset('assets/img/blog/blog-img-1-3.jpg') }}" alt="Blog Image"></a>
              <div class="blog-date">
                <span class="day"><strong class="month">16</strong>may</span>
              </div>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <a href="{{ route('blog') }}"><i class="fa-solid fa-user"></i>By Admin</a>
                <a href="{{ route('blog') }}"><i class="fa-solid fa-comments"></i>2 Comments</a>
              </div>
              <h2 class="blog-title">
                <a href="{{ route('blog.details') }}">Lorem ipsum dolor sit amet consectetur.</a>
              </h2>
              <div class="btn-area">
                <a class="vs-btn" href="{{ route('blog.details') }}">Read More<i class="fa-regular fa-arrow-right"></i></a>
                <div class="social-media">
                  <div class="member-links">
                    <a href="#" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" tabindex="-1"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" tabindex="-1"><i class="fab fa-instagram"></i></a>
                    <a href="#" tabindex="-1"><i class="fab fa-behance"></i></a>
                  </div>
                  <span class="icon-btn"><i class="fas fa-share-alt"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="vs-blog blog-style1">
            <div class="blog-img">
              <a href="{{ route('blog.details') }}"><img class="blog-img__img" src="{{ asset('assets/img/blog/blog-img-1-4.jpg') }}" alt="Blog Image"></a>
              <div class="blog-date">
                <span class="day"><strong class="month">16</strong>may</span>
              </div>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <a href="{{ route('blog') }}"><i class="fa-solid fa-user"></i>By Admin</a>
                <a href="{{ route('blog') }}"><i class="fa-solid fa-comments"></i>2 Comments</a>
              </div>
              <h2 class="blog-title">
                <a href="{{ route('blog.details') }}">Lorem ipsum dolor sit amet consectetur.</a>
              </h2>
              <div class="btn-area">
                <a class="vs-btn" href="{{ route('blog.details') }}">Read More<i class="fa-regular fa-arrow-right"></i></a>
                <div class="social-media">
                  <div class="member-links">
                    <a href="#" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" tabindex="-1"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" tabindex="-1"><i class="fab fa-instagram"></i></a>
                    <a href="#" tabindex="-1"><i class="fab fa-behance"></i></a>
                  </div>
                  <span class="icon-btn"><i class="fas fa-share-alt"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="vs-blog blog-style1">
            <div class="blog-img">
              <a href="{{ route('blog.details') }}"><img class="blog-img__img" src="{{ asset('assets/img/blog/blog-img-1-5.jpg') }}" alt="Blog Image"></a>
              <div class="blog-date">
                <span class="day"><strong class="month">16</strong>may</span>
              </div>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <a href="{{ route('blog') }}"><i class="fa-solid fa-user"></i>By Admin</a>
                <a href="{{ route('blog') }}"><i class="fa-solid fa-comments"></i>2 Comments</a>
              </div>
              <h2 class="blog-title">
                <a href="{{ route('blog.details') }}">Lorem ipsum dolor sit amet consectetur.</a>
              </h2>
              <div class="btn-area">
                <a class="vs-btn" href="{{ route('blog.details') }}">Read More<i class="fa-regular fa-arrow-right"></i></a>
                <div class="social-media">
                  <div class="member-links">
                    <a href="#" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" tabindex="-1"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" tabindex="-1"><i class="fab fa-instagram"></i></a>
                    <a href="#" tabindex="-1"><i class="fab fa-behance"></i></a>
                  </div>
                  <span class="icon-btn"><i class="fas fa-share-alt"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Area End  -->
@endsection
