<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Albakio International</title>
    <meta name="description" content="Established in 2002 by Ahmed Usman Shah, Albakio International creates high-quality educational materials that meet international standards and cater to the unique needs of local learners.">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/albakio.css') }}">
</head>
<body>

@include('partials.topbar')
@include('partials.header', ['active' => 'about'])

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">›</span><span>About Us</span></nav>
        <h1>About Us</h1>
        <p>The leading publishing house in Pakistan — shaping education since 2002.</p>
    </div>
</section>

{{-- TRENDSETTER SECTION --}}
<section class="section-pad">
    <div class="container">
        <div class="about-split">
            <div class="about-split-img">
                <img src="{{ asset('assets/images/who-we-are.jpg') }}" alt="Albakio International — Trendsetter in Education">
            </div>
            <div>
                <span class="tag-line">Our Identity</span>
                <h2 class="section-title" style="margin-bottom:20px;">Trendsetter in Tailored Content</h2>
                <p style="font-size:0.95rem;color:var(--text);line-height:1.8;margin-bottom:16px;">
                    With a vast distribution network and a multitude of national and international clients, Albakio has established itself as a trendsetter in creating content tailored to the specific needs and demands of its clientele. Despite the customization, we consistently maintain quality across all our products, ensuring they meet the expectations of educators and learners alike.
                </p>
                <p style="font-size:0.95rem;color:var(--text);line-height:1.8;margin-bottom:16px;">
                    Established in 2002 by Ahmed Usman Shah, Albakio International has been dedicated to creating high-quality educational materials that meet international standards and cater to the unique needs of local learners. We draw inspiration from Pakistan and its founding leaders.
                </p>
                <p style="font-size:1.1rem;font-style:italic;color:var(--primary);font-weight:600;margin-bottom:24px;">کَسبِ کَمال کُن کہ عَزیزِ جَہاں شَوی</p>
                <div style="display:flex;gap:12px;flex-wrap:wrap;">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Register Your School</a>
                    <a href="{{ route('books') }}" class="btn btn-outline">View Our Books</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- STATS --}}
<section class="stats-band">
    <div class="container">
        <div class="stats-grid">
            <div><span class="stat-num" data-count="2002">2002</span><span class="stat-label">Year Established</span></div>
            <div><span class="stat-num" data-count="23" data-suffix="+">23+</span><span class="stat-label">Years of Experience</span></div>
            <div><span class="stat-num" data-count="10000" data-suffix="+">10,000+</span><span class="stat-label">Partner Schools</span></div>
            <div><span class="stat-num" data-count="4">4</span><span class="stat-label">In-House Departments</span></div>
        </div>
    </div>
</section>

{{-- VISION + DEPARTMENTS --}}
<section class="section-pad" style="background:var(--bg-section);">
    <div class="container">
        <div class="section-header centered">
            <span class="tag-line">Our Vision</span>
            <h2 class="section-title">A Vision for the Future of Textbooks</h2>
        </div>
        <div class="mv-grid" style="margin-bottom:60px;">
            <div class="mv-card">
                <div class="mv-icon">🎯</div>
                <div class="mv-title">Academic Vision</div>
                <p class="mv-text">Our academic team envisions a future where every textbook we create serves as a dynamic tool for critical thinking, creativity, and a lifelong passion for learning. Our textbooks are designed to bridge the digital divide, leveraging technology to enhance accessibility and adaptability.</p>
            </div>
            <div class="mv-card">
                <div class="mv-icon">💻</div>
                <div class="mv-title">Technology & Innovation</div>
                <p class="mv-text">At Albakio, our IT department is at the forefront of revolutionizing the educational landscape in Pakistan and beyond. We offer digital lessons, interactive ed-tech software solutions, and a groundbreaking augmented reality app for our preschool series.</p>
            </div>
        </div>

        <div class="section-header centered">
            <span class="tag-line">Our Departments</span>
            <h2 class="section-title">In-House Expertise</h2>
            <p class="section-subtitle">Four dedicated departments working together to produce Pakistan's finest educational books.</p>
        </div>
        <div class="dept-grid">
            <div class="dept-card">
                <div class="dept-icon">📚</div>
                <div class="dept-name">Academic Department</div>
                <p class="dept-desc">Curriculum specialists and experienced educators who ensure every book is accurate, aligned and effective.</p>
            </div>
            <div class="dept-card">
                <div class="dept-icon">🎨</div>
                <div class="dept-name">Design Department</div>
                <p class="dept-desc">Talented illustrators and designers who create visually engaging layouts that captivate young learners.</p>
            </div>
            <div class="dept-card">
                <div class="dept-icon">💡</div>
                <div class="dept-name">IT Department</div>
                <p class="dept-desc">Tech innovators building digital supplements, AR experiences, and ed-tech platforms to extend learning beyond the page.</p>
            </div>
            <div class="dept-card">
                <div class="dept-icon">📊</div>
                <div class="dept-name">Sales &amp; Marketing</div>
                <p class="dept-desc">A dedicated team maintaining relationships with schools across Pakistan and ensuring timely delivery.</p>
            </div>
        </div>
    </div>
