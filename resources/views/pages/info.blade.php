@extends('layouts.ebukz')

@section('title', $page['title'])
@section('description', $page['intro'])

@section('content')
  @include('partials.breadcrumb', ['title' => $page['title']])

  <section class="space">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-10">
          <div class="info-page">
            @isset($page['updated'])
              <span class="info-page__updated"><i class="fa-regular fa-calendar"></i> Last updated: {{ $page['updated'] }}</span>
            @endisset
            <p class="info-page__intro">{{ $page['intro'] }}</p>

            @isset($page['highlights'])
              <div class="row g-4 mb-5">
                @foreach ($page['highlights'] as [$icon, $label, $text])
                  <div class="col-md-4">
                    <div class="support-card text-center h-100">
                      <span class="support-card__icon mx-auto"><i class="fa-solid {{ $icon }}"></i></span>
                      <h3 class="support-card__title">{{ $label }}</h3>
                      <p class="support-card__text mb-0">{{ $text }}</p>
                    </div>
                  </div>
                @endforeach
              </div>
            @endisset

            @foreach ($page['sections'] as [$heading, $text])
              <div class="info-page__section">
                <h2 class="info-page__heading"><span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>{{ $heading }}</h2>
                <p>{{ $text }}</p>
              </div>
            @endforeach

            <div class="info-page__help">
              <div>
                <h3>Need help?</h3>
                <p class="mb-0">Our support team is here to help — {{ $store['hours'] }}.</p>
              </div>
              <div class="d-flex flex-wrap gap-3">
                <a class="vs-btn" href="mailto:{{ $store['email'] }}"><i class="fas fa-envelope"></i> Email Us</a>
                <a class="vs-btn style-outline" href="{{ route('contact') }}">Send a Message</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
