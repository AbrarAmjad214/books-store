@extends('layouts.ebukz')

@section('title', 'Home-3')

@section('content')
<!--==============================
  Hero Area
  ==============================-->
  <section class="hero-layout3">
    <div class="container">
      <div class="vs-carousel" data-fade="true" data-autoplay="true">
        <div class="hero-item">
          <div class="row g-5 gx-50 align-items-center">
            <div class="col-lg-6 ">
              <div class="hero-content">
                <h1 class="hero-title">Jangle Jost Bolle</h1>
                <p class="offer-price">Only <span>$85.00</span></p>
                <p class="hero-text">We deliver books all over the world 10,000+ books in stock</p>
                <a class="vs-btn" href="{{ route('shop') }}">Shop Now</a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hero-img">
                <img src="{{ asset('assets/img/hero/hero-img-2-1.png') }}" alt="hero image">
              </div>
            </div>
          </div>
        </div>
        <div class="hero-item">
          <div class="row g-5 gx-50 align-items-center">
            <div class="col-lg-6 ">
              <div class="hero-content">
                <h1 class="hero-title">Rat Phnory Mttke</h1>
                <p class="offer-price">Only <span>$85.00</span></p>
                <p class="hero-text">We deliver books all over the world 10,000+ books in stock</p>
                <a class="vs-btn" href="{{ route('shop') }}">Shop Now</a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hero-img">
                <img src="{{ asset('assets/img/hero/hero-img-2-2.png') }}" alt="hero image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Offer section Start -->
  <div class="offer-layout1 space-top">
    <div class="container">
      <div class="row g-4">
        <div class="col-xl-6 col-lg-6">
          <div class="offer-style1 wow animate__fadeInLeft" data-wow-delay="0.30s" data-bg-src="{{ asset('assets/img/bg/offer-bg1.jpg') }}">
            <div class="offer-img">
              <img src="{{ asset('assets/img/offer/offer-img1.png') }}" alt="offer image">
            </div>
            <div class="offer-content">
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h2 class="offer-title">E Emeher Mme</h2>
              <p class="offer-price">Only From <span>$85.00</span></p>
              <a class="vs-btn" href="{{ route('shop') }}">Shop Now</a>
            </div>
            <span class="shape-mockup element1 z-index1  d-xxl-block d-none" data-wow-delay="0.80s" style="right: 0px; bottom: -5px;"><img src="{{ asset('assets/img/shapes/offer-shape1.png') }}" alt="offer shape"></span>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="offer-style1 white-style wow animate__fadeInRight" data-wow-delay="0.30s" data-bg-src="{{ asset('assets/img/bg/offer-bg2.jpg') }}">
            <div class="offer-img">
              <img src="{{ asset('assets/img/offer/offer-img1.png') }}" alt="offer image">
            </div>
            <div class="offer-content">
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h2 class="offer-title">Viving Moneme</h2>
              <p class="offer-price">Only From <span>$85.00</span></p>
              <a class="vs-btn" href="{{ route('shop') }}">Shop Now</a>
            </div>
            <span class="shape-mockup element1 z-index1  d-xxl-block d-none" data-wow-delay="0.80s" style="right: 0px; bottom: -5px;"><img src="{{ asset('assets/img/shapes/offer-shape2.png') }}" alt="offer shape"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Offer section End -->
  <!-- Categories Product Start -->
  <section class="categories-layout2 space-top">
    <div class="container space-bottom position-relative">
      <div class="title-area2 animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Top Categories</h2>
        <a class="vs-btn wow animate__flipInX" data-wow-delay="0.70s" href="{{ route('shop') }}">View More</a>
      </div>
      <div class="row g-4">
        <div class="col-xl-2 col-md-4 col-6">
          <div class="categorie-style2 wow animate__fadeInUp" data-wow-delay="0.10s">
            <div class="categorie-img">
              <img src="{{ asset('assets/img/product/product-img-3-1.jpg') }}" alt="product image">
            </div>
            <h2 class="product-title"><a href="{{ route('shop') }}">Romance</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="categorie-style2 wow animate__fadeInUp" data-wow-delay="0.15s">
            <div class="categorie-img">
              <img src="{{ asset('assets/img/product/product-img-3-2.jpg') }}" alt="product image">
            </div>
            <h2 class="product-title"><a href="{{ route('shop') }}">Thriller</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="categorie-style2 wow animate__fadeInUp" data-wow-delay="0.20s">
            <div class="categorie-img">
              <img src="{{ asset('assets/img/product/product-img-3-3.jpg') }}" alt="product image">
            </div>
            <h2 class="product-title"><a href="{{ route('shop') }}">Fantasy</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="categorie-style2 wow animate__fadeInUp" data-wow-delay="0.25s">
            <div class="categorie-img">
              <img src="{{ asset('assets/img/product/product-img-3-4.jpg') }}" alt="product image">
            </div>
            <h2 class="product-title"><a href="{{ route('shop') }}">Since Fiction</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="categorie-style2 wow animate__fadeInUp" data-wow-delay="0.30s">
            <div class="categorie-img">
              <img src="{{ asset('assets/img/product/product-img-3-5.jpg') }}" alt="product image">
            </div>
            <h2 class="product-title"><a href="{{ route('shop') }}">Since</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="categorie-style2 wow animate__fadeInUp" data-wow-delay="0.35s">
            <div class="categorie-img">
              <img src="{{ asset('assets/img/product/product-img-3-6.jpg') }}" alt="product image">
            </div>
            <h2 class="product-title"><a href="{{ route('shop') }}">Astronomy</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="categorie-style2 wow animate__fadeInUp" data-wow-delay="0.40s">
            <div class="categorie-img">
              <img src="{{ asset('assets/img/product/product-img-3-7.jpg') }}" alt="product image">
            </div>
            <h2 class="product-title"><a href="{{ route('shop') }}">Kids</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="categorie-style2 wow animate__fadeInUp" data-wow-delay="0.45s">
            <div class="categorie-img">
              <img src="{{ asset('assets/img/product/product-img-3-8.jpg') }}" alt="product image">
            </div>
            <h2 class="product-title"><a href="{{ route('shop') }}">cartoon & Story</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="categorie-style2 wow animate__fadeInUp" data-wow-delay="0.50s">
            <div class="categorie-img">
              <img src="{{ asset('assets/img/product/product-img-3-9.jpg') }}" alt="product image">
            </div>
            <h2 class="product-title"><a href="{{ route('shop') }}">Educational</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="categorie-style2 wow animate__fadeInUp" data-wow-delay="0.55s">
            <div class="categorie-img">
              <img src="{{ asset('assets/img/product/product-img-3-10.jpg') }}" alt="product image">
            </div>
            <h2 class="product-title"><a href="{{ route('shop') }}">Academic</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="categorie-style2 wow animate__fadeInUp" data-wow-delay="0.60s">
            <div class="categorie-img">
              <img src="{{ asset('assets/img/product/product-img-3-11.jpg') }}" alt="product image">
            </div>
            <h2 class="product-title"><a href="{{ route('shop') }}">Nobel</a></h2>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
          <div class="categorie-style2 wow animate__fadeInUp" data-wow-delay="0.65s">
            <div class="categorie-img">
              <img src="{{ asset('assets/img/product/product-img-3-12.jpg') }}" alt="product image">
            </div>
            <h2 class="product-title"><a href="{{ route('shop') }}">Adventure</a></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Categories Product End -->
  <!-- Book Of The Month End -->
  <section class="books-layout1 space" data-bg-src="{{ asset('assets/img/bg/section-bg2.jpg') }}">
    <div class="container">
      <div class="title-area text-center animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Book Of The Month</h2>
      </div>
      <div class="row vs-carousel g-4 book-carousel wow animate__fadeInUp" data-wow-delay="0.30s" data-slide-show="4" data-autoplay="true">
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
  <!-- feature area Start -->
  <div class="feature-author space">
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
  <!-- romance Product Start -->
  <section class="romance-layout1">
    <div class="container space-bottom position-relative">
      <div class="title-area2 animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Best Selling Romance Books</h2>
        <a class="vs-btn wow animate__flipInX" data-wow-delay="0.70s" href="{{ route('shop') }}">View More</a>
      </div>
      <div class="row g-4">
        <div class="col-xl-2 col-md-4 col-sm-6">
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
        <div class="col-xl-2 col-md-4 col-sm-6">
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
        <div class="col-xl-2 col-md-4 col-sm-6">
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
        <div class="col-xl-2 col-md-4 col-sm-6">
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
        <div class="col-xl-2 col-md-4 col-sm-6">
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
        <div class="col-xl-2 col-md-4 col-sm-6">
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
              <h2 class="product-title"><a href="{{ route('shop') }}">Cover Design</a></h2>
            </div>
          </div>
        </div>
      </div>
      <span class="border-line"></span>
    </div>
  </section>
  <!-- romance Product End -->
  <!-- Kids Product Start -->
  <section class="Kids-layout1 space">
    <div class="container">
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
    </div>
  </section>
  <!-- Kids Product End -->
  <!-- Best selling start -->
  <section class="selling-layout1 space" data-bg-src="{{ asset('assets/img/bg/selling-bg.jpg') }}">
    <div class="container">
      <div class="row g-4 gx-40 align-items-center">
        <div class="col-xl-5">
          <div class="selling-content">
            <h2 class="selling-title wow animate__fadeInUp" data-wow-delay="0.20s">Best Seller Author Of The Month</h2>
            <h4 class="author-name wow animate__fadeInUp" data-wow-delay="0.30s">Joseph Martin</h4>
            <span class="published wow animate__fadeInUp" data-wow-delay="0.40s">30+ Published Book</span>
            <p class="selling-text wow animate__fadeInUp" data-wow-delay="0.50s">Lorem ipsum dolor a amet, consectetur adipiscing elit, eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut eim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
            <a class="vs-btn wow animate__flipInX" data-wow-delay="0.60s" href="{{ route('author.details') }}">Read More</a>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="selling-img-tag wow animate__fadeInUp" data-wow-delay="0.30s">
            <div class="wow animate__fadeInDownBig" data-wow-delay="0.30s">
              <div class="tag" data-wow-delay="0.30s">
                <img src="{{ asset('assets/img/selling/selling-icon.png') }}" alt="selling icon">
                <h4 class="tag-title">no.1 Best Seller Of The Month</h4>
              </div>
            </div>
            <img src="{{ asset('assets/img/selling/selling-img.jpg') }}" class="w-100" alt="selling images">
          </div>
        </div>
        <div class="col-xl-3">
          <div class="selling-books">
            <div class="book-item wow animate__fadeInDown" data-wow-delay="0.30s">
              <img src="{{ asset('assets/img/selling/book-img1.jpg') }}" alt="book image">
            </div>
            <div class="book-item wow animate__fadeInDown" data-wow-delay="0.40s">
              <img src="{{ asset('assets/img/selling/book-img2.jpg') }}" alt="book image">
            </div>
            <div class="book-item wow animate__fadeInUp" data-wow-delay="0.50s">
              <img src="{{ asset('assets/img/selling/book-img3.jpg') }}" alt="book image">
            </div>
            <div class="book-item wow animate__fadeInUp" data-wow-delay="0.60s">
              <img src="{{ asset('assets/img/selling/book-img4.jpg') }}" alt="book image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Best selling End -->
  <!-- Book Of The Month End -->
  <section class="books-layout1 space" data-bg-src="{{ asset('assets/img/bg/section-bg1.jpg') }}">
    <div class="container">
      <div class="title-area text-center animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Book Of The Month</h2>
      </div>
      <div class="row g-4">
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
        <div class="text-center">
          <a class="vs-btn mt-10 wow animate__flipInX" data-wow-delay="0.40s" href="{{ route('shop') }}">View More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Book Of The Month End -->
  <!-- Testimonial Area  -->
  <section class="vs-testi__layout3 space-top">
    <div class="container">
      <div class="title-area2 animation-style1 title-anime">
        <h2 class="sec-title title-anime__title">Our Clint's feedbacks</h2>
        <a class="vs-btn wow animate__flipInX" data-wow-delay="0.50s" href="#">View More</a>
      </div>
      <div class="row vs-carousel g-5 align-items-center" data-autoplay="true" data-slide-show="3" data-ml-slide-show="2" data-lg-slide-show="2">
        <div class="col-xl-4 wow animate__fadeInUp" data-wow-delay="0.30s">
          <div class="vs-testi__style2">
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
                <h3 class="vs-testi__title">rodja hartmann</h3>
                <span class="vs-testi__desi">Designer, Vecurosoft</span>
              </div>
            </div>
            <div class="vs-testi__content">
              <p class="vs-testi__text">
                “TechIN completely transformed our IT infrastructure. Their team was knowledgeable, responsive, and provided solutions that significantly improved our efficiency.
              </p>
              <span class="quote-icon"><img src="{{ asset('assets/img/icons/quote-icon.svg') }}" alt="icon"></span>
            </div>
          </div>
        </div>
        <div class="col-xl-4 wow animate__fadeInUp" data-wow-delay="0.40s">
          <div class="vs-testi__style2">
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
                <h3 class="vs-testi__title">Laura McAlister</h3>
                <span class="vs-testi__desi">Designer, Vecurosoft</span>
              </div>
            </div>
            <div class="vs-testi__content">
              <p class="vs-testi__text">
                “TechIN completely transformed our IT infrastructure. Their team was knowledgeable, responsive, and provided solutions that significantly improved our efficiency.
              </p>
              <span class="quote-icon"><img src="{{ asset('assets/img/icons/quote-icon.svg') }}" alt="icon"></span>
            </div>
          </div>
        </div>
        <div class="col-xl-4 wow animate__fadeInUp" data-wow-delay="0.50s">
          <div class="vs-testi__style2">
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
                <h3 class="vs-testi__title">Rivanur R. Rafi</h3>
                <span class="vs-testi__desi">Designer, Vecurosoft</span>
              </div>
            </div>
            <div class="vs-testi__content">
              <p class="vs-testi__text">
                “TechIN completely transformed our IT infrastructure. Their team was knowledgeable, responsive, and provided solutions that significantly improved our efficiency.
              </p>
              <span class="quote-icon"><img src="{{ asset('assets/img/icons/quote-icon.svg') }}" alt="icon"></span>
            </div>
          </div>
        </div>
        <div class="col-xl-4 wow animate__fadeInUp" data-wow-delay="0.60s">
          <div class="vs-testi__style2">
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
                <h3 class="vs-testi__title">Laura McAlister</h3>
                <span class="vs-testi__desi">Designer, Vecurosoft</span>
              </div>
            </div>
            <div class="vs-testi__content">
              <p class="vs-testi__text">
                “TechIN completely transformed our IT infrastructure. Their team was knowledgeable, responsive, and provided solutions that significantly improved our efficiency.
              </p>
              <span class="quote-icon"><img src="{{ asset('assets/img/icons/quote-icon.svg') }}" alt="icon"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial Area End  -->
  <!-- Blog Area Start  -->
  <section class="space">
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
  <!-- feature area Start -->
  <div class="feature-layout1 space-bottom">
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

@endsection
