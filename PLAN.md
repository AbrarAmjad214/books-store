# 📚 Book Store — Complete Project Plan (Laravel 12)

**Goal:** International-standard bookstore website built on top of `D:\xampp\htdocs\books-store` (fresh Laravel 12 + PHP 8.2), inspired by **Albakio.com.pk** (local publisher/bookstore) + **Barnes & Noble** (global bookstore).

**Scope:** A-to-Z complete site — nothing missed. Customer frontend + Admin panel + Payments + Orders + Blog + CMS pages.

---

## 1. Competitor Feature Analysis

| Feature | Albakio (local) | Barnes & Noble (global) | Our Implementation |
|---------|----------------|------------------------|-------------------|
| Homepage hero banners | ✅ Series highlights | ✅ Bestsellers/New releases | ✅ Hero slider + featured categories |
| Mega category menu | ✅ Category listing | ✅ Deep mega menu (Books, Toys, NOOK, Textbooks) | ✅ Nested categories mega menu |
| Product catalog | ✅ Category + series wise | ✅ Filters, sorting, pagination | ✅ Filter by category, author, publisher, price, rating |
| Product detail page | ✅ Price, add to cart | ✅ Reviews, ISBN, publisher, publish date, format | ✅ Full PDP with images, reviews, specs, related books |
| Wishlist | ✅ (icon + count) | ✅ Save for later | ✅ Wishlist (auth + guest via session) |
| Shopping cart | ✅ (₨ currency) | ✅ Multi-item, quantities | ✅ Cart (auth + guest), qty update, remove, save for later |
| Checkout | ✅ | ✅ Guest + account checkout | ✅ Multi-step checkout (shipping → payment → review → confirm) |
| User account | ✅ My account, orders | ✅ Order history, addresses, membership | ✅ Dashboard, orders, addresses, profile, wishlist |
| Orders | ✅ Track order | ✅ Order tracking | ✅ Order management + tracking + status |
| Payment | (TCS/COD implied) | ✅ Cards, PayPal, gift cards | ✅ Stripe + PayPal + Cash on Delivery (COD) |
| Blog | ✅ Blog list + posts | ✅ Reviews, editorials | ✅ Blog with categories, tags, search |
| CMS pages | ✅ About, Contact, FAQ, Privacy, Terms, Shipping/Returns | ✅ Help center, store locator | ✅ About, Contact, FAQ, Privacy, Terms, Shipping & Returns |
| School/Bulk orders | ✅ School registration | ✅ Institutional sales | ✅ School/bulk inquiry form |
| Newsletter | ✅ 10% off popup | ✅ Email signup | ✅ Newsletter subscription |
| Footer links | ✅ Explore, service, clients | ✅ Comprehensive footer | ✅ Multi-column footer with newsletter |
| Search | ✅ Site search | ✅ Advanced search | ✅ Search (title, author, ISBN, publisher) |
| Admin panel | ❌ | ❌ | ✅ Full admin (products, orders, users, categories, coupons, reports) |

---

## 2. Design System

**Palette** (clean, international-standard, bookstore feel):

| Token | Value | Usage |
|-------|-------|-------|
| `--primary` | `#0f172a` (slate-900) | Header, footer, primary buttons, headings |
| `--primary-hover` | `#1e293b` | Button hover |
| `--accent` | `#b45309` (amber-600) | Sale badges, active links, CTA accents |
| `--accent-hover` | `#c2410c` | Accent hover |
| `--background` | `#f8fafc` (slate-50) | Page background |
| `--surface` | `#ffffff` | Cards, modals, inputs |
| `--text-primary` | `#0f172a` | Headings, body text |
| `--text-secondary` | `#475569` | Muted text, captions |
| `--border` | `#e2e8f0` | Dividers, input borders |
| `--success` | `#15803d` | Stock available, order placed |
| `--warning` | `#d97706` | Low stock |
| `--error` | `#dc2626` | Errors, out of stock |
| `--font-sans` | `Inter, system-ui, sans-serif` | UI text |
| `--font-display` | `Playfair Display, Georgia, serif` | Headings, brand |

