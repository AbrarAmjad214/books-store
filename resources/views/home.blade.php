<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albakio International | Book Publisher in Pakistan</title>
    <meta name="description" content="Albakio International is a leading educational book publisher in Pakistan, producing school textbooks and workbooks for playgroup to secondary classes since 2002. Based in Lahore and Karachi.">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/albakio.css') }}">
</head>
<body>

@include('partials.topbar')
@include('partials.header', ['active' => 'home'])

{{-- ============================================================
     DISCOVERY SERIES HERO BAND
     ============================================================ --}}
<section class="discovery-band">
    <div class="container">
        <div>
            <div class="discovery-label">Single National Curriculum</div>
            <h1 class="discovery-title">Discovery Series</h1>
            <p class="discovery-desc">Eight subjects built around how children actually learn — English, Mathematics, Science, General Knowledge, Social Studies, Urdu and Islamiat.</p>
            <div class="discovery-badges">
                <div class="discovery-badge">
                    <span class="discovery-badge-num">8</span>
                    <span class="discovery-badge-label">subjects</span>
                </div>
                <div class="discovery-badge">
                    <span class="discovery-badge-num">27</span>
                    <span class="discovery-badge-label">titles</span>
                </div>
                <div class="discovery-badge">
                    <span class="discovery-badge-num">1–5</span>
                    <span class="discovery-badge-label">grades</span>
                </div>
            </div>
            <div style="margin-top:28px;">
                <a href="{{ route('books') }}?series=discovery" class="btn btn-primary">Explore Discovery</a>
            </div>
        </div>
        <div>
            <img src="{{ asset('assets/images/banner-hero.jpg') }}" alt="Discovery Series" style="border-radius:16px;max-width:440px;width:100%;box-shadow:0 20px 60px rgba(0,0,0,0.5);">
        </div>
    </div>
</section>

{{-- ============================================================
     DISCOVER ALBAKIO PUBLISHING
     ============================================================ --}}
<section style="background:#f5f5f5;padding:70px 0;">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:0;border:1px solid var(--border);border-radius:16px;overflow:hidden;background:var(--white);">

            {{-- Why Choose Us --}}
            <div class="why-card">
                <div class="why-card-icon">🎯</div>
                <h3>Why Choose Us?</h3>
                <div class="why-list">
                    <li>Research Based Publishing House</li>
                    <li>23 Years of Experience</li>
                    <li>In-House Academic, Design, IT, Sales &amp; Marketing Departments</li>
                    <li>Trusted by over 10,000 schools including renowned school chains</li>
                </div>
                <a href="{{ route('about') }}" class="btn btn-outline" style="margin-top:20px;font-size:0.82rem;padding:9px 18px;">Read More</a>
            </div>

            {{-- Who We Are --}}
            <div class="why-card">
                <div class="why-card-icon">🏢</div>
                <h3>Who We Are?</h3>
                <p>Established in 2002 by Ahmed Usman Shah, Albakio International has been dedicated to creating high-quality educational materials that meet international standards and cater to the unique needs of local learners. We draw inspiration from Pakistan and its founding leaders.</p>
                <p style="font-style:italic;color:var(--primary);font-size:0.85rem;margin-top:8px;">کَسبِ کَمال کُن کہ عَزیزِ جَہاں شَوی</p>
                <a href="{{ route('about') }}" class="btn btn-outline" style="margin-top:16px;font-size:0.82rem;padding:9px 18px;">Read More</a>
            </div>

            {{-- Our Promise --}}
            <div class="why-card">
                <div class="why-card-icon">✨</div>
                <h3>Our Promise</h3>
                <p>At Albakio, we are dedicated to creating books that not only serve a single academic year but become lifelong companions for learners. Our resources are inclusive, rooted in thorough research, and designed to empower success. 21st-century skills and research-based educational approaches will be integral to our educational resources.</p>
                <a href="{{ route('about') }}" class="btn btn-outline" style="margin-top:16px;font-size:0.82rem;padding:9px 18px;">Read More</a>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     REGISTER YOUR SCHOOL
     ============================================================ --}}
