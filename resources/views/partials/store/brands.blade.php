{{-- Publishing partners (Ebukz brand-style1 with the theme's brand logos) --}}
<div class="brand-style1 space-bottom">
  <div class="container">
    <div class="title-area text-center">
      <span class="sec-subtitle justify-content-center">Our Partners</span>
      <h2 class="sec-title">Publishers We Work With</h2>
    </div>
    <div class="row vs-carousel wow animate__fadeInUp" data-wow-delay="0.35s" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2" data-autoplay="true">
      @foreach ([1, 2, 3, 4, 5, 1, 2, 3] as $n)
        <div class="col-xl-2">
          <div class="brand-item">
            <img src="{{ asset('assets/img/brand/brand-1-' . $n . '.png') }}" alt="Publishing partner">
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