</section>

{{-- THE ROLE OF DESIGN --}}
<section class="section-pad">
    <div class="container">
        <div class="about-split" style="direction:rtl;">
            <div class="about-split-img" style="direction:ltr;">
                <img src="{{ asset('assets/images/why-choose-us.jpg') }}" alt="Albakio Design and Aesthetics">
            </div>
            <div style="direction:ltr;">
                <span class="tag-line">Design &amp; Aesthetics</span>
                <h2 class="section-title" style="margin-bottom:20px;">The Role of Design and Aesthetics</h2>
                <p style="font-size:0.95rem;color:var(--text);line-height:1.8;margin-bottom:16px;">
                    Content development at Albakio is a collaborative effort that involves a competent team of designers, illustrators, and editors. These professionals add the aesthetic essence to the final design of our books, ensuring that the layout and visuals are engaging and appealing to young learners.
                </p>
                <p style="font-size:0.95rem;color:var(--text);line-height:1.8;margin-bottom:24px;">
                    Their contributions are integral to creating books that are not only educational but also visually captivating — making learning a pleasure rather than a chore.
                </p>
                <div class="why-list" style="margin-bottom:24px;">
                    <li>Age-appropriate illustrations and visuals</li>
                    <li>Clear, readable typography designed for young eyes</li>
                    <li>Engaging layouts that guide the learner through content</li>
                    <li>Colour and design choices aligned with educational research</li>
                </div>
                <a href="{{ route('books') }}" class="btn btn-primary">Explore Our Books</a>
            </div>
        </div>
    </div>
</section>

{{-- OUR PROMISE --}}
<section class="promise-section">
    <div class="container">
        <div class="section-header centered">
            <span class="tag-line" style="color:rgba(255,255,255,0.7);">Our Commitment</span>
            <h2 class="section-title">Our Promise</h2>
            <p class="section-subtitle" style="margin:10px auto 0;">At Albakio, we are dedicated to creating books that not only serve a single academic year but become lifelong companions for learners. Our resources are inclusive, rooted in thorough research, and designed to empower success.</p>
        </div>
        <div class="promise-grid">
            <div class="promise-card"><span class="promise-num">01</span><div class="promise-title">Lifelong Companions</div><p class="promise-desc">Books designed not just for one academic year but to remain valuable references throughout a student's education.</p></div>
            <div class="promise-card"><span class="promise-num">02</span><div class="promise-title">Inclusive Resources</div><p class="promise-desc">Content that caters to diverse learning styles and abilities, ensuring no student is left behind.</p></div>
            <div class="promise-card"><span class="promise-num">03</span><div class="promise-title">Research-Based</div><p class="promise-desc">Every book is grounded in thorough educational research and developed by subject matter experts.</p></div>
            <div class="promise-card"><span class="promise-num">04</span><div class="promise-title">21st Century Skills</div><p class="promise-desc">Critical thinking, creativity, collaboration and communication are woven into every series we publish.</p></div>
            <div class="promise-card"><span class="promise-num">05</span><div class="promise-title">Empower Success</div><p class="promise-desc">Books designed to build confidence and academic capability from the earliest years of learning.</p></div>
            <div class="promise-card"><span class="promise-num">06</span><div class="promise-title">Constant Innovation</div><p class="promise-desc">We continuously update and improve our books with the latest in educational research and technology.</p></div>
        </div>
        <div style="text-align:center;margin-top:40px;">
            <a href="{{ route('contact') }}" class="btn btn-primary">Register Your School</a>
        </div>
    </div>
</section>

{{-- CLIENTS --}}
<section class="clients-section">
    <div class="container">
        <h2 style="font-size:1rem;font-weight:700;color:var(--dark);margin-bottom:28px;text-align:center;">Our Clients</h2>
        <div class="clients-logos">
            <img src="{{ asset('assets/images/school-beaconhouse.png') }}" alt="Beaconhouse"><img src="{{ asset('assets/images/school-city.png') }}" alt="City School"><img src="{{ asset('assets/images/school-educators.png') }}" alt="Educators"><img src="{{ asset('assets/images/school-allied.png') }}" alt="Allied Schools"><img src="{{ asset('assets/images/school-lycetuff.png') }}" alt="Lycetuff"><img src="{{ asset('assets/images/school-arqam.png') }}" alt="Arqam"><img src="{{ asset('assets/images/school-smart.png') }}" alt="Smart School"><img src="{{ asset('assets/images/school-fouji.png') }}" alt="Fouji Foundation">
        </div>
    </div>
</section>

{{-- REGISTER CTA --}}
<section class="register-cta">
    <div class="container">
        <h2>Register Your School</h2>
        <p>Transform education with us. Together, we can shape a brighter future through innovative learning solutions.</p>
        <div class="btn-actions"><a href="{{ route('contact') }}" class="btn btn-primary">Get Started Today</a></div>
    </div>
</section>

@include('partials.footer')

<button class="scroll-top" id="scroll-top" aria-label="Scroll to top">↑</button>
<script src="{{ asset('assets/js/albakio.js') }}"></script>
</body>
</html>
