{{-- Text logo. Optional $variant: 'light' for dark backgrounds. --}}
<a href="{{ route('home') }}" class="store-logo {{ ($variant ?? '') === 'light' ? 'store-logo--light' : '' }}" aria-label="{{ $store['name'] }} home">
  <span class="store-logo__mark"><i class="fa-solid fa-book-open"></i></span>
  <span class="store-logo__text">{{ $store['name'] }}</span>
</a>
