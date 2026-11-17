<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping, Returns & Refunds | Albakio International</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/albakio.css') }}">
</head>
<body>
@include('partials.topbar')
@include('partials.header', ['active' => 'shipping'])
<section class="page-hero">
    <div class="container">
        <nav class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="sep">›</span><span>Shipping, Returns &amp; Refunds</span></nav>
        <h1>Shipping, Returns &amp; Refunds</h1>
        <p>Everything you need to know about delivery and our returns policy.</p>
    </div>
</section>
<section class="section-pad">
    <div class="container">
        <div style="max-width:860px;margin:0 auto;">
            <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:20px;margin-bottom:48px;">
                <div style="background:var(--white);border:1px solid var(--border);border-radius:14px;padding:24px;text-align:center;">
                    <div style="font-size:2rem;margin-bottom:12px;">📦</div>
                    <strong style="display:block;color:var(--dark);margin-bottom:6px;">Dispatch Time</strong>
                    <p style="font-size:0.85rem;color:var(--light-text);">1–2 working days after order confirmation</p>
                </div>
                <div style="background:var(--white);border:1px solid var(--border);border-radius:14px;padding:24px;text-align:center;">
                    <div style="font-size:2rem;margin-bottom:12px;">🚚</div>
                    <strong style="display:block;color:var(--dark);margin-bottom:6px;">Delivery Time</strong>
                    <p style="font-size:0.85rem;color:var(--light-text);">3–5 working days after dispatch (city dependent)</p>
                </div>
                <div style="background:var(--white);border:1px solid var(--border);border-radius:14px;padding:24px;text-align:center;">
                    <div style="font-size:2rem;margin-bottom:12px;">↩️</div>
                    <strong style="display:block;color:var(--dark);margin-bottom:6px;">Return Window</strong>
                    <p style="font-size:0.85rem;color:var(--light-text);">7 days from delivery for damaged or wrong items</p>
                </div>
            </div>

            <div style="font-size:0.95rem;line-height:1.8;color:var(--text);">
                <h2 style="font-size:1.1rem;font-weight:700;color:var(--dark);margin:0 0 12px;padding-bottom:8px;border-bottom:2px solid var(--border);">Shipping Policy</h2>
                <p style="margin-bottom:14px;">Orders are dispatched within 1 to 2 working days of being confirmed and usually arrive 3 to 5 working days after that, depending on your city. You will receive a tracking reference by email when the parcel leaves us.</p>
                <p style="margin-bottom:14px;">We ship using <strong>TCS Express</strong> across Pakistan. Large school orders are delivered on a schedule agreed with you in advance. A delivery charge of <strong>Rs 150</strong> applies to standard orders.</p>
                <p style="margin-bottom:30px;">You may also collect your order in person at our Urdu Bazar book store in Lahore.</p>

                <h2 style="font-size:1.1rem;font-weight:700;color:var(--dark);margin:0 0 12px;padding-bottom:8px;border-bottom:2px solid var(--border);">Returns Policy</h2>
                <p style="margin-bottom:14px;">We accept returns of <strong>damaged or incorrectly supplied books</strong> within 7 days of delivery. Items must be in their original, unused condition. We pay the return postage because the error was ours.</p>
                <p style="margin-bottom:14px;">To initiate a return, contact us at <a href="mailto:info@albakio.com.pk" style="color:var(--primary);">info@albakio.com.pk</a> or call <a href="tel:04235199009" style="color:var(--primary);">042-35199009</a> with your order number and a photograph of the issue.</p>
                <p style="margin-bottom:30px;">Customised materials (books produced specifically for a school) cannot be returned once produced.</p>

                <h2 style="font-size:1.1rem;font-weight:700;color:var(--dark);margin:0 0 12px;padding-bottom:8px;border-bottom:2px solid var(--border);">Refunds</h2>
                <p>Refunds are processed within 7–10 business days of receiving the returned items. Refunds are issued using the same payment method used for the original order.</p>
            </div>

            <div style="background:rgba(246,93,78,0.05);border:1px solid rgba(246,93,78,0.2);border-radius:14px;padding:24px;margin-top:36px;">
                <h3 style="font-size:1rem;font-weight:700;color:var(--dark);margin-bottom:8px;">Need Help?</h3>
                <p style="font-size:0.88rem;color:var(--light-text);">Contact us at <a href="mailto:info@albakio.com.pk" style="color:var(--primary);">info@albakio.com.pk</a> or call <a href="tel:04235199009" style="color:var(--primary);">042-35199009</a> — Monday to Saturday, 9:00am to 6:00pm.</p>
            </div>
        </div>
    </div>
</section>
@include('partials.footer')
<button class="scroll-top" id="scroll-top" aria-label="Scroll to top">↑</button>
<script src="{{ asset('assets/js/albakio.js') }}"></script>
</body>
</html>
