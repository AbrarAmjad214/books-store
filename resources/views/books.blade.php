<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Books | Albakio International</title>
    <meta name="description" content="Browse Albakio International's complete catalogue — BenchMark English, CPA Maths, Gul-e-Urdu, Noor-e-Islam, Kidlings Club, Discovery Series and more.">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/albakio.css') }}">
</head>
<body>

@include('partials.topbar')
@include('partials.header', ['active' => 'books'])

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">›</span><span>Our Books</span></nav>
        <h1>Our Books</h1>
        <p>Complete catalogue — from playgroup to matriculation, aligned to the Single National Curriculum.</p>
    </div>
</section>

<section class="section-pad">
    <div class="container">
        <div class="shop-layout">
            {{-- Sidebar --}}
            <aside class="shop-sidebar">
                <div class="sidebar-title">Filter by Genre</div>
                <div class="sidebar-filter-list">
                    <div class="sidebar-filter-item active" data-cat="all">All Books</div>
                    <div class="sidebar-filter-item" data-cat="benchmark-english">BenchMark English</div>
                    <div class="sidebar-filter-item" data-cat="benchmark-grammar">BenchMark Grammar</div>
                    <div class="sidebar-filter-item" data-cat="gul-e-urdu">Gul-e-Urdu</div>
                    <div class="sidebar-filter-item" data-cat="gul-e-urdu-grammar">Gul-e-Urdu Grammar</div>
                    <div class="sidebar-filter-item" data-cat="cpa-maths">CPA Maths</div>
                    <div class="sidebar-filter-item" data-cat="math-success">Mathematics Success</div>
                    <div class="sidebar-filter-item" data-cat="noor-e-islam">Noor-e-Islam</div>
                    <div class="sidebar-filter-item" data-cat="mutal-e-islam">Mutal-e-Islam</div>
                    <div class="sidebar-filter-item" data-cat="kidlings">Kidlings Club</div>
                    <div class="sidebar-filter-item" data-cat="juniors">Juniors Club</div>
                    <div class="sidebar-filter-item" data-cat="discovery">Discovery Series</div>
                    <div class="sidebar-filter-item" data-cat="computers">Online with Computers</div>
                    <div class="sidebar-filter-item" data-cat="gk">General Knowledge</div>
                    <div class="sidebar-filter-item" data-cat="social">Social Studies</div>
                    <div class="sidebar-filter-item" data-cat="science">Insight Science</div>
                    <div class="sidebar-filter-item" data-cat="coding">Coding in Scratch Jr</div>
                </div>
                <div style="margin-top:28px;padding-top:20px;border-top:1px solid var(--border);">
                    <div class="sidebar-title">Need a Sample?</div>
                    <p style="font-size:0.8rem;color:var(--light-text);line-height:1.6;margin-bottom:12px;">Schools can request complimentary sample copies for review before ordering.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary" style="width:100%;justify-content:center;font-size:0.82rem;padding:9px 14px;">Request Sample</a>
                </div>
                <div style="margin-top:16px;padding-top:16px;border-top:1px solid var(--border);">
                    <div class="sidebar-title">Price List</div>
                    <p style="font-size:0.8rem;color:var(--light-text);line-height:1.6;margin-bottom:12px;">Download our complete price list for the current year.</p>
                    <a href="{{ route('contact') }}" class="btn btn-outline" style="width:100%;justify-content:center;font-size:0.82rem;padding:9px 14px;">Download PDF</a>
                </div>
            </aside>

            {{-- Books Grid --}}
            <div>
                <div class="shop-toolbar">
                    <p class="shop-count">Showing <strong>complete catalogue</strong> — browse by genre using the filter</p>
                </div>
                <div class="shop-books-grid">

                    <div class="book-card" data-cat="benchmark-english">
                        <div class="book-card-img"><img src="{{ asset('assets/images/book-benchmark-english.jpg') }}" alt="BenchMark English" loading="lazy"></div>
                        <div class="book-card-body"><div class="book-card-cat">BenchMark English</div><div class="book-card-title">BenchMark English Series (Classes 1–5)</div><p style="font-size:0.78rem;color:var(--light-text);margin:5px 0 10px;">Comprehensive English language skills development aligned to the national curriculum.</p><div class="book-card-action"><a href="{{ route('contact') }}">Enquire →</a></div></div>
                    </div>

                    <div class="book-card" data-cat="benchmark-grammar">
                        <div class="book-card-img"><img src="{{ asset('assets/images/book-english-grammar.jpg') }}" alt="BenchMark English Grammar" loading="lazy"></div>
                        <div class="book-card-body"><div class="book-card-cat">BenchMark Grammar</div><div class="book-card-title">BenchMark English Grammar (Classes 4–5)</div><p style="font-size:0.78rem;color:var(--light-text);margin:5px 0 10px;">Structured grammar practice and writing skills for upper primary classes.</p><div class="book-card-action"><a href="{{ route('contact') }}">Enquire →</a></div></div>
                    </div>

                    <div class="book-card" data-cat="cpa-maths">
                        <div class="book-card-img"><img src="{{ asset('assets/images/book-cpa-math.png') }}" alt="CPA Maths" loading="lazy"></div>
                        <div class="book-card-body"><div class="book-card-cat">CPA Maths</div><div class="book-card-title">CPA Mathematics Series (Classes 1–7)</div><p style="font-size:0.78rem;color:var(--light-text);margin:5px 0 10px;">Concrete-Pictorial-Abstract approach for deeper mathematical understanding.</p><div class="book-card-action"><a href="{{ route('contact') }}">Enquire →</a></div></div>
                    </div>

                    <div class="book-card" data-cat="math-success">
                        <div class="book-card-img"><img src="{{ asset('assets/images/book-math-success.png') }}" alt="Mathematics Success" loading="lazy"></div>
                        <div class="book-card-body"><div class="book-card-cat">Mathematics Success</div><div class="book-card-title">Mathematics Success Series (Classes 1–7)</div><p style="font-size:0.78rem;color:var(--light-text);margin:5px 0 10px;">Building confident, capable mathematicians through progressive practice.</p><div class="book-card-action"><a href="{{ route('contact') }}">Enquire →</a></div></div>
                    </div>

                    <div class="book-card" data-cat="gul-e-urdu">
                        <div class="book-card-img"><img src="{{ asset('assets/images/book-gullay-urdu.jpg') }}" alt="Gul-e-Urdu" loading="lazy"></div>
                        <div class="book-card-body"><div class="book-card-cat">Gul-e-Urdu</div><div class="book-card-title">Gul-e-Urdu Series (Classes 1–5)</div><p style="font-size:0.78rem;color:var(--light-text);margin:5px 0 10px;">Comprehensive Urdu language and literature series for primary classes.</p><div class="book-card-action"><a href="{{ route('contact') }}">Enquire →</a></div></div>
                    </div>

                    <div class="book-card" data-cat="noor-e-islam">
                        <div class="book-card-img"><img src="{{ asset('assets/images/book-noor-islam.png') }}" alt="Noor-e-Islam" loading="lazy"></div>
                        <div class="book-card-body"><div class="book-card-cat">Noor-e-Islam</div><div class="book-card-title">Noor-e-Islam Series (Classes 1–5)</div><p style="font-size:0.78rem;color:var(--light-text);margin:5px 0 10px;">Islamic Studies series covering foundational faith, prayer and Quranic learning.</p><div class="book-card-action"><a href="{{ route('contact') }}">Enquire →</a></div></div>
                    </div>

                    <div class="book-card" data-cat="mutal-e-islam">
                        <div class="book-card-img"><img src="{{ asset('assets/images/book-mutal-islam.jpg') }}" alt="Mutal-e-Islam" loading="lazy"></div>
                        <div class="book-card-body"><div class="book-card-cat">Mutal-e-Islam</div><div class="book-card-title">Mutal-e-Islam Series (Classes 1–8)</div><p style="font-size:0.78rem;color:var(--light-text);margin:5px 0 10px;">Islamic education in Urdu medium for primary and secondary classes.</p><div class="book-card-action"><a href="{{ route('contact') }}">Enquire →</a></div></div>
                    </div>

                    <div class="book-card" data-cat="gk">
                        <div class="book-card-img"><img src="{{ asset('assets/images/book-general-knowledge.jpg') }}" alt="General Knowledge" loading="lazy"></div>
                        <div class="book-card-body"><div class="book-card-cat">General Knowledge</div><div class="book-card-title">General Knowledge Series (Classes 1–5)</div><p style="font-size:0.78rem;color:var(--light-text);margin:5px 0 10px;">Broad general knowledge covering Pakistan, the world, science and society.</p><div class="book-card-action"><a href="{{ route('contact') }}">Enquire →</a></div></div>
                    </div>

                    <div class="book-card" data-cat="social">
                        <div class="book-card-img"><img src="{{ asset('assets/images/book-social-studies.jpg') }}" alt="Social Studies" loading="lazy"></div>
                        <div class="book-card-body"><div class="book-card-cat">Social Studies</div><div class="book-card-title">Social Studies Series (Classes 4–5)</div><p style="font-size:0.78rem;color:var(--light-text);margin:5px 0 10px;">Pakistan, society, history and civic values for upper primary students.</p><div class="book-card-action"><a href="{{ route('contact') }}">Enquire →</a></div></div>
                    </div>

                    <div class="book-card" data-cat="computers">
                        <div class="book-card-img"><img src="{{ asset('assets/images/book-computers.png') }}" alt="Online with Computers" loading="lazy"></div>
                        <div class="book-card-body"><div class="book-card-cat">Online with Computers</div><div class="book-card-title">Online with Computers (Classes 1–8)</div><p style="font-size:0.78rem;color:var(--light-text);margin:5px 0 10px;">Digital literacy and computer skills for the modern classroom.</p><div class="book-card-action"><a href="{{ route('contact') }}">Enquire →</a></div></div>
                    </div>

                    <div class="book-card" data-cat="juniors">
                        <div class="book-card-img"><img src="{{ asset('assets/images/book-juniors-english.jpg') }}" alt="Juniors Club" loading="lazy"></div>
                        <div class="book-card-body"><div class="book-card-cat">Juniors Club</div><div class="book-card-title">Juniors Club Series (Steps 1–3)</div><p style="font-size:0.78rem;color:var(--light-text);margin:5px 0 10px;">English, Mathematics and Urdu workbooks for early classes.</p><div class="book-card-action"><a href="{{ route('contact') }}">Enquire →</a></div></div>
                    </div>

                    <div class="book-card" style="background:rgba(246,93,78,0.04);border-color:rgba(246,93,78,0.2);display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;padding:28px 18px;" data-cat="all">
                        <div style="font-size:2.5rem;margin-bottom:14px;">📚</div>
                        <div class="book-card-title" style="margin-bottom:8px;">100+ Titles Available</div>
                        <p style="font-size:0.8rem;color:var(--light-text);margin-bottom:14px;">Contact us for our complete catalogue including Discovery Series, Summer Packs and more.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary" style="font-size:0.8rem;padding:8px 18px;">View Full Catalogue</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="register-cta">
    <div class="container">
        <h2>Need Help Choosing?</h2>
        <p>Our academic team is happy to recommend the right books for your school's curriculum and class levels.</p>
        <div class="btn-actions"><a href="{{ route('contact') }}" class="btn btn-primary">Contact Our Team</a></div>
    </div>
</section>

@include('partials.footer')
<button class="scroll-top" id="scroll-top" aria-label="Scroll to top">↑</button>
<script src="{{ asset('assets/js/albakio.js') }}"></script>
</body>
</html>
