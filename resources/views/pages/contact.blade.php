@extends('layouts.ebukz')

@section('title', 'Contact Us')

@section('content')
<!--==============================
    Breadcrumb
============================== -->
  <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.png') }}">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Contact Us</h1>
        <div class="breadcumb-menu-wrap">
          <div class="breadcumb-menu">
            <span><a href="{{ route('home') }}">Home</a></span>
            <span>Contact Us</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="contact-layout2 space">
    <div class="container">
      <div class="row g-4 space-bottom">
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="contact-media wow animate__fadeInUp" data-wow-delay="0.25s">
            <div class="media-style1">
              <div class="media-info">
                <h3 class="media-title">Our Location / Address</h3>
                <div class="media-icon"><img src="{{ asset('assets/img/icons/location.svg') }}" alt="icon"></div>
              </div>
              <p class="media-text">{{ $store['address'] }}</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="contact-media wow animate__fadeInUp" data-wow-delay="0.45s">
            <div class="media-style1">
              <div class="media-info">
                <h3 class="media-title">Our Contact Number</h3>
                <div class="media-icon"><img src="{{ asset('assets/img/icons/call.svg') }}" alt="icon"></div>
              </div>
              <p class="media-text"><a href="tel:{{ preg_replace('/[^0-9+]/', '', $store['phone']) }}">{{ $store['phone'] }}</a><br>{{ $store['hours'] }}</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="contact-media wow animate__fadeInUp" data-wow-delay="0.65s">
            <div class="media-style1">
              <div class="media-info">
                <h3 class="media-title">Official Email Address</h3>
                <div class="media-icon"><img src="{{ asset('assets/img/icons/mail.svg') }}" alt="icon"></div>
              </div>
              <p class="media-text"><a href="mailto:{{ $store['email'] }}">{{ $store['email'] }}</a><br>We reply within 1 business day</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <form class="form-style1 wow animate__fadeInUp" data-wow-delay="0.35s" action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="title-area animation-style1 title-anime">
              <h2 class="sec-title text-title title-anime__title">We’d Love To Hear From You</h2>
            </div>
            <div class="row gx-20">
              <div class="col-md-6 form-group">
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" required>
                <i class="fas fa-user"></i>
              </div>
              <div class="col-md-6 form-group">
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
                <i class="fas fa-envelope"></i>
              </div>
              <div class="col-md-6 form-group">
                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone (optional)">
                <i class="fas fa-phone"></i>
              </div>
              <div class="col-md-6 form-group">
                <select name="subject" class="orderby @error('subject') is-invalid @enderror" aria-label="Subject" required>
                  <option value="" disabled @selected(!old('subject'))>Select Subject</option>
                  @foreach (['General Enquiry', 'Order & Delivery', 'Book Availability', 'Bulk & Corporate Orders', 'Other'] as $subject)
                    <option value="{{ $subject }}" @selected(old('subject') === $subject)>{{ $subject }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-12 form-group">
                <textarea name="message" class="form-control @error('message') is-invalid @enderror" placeholder="Message Here..." required>{{ old('message') }}</textarea>
              </div>
              <div class="col-md-12 form-group">
                <button class="vs-btn justify-content-center" type="submit">Send Message</button>
              </div>
            </div>
          </form>
          @if ($errors->any())
            <ul class="text-danger list-unstyled mb-0 mt-3">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          @endif
        </div>
      </div>
    </div>
  </section>
  <!--==============================
  Map Area
  ============================== -->
  <div class="map-layout1">
    <div class="ratio ratio-21x9 wow animate__fadeInUp" data-wow-delay="0.35s" style="height:450px">
      <iframe src="https://www.google.com/maps?q={{ urlencode($store['address']) }}&output=embed" title="{{ $store['name'] }} location" width="800" height="720" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

@endsection
