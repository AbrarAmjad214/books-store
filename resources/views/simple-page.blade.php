<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Albakio International</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/albakio.css') }}">
</head>
<body>
@include('partials.topbar')
@include('partials.header', ['active' => $active ?? ''])
<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">›</span><span>{{ $title }}</span></nav>
        <h1>{{ $title }}</h1>
        @isset($subtitle)<p>{{ $subtitle }}</p>@endisset
    </div>
</section>
<section class="section-pad">
    <div class="container">
        <div style="max-width:860px;margin:0 auto;">
            @isset($content)
                {!! $content !!}
            @else
                <p style="font-size:0.95rem;color:var(--light-text);text-align:center;padding:40px 0;">Content coming soon. <a href="{{ route('contact') }}" style="color:var(--primary);">Contact us</a> for more information.</p>
            @endisset
        </div>
    </div>
</section>
@include('partials.footer')
<button class="scroll-top" id="scroll-top" aria-label="Scroll to top">↑</button>
<script src="{{ asset('assets/js/albakio.js') }}"></script>
</body>
</html>