**Layout:**
- Fixed header: logo (left), search (center), account/wishlist/cart (right)
- Sticky "Add to cart" bar on mobile PDP
- Mega menu on category hover
- Sidebar filters on catalog (desktop), bottom sheet filters (mobile)
- Multi-column footer

---

## 3. Database Schema

### Core tables

**categories** — id, name, slug, description, image, parent_id (self-relation for nested), is_active, sort_order, created_at, updated_at

**authors** — id, name, slug, bio, image, is_active, created_at, updated_at

**publishers** — id, name, slug, website, logo, is_active, created_at, updated_at

**products** — id, category_id, author_id, publisher_id, title, slug, subtitle, isbn, sku, description, short_description, cover_image, gallery_images (json), price, compare_at_price, cost_price, stock_quantity, low_stock_threshold, weight, dimensions (json), format (paperback/hardcover/ebook), language, pages, publish_date, is_featured, is_bestseller, is_new_arrival, status (draft/active/archived), created_at, updated_at

**product_variants** — id, product_id, title (e.g. "Paperback", "Kindle"), sku, price, compare_at_price, stock_quantity, is_default, created_at, updated_at

**product_reviews** — id, product_id, user_id, rating (1-5), title, comment, is_approved, created_at, updated_at

**users** — (Laravel default) + phone, address, role (customer/admin), is_verified

**addresses** — id, user_id, type (shipping/billing), name, street, city, state, postal_code, country, phone, is_default, created_at, updated_at

**carts** — id, user_id (nullable), session_id (nullable), created_at, updated_at

**cart_items** — id, cart_id, product_id, variant_id, quantity, created_at, updated_at

**wishlists** — id, user_id (nullable), session_id (nullable), product_id, created_at

**orders** — id, order_number, user_id, status (pending/processing/completed/cancelled/refunded), payment_status (unpaid/paid/failed/refunded), payment_method (stripe/paypal/cod), subtotal, tax, shipping, discount, total, shipping_address (json), billing_address (json), notes, created_at, updated_at

**order_items** — id, order_id, product_id, variant_id, product_title, product_sku, quantity, price, total

**coupons** — id, code, type (fixed/percent), value, min_purchase, max_discount, usage_limit, used_count, starts_at, expires_at, is_active

**settings** — key, value, group (site/payment/shipping/email)

**newsletter_subscribers** — id, email, is_active, subscribed_at

**contact_messages** — id, name, email, phone, subject, message, is_read, created_at

**school_inquiries** — id, school_name, contact_person, email, phone, address, message, status, created_at

**blog_posts** — id, title, slug, excerpt, content, featured_image, author_id, category, tags (json), is_published, published_at, created_at, updated_at

**migrations**, **jobs**, **cache** — Laravel defaults

**Seeders:** Categories, Authors, Publishers, Products (50+), Variants, Reviews, Users (admin + customers), Coupons, Settings, Blog posts.

---

## 4. Routes

### Customer (web.php)

```php
// Public
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product.show');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

// Cart (guest + auth)
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::post('/add', [CartController::class, 'add'])->name('add');
    Route::patch('/update/{rowId}', [CartController::class, 'update'])->name('update');
    Route::delete('/remove/{rowId}', [CartController::class, 'remove'])->name('remove');
    Route::delete('/clear', [CartController::class, 'clear'])->name('clear');
});

// Wishlist
Route::prefix('wishlist')->name('wishlist.')->group(function () {
    Route::get('/', [WishlistController::class, 'index'])->name('index');
    Route::post('/toggle/{product}', [WishlistController::class, 'toggle'])->name('toggle');
});

// Checkout & Orders (auth)
Route::middleware('auth')->prefix('checkout')->name('checkout.')->group(function () {
    Route::get('/', [CheckoutController::class, 'index'])->name('index');
    Route::post('/place', [CheckoutController::class, 'place'])->name('place');
    Route::get('/success/{order}', [CheckoutController::class, 'success'])->name('success');
});
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');

// CMS
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/shipping-returns', [PageController::class, 'shipping'])->name('shipping');

// Newsletter
Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Auth (Laravel Breeze or custom)
require __DIR__.'/auth.php';
```

