<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Albakio International</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/albakio.css') }}">
</head>
<body>
@include('partials.topbar')
@include('partials.header', ['active' => 'privacy'])
<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">›</span><span>Privacy Policy</span></nav>
        <h1>Privacy Policy</h1>
        <p>Last updated: January 2025</p>
    </div>
</section>
<section class="section-pad">
    <div class="container">
        <div style="max-width:860px;margin:0 auto;font-size:0.95rem;line-height:1.8;color:var(--text);">
            <p style="font-size:1.02rem;border-left:3px solid var(--primary);padding-left:16px;color:#3a3a48;margin-bottom:32px;">At Albakio International, we are committed to protecting the privacy and security of your personal information. This Privacy Policy explains how we collect, use, and safeguard your data.</p>
            @foreach([
                ['1. Information We Collect', 'We may collect your name, email address, phone number, school/organization name provided through our contact form, as well as usage data collected automatically via analytics tools.'],
                ['2. How We Use Your Information', 'We use your information to respond to enquiries, process orders, improve our website and services, and send relevant product information when you have opted in.'],
                ['3. Data Security', 'We implement appropriate technical and organisational measures to protect your personal information from unauthorised access, disclosure, alteration, or destruction.'],
                ['4. Third-Party Services', 'We may use Google Analytics to understand how visitors use our site. We do not sell your personal data to third parties.'],
                ['5. Cookies', 'Our website may use cookies to enhance your browsing experience. You can disable cookies through your browser settings.'],
                ['6. Your Rights', 'You have the right to request access to, correction of, or deletion of your personal data. Contact us at info@albakio.com.pk.'],
                ['7. Contact Us', 'For questions about this Privacy Policy, contact us at info@albakio.com.pk or telephone 042 35199009.'],
            ] as [$title, $text])
            <h2 style="font-size:1.1rem;font-weight:700;color:var(--dark);margin:32px 0 12px;padding-bottom:8px;border-bottom:2px solid var(--border);">{{ $title }}</h2>
            <p>{{ $text }}</p>
            @endforeach
        </div>
    </div>
</section>
@include('partials.footer')
<button class="scroll-top" id="scroll-top" aria-label="Scroll to top">↑</button>
<script src="{{ asset('assets/js/albakio.js') }}"></script>
</body>
</html>