<section class="register-cta">
    <div class="container">
        <h2>Register Your School</h2>
        <p>Transform education with us. Together, we can shape a brighter future through innovative learning solutions.</p>
        <div class="btn-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary">Get Started Today</a>
            <a href="{{ route('about') }}" class="btn btn-outline" style="color:#fff;border-color:rgba(255,255,255,0.4);">Learn More</a>
        </div>
    </div>
</section>

{{-- ============================================================
     HOW WE SUPPORT TEACHERS
     ============================================================ --}}
<section class="section-pad">
    <div class="container">
        <div class="section-header centered">
            <span class="tag-line">For Educators</span>
            <h2 class="section-title">How We Support Teachers?</h2>
            <p class="section-subtitle">Our books come with comprehensive teacher guides, digital resources, and ongoing academic support to make teaching easier and more effective.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            <div style="background:var(--white);border:1px solid var(--border);border-radius:14px;padding:28px;text-align:center;transition:all 0.25s;" onmouseover="this.style.boxShadow='0 8px 30px rgba(0,0,0,0.12)';this.style.transform='translateY(-4px)'" onmouseout="this.style.boxShadow='';this.style.transform=''">
                <div style="font-size:2.5rem;margin-bottom:14px;">📖</div>
                <h3 style="font-size:1rem;font-weight:700;color:var(--dark);margin-bottom:10px;">Teacher Guides</h3>
                <p style="font-size:0.85rem;color:var(--light-text);line-height:1.7;">Detailed guides for every book in our series with lesson plans, answer keys, and teaching tips.</p>
                <a href="{{ route('teacher-guide') }}" style="display:inline-block;margin-top:14px;font-size:0.82rem;font-weight:600;color:var(--primary);">View Guides →</a>
            </div>
            <div style="background:var(--white);border:1px solid var(--border);border-radius:14px;padding:28px;text-align:center;transition:all 0.25s;" onmouseover="this.style.boxShadow='0 8px 30px rgba(0,0,0,0.12)';this.style.transform='translateY(-4px)'" onmouseout="this.style.boxShadow='';this.style.transform=''">
                <div style="font-size:2.5rem;margin-bottom:14px;">📅</div>
                <h3 style="font-size:1rem;font-weight:700;color:var(--dark);margin-bottom:10px;">Academic Calendar</h3>
                <p style="font-size:0.85rem;color:var(--light-text);line-height:1.7;">Stay organised with our comprehensive academic calendar designed for Pakistani school schedules.</p>
                <a href="{{ route('academic-calendar') }}" style="display:inline-block;margin-top:14px;font-size:0.82rem;font-weight:600;color:var(--primary);">View Calendar →</a>
            </div>
            <div style="background:var(--white);border:1px solid var(--border);border-radius:14px;padding:28px;text-align:center;transition:all 0.25s;" onmouseover="this.style.boxShadow='0 8px 30px rgba(0,0,0,0.12)';this.style.transform='translateY(-4px)'" onmouseout="this.style.boxShadow='';this.style.transform=''">
                <div style="font-size:2.5rem;margin-bottom:14px;">🃏</div>
                <h3 style="font-size:1rem;font-weight:700;color:var(--dark);margin-bottom:10px;">Flash Cards</h3>
                <p style="font-size:0.85rem;color:var(--light-text);line-height:1.7;">Printable flash cards to reinforce vocabulary, numbers, and concepts for early learners.</p>
                <a href="{{ route('flash-cards') }}" style="display:inline-block;margin-top:14px;font-size:0.82rem;font-weight:600;color:var(--primary);">View Flash Cards →</a>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     PRE SCHOOL / PRIMARY / SECONDARY BOOKS
     ============================================================ --}}
