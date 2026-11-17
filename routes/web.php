<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

// ============================================================
//  ALBAKIO INTERNATIONAL — PUBLIC WEBSITE PAGES
// ============================================================

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// About Us
Route::get('/about-us', function () {
    return view('about');
})->name('about');

// Our Books / Catalogue
Route::get('/our-books', function () {
    return view('books');
})->name('books');

// Contact Us
Route::get('/contact-us', [ContactController::class, 'show'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'send'])->name('contact.send');

// Careers
Route::get('/careers', [ContactController::class, 'careers'])->name('careers');
Route::post('/careers/apply', [ContactController::class, 'applyCareer'])->name('careers.apply');

// FAQs
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Legal & Policy pages
Route::get('/privacy-policy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms-and-conditions', function () {
    return view('terms');
})->name('terms');

Route::get('/shipping-returns-and-refunds', function () {
    return view('shipping');
})->name('shipping');

Route::get('/complaints', function () {
    return view('complaints');
})->name('complaints');

// Resources pages
Route::get('/flash-cards', function () {
    return view('simple-page', [
        'title'    => 'Flash Cards',
        'active'   => 'flash-cards',
        'subtitle' => 'Printable flash cards to reinforce vocabulary, numbers, and concepts for early learners.',
        'content'  => '<div style="text-align:center;padding:40px 0;"><div style="font-size:4rem;margin-bottom:20px;">🃏</div><p style="font-size:1rem;color:var(--text);margin-bottom:24px;">Our flash card resources for early learners are coming soon. Contact us to request printed copies for your school.</p><a href="' . route('contact') . '" class="btn btn-primary">Request Flash Cards</a></div>',
    ]);
})->name('flash-cards');

Route::get('/teacher-guide', function () {
    return view('simple-page', [
        'title'    => 'Teacher Guide',
        'active'   => 'teacher-guide',
        'subtitle' => 'Comprehensive teacher guides for every book in our series with lesson plans, answer keys, and teaching tips.',
        'content'  => '<div style="text-align:center;padding:40px 0;"><div style="font-size:4rem;margin-bottom:20px;">📖</div><p style="font-size:1rem;color:var(--text);margin-bottom:24px;">Teacher guides are available for all series. Contact us to request the guide for your specific book series.</p><a href="' . route('contact') . '" class="btn btn-primary">Request Teacher Guide</a></div>',
    ]);
})->name('teacher-guide');

Route::get('/academic-calender', function () {
    return view('simple-page', [
        'title'    => 'Academic Calendar',
        'active'   => 'academic-calendar',
        'subtitle' => 'Stay organised with our comprehensive academic calendar designed for Pakistani school schedules.',
        'content'  => '<div style="text-align:center;padding:40px 0;"><div style="font-size:4rem;margin-bottom:20px;">📅</div><p style="font-size:1rem;color:var(--text);margin-bottom:24px;">Download our academic calendar for the current school year.</p><a href="' . route('contact') . '" class="btn btn-primary">Download Calendar</a></div>',
    ]);
})->name('academic-calendar');

Route::get('/summer-pack', function () {
    return view('simple-page', [
        'title'    => 'Summer Pack',
        'active'   => 'summer-pack',
        'subtitle' => 'Keep students engaged during the summer holidays with our specially designed summer activity packs.',
        'content'  => '<div style="text-align:center;padding:40px 0;"><div style="font-size:4rem;margin-bottom:20px;">☀️</div><p style="font-size:1rem;color:var(--text);margin-bottom:24px;">Our Summer Pack 2025 is available for all classes. Fun, educational activities to keep learning going through the holidays.</p><a href="' . route('contact') . '" class="btn btn-primary">Order Summer Pack</a></div>',
    ]);
})->name('summer-pack');

Route::get('/make-my-paper', function () {
    return view('simple-page', [
        'title'    => 'Make My Paper',
        'active'   => 'make-my-paper',
        'subtitle' => 'Create customised test papers and worksheets aligned to our book series.',
        'content'  => '<div style="text-align:center;padding:40px 0;"><div style="font-size:4rem;margin-bottom:20px;">📝</div><p style="font-size:1rem;color:var(--text);margin-bottom:24px;">Our Make My Paper tool for creating custom assessment papers is coming soon. Contact us for more information.</p><a href="' . route('contact') . '" class="btn btn-primary">Get in Touch</a></div>',
    ]);
})->name('make-my-paper');

// My Account (placeholder, links to auth)
Route::get('/my-account', function () {
    return redirect()->route('login');
})->name('account');

// ============================================================
//  EXISTING SHOP / PRODUCT ROUTES (preserved)
// ============================================================

Route::get('/shop', [ShopController::class, '__invoke'])->name('shop');
Route::get('/category/{category:slug}', [CategoryController::class, '__invoke'])->name('category.show');
Route::get('/product/{product:slug}', [ProductController::class, '__invoke'])->name('product.show');
Route::get('/search', [SearchController::class, '__invoke'])->name('search');

// Cart
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, '__invoke'])->name('index');
    Route::post('/add', [CartController::class, 'add'])->name('add');
    Route::patch('/update/{rowId}', [CartController::class, 'update'])->name('update');
    Route::delete('/remove/{rowId}', [CartController::class, 'remove'])->name('remove');
    Route::delete('/clear', [CartController::class, 'clear'])->name('clear');
});

// Wishlist
Route::prefix('wishlist')->name('wishlist.')->group(function () {
    Route::get('/', [WishlistController::class, '__invoke'])->name('index');
    Route::post('/toggle/{product}', [WishlistController::class, 'toggle'])->name('toggle');
});

// ============================================================
//  AUTHENTICATED ROUTES
// ============================================================

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin routes
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', function () {
            return view('admin/layouts/app', ['title' => 'Dashboard'])->with('slot', '<div>Admin Dashboard</div>');
        })->name('dashboard');

        Route::get('/products', function () {
            return view('admin/layouts/app', ['title' => 'Products'])->with('slot', '<div>Products</div>');
        })->name('products.index');

        Route::get('/categories', function () {
            return view('admin/layouts/app', ['title' => 'Categories'])->with('slot', '<div>Categories</div>');
        })->name('categories.index');

        Route::get('/orders', function () {
            return view('admin/layouts/app', ['title' => 'Orders'])->with('slot', '<div>Orders</div>');
        })->name('orders.index');

        Route::get('/users', function () {
            return view('admin/layouts/app', ['title' => 'Users'])->with('slot', '<div>Users</div>');
        })->name('users.index');
    });
