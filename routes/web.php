<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

// ============================================================
//  STOREFRONT — PUBLIC WEBSITE PAGES
// ============================================================

// Homepage
Route::get('/', HomeController::class)->name('home');

// About Us
Route::get('/about-us', fn() => view('pages.about'))->name('about');

// Our Books / Catalogue
Route::get('/our-books', fn() => redirect()->route('shop'))->name('books');

// Contact Us
Route::get('/contact-us', [ContactController::class, 'show'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'send'])->name('contact.send');

// Careers
Route::get('/careers', [ContactController::class, 'careers'])->name('careers');
Route::post('/careers/apply', [ContactController::class, 'applyCareer'])->name('careers.apply');

// Newsletter (footer form)
Route::post('/newsletter', [ContactController::class, 'subscribe'])->name('newsletter.subscribe');

// FAQ & policy pages
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/privacy-policy', [PageController::class, 'info'])->defaults('slug', 'privacy')->name('privacy');
Route::get('/terms-and-conditions', [PageController::class, 'info'])->defaults('slug', 'terms')->name('terms');
Route::get('/shipping-returns-and-refunds', [PageController::class, 'info'])->defaults('slug', 'shipping')->name('shipping');
Route::get('/complaints', [PageController::class, 'info'])->defaults('slug', 'complaints')->name('complaints');

// My Account (placeholder, links to auth)
Route::get('/my-account', function () {
    return redirect()->route('login');
})->name('account');

// ============================================================
//  EBUKZ HTML TEMPLATE PAGES (converted to Blade)
// ============================================================

Route::get('/home-1',           fn() => view('pages.home1'))->name('home1');
Route::get('/home-2',           fn() => view('pages.home2'))->name('home2');
Route::get('/home-3',           fn() => view('pages.home3'))->name('home3');
Route::get('/shop-sidebar',     fn() => view('pages.shop-sidebar'))->name('shop.sidebar');
Route::get('/shop-details',     fn() => view('pages.shop-details'))->name('shop.details');
Route::get('/checkout',         fn() => view('pages.checkout'))->name('checkout');
Route::get('/blog',             fn() => view('pages.blog'))->name('blog');
Route::get('/blog-sidebar',     fn() => view('pages.blog-sidebar'))->name('blog.sidebar');
Route::get('/blog-sidebar-2',   fn() => view('pages.blog-sidebar2'))->name('blog.sidebar2');
Route::get('/blog-standard',    fn() => view('pages.blog-standard'))->name('blog.standard');
Route::get('/blog-details',     fn() => view('pages.blog-details'))->name('blog.details');
Route::get('/vendor',           fn() => view('pages.vendor'))->name('vendor');
Route::get('/vendor-details',   fn() => view('pages.vendor-details'))->name('vendor.details');
Route::get('/all-authors',      fn() => view('pages.author'))->name('author');
Route::get('/author-details',   fn() => view('pages.author-details'))->name('author.details');
Route::get('/404-error',        fn() => view('pages.error404'))->name('error404');

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
    return redirect()->route('account');
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