<section class="section-pad" style="background:var(--bg-section);">
    <div class="container">

        {{-- Pre School Books --}}
        <div class="section-header" style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:16px;margin-bottom:32px;">
            <div>
                <span class="tag-line">Early Years</span>
                <h2 class="section-title">Pre School Books</h2>
            </div>
            <a href="{{ route('books') }}?level=preschool" class="btn btn-outline">View All</a>
        </div>
        <div class="books-grid" style="margin-bottom:60px;">
            <div class="book-card" data-cat="early">
                <div class="book-card-img"><img src="{{ asset('assets/images/book-juniors-english.jpg') }}" alt="Juniors Club English" loading="lazy"></div>
                <div class="book-card-body"><div class="book-card-cat">Juniors Club</div><div class="book-card-title">Juniors Club English WorkBook — Step 1</div><div class="book-card-action"><a href="{{ route('books') }}?series=juniors-club">View Series →</a></div></div>
            </div>
            <div class="book-card" data-cat="early">
                <div class="book-card-img"><img src="{{ asset('assets/images/book-cpa-math.png') }}" alt="CPA Math Step 1" loading="lazy"></div>
                <div class="book-card-body"><div class="book-card-cat">CPA Math</div><div class="book-card-title">CPA Mathematics — Step 1</div><div class="book-card-action"><a href="{{ route('books') }}?series=cpa-maths">View Series →</a></div></div>
            </div>
            <div class="book-card" data-cat="early">
                <div class="book-card-img"><img src="{{ asset('assets/images/book-gullay-urdu.jpg') }}" alt="Gul-e-Urdu" loading="lazy"></div>
                <div class="book-card-body"><div class="book-card-cat">Gul-e-Urdu</div><div class="book-card-title">Gul-e-Urdu — Class 1</div><div class="book-card-action"><a href="{{ route('books') }}?series=gul-e-urdu">View Series →</a></div></div>
            </div>
            <div class="book-card" data-cat="early">
                <div class="book-card-img"><img src="{{ asset('assets/images/book-noor-islam.png') }}" alt="Noor-e-Islam" loading="lazy"></div>
                <div class="book-card-body"><div class="book-card-cat">Noor-e-Islam</div><div class="book-card-title">Noor-e-Islam — Class 1</div><div class="book-card-action"><a href="{{ route('books') }}?series=noor-e-islam">View Series →</a></div></div>
            </div>
        </div>

        {{-- Primary & Secondary --}}
        <div class="section-header" style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:16px;margin-bottom:32px;">
            <div>
                <span class="tag-line">Classes 1–8</span>
                <h2 class="section-title">Primary &amp; Secondary Books</h2>
            </div>
            <a href="{{ route('books') }}?level=primary" class="btn btn-outline">View All</a>
        </div>
        <div class="books-grid">
            <div class="book-card" data-cat="english">
                <div class="book-card-img"><img src="{{ asset('assets/images/book-benchmark-english.jpg') }}" alt="BenchMark English" loading="lazy"></div>
                <div class="book-card-body"><div class="book-card-cat">BenchMark English</div><div class="book-card-title">BenchMark English — Class 1</div><div class="book-card-action"><a href="{{ route('books') }}?series=benchmark-english">View Series →</a></div></div>
            </div>
            <div class="book-card" data-cat="math">
                <div class="book-card-img"><img src="{{ asset('assets/images/book-math-success.png') }}" alt="Mathematics Success" loading="lazy"></div>
                <div class="book-card-body"><div class="book-card-cat">Mathematics</div><div class="book-card-title">Mathematics Success — Class 1</div><div class="book-card-action"><a href="{{ route('books') }}?series=mathematics-success">View Series →</a></div></div>
            </div>
            <div class="book-card" data-cat="english">
                <div class="book-card-img"><img src="{{ asset('assets/images/book-english-grammar.jpg') }}" alt="English Grammar" loading="lazy"></div>
                <div class="book-card-body"><div class="book-card-cat">English Grammar</div><div class="book-card-title">English Grammar Series — Class 1</div><div class="book-card-action"><a href="{{ route('books') }}?series=benchmark-grammar">View Series →</a></div></div>
            </div>
            <div class="book-card" data-cat="computers">
                <div class="book-card-img"><img src="{{ asset('assets/images/book-computers.png') }}" alt="Online with Computers" loading="lazy"></div>
                <div class="book-card-body"><div class="book-card-cat">Computers</div><div class="book-card-title">Online with Computers — Class 1</div><div class="book-card-action"><a href="{{ route('books') }}?series=online-computers">View Series →</a></div></div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     KIDLINGS CLUB AR SECTION
     ============================================================ --}}
