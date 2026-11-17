@php $active = $active ?? ''; @endphp
<header class="site-header">
    <div class="container">
        <div class="header-inner">
            <a href="{{ route('home') }}" class="site-logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Albakio International" width="150" height="54">
            </a>

            <nav class="main-nav" aria-label="Main navigation">
                <a href="{{ route('home') }}" @class(['active' => $active === 'home'])>Home</a>

                <div class="nav-item">
                    <a href="{{ route('books') }}" @class(['active' => $active === 'books'])>Our Books</a>
                    <div class="dropdown mega">
                        <div>
                            <div class="dropdown-col-title">Bookbro</div>
                            <a href="{{ route('books') }}?series=juniors-club">Juniors Club</a>
                            <a href="{{ route('books') }}?series=life-and-learning">Life and Learning</a>
                            <a href="{{ route('books') }}?series=mathematics-success">Mathematics Success</a>
                            <a href="{{ route('books') }}?series=mutal-e-islam">Mutal-e-Islam</a>
                            <a href="{{ route('books') }}?series=new-drawing-concepts">New Drawing Concepts</a>
                            <a href="{{ route('books') }}?series=urdu-ki-kiran">Urdu ki Kiran</a>
                            <a href="{{ route('books') }}?series=waqfiat-e-ama">Waqfiat-e-Ama</a>
                            <a href="{{ route('books') }}?series=rhymes-books">Rhymes Books</a>
                            <a href="{{ route('books') }}?series=coding-scratch">Coding in Scratch Jr</a>
                            <a href="{{ route('books') }}?series=table-books">Table Books</a>
                        </div>
                        <div>
                            <div class="dropdown-col-title">Kidlings &amp; Primary</div>
                            <a href="{{ route('books') }}?series=kidlings-club">Kidlings Club</a>
                            <a href="{{ route('books') }}?series=kidlings-club-4th">Kidlings Club 4th Edition</a>
                            <a href="{{ route('books') }}?series=marvel-english">Marvel English</a>
                            <a href="{{ route('books') }}?series=expression-english">Expression English</a>
                            <a href="{{ route('books') }}?series=online-computers">Online with Computers</a>
                            <a href="{{ route('books') }}?series=stem-science">Stem Science</a>
                            <a href="{{ route('books') }}?series=step-by-step-grammar">Step By Step Grammar</a>
                            <a href="{{ route('books') }}?series=early-learners">Early Learners &amp; Workbook</a>
                            <a href="{{ route('books') }}?series=dictionaries">Dictionaries</a>
                        </div>
                        <div>
                            <div class="dropdown-col-title">Scholistic</div>
                            <a href="{{ route('books') }}?series=benchmark-english">BenchMark English</a>
                            <a href="{{ route('books') }}?series=benchmark-grammar">BenchMark English Grammar</a>
                            <a href="{{ route('books') }}?series=gul-e-urdu">Gul-e-Urdu</a>
                            <a href="{{ route('books') }}?series=gul-e-urdu-grammar">Gul-e-Urdu Grammar</a>
                            <a href="{{ route('books') }}?series=cpa-maths">CPA Maths</a>
                            <a href="{{ route('books') }}?series=noor-e-islam">Noor-e-Islam</a>
                            <a href="{{ route('books') }}?series=general-knowledge">General Knowledge</a>
                            <a href="{{ route('books') }}?series=insight-science">Insight Science</a>
                            <a href="{{ route('books') }}?series=social-studies">Social Studies</a>
                            <div class="dropdown-col-title" style="margin-top:14px;">Discovery</div>
                            <a href="{{ route('books') }}?series=discovery-english">English</a>
                            <a href="{{ route('books') }}?series=discovery-math">Mathematics</a>
                            <a href="{{ route('books') }}?series=discovery-science">Science</a>
                            <a href="{{ route('books') }}?series=discovery-urdu">Urdu</a>
                        </div>
                    </div>
                </div>

                <div class="nav-item">
                    <a href="#">Resources</a>
                    <div class="dropdown">
                        <a href="{{ route('flash-cards') }}">Flash Cards</a>
                        <a href="{{ route('teacher-guide') }}">Teacher Guide</a>
                        <a href="{{ route('academic-calendar') }}">Academic Calendar</a>
                    </div>
                </div>

                <a href="{{ route('summer-pack') }}" @class(['active' => $active === 'summer-pack'])>Summer Pack</a>
                <a href="{{ route('make-my-paper') }}" @class(['active' => $active === 'make-my-paper'])>Make my Paper</a>

                <div class="nav-item">
                    <a href="#" @class(['active' => in_array($active, ['contact','about','careers','faq','privacy','terms','shipping','complaints'])])>Contact</a>
                    <div class="dropdown">
                        <a href="{{ route('contact') }}">Contact Us</a>
                        <a href="{{ route('careers') }}">Careers</a>
                        <a href="{{ route('about') }}">About Us</a>
                        <a href="{{ route('faq') }}">FAQs</a>
                        <a href="{{ route('privacy') }}">Privacy Policy</a>
                        <a href="{{ route('terms') }}">Terms and Conditions</a>
                        <a href="{{ route('shipping') }}">Shipping and Returns</a>
                        <a href="{{ route('complaints') }}">Complaints</a>
                    </div>
                </div>
            </nav>

            <div class="header-actions">
                <div class="header-phone">
                    <div>
                        <strong>042 35199009</strong>
                        <span>Customer Care 9am–6pm</span>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-primary" style="font-size:0.82rem;padding:9px 20px;">Get in Touch</a>
            </div>

            <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-expanded="false" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>

    <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation">
        <a href="{{ route('home') }}">Home</a>
        <div class="mobile-section-title">Our Books</div>
        <a href="{{ route('books') }}?series=kidlings-club" style="padding-left:36px;">Kidlings Club</a>
        <a href="{{ route('books') }}?series=benchmark-english" style="padding-left:36px;">BenchMark English</a>
        <a href="{{ route('books') }}?series=cpa-maths" style="padding-left:36px;">CPA Maths</a>
        <a href="{{ route('books') }}?series=gul-e-urdu" style="padding-left:36px;">Gul-e-Urdu</a>
        <a href="{{ route('books') }}?series=noor-e-islam" style="padding-left:36px;">Noor-e-Islam</a>
        <a href="{{ route('books') }}">View All Books →</a>
        <div class="mobile-section-title">Resources</div>
        <a href="{{ route('flash-cards') }}" style="padding-left:36px;">Flash Cards</a>
        <a href="{{ route('teacher-guide') }}" style="padding-left:36px;">Teacher Guide</a>
        <a href="{{ route('academic-calendar') }}" style="padding-left:36px;">Academic Calendar</a>
        <a href="{{ route('summer-pack') }}">Summer Pack</a>
        <a href="{{ route('contact') }}">Contact Us</a>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('faq') }}">FAQs</a>
        <a href="{{ route('careers') }}">Careers</a>
    </nav>
</header>
