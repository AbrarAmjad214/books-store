<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Albakio International</title>
    <meta name="description" content="Get in touch with Albakio International. Phone: 042 35199009. Customer Care Mon–Sat 9am–6pm.">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/albakio.css') }}">
</head>
<body>

@include('partials.topbar')
@include('partials.header', ['active' => 'contact'])

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">›</span><span>Contact Us</span></nav>
        <h1>Contact Us</h1>
        <p>Get in touch with our team for book orders, samples, partnerships, and inquiries.</p>
    </div>
</section>

<section class="section-pad">
    <div class="container">
        <div class="contact-layout">
            <div class="contact-info-block">
                <div>
                    <span class="tag-line">Get In Touch</span>
                    <h2 class="section-title" style="margin-bottom:16px;">We're Here to Help</h2>
                    <p style="font-size:0.92rem;color:var(--light-text);line-height:1.75;">Whether you're a school looking to place an order, a teacher wanting to review our books, or have any other inquiry — we'd love to hear from you.</p>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">📞</div>
                    <div>
                        <span class="contact-item-label">Phone</span>
                        <span class="contact-item-value"><a href="tel:04235199009" style="color:var(--primary);">042 35199009</a><small>Customer Care: Mon–Sat, 9:00am to 6:00pm</small></span>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">📍</div>
                    <div>
                        <span class="contact-item-label">Lahore Office</span>
                        <span class="contact-item-value">Lahore, Punjab, Pakistan<small>Main publishing and editorial office</small></span>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">📍</div>
                    <div>
                        <span class="contact-item-label">Karachi Office</span>
                        <span class="contact-item-value">Karachi, Sindh, Pakistan<small>Southern Pakistan distribution center</small></span>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">✉️</div>
                    <div>
                        <span class="contact-item-label">Email</span>
                        <span class="contact-item-value"><a href="mailto:info@albakio.com.pk" style="color:var(--primary);">info@albakio.com.pk</a></span>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">🌐</div>
                    <div>
                        <span class="contact-item-label">Website</span>
                        <span class="contact-item-value"><a href="https://albakio.com.pk" target="_blank" rel="noopener" style="color:var(--primary);">albakio.com.pk</a></span>
                    </div>
                </div>

                <div style="display:flex;gap:10px;flex-wrap:wrap;">
                    <a href="https://www.facebook.com/albakiointernational/" target="_blank" rel="noopener" style="padding:9px 16px;border:1px solid var(--border);border-radius:8px;font-size:0.82rem;font-weight:600;color:var(--dark);transition:all 0.2s;">Facebook</a>
                    <a href="https://www.instagram.com/albakio.international/" target="_blank" rel="noopener" style="padding:9px 16px;border:1px solid var(--border);border-radius:8px;font-size:0.82rem;font-weight:600;color:var(--dark);transition:all 0.2s;">Instagram</a>
                    <a href="https://www.youtube.com/@albakiointernational4219" target="_blank" rel="noopener" style="padding:9px 16px;border:1px solid var(--border);border-radius:8px;font-size:0.82rem;font-weight:600;color:var(--dark);transition:all 0.2s;">YouTube</a>
                </div>

                <div class="map-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d436875.6!2d74.1!3d31.5!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C+Pakistan!5e0!3m2!1sen!2s!4v1" loading="lazy" title="Albakio International Lahore"></iframe>
                </div>
            </div>

            <div class="contact-form-card">
                <h3 style="font-size:1.3rem;font-weight:700;color:var(--dark);margin-bottom:6px;">Send Us a Message</h3>
                <p style="font-size:0.85rem;color:var(--light-text);margin-bottom:22px;">We typically respond within 1–2 business days.</p>

                @if(session('success'))
                    <div class="alert alert-success show">{{ session('success') }}</div>
                @endif

                <div id="form-success" class="alert alert-success">Thank you! Your message has been sent. We'll get back to you shortly.</div>
                <div id="form-error" class="alert alert-error">Please fill in all required fields correctly.</div>

                <form id="contact-form" action="{{ route('contact.send') }}" method="POST" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name <span style="color:var(--primary)">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your full name" value="{{ old('name') }}" required>
                            @error('name')<span style="font-size:0.78rem;color:var(--primary)">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address <span style="color:var(--primary)">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="your@email.com" value="{{ old('email') }}" required>
                            @error('email')<span style="font-size:0.78rem;color:var(--primary)">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="042 35199009" value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                            <label for="school">School / Organization</label>
                            <input type="text" id="school" name="school" class="form-control" placeholder="Your school name" value="{{ old('school') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject <span style="color:var(--primary)">*</span></label>
                        <select id="subject" name="subject" class="form-select" required>
                            <option value="">Select a subject…</option>
                            <option value="Book Order" {{ old('subject') == 'Book Order' ? 'selected' : '' }}>Book Order / Bulk Purchase</option>
                            <option value="Sample Request" {{ old('subject') == 'Sample Request' ? 'selected' : '' }}>Request Sample Books</option>
                            <option value="Catalogue" {{ old('subject') == 'Catalogue' ? 'selected' : '' }}>Request Full Catalogue</option>
                            <option value="School Registration" {{ old('subject') == 'School Registration' ? 'selected' : '' }}>School Registration</option>
                            <option value="Price List" {{ old('subject') == 'Price List' ? 'selected' : '' }}>Price List Inquiry</option>
                            <option value="Partnership" {{ old('subject') == 'Partnership' ? 'selected' : '' }}>School Partnership</option>
                            <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other Inquiry</option>
                        </select>
                        @error('subject')<span style="font-size:0.78rem;color:var(--primary)">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="message">Message <span style="color:var(--primary)">*</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Tell us how we can help you…" required>{{ old('message') }}</textarea>
                        @error('message')<span style="font-size:0.78rem;color:var(--primary)">{{ $message }}</span>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:14px 28px;">Send Message</button>
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
