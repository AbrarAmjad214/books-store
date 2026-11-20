{{-- Store figures (Ebukz counter-layout1) — counts come from the catalogue --}}
@php
  $stats = [
      ['count' => \App\Models\Product::active()->count(), 'suffix' => '+', 'label' => 'Books In Stock'],
      ['count' => \App\Models\Author::active()->has('products')->count(), 'suffix' => '+', 'label' => 'Authors'],
      ['count' => \App\Models\Category::active()->whereNotNull('parent_id')->count(), 'suffix' => '', 'label' => 'Genres'],
      ['count' => 30, 'suffix' => '', 'label' => 'Day Easy Returns'],
      ['count' => 24, 'suffix' => '/7', 'label' => 'Customer Support'],
  ];
@endphp
<section class="counter-layout1 bg-theme">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="counter-style1">
        @foreach ($stats as $stat)
          <div class="media-inner wow animate__fadeInUp" data-wow-delay="0.{{ 3 + $loop->index }}5s">
            <div class="media-counter text-center">
              <div class="media-count">
                <h2 class="media-title counter-number" data-count="{{ $stat['count'] }}">00</h2>
                <span class="count-icon">{{ $stat['suffix'] }}</span>
              </div>
              <p class="media-text">{{ $stat['label'] }}</p>
            </div>
            @unless ($loop->last)
              <span class="counter-line">
                <img class="icon" src="{{ asset('assets/img/shapes/round-ring.svg') }}" alt="">
              </span>
            @endunless
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
