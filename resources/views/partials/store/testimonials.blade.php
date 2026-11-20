{{-- Reader reviews (Ebukz vs-testi__layout1). Sample copy — replace with real customer reviews before launch. --}}
@php
  $testimonials = [
      ['name' => 'Emily Carter', 'role' => 'Book club host, Toronto', 'img' => 'testi-1-1.jpg', 'highlight' => 'My go-to bookstore',
       'text' => 'The selection is wonderful and the recommendations are always spot on. My order arrived beautifully packed and faster than expected.'],
      ['name' => 'Lukas Schneider', 'role' => 'Avid reader, Berlin', 'img' => 'testi-2-1.jpg', 'highlight' => 'Fast international delivery',
       'text' => 'I ordered three hardcovers and they reached Germany in less than a week. Great prices and the tracking kept me updated all the way.'],
      ['name' => 'Aisha Rahman', 'role' => 'Teacher, Dubai', 'img' => 'testi-2-2.jpg', 'highlight' => 'Perfect for gifting',
       'text' => 'I buy most of my gifts here now. The wishlist feature is handy and customer support helped me change an order within minutes.'],
      ['name' => 'Oliver Brooks', 'role' => 'Student, Melbourne', 'img' => 'testi-2-3.jpg', 'highlight' => 'Easy to find anything',
       'text' => 'Searching by author or ISBN is quick, and the genre pages make it easy to discover something new every month.'],
  ];
@endphp
<section class="vs-testi__layout1 space">
  <div class="container">
    <div class="row g-5">
      <div class="col-xl-5">
        <div class="banner-img">
          <img src="{{ asset('assets/img/others/banner1.jpg') }}" alt="Book offer">
          <div class="banner-content">
            <span class="sub-title">Join Free</span>
            <h2 class="banner-title">Save Wishlists &amp; Track Orders</h2>
            <a class="vs-btn" href="{{ route('register') }}">Create Account</a>
          </div>
        </div>
      </div>
      <div class="col-xl-7">
        <div class="vs-testi__inner">
          <div class="title-area text-left wow animate__fadeInUp title-anime animation-style5" data-wow-delay="0.25s">
            <span class="sec-subtitle left-shape justify-content-center title-anime__title">Testimonials</span>
            <h2 class="sec-title title-anime__title">Loved By Readers Worldwide</h2>
            <p class="sec-text">Here’s what book lovers from around the world say about shopping with us.</p>
          </div>
          <div class="vs-testi__items wow animate__fadeInUp" data-wow-delay="0.35s">
            <div class="vs-carousel testi-slider" data-autoplay="true" data-fade="true">
              @foreach ($testimonials as $t)
                <div class="vs-testi__style1">
                  <span class="vs-testi__icon"><img src="{{ asset('assets/img/icons/quote-icon.svg') }}" alt=""></span>
                  <div class="vs-testi__top">
                    <div class="vs-testi__image">
                      <img class="img1" src="{{ asset('assets/img/testimonial/' . $t['img']) }}" alt="{{ $t['name'] }}">
                    </div>
                    <div class="vs-testi__author">
                      <div class="star-rating">
                        @for ($i = 0; $i < 5; $i++)<i class="fa-solid fa-star"></i>@endfor
                      </div>
                      <h3 class="vs-testi__title">{{ $t['name'] }}</h3>
                      <span class="vs-testi__desi">{{ $t['role'] }}</span>
                    </div>
                  </div>
                  <div class="vs-testi__content">
                    <p class="vs-testi__text">
                      <span class="text-highlight"><img class="icon" src="{{ asset('assets/img/testimonial/testi-icon1.png') }}" alt=""> {{ $t['highlight'] }}</span>
                      “{{ $t['text'] }}”
                    </p>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          <div class="custom-arraw wow animate__fadeInUp" data-wow-delay="0.45s">
            <div class="icon-arraw slick-prev" data-slick-prev=".testi-slider">
              <button class="icon-btn" aria-label="Previous"><i class="fa-regular fa-arrow-right"></i></button>
            </div>
            <div class="icon-arraw slick-next" data-slick-next=".testi-slider">
              <button class="icon-btn" aria-label="Next"><i class="fa-regular fa-arrow-left"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
