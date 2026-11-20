@extends('layouts.ebukz')

@section('title', '404 - Page Not Found')

@section('content')
  <section class="error-layout1 space">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9">
          <div class="error-content text-center">
            <div class="error-number">404</div>
            <h2 class="error-title">Oops! Page Not Found</h2>
            <p class="error-text">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
            <a href="{{ route('home') }}" class="vs-btn">Back to Home</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