### Admin (admin.php / prefix `admin`)

```php
Route::prefix('admin')->name('admin.')->middleware(['auth','admin'])->group(function () {
    Route::get('/', [Admin\DashboardController::class, 'index'])->name('dashboard');
    // Resources
    Route::resource('products', Admin\ProductController::class);
    Route::resource('categories', Admin\CategoryController::class);
    Route::resource('authors', Admin\AuthorController::class);
    Route::resource('publishers', Admin\PublisherController::class);
    Route::resource('orders', Admin\OrderController::class)->only(['index','show','update','destroy']);
    Route::resource('users', Admin\UserController::class)->only(['index','show','update','destroy']);
    Route::resource('coupons', Admin\CouponController::class);
    Route::resource('blog', Admin\BlogController::class);
    Route::resource('contact-messages', Admin\ContactMessageController::class)->only(['index','show','update','destroy']);
    Route::resource('school-inquiries', Admin\SchoolInquiryController::class)->only(['index','show','update','destroy']);
    // Settings
    Route::get('settings', [Admin\SettingController::class, 'index'])->name('settings');
    Route::put('settings', [Admin\SettingController::class, 'update'])->name('settings.update');
    // Reports
    Route::get('reports', [Admin\ReportController::class, 'index'])->name('reports');
});
```

---

## 5. Controllers (Customer + Admin)

**Customer:**
- `HomeController` — hero, featured, new arrivals, bestsellers
- `ShopController` — product listing + filters + sorting + pagination
- `CategoryController` — category detail + breadcrumb
- `ProductController` — product detail + related + reviews
- `SearchController` — full-text search
- `CartController` — add/update/remove (session or DB cart)
- `WishlistController` — toggle + list
- `CheckoutController` — multi-step checkout + place order + payment (Stripe/PayPal/COD)
- `OrderController` — order detail + tracking
- `BlogController` — post list + detail
- `PageController` — static CMS pages
- `ContactController` — contact form
- `NewsletterController` — subscribe
- `Auth controllers` — login/register/password

**Admin:**
- `DashboardController` — stats (sales, orders, low stock, top products)
- `ProductController` — CRUD + image upload + variants
- `CategoryController` — nested category tree
- `AuthorController` / `PublisherController`
- `OrderController` — status update, export CSV
- `UserController`, `CouponController`, `BlogController`
- `ContactMessageController` / `SchoolInquiryController`
- `SettingController` — site settings
- `ReportController` — sales by date/category

---

## 6. Models (Eloquent)

- `Category` (self-referencing parent/children)
- `Author`
- `Publisher`
- `Product` (scope: featured, bestseller, new, active; relations: category, author, publisher, variants, reviews, cartItems, orderItems, wishlists)
- `ProductVariant`
- `ProductReview`
- `Cart` / `CartItem`
- `Wishlist`
- `Order` / `OrderItem`
- `Coupon`
- `User` (role, addresses, orders, wishlists, carts)
- `Address`
- `Setting`
- `NewsletterSubscriber`
- `ContactMessage`
- `SchoolInquiry`
- `BlogPost`

---

## 7. Views / Blade Structure

