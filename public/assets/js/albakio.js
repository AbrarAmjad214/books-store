/**
 * Albakio International — Main JS
 */
(function () {
    'use strict';

    // Mobile Menu Toggle
    var toggle = document.getElementById('mobile-menu-toggle');
    var mobileNav = document.getElementById('mobile-nav');
    if (toggle && mobileNav) {
        toggle.addEventListener('click', function () {
            var open = mobileNav.classList.toggle('open');
            toggle.setAttribute('aria-expanded', open);
            var spans = toggle.querySelectorAll('span');
            if (open) {
                if (spans[0]) spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                if (spans[1]) spans[1].style.opacity = '0';
                if (spans[2]) spans[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
            } else {
                spans.forEach(function(s){ s.style.transform=''; s.style.opacity=''; });
            }
        });
        document.addEventListener('click', function (e) {
            if (!toggle.contains(e.target) && !mobileNav.contains(e.target)) {
                mobileNav.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.querySelectorAll('span').forEach(function(s){ s.style.transform=''; s.style.opacity=''; });
            }
        });
    }

    // Scroll to Top
    var scrollBtn = document.getElementById('scroll-top');
    if (scrollBtn) {
        window.addEventListener('scroll', function () {
            scrollBtn.classList.toggle('show', window.scrollY > 300);
        });
        scrollBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Active nav link
    var currentPath = window.location.pathname;
    document.querySelectorAll('.main-nav > a, .mobile-nav a').forEach(function (link) {
        var href = link.getAttribute('href');
        if (!href) return;
        if (href === currentPath || (href !== '/' && currentPath.startsWith(href))) {
            link.classList.add('active');
        } else if (href === '/' && currentPath === '/') {
            link.classList.add('active');
        }
    });

    // Contact form AJAX
    var contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var btn = contactForm.querySelector('[type="submit"]');
            var successEl = document.getElementById('form-success');
            var errorEl = document.getElementById('form-error');

            var name = contactForm.querySelector('[name="name"]');
            var email = contactForm.querySelector('[name="email"]');
            var message = contactForm.querySelector('[name="message"]');
            if (!name.value.trim() || !email.value.trim() || !message.value.trim()) {
                if (errorEl) { errorEl.textContent = 'Please fill in all required fields.'; errorEl.classList.add('show'); }
                if (successEl) successEl.classList.remove('show');
                return;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {
                if (errorEl) { errorEl.textContent = 'Please enter a valid email address.'; errorEl.classList.add('show'); }
                if (successEl) successEl.classList.remove('show');
                return;
            }

            var original = btn.textContent;
            btn.textContent = 'Sending…';
            btn.disabled = true;
            if (errorEl) errorEl.classList.remove('show');

            fetch(contactForm.action, {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' },
                body: new FormData(contactForm)
            })
            .then(function(r){ return r.json(); })
            .then(function(data){
                if (data.success) {
                    if (successEl) successEl.classList.add('show');
                    contactForm.reset();
                } else {
                    if (errorEl) { errorEl.textContent = data.message || 'Something went wrong.'; errorEl.classList.add('show'); }
                }
            })
            .catch(function(){
                if (errorEl) { errorEl.textContent = 'Network error. Please try again.'; errorEl.classList.add('show'); }
            })
            .finally(function(){
                btn.textContent = original;
                btn.disabled = false;
            });
        });
    }

    // Newsletter form
    var newsletter = document.getElementById('newsletter-form');
    if (newsletter) {
        newsletter.addEventListener('submit', function(e){
            e.preventDefault();
            var input = newsletter.querySelector('input[type="email"]');
            var msg = document.getElementById('newsletter-msg');
            if (!input || !input.value.trim()) return;
            if (msg) { msg.textContent = 'Thank you for subscribing!'; msg.style.color = '#22c55e'; }
            newsletter.reset();
        });
    }

    // Shop sidebar filter
    document.querySelectorAll('.sidebar-filter-item').forEach(function(item){
        item.addEventListener('click', function(){
            document.querySelectorAll('.sidebar-filter-item').forEach(function(i){ i.classList.remove('active'); });
            item.classList.add('active');
            var cat = item.getAttribute('data-cat');
            document.querySelectorAll('.book-card[data-cat]').forEach(function(card){
                card.style.display = (!cat || cat === 'all' || card.getAttribute('data-cat') === cat) ? '' : 'none';
            });
        });
    });

    // FAQ accordion
    document.querySelectorAll('.faq-item').forEach(function(item){
        var q = item.querySelector('.faq-question');
        if (q) {
            q.addEventListener('click', function(){
                var wasOpen = item.classList.contains('open');
                document.querySelectorAll('.faq-item.open').forEach(function(o){ o.classList.remove('open'); });
                if (!wasOpen) item.classList.add('open');
            });
        }
    });

    // Simple counter animation
    if ('IntersectionObserver' in window) {
        var counters = document.querySelectorAll('[data-count]');
        var counterObserver = new IntersectionObserver(function(entries){
            entries.forEach(function(entry){
                if (entry.isIntersecting) {
                    var el = entry.target;
                    var target = parseInt(el.getAttribute('data-count'), 10);
                    var suffix = el.getAttribute('data-suffix') || '';
                    var duration = 1500;
                    var start = performance.now();
                    function step(now) {
                        var progress = Math.min((now - start) / duration, 1);
                        var value = Math.floor(progress * target);
                        el.textContent = value.toLocaleString() + suffix;
                        if (progress < 1) requestAnimationFrame(step);
                        else el.textContent = target.toLocaleString() + suffix;
                    }
                    requestAnimationFrame(step);
                    counterObserver.unobserve(el);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(function(c){ counterObserver.observe(c); });

        // Fade in on scroll
        var fadeEls = document.querySelectorAll('.book-card, .cat-card, .testimonial-card, .promise-card, .dept-card');
        var fadeObserver = new IntersectionObserver(function(entries){
            entries.forEach(function(entry){
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    fadeObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });
        fadeEls.forEach(function(el){
            el.style.opacity = '0';
            el.style.transform = 'translateY(14px)';
            el.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
            fadeObserver.observe(el);
        });
    }

})();
