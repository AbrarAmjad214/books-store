<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs | Albakio International</title>
    <meta name="description" content="Frequently asked questions about Albakio International — orders, delivery, returns, and more.">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/albakio.css') }}">
</head>
<body>

@include('partials.topbar')
@include('partials.header', ['active' => 'faq'])

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">›</span><span>FAQs</span></nav>
        <h1>Frequently Asked Questions</h1>
        <p>Answers to the most common questions about our books, orders, delivery and returns.</p>
    </div>
</section>

<section class="section-pad">
    <div class="container">
        <div style="max-width:800px;margin:0 auto;">
            <div class="faq-list">

                <div class="faq-item">
                    <div class="faq-question">
                        How long does delivery take?
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Orders are dispatched within 1 to 2 working days of being confirmed, and usually arrive 3 to 5 working days after that, depending on your city. You receive a tracking reference by email when the parcel leaves us. Large school orders are delivered on a schedule agreed with you.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        How do I find a specific book?
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Use the search box at the top of any page to search by title, series or subject, or browse the series listed in the main menu. If you cannot find a title, email <a href="mailto:info@albakio.com.pk" style="color:var(--primary);">info@albakio.com.pk</a> or telephone <a href="tel:04235199009" style="color:var(--primary);">042-35199009</a> and we will tell you whether it is in print and in stock.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        What if I receive a damaged or wrong book?
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Contact us within 7 days from delivery at <a href="mailto:info@albakio.com.pk" style="color:var(--primary);">info@albakio.com.pk</a> or <a href="tel:04235199009" style="color:var(--primary);">042-35199009</a>, with your order number and a photograph. We will arrange a replacement or a full refund, and we pay the return postage because the error was ours.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I order books not listed on the website?
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes. For titles not shown on the website, bulk quantities, or material customised for a school, email <a href="mailto:info@albakio.com.pk" style="color:var(--primary);">info@albakio.com.pk</a> or telephone <a href="tel:04235199009" style="color:var(--primary);">042-35199009</a>. We will confirm availability, price and delivery time in writing before anything is charged. Customised materials cannot be returned once produced.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        How do I track my order?
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We email you when the order is confirmed and again when it is dispatched, with a tracking reference. You can also track your parcel directly at <a href="https://www.tcsexpress.com/track/" target="_blank" rel="noopener" style="color:var(--primary);">tcsexpress.com/track</a>. If anything is unclear, email <a href="mailto:info@albakio.com.pk" style="color:var(--primary);">info@albakio.com.pk</a> with your order number.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I place an order by phone?
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes. Telephone <a href="tel:04235199009" style="color:var(--primary);">042-35199009</a>, Monday to Saturday, 9:00 a.m. to 6:00 p.m. Closed on Sunday. Have the titles and quantities ready, along with the delivery address. We will confirm the order and the total, including the delivery charge, by email before dispatch. You may also order in person at our Urdu Bazar book store.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        How can my school register with Albakio?
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Fill in the contact form on our <a href="{{ route('contact') }}" style="color:var(--primary);">Contact Us</a> page or call <a href="tel:04235199009" style="color:var(--primary);">042-35199009</a>. Our academic team will arrange sample copies, pricing and a visit from our representative at a time convenient for you.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do you offer discount for bulk school orders?
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes. Schools ordering in bulk qualify for special pricing. Contact us at <a href="mailto:info@albakio.com.pk" style="color:var(--primary);">info@albakio.com.pk</a> or telephone <a href="tel:04235199009" style="color:var(--primary);">042-35199009</a> with your requirements and we will provide a customised quote.</p>
                    </div>
                </div>

            </div>

            <div style="background:rgba(246,93,78,0.05);border:1px solid rgba(246,93,78,0.2);border-radius:14px;padding:28px;margin-top:40px;text-align:center;">
                <h3 style="font-size:1.1rem;font-weight:700;color:var(--dark);margin-bottom:10px;">Still have a question?</h3>
                <p style="font-size:0.88rem;color:var(--light-text);margin-bottom:18px;">Our team is available Monday–Saturday, 9am to 6pm.</p>
                <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
                    <a href="tel:04235199009" class="btn btn-primary">📞 042 35199009</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline">Send a Message</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')
<button class="scroll-top" id="scroll-top" aria-label="Scroll to top">↑</button>
<script src="{{ asset('assets/js/albakio.js') }}"></script>
</body>
</html>