```
resources/views/
├── layouts/
│   ├── app.blade.php          (base, header, footer, scripts)
│   ├── guest.blade.php        (login/register)
│   └── admin.blade.php        (admin sidebar + topbar)
├── home.blade.php
├── shop/
│   ├── index.blade.php        (catalog + filters + sidebar)
│   └── category.blade.php
├── product/
│   └── show.blade.php         (PDP: images, price, buy box, tabs, reviews, related)
├── cart/
│   └── index.blade.php
├── wishlist/
│   └── index.blade.php
├── checkout/
│   ├── index.blade.php        (multi-step: shipping, payment, review)
│   └── success.blade.php
├── orders/
│   └── show.blade.php         (order tracking)
├── blog/
│   ├── index.blade.php
│   └── show.blade.php
├── pages/
│   ├── about.blade.php
│   ├── contact.blade.php
│   ├── faq.blade.php
│   ├── privacy.blade.php
│   ├── terms.blade.php
│   └── shipping.blade.php
├── partials/
│   ├── header.blade.php
│   ├── footer.blade.php
│   ├── mega-menu.blade.php
│   ├── search-bar.blade.php
│   ├── mini-cart.blade.php
│   ├── product-card.blade.php
│   ├── flash-messages.blade.php
│   └── newsletter.blade.php
└── admin/
    ├── dashboard.blade.php
    ├── products/
    │   ├── index.blade.php
    │   ├── create.blade.php
    │   └── edit.blade.php
    ├── orders/
    │   ├── index.blade.php
    │   └── show.blade.php
    ├── categories.blade.php
    ├── authors.blade.php
    ├── publishers.blade.php
    ├── users.blade.php
    ├── coupons.blade.php
    ├── blog.blade.php
    ├── contact-messages.blade.php
    ├── school-inquiries.blade.php
    └── settings.blade.php
```

---

## 8. Key Features (A-to-Z)

1. **Authentication** — Login, Register, Password Reset, Profile, Addresses
2. **Catalog** — Categories (nested), Authors, Publishers, Product listing with filters/sorting/pagination
3. **Product Detail** — Image gallery, price, variants, stock badge, description, specs, reviews, related/upsell
4. **Cart** — Add, update qty, remove, save for later, guest session cart, merge on login
5. **Wishlist** — Add/remove, move to cart, guest wishlist
6. **Search** — Title/Author/ISBN/Publisher, autocomplete, recent searches
7. **Checkout** — Guest or logged-in, shipping address, payment method (Stripe/PayPal/COD), order summary, email confirmation
8. **Orders** — Order history, order detail, tracking status, download invoice (PDF)
9. **Payments** — Stripe (cards), PayPal, Cash on Delivery
10. **Coupons** — Apply at cart/checkout, validation (min purchase, expiry, usage limit)
11. **Blog** — Posts list, detail, categories, tags, related posts
12. **CMS Pages** — About, Contact, FAQ, Privacy Policy, Terms & Conditions, Shipping & Returns
13. **Contact Form** — Store messages, admin inbox
14. **School/Bulk Inquiry** — Form for institutional orders
15. **Newsletter** — Subscribe/unsubscribe, welcome discount
16. **Admin Panel** — Dashboard stats, full CRUD for products/categories/authors/publishers/orders/users/coupons/blog, order status update, reports (sales CSV export), settings
17. **Responsive** — Mobile-first, works on all devices
18. **SEO** — Meta tags, slugs, Open Graph, sitemap, robots.txt
19. **Performance** — Image optimization, caching, lazy loading

---

## 9. Payment Integration

- **Stripe** — Cards (international standard)
- **PayPal** — Standard checkout
- **Cash on Delivery (COD)** — Relevant for local/Pakistan market (Albakio style)
- Currency: Multi-currency support (PKR default, USD optional) — store in `settings`

---

## 10. Implementation Phases (Todo List)

I'll track this in a todo list. Phases:

- **Phase 1:** Setup (DB, auth, admin layout, design system, Tailwind config)
- **Phase 2:** Catalog (categories, authors, publishers, products, variants, seeding)
- **Phase 3:** Frontend shop (home, category, product detail, search)
- **Phase 4:** Cart & Wishlist (session/DB cart, wishlist)
- **Phase 5:** Checkout & Orders (multi-step checkout, Stripe/PayPal/COD, order email, tracking)
- **Phase 6:** Blog & CMS pages, contact form, newsletter, school inquiry
- **Phase 7:** Admin panel (full CRUD, dashboard, reports, settings)
- **Phase 8:** Polish (SEO, sitemap, responsive fixes, testing, deployment)

---

**Next step:** I'm ready to start implementing. Shall I begin with **Phase 1** (setup + design system + auth + admin layout)?
