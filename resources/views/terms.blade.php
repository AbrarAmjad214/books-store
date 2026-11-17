<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions | Albakio International</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/albakio.css') }}">
</head>
<body>
@include('partials.topbar')
@include('partials.header', ['active' => 'terms'])
<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">›</span><span>Terms and Conditions</span></nav>
        <h1>Terms and Conditions</h1>
        <p>Last updated: January 2025</p>
    </div>
</section>
<section class="section-pad">
    <div class="container">
        <div style="max-width:860px;margin:0 auto;font-size:0.95rem;line-height:1.8;color:var(--text);">
            <p style="font-size:1.02rem;border-left:3px solid var(--primary);padding-left:16px;color:#3a3a48;margin-bottom:32px;">By accessing and using the Albakio International website, you accept and agree to be bound by the following Terms and Conditions. Please read them carefully before using our website or placing orders.</p>
            @foreach([
                ['1. Use of Website', 'This website is operated by Albakio International. By using this website, you agree to use it only for lawful purposes and in a manner that does not infringe the rights of others.'],
                ['2. Intellectual Property', 'All content on this website — including text, images, book covers, logos, and design — is the intellectual property of Albakio International and is protected by applicable laws.'],
                ['3. Orders and Pricing', 'All orders are subject to availability and confirmation. Prices are subject to change without notice. The confirmed price at time of order placement applies. Bulk order discounts may be available for schools — contact us for details.'],
                ['4. Shipping & Delivery', 'Delivery timelines depend on your location and order volume. We work with TCS Express to ensure timely delivery. We are not responsible for delays caused by courier services or circumstances beyond our control.'],
                ['5. Returns & Refunds', 'We accept returns of damaged or incorrectly supplied books within 7 days of receipt. Items must be in original, unused condition. Contact info@albakio.com.pk with your order number and photograph to initiate a return.'],
                ['6. Limitation of Liability', 'Albakio International shall not be liable for any indirect, incidental, or consequential damages arising from the use of this website or our products.'],
                ['7. Governing Law', 'These Terms are governed by the laws of Pakistan. Any disputes shall be subject to the exclusive jurisdiction of the courts of Lahore, Punjab, Pakistan.'],
                ['8. Contact Us', 'For questions about these Terms, contact us at info@albakio.com.pk or telephone 042 35199009.'],
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
