@extends('layouts.ebukz')

@section('title', 'FAQs')
@section('description', 'Answers to common questions about orders, worldwide shipping, payments and returns.')

@section('content')
  @include('partials.breadcrumb', ['title' => 'FAQs'])

  <section class="space">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-4">
          <div class="title-area">
            <span class="sec-subtitle">Help Center</span>
            <h2 class="sec-title">Frequently Asked Questions</h2>
            <p class="sec-text">Answers to the most common questions about our books, orders, delivery and returns.</p>
          </div>
          <div class="support-card h-auto">
            <span class="support-card__icon"><i class="fa-solid fa-headset"></i></span>
            <h3 class="support-card__title">Still have a question?</h3>
            <p class="support-card__text">Our support team usually replies within one business day.</p>
            <a class="vs-btn mt-2" href="{{ route('contact') }}">Contact Us</a>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="accordion store-accordion" id="faqAccordion">
            @foreach ($faqs as [$question, $answer])
              <div class="accordion-item">
                <h3 class="accordion-header" id="faq-h{{ $loop->index }}">
                  <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faq-c{{ $loop->index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="faq-c{{ $loop->index }}">
                    {{ $question }}
                  </button>
                </h3>
                <div id="faq-c{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="faq-h{{ $loop->index }}" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">{{ $answer }}</div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