<section style="background:#0d0d14;color:#fff;padding:80px 0;">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;">
            <div>
                <span class="tag-line">Augmented Reality</span>
                <h2 style="font-size:clamp(1.6rem,3vw,2.4rem);font-weight:800;color:#fff;margin-bottom:16px;line-height:1.2;">Live from the book</h2>
                <div style="display:flex;flex-direction:column;gap:20px;margin-bottom:28px;">
                    <div style="display:flex;gap:14px;align-items:flex-start;">
                        <span style="flex-shrink:0;font-size:1.5rem;font-weight:800;color:var(--primary);">01</span>
                        <div><strong style="color:#fff;display:block;margin-bottom:3px;">A real page</strong><span style="font-size:0.85rem;color:rgba(255,255,255,0.6);">This is page 42 of Kidlings Club English, Step 1 — the page that introduces the letter e.</span></div>
                    </div>
                    <div style="display:flex;gap:14px;align-items:flex-start;">
                        <span style="flex-shrink:0;font-size:1.5rem;font-weight:800;color:var(--primary);">02</span>
                        <div><strong style="color:#fff;display:block;margin-bottom:3px;">A code printed on it</strong><span style="font-size:0.85rem;color:rgba(255,255,255,0.6);">Every letter page carries one. There are 1,365 across the Kidlings series.</span></div>
                    </div>
                    <div style="display:flex;gap:14px;align-items:flex-start;">
                        <span style="flex-shrink:0;font-size:1.5rem;font-weight:800;color:var(--primary);">03</span>
                        <div><strong style="color:#fff;display:block;margin-bottom:3px;">The model appears</strong><span style="font-size:0.85rem;color:rgba(255,255,255,0.6);">Scanning it opens the elephant in 3D. Drag it — this is the same file a child gets from the book.</span></div>
                    </div>
                </div>
                <a href="{{ route('books') }}?series=kidlings-club" class="btn btn-primary">Our Kidlings Club →</a>
            </div>
            <div>
                <img src="{{ asset('assets/images/blessing-home.png') }}" alt="Kidlings Club AR" style="border-radius:16px;box-shadow:0 20px 60px rgba(0,0,0,0.5);width:100%;" onerror="this.style.display='none'">
                <div style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:16px;padding:32px;text-align:center;margin-top:0;" id="ar-placeholder">
                    <div style="font-size:4rem;margin-bottom:16px;">📱</div>
                    <p style="color:rgba(255,255,255,0.6);font-size:0.88rem;">Scan the QR code in the book to view 3D models in Augmented Reality</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     OUR NEW BOOKS
     ============================================================ --}}
<section class="section-pad">
    <div class="container">
        <div class="section-header" style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:16px;">
            <div>
                <span class="tag-line">Latest Releases</span>
                <h2 class="section-title">Our New Books</h2>
            </div>
            <a href="{{ route('books') }}" class="btn btn-outline">View All Books →</a>
        </div>
        <div class="books-grid">
            <div class="book-card"><div class="book-card-img"><img src="{{ asset('assets/images/book-benchmark-english.jpg') }}" alt="BenchMark English" loading="lazy"></div><div class="book-card-body"><div class="book-card-cat">BenchMark English</div><div class="book-card-title">BenchMark English — New Edition</div><div class="book-card-action"><a href="{{ route('books') }}">View →</a></div></div></div>
            <div class="book-card"><div class="book-card-img"><img src="{{ asset('assets/images/book-cpa-math.png') }}" alt="CPA Math" loading="lazy"></div><div class="book-card-body"><div class="book-card-cat">CPA Math</div><div class="book-card-title">CPA Mathematics — Revised Edition</div><div class="book-card-action"><a href="{{ route('books') }}">View →</a></div></div></div>
            <div class="book-card"><div class="book-card-img"><img src="{{ asset('assets/images/book-general-knowledge.jpg') }}" alt="General Knowledge" loading="lazy"></div><div class="book-card-body"><div class="book-card-cat">General Knowledge</div><div class="book-card-title">General Knowledge Series</div><div class="book-card-action"><a href="{{ route('books') }}">View →</a></div></div></div>
            <div class="book-card"><div class="book-card-img"><img src="{{ asset('assets/images/book-social-studies.jpg') }}" alt="Social Studies" loading="lazy"></div><div class="book-card-body"><div class="book-card-cat">Social Studies</div><div class="book-card-title">Social Studies — New</div><div class="book-card-action"><a href="{{ route('books') }}">View →</a></div></div></div>
        </div>
    </div>
</section>

{{-- ============================================================
     QUICK FACTS COUNTER
     ============================================================ --}}
