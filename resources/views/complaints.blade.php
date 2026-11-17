<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints | Albakio International</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/albakio.css') }}">
</head>
<body>
@include('partials.topbar')
@include('partials.header', ['active' => 'complaints'])
<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">›</span><span>Complaints</span></nav>
        <h1>Complaint Handling</h1>
        <p>We take every complaint seriously and aim to resolve all issues within 3 working days.</p>
    </div>
</section>
<section class="section-pad">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1.5fr;gap:48px;align-items:start;">
            <div>
                <span class="tag-line">Our Commitment</span>
                <h2 class="section-title" style="margin-bottom:16px;">We Want to Make It Right</h2>
                <p style="font-size:0.92rem;color:var(--text);line-height:1.8;margin-bottom:16px;">If you have experienced an issue with our books, service, or delivery, please let us know. We review every complaint promptly and work to resolve it fairly.</p>
                <p style="font-size:0.92rem;color:var(--text);line-height:1.8;margin-bottom:24px;">Our target is to acknowledge all complaints within 1 working day and provide a resolution within 3 working days.</p>
                <div class="contact-item" style="margin-bottom:16px;">
                    <div class="contact-item-icon">📞</div>
                    <div><span class="contact-item-label">Phone</span><span class="contact-item-value"><a href="tel:04235199009" style="color:var(--primary);">042 35199009</a><small>Mon–Sat, 9am–6pm</small></span></div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">✉️</div>
                    <div><span class="contact-item-label">Email</span><span class="contact-item-value"><a href="mailto:info@albakio.com.pk" style="color:var(--primary);">info@albakio.com.pk</a></span></div>
                </div>
            </div>
            <div class="contact-form-card">
                <h3 style="font-size:1.2rem;font-weight:700;color:var(--dark);margin-bottom:6px;">Submit a Complaint</h3>
                <p style="font-size:0.85rem;color:var(--light-text);margin-bottom:22px;">Please provide as much detail as possible so we can investigate and resolve your complaint quickly.</p>
                <div id="form-success" class="alert alert-success">Thank you. Your complaint has been submitted. We'll respond within 1 working day.</div>
                <div id="form-error" class="alert alert-error">Please fill in all required fields.</div>
                <form id="contact-form" action="{{ route('contact.send') }}" method="POST" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name <span style="color:var(--primary)">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address <span style="color:var(--primary)">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="your@email.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="0300 0000000">
                    </div>
                    <input type="hidden" name="subject" value="Complaint">
                    <div class="form-group">
                        <label for="message">Complaint Details <span style="color:var(--primary)">*</span></label>
                        <textarea id="message" name="message" class="form-control" style="min-height:160px;" placeholder="Please describe your complaint, including order number if applicable…" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:14px 28px;">Submit Complaint</button>
                </form>
            </div>
        </div>
    </div>
</section>
@include('partials.footer')
<button class="scroll-top" id="scroll-top" aria-label="Scroll to top">↑</button>
<script src="{{ asset('assets/js/albakio.js') }}"></script>
</body>
</html>
