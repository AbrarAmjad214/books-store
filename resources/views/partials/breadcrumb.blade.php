{{-- Ebukz breadcrumb banner. Expects $title; optional $crumbs = [label => url] between Home and the title. --}}
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.png') }}">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">{{ $title }}</h1>
      <div class="breadcumb-menu-wrap">
        <div class="breadcumb-menu">
          <span><a href="{{ route('home') }}">Home</a></span>
          @foreach ($crumbs ?? [] as $label => $url)
            <span><a href="{{ $url }}">{{ $label }}</a></span>
          @endforeach
          <span>{{ $title }}</span>
        </div>
      </div>
    </div>
  </div>
</div>