<section class="stats-band">
    <div class="container">
        <div class="stats-grid">
            <div>
                <span class="stat-num" data-count="10000" data-suffix="+">0+</span>
                <span class="stat-label">Schools</span>
            </div>
            <div>
                <span class="stat-num" data-count="98" data-suffix="%">0%</span>
                <span class="stat-label">Positive Feedback</span>
            </div>
            <div>
                <span class="stat-num" data-count="100" data-suffix="+">0+</span>
                <span class="stat-label">Research Based Books</span>
            </div>
            <div>
                <span class="stat-num" data-count="5000" data-suffix="+">0+</span>
                <span class="stat-label">Production Capacity Per Day</span>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     OUR CLIENTS
     ============================================================ --}}
<section class="clients-section">
    <div class="container">
        <h2 class="clients-label" style="font-size:1rem;font-weight:700;color:var(--dark);margin-bottom:28px;text-align:center;text-transform:none;letter-spacing:0;">Our Clients</h2>
        <div class="clients-logos">
            <img src="{{ asset('assets/images/school-beaconhouse.png') }}" alt="Beaconhouse School System">
            <img src="{{ asset('assets/images/school-city.png') }}" alt="City School">
            <img src="{{ asset('assets/images/school-educators.png') }}" alt="Educators">
            <img src="{{ asset('assets/images/school-allied.png') }}" alt="Allied Schools">
            <img src="{{ asset('assets/images/school-lycetuff.png') }}" alt="American Lycetuff">
            <img src="{{ asset('assets/images/school-arqam.png') }}" alt="Arqam School">
            <img src="{{ asset('assets/images/school-smart.png') }}" alt="Smart School">
            <img src="{{ asset('assets/images/school-fouji.png') }}" alt="Fouji Foundation">
        </div>
    </div>
</section>

{{-- ============================================================
     WHAT CLIENTS SAY
     ============================================================ --}}
<section class="section-pad testimonials-bg">
    <div class="container">
        <div class="section-header centered">
            <span class="tag-line">Reviews</span>
            <h2 class="section-title">What Client Says</h2>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Albakio International delivers high-quality educational books that perfectly align with students' developmental needs. Their thoughtfully designed content and affordable pricing set a remarkable standard in the industry."</p>
                <div class="testimonial-author"><div class="author-avatar">M</div><div><span class="author-name">Miss Madiha Nawaz</span><span class="author-role">Principal, Educators Prime Campus</span></div></div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"By integrating QR codes and AR features, Albakio combines traditional books with modern interactive tools. Students enjoy immersive learning, visualizing concepts in a fun and engaging way."</p>
                <div class="testimonial-author"><div class="author-avatar">K</div><div><span class="author-name">Sir Khurram Shahzad</span><span class="author-role">Principal, Blessing Home High School</span></div></div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Albakio's tech-savvy approach transforms education, making it engaging and modern. Their dedication to innovation truly shapes the future of learning."</p>
                <div class="testimonial-author"><div class="author-avatar">A</div><div><span class="author-name">Miss Abida Amjad</span><span class="author-role">Principal, F.G.S Faisalabad</span></div></div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Albakio Publishers excel in delivering precise, beautifully designed content. Their commitment to improving Pakistan's education system is commendable."</p>
                <div class="testimonial-author"><div class="author-avatar">U</div><div><span class="author-name">Miss Uzma Furqan</span><span class="author-role">Principal, The National Public School</span></div></div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"For years, Albakio Publishers has led in modern curriculum development, introducing innovative ideas and technology. They are shaping the next generation with progressive models and techniques."</p>
                <div class="testimonial-author"><div class="author-avatar">I</div><div><span class="author-name">Dr. Ibtehaj Tariq</span><span class="author-role">C.E.O, Oxford Public School</span></div></div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"At Albakio, we always find books that cater to all levels of learners. The variety and quality of their educational resources are unmatched in Pakistan."</p>
                <div class="testimonial-author"><div class="author-avatar">F</div><div><span class="author-name">School Administrator</span><span class="author-role">Fouji Foundation School</span></div></div>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')

<button class="scroll-top" id="scroll-top" aria-label="Scroll to top">↑</button>
<script src="{{ asset('assets/js/albakio.js') }}"></script>
</body>
</html>
