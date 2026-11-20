{{-- Ebukz-styled paginator: $products->links('partials.pagination') --}}
@if ($paginator->hasPages())
  <div class="vs-pagination mt-55">
    <a href="{{ $paginator->previousPageUrl() ?? '#' }}" class="pagi-btn {{ $paginator->onFirstPage() ? 'disabled' : '' }}" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></a>
    <ul>
      @foreach ($elements as $element)
        @if (is_string($element))
          <li><a href="#">{{ $element }}</a></li>
        @endif
        @if (is_array($element))
          @foreach ($element as $page => $url)
            <li><a href="{{ $url }}" class="{{ $page == $paginator->currentPage() ? 'active' : '' }}">{{ $page }}</a></li>
          @endforeach
        @endif
      @endforeach
    </ul>
    <a href="{{ $paginator->nextPageUrl() ?? '#' }}" class="pagi-btn {{ $paginator->hasMorePages() ? 'active' : 'disabled' }}" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></a>
  </div>
@endif
