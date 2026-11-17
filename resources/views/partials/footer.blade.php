<section class="newsletter-strip">
    <div class="container">
        <div class="newsletter-text">
            <h3>Get 10% off your order!</h3>
            <p>Enter your email and receive a 10% discount on your next order!</p>
        </div>
        <form class="newsletter-form" id="newsletter-form">
            @csrf
            <input type="email" class="newsletter-input" placeholder="Enter your email address…" required>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </div>
    <div style="text-align:center;padding-bottom:8px;"><small id="newsletter-msg" style="font-size:0.82rem;"></small></div>
</section>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div>
                <div class="footer-logo"><img src="{{ asset('assets/images/logo.png') }}" alt="Albakio International"></div>
                <p class="footer-about">Albakio International is a leading educational book publisher in Pakistan, producing school textbooks and workbooks for playgroup to secondary classes since 2002. Based in Lahore and Karachi.</p>
                <div class="footer-social">
                    <a href="https://www.facebook.com/albakiointernational/" target="_blank" rel="noopener" class="footer-social-link" aria-label="Facebook"><svg viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a>
                    <a href="https://www.instagram.com/albakio.international/" target="_blank" rel="noopener" class="footer-social-link" aria-label="Instagram"><svg viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                    <a href="https://www.youtube.com/@albakiointernational4219" target="_blank" rel="noopener" class="footer-social-link" aria-label="YouTube"><svg viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></a>
                </div>
            </div>
            <div>
                <div class="footer-heading">Our Books</div>
                <div class="footer-links">
                    <a href="{{ route('books') }}?series=kidlings-club">Kidlings Club</a>
                    <a href="{{ route('books') }}?series=benchmark-english">BenchMark English</a>
                    <a href="{{ route('books') }}?series=cpa-maths">CPA Maths</a>
                    <a href="{{ route('books') }}?series=gul-e-urdu">Gul-e-Urdu</a>
                    <a href="{{ route('books') }}?series=noor-e-islam">Noor-e-Islam</a>
                    <a href="{{ route('books') }}?series=discovery">Discovery Series</a>
                    <a href="{{ route('books') }}">View All →</a>
                </div>
            </div>
            <div>
                <div class="footer-heading">Company</div>
                <div class="footer-links">
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('contact') }}">Contact Us</a>
                    <a href="{{ route('careers') }}">Careers</a>
                    <a href="{{ route('faq') }}">FAQs</a>
                    <a href="{{ route('privacy') }}">Privacy Policy</a>
                    <a href="{{ route('terms') }}">Terms &amp; Conditions</a>
                    <a href="{{ route('shipping') }}">Shipping &amp; Returns</a>
                    <a href="{{ route('complaints') }}">Complaints</a>
                </div>
            </div>
            <div>
                <div class="footer-heading">Contact Us</div>
                <div class="footer-contact-item"><span>📞</span><span><strong style="color:#fff;display:block;margin-bottom:2px;">042 35199009</strong><small>Mon–Sat, 9am–6pm</small></span></div>
                <div class="footer-contact-item"><span>📍</span><span><strong style="color:#fff;display:block;margin-bottom:2px;">Lahore Office</strong>Lahore, Punjab, Pakistan</span></div>
                <div class="footer-contact-item"><span>📍</span><span><strong style="color:#fff;display:block;margin-bottom:2px;">Karachi Office</strong>Karachi, Sindh, Pakistan</span></div>
                <div class="footer-contact-item"><span>✉️</span><span><a href="mailto:info@albakio.com.pk" style="color:rgba(255,255,255,0.6);">info@albakio.com.pk</a></span></div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="footer-copy">&copy; {{ date('Y') }} Albakio International. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="{{ route('privacy') }}">Privacy Policy</a>
                <a href="{{ route('terms') }}">Terms &amp; Conditions</a>
                <a href="{{ route('shipping') }}">Shipping &amp; Returns</a>
            </div>
        </div>
    </div>
</footer>
