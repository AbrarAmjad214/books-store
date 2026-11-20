<?php

namespace App\Http\Controllers;

/**
 * Content pages: policies and FAQ. Contact details come from config/store.php.
 */
class PageController extends Controller
{
    public function info(string $slug)
    {
        $name = config('store.name');
        $email = config('store.email');
        $freeShipping = config('store.currency_symbol') . number_format(config('store.free_shipping_over'));

        $pages = [
            'privacy' => [
                'title' => 'Privacy Policy',
                'updated' => now()->format('F Y'),
                'intro' => "At {$name}, we respect your privacy. This policy explains what personal information we collect, how we use it and the choices you have.",
                'sections' => [
                    ['Information We Collect', 'When you create an account, place an order or contact us, we collect details such as your name, email address, shipping address and phone number. We also collect basic usage data (pages visited, device and browser type) to improve the store.'],
                    ['How We Use Your Information', 'We use your information to process and deliver orders, provide customer support, keep your account secure and — only if you opt in — send you newsletters and offers.'],
                    ['Payments', 'Payments are handled by trusted, PCI-compliant payment providers. We never store your full card details on our servers.'],
                    ['Sharing Your Information', 'We share data only with service providers who help us run the store (payment processors, shipping carriers, email services). We never sell your personal data.'],
                    ['Cookies', 'We use essential cookies to keep your cart and session working, and optional analytics cookies to understand how the store is used. You can control cookies in your browser settings.'],
                    ['Your Rights', "Depending on where you live (including under the GDPR), you may request access to, correction of, or deletion of your personal data, or object to certain processing. Email {$email} and we will respond within 30 days."],
                    ['Contact Us', "Questions about this policy? Write to {$email}."],
                ],
            ],
            'terms' => [
                'title' => 'Terms & Conditions',
                'updated' => now()->format('F Y'),
                'intro' => "These terms apply to your use of the {$name} website and to every order you place with us. Please read them carefully.",
                'sections' => [
                    ['Using Our Website', 'You agree to use the website lawfully and not to misuse it, attempt to gain unauthorised access, or interfere with its normal operation.'],
                    ['Accounts', 'You are responsible for keeping your account details confidential and for all activity under your account. Let us know immediately if you suspect unauthorised use.'],
                    ['Orders & Pricing', 'All orders are subject to availability and acceptance. Prices are shown in US dollars and may change without notice; the price at checkout is the price you pay. Import duties or local taxes, where applicable, are the buyer’s responsibility.'],
                    ['Shipping', 'Delivery times are estimates and may vary by destination and carrier. Risk passes to you once the parcel is delivered to the address you provided.'],
                    ['Returns & Refunds', 'You may return items within 30 days of delivery as described in our Shipping & Returns policy.'],
                    ['Intellectual Property', "All website content — including text, graphics and logos — belongs to {$name} or its licensors and may not be reused without permission. Book covers and descriptions remain the property of their respective publishers."],
                    ['Limitation of Liability', "To the extent permitted by law, {$name} is not liable for indirect or consequential losses arising from the use of the website or our products."],
                    ['Contact Us', "Questions about these terms? Write to {$email}."],
                ],
            ],
            'shipping' => [
                'title' => 'Shipping & Returns',
                'intro' => 'Everything you need to know about delivery times, shipping costs and returns.',
                'highlights' => [
                    ['fa-box', 'Fast Dispatch', 'Orders ship within 1–2 business days'],
                    ['fa-earth-americas', 'Worldwide Delivery', "Free shipping on orders over {$freeShipping}"],
                    ['fa-rotate-left', '30-Day Returns', 'Free returns on unused items'],
                ],
                'sections' => [
                    ['Shipping', "We ship to most countries worldwide with tracked delivery. Orders are dispatched within 1–2 business days. Typical delivery: 3–5 business days in North America and Europe, 5–10 business days for the rest of the world. Orders over {$freeShipping} ship free; a flat shipping fee is shown at checkout for smaller orders."],
                    ['Customs & Duties', 'International orders may be subject to import duties or taxes set by the destination country. These charges are not included in our prices and are payable by the recipient.'],
                    ['Returns', "Not happy with your purchase? Return unused items in their original condition within 30 days of delivery. Email {$email} with your order number and we’ll send you a prepaid return label."],
                    ['Damaged or Incorrect Items', 'If a book arrives damaged or you receive the wrong title, contact us within 7 days with a photo and we’ll send a replacement or a full refund at no cost to you.'],
                    ['Refunds', 'Refunds are issued to your original payment method within 5–10 business days after we receive your return.'],
                ],
            ],
            'complaints' => [
                'title' => 'Complaints',
                'intro' => 'We take every concern seriously. We aim to acknowledge complaints within 1 business day and resolve them within 3 business days.',
                'sections' => [
                    ['Tell Us What Happened', "Email {$email} with your name, order number (if any) and a description of the issue. Photos help us resolve product issues faster."],
                    ['What Happens Next', 'A member of our support team will review your complaint, keep you updated and offer a fair solution — whether that is a replacement, refund or another remedy.'],
                ],
            ],
        ];

        abort_unless(isset($pages[$slug]), 404);

        return view('pages.info', ['page' => $pages[$slug]]);
    }

    public function faq()
    {
        $email = config('store.email');
        $freeShipping = config('store.currency_symbol') . number_format(config('store.free_shipping_over'));

        $faqs = [
            ['Do you ship internationally?', "Yes — we ship to most countries worldwide with tracked delivery. Orders over {$freeShipping} ship free."],
            ['How long will my order take to arrive?', 'Orders are dispatched within 1–2 business days. Delivery usually takes 3–5 business days in North America and Europe and 5–10 business days elsewhere.'],
            ['Which payment methods do you accept?', 'We accept major credit and debit cards (Visa, Mastercard, American Express) and PayPal. All payments are processed securely.'],
            ['How can I track my order?', 'Once your order ships, we email you a tracking link. You can also see the status of your orders in your account.'],
            ['Can I return a book?', "Yes. Unused items can be returned within 30 days of delivery. Email {$email} with your order number to receive a prepaid return label."],
            ['Will I have to pay customs duties?', 'International orders may be subject to import duties or taxes charged by your country. These are not included in our prices and are paid by the recipient.'],
            ['Can I change or cancel my order?', "Contact us as soon as possible at {$email}. If your order hasn’t shipped yet, we’ll be happy to change or cancel it."],
            ['Do I need an account to order?', 'An account lets you save a wishlist, track orders and check out faster. Creating one is free and takes less than a minute.'],
        ];

        return view('pages.faq', compact('faqs'));
    }
}
