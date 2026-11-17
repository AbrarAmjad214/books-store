<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers | Albakio International</title>
    <meta name="description" content="Join Albakio International — apply for a career in educational publishing. We're looking for academic writers, designers, IT professionals, and sales representatives.">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/albakio.css') }}">
</head>
<body>

@include('partials.topbar')
@include('partials.header', ['active' => 'careers'])

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">›</span><span>Careers</span></nav>
        <h1>Careers at Albakio</h1>
        <p>Join a team passionate about shaping the future of education in Pakistan.</p>
    </div>
</section>

<section class="section-pad">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:start;margin-bottom:60px;">
            <div>
                <span class="tag-line">Work With Us</span>
                <h2 class="section-title" style="margin-bottom:16px;">Why Join Albakio?</h2>
                <p style="font-size:0.95rem;color:var(--text);line-height:1.8;margin-bottom:14px;">At Albakio International, we believe that great education starts with great people. We're a growing team of educators, designers, technologists, and publishing professionals committed to creating the best educational books in Pakistan.</p>
                <p style="font-size:0.95rem;color:var(--text);line-height:1.8;margin-bottom:24px;">We offer a creative, collaborative work environment in Lahore with opportunities for growth across our Academic, Design, IT, and Sales & Marketing departments.</p>
                <div class="why-list">
                    <li>Competitive salary and benefits package</li>
                    <li>Creative, purpose-driven work environment</li>
                    <li>Professional development and training opportunities</li>
                    <li>Be part of a team shaping education in Pakistan</li>
                    <li>Modern offices in Lahore's educational publishing hub</li>
                </div>
            </div>
            <div>
                <img src="{{ asset('assets/images/who-we-are.jpg') }}" alt="Albakio Team" style="border-radius:14px;width:100%;box-shadow:var(--shadow);">
            </div>
        </div>

        {{-- Departments --}}
        <div class="section-header centered">
            <span class="tag-line">Open Departments</span>
            <h2 class="section-title">We're Hiring In…</h2>
        </div>
        <div class="dept-grid" style="margin-bottom:60px;">
            <div class="dept-card">
                <div class="dept-icon">📚</div>
                <div class="dept-name">Academic Department</div>
                <p class="dept-desc">Curriculum writers, subject matter experts, and editors with strong backgrounds in education and their respective subjects.</p>
            </div>
            <div class="dept-card">
                <div class="dept-icon">🎨</div>
                <div class="dept-name">Design Department</div>
                <p class="dept-desc">Graphic designers and illustrators with experience in educational or children's book design.</p>
            </div>
            <div class="dept-card">
                <div class="dept-icon">💡</div>
                <div class="dept-name">IT Department</div>
                <p class="dept-desc">Web developers, app developers, and AR/VR specialists for our digital learning platform and Kidlings AR app.</p>
            </div>
            <div class="dept-card">
                <div class="dept-icon">📊</div>
                <div class="dept-name">Sales &amp; Marketing</div>
                <p class="dept-desc">School sales representatives and marketing professionals to expand our reach across Pakistan.</p>
            </div>
        </div>

        {{-- Application Form --}}
        <div style="max-width:720px;margin:0 auto;">
            <div class="contact-form-card">
                <h3 style="font-size:1.3rem;font-weight:700;color:var(--dark);margin-bottom:6px;">Apply Now</h3>
                <p style="font-size:0.85rem;color:var(--light-text);margin-bottom:22px;">Fill in the form below and our HR team will get back to you within 3–5 working days.</p>

                @if(session('career_success'))
                    <div class="alert alert-success show">{{ session('career_success') }}</div>
                @endif

                <div id="form-success" class="alert alert-success">Thank you for applying! We'll be in touch shortly.</div>
                <div id="form-error" class="alert alert-error">Please fill in all required fields.</div>

                <form id="contact-form" action="{{ route('careers.apply') }}" method="POST" novalidate>
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
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number <span style="color:var(--primary)">*</span></label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="0300 0000000" required>
                        </div>
                        <div class="form-group">
                            <label for="department">Department <span style="color:var(--primary)">*</span></label>
                            <select id="department" name="department" class="form-select" required>
                                <option value="">Select a department…</option>
                                <option value="Academic">Academic Department</option>
                                <option value="Design">Design Department</option>
                                <option value="IT">IT Department</option>
                                <option value="Sales">Sales &amp; Marketing</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="experience">Relevant Experience</label>
                        <input type="text" id="experience" name="experience" class="form-control" placeholder="e.g. 3 years in educational publishing">
                    </div>
                    <div class="form-group">
                        <label for="message">Cover Letter / Why you want to join Albakio <span style="color:var(--primary)">*</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Tell us about yourself and why you'd like to join our team…" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:14px 28px;">Submit Application</button>
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
