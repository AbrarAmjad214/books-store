@extends('layouts.ebukz')

@section('title', 'About Us')
@section('description', $store['name'] . ' is an independent online bookstore bringing bestsellers, new releases and timeless classics to readers worldwide.')

@section('content')
  @include('partials.breadcrumb', ['title' => 'About Us'])

  {{-- Our story --}}
  <section class="about-layout1 space-top">
    <div class="container space-bottom">
      <div class="row g-5 justify-content-center align-items-center">
        <div class="col-lg-4">
          <div class="about-img wow animate__fadeInUp" data-wow-delay="0.45s">
            <img src="{{ asset('assets/img/about/about-img-1-1.jpg') }}" alt="Reading corner">
          </div>
        </div>
        <div class="col-lg-8">
          <div class="about-content">
            <div class="wow animate__fadeInUp" data-wow-delay="0.35s">
              <div class="title-area animation-style1 title-anime">
                <span class="sec-subtitle">Our Story</span>
                <h2 class="sec-title text-title title-anime__title">A Bookstore Built For Readers Everywhere</h2>
              </div>
              <p class="about-text wow animate__fadeInUp" data-wow-delay="0.30s">
                {{ $store['name'] }} started with a simple idea: everyone should be able to find a great book, wherever they live. Today we bring bestsellers, new releases and timeless classics to readers around the world.
              </p>
            </div>
            <div class="list-style1 wow animate__fadeInUp" data-wow-delay="0.50s">
              <ul class="list-unstyled">
                <li><i class="fa-solid fa-badge-check"></i>Hand-picked titles across every genre</li>
                <li><i class="fa-solid fa-badge-check"></i>Worldwide shipping with tracking</li>
                <li><i class="fa-solid fa-badge-check"></i>Secure checkout &amp; easy returns</li>
                <li><i class="fa-solid fa-badge-check"></i>Friendly, reader-first support</li>
              </ul>
            </div>
            <div class="about-content wow animate__fadeInUp" data-wow-delay="0.75s">
              <div class="about-box">
                <div class="about-img wow animate__fadeInUp" data-wow-delay="0.55s">
                  <img src="{{ asset('assets/img/about/about-img-1-2.jpg') }}" alt="Books on a shelf">
                </div>
                <div class="about-inner mb-0 wow animate__fadeInUp" data-wow-delay="0.95s">
                  <p class="about-text mb-20">
                    Our small team of book lovers reads widely, curates carefully and packs every order as if it were a gift.
                  </p>
                  <a class="vs-btn" href="{{ route('shop') }}">Explore The Shop</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- What we stand for --}}
  <section class="space-bottom">
    <div class="container">
      <div class="title-area text-center">
        <span class="sec-subtitle justify-content-center">Why Readers Choose Us</span>
        <h2 class="sec-title">What We Stand For</h2>
      </div>
      <div class="row g-4">
        @foreach ([
            ['fa-books', 'Curated Selection', 'Every title is chosen by people who love books — no endless clutter, just great reads.'],
            ['fa-earth-europe', 'Worldwide Reach', 'We ship to readers across the globe with reliable, tracked delivery partners.'],
            ['fa-shield-check', 'Safe Shopping', 'Encrypted checkout, trusted payment methods and a clear 30-day returns policy.'],
            ['fa-heart', 'Reader First', 'Real people answer your questions and help you find exactly the right book.'],
        ] as [$icon, $title, $text])
          <div class="col-xl-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.{{ 3 + $loop->index }}0s">
            <div class="support-card h-100">
              <span class="support-card__icon"><i class="fa-solid {{ $icon }}"></i></span>
              <h3 class="support-card__title">{{ $title }}</h3>
              <p class="support-card__text mb-0">{{ $text }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  @include('partials.store.counters')
  @include('partials.store.testimonials')
  @include('partials.store.brands')
@endsection
