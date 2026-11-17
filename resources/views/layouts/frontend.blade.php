<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Book Store' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap');
    </style>
    @stack('styles')
</head>
<body class="bg-background text-text-primary">
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="bg-surface border-b border-border sticky top-0 z-40">
            <div class="container-page flex items-center justify-between px-4 py-3 md:px-6 lg:px-8">
                <!-- Logo -->
                <div class="flex items-center gap-2">
                    <a href="{{ route('home') }}" class="font-display font-bold text-2xl text-primary tracking-tight">
                        Book<span class="text-accent">Store</span>
                    </a>
                </div>

                <!-- Search -->
                <div class="hidden md:flex flex-1 max-w-2xl mx-10">
                    <form action="{{ route('search') }}" method="GET" class="relative">
                        <input type="text" name="q" value="{{ old('q') ?? request('q') }}" placeholder="Search books, authors, ISBN..." class="input pl-10 pr-4 py-2.5 rounded-l-md w-full">
                        <button type="submit" class="absolute left-0 top-0 bottom-0 w-10 bg-primary text-white rounded-l-md hover:bg-primary-hover flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                    </form>
                </div>

                <!-- User / Cart -->
                <div class="flex items-center gap-4 md:gap-6">
                    @auth
                        <a href="{{ route('wishlist.index') }}" class="relative p-2 text-text-secondary hover:text-primary transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            @if ($wishlistCount > 0)
                                <span class="absolute top-1 right-1 w-2 h-2 rounded-full bg-accent"></span>
                            @endif
                        </a>
                        <a href="{{ route('cart.index') }}" class="relative p-2 text-text-secondary hover:text-primary transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4m0 0l-4.586-4.586a2 2 0 112.828-2.828z"></path></svg>
                            @php $cartCount = session('cart_count', 0); $wishlistCount = session('wishlist_count', 0); @endphp
                            @if ($cartCount > 0)
                                <span class="absolute top-1 right-1 w-2 h-2 rounded-full bg-accent"></span>
                            @endif
                        </a>
                        <a href="{{ route('profile.edit') }}" class="p-2 text-text-secondary hover:text-primary transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-xs text-error hover:underline p-2">Sign out</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn-outline text-sm">Sign in</a>
                        <a href="{{ route('register') }}" class="btn-primary text-sm">Register</a>
                    @endauth
                </div>
            </div>

            <!-- Mega Menu -->
            <div class="border-b border-border bg-surface/80 backdrop-blur sticky top-[60px]">
                <nav class="container-page px-4 md:px-6 lg:px-8">
                    <ul class="flex gap-8 md:gap-10 py-3 overflow-x-auto pb-2">
                        <li><a href="{{ route('home') }}" class="text-sm font-medium text-text-primary hover:text-accent transition-colors">Home</a></li>
                        @foreach (\App\Models\Category::root()->get() as $cat)
                            <li class="relative group">
                                <a href="{{ route('category.show', $cat->slug) }}" class="text-sm font-medium text-text-primary hover:text-accent transition-colors block">{{ $cat->name }}</a>
                                @if ($cat->children->count() > 0)
                                    <div class="absolute left-0 top-full mt-2 w-56 bg-surface border border-border rounded-lg shadow-lg hidden group-hover:block z-30 py-3">
                                        <ul>
                                            @foreach ($cat->children as $child)
                                                <li><a href="{{ route('category.show', $child->slug) }}" class="block px-4 py-2 text-sm text-text-secondary hover:text-primary hover:bg-background/50 transition-colors">{{ $child->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                        <li><a href="#" class="text-sm font-medium text-text-primary hover:text-accent transition-colors">Bestsellers</a></li>
                        <li><a href="#" class="text-sm font-medium text-text-primary hover:text-accent transition-colors">New Arrivals</a></li>
                        <li><a href="#" class="text-sm font-medium text-text-primary hover:text-accent transition-colors">Blog</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Main -->
        <main class="flex-1 container-page px-4 md:px-6 lg:px-8">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-primary text-white mt-auto">
            <div class="container-page px-4 py-8 md:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-8">
                    <div>
                        <a href="{{ route('home') }}" class="font-display font-bold text-2xl text-white tracking-tight mb-4 inline-block">Book<span class="text-accent">Store</span></a>
                        <p class="text-text-secondary/70 text-sm">International-standard books for learners everywhere. Quality publishing since 2002.</p>
                    </div>
                    <div>
                        <h4 class="font-bold mb-4">Shop</h4>
                        <ul class="space-y-2 text-sm text-text-secondary/70">
                            <li><a href="{{ route('shop') }}" class="hover:text-accent transition-colors">All Books</a></li>
                            <li><a href="#" class="hover:text-accent transition-colors">Bestsellers</a></li>
                            <li><a href="#" class="hover:text-accent transition-colors">New Arrivals</a></li>
                            <li><a href="{{ route('category.show', \App\Models\Category::root()->first()->slug ?? '#') }}" class="hover:text-accent transition-colors">Categories</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-4">Support</h4>
                        <ul class="space-y-2 text-sm text-text-secondary/70">
                            <li><a href="#" class="hover:text-accent transition-colors">Contact Us</a></li>
                            <li><a href="#" class="hover:text-accent transition-colors">FAQs</a></li>
                            <li><a href="#" class="hover:text-accent transition-colors">Shipping & Returns</a></li>
                            <li><a href="#" class="hover:text-accent transition-colors">Order Tracking</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-4">Legal</h4>
                        <ul class="space-y-2 text-sm text-text-secondary/70">
                            <li><a href="#" class="hover:text-accent transition-colors">About Us</a></li>
                            <li><a href="#" class="hover:text-accent transition-colors">Privacy Policy</a></li>
                            <li><a href="#" class="hover:text-accent transition-colors">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="border-t border-surface/10 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-text-secondary/60">
                    <div>&copy; {{ now()->year }} Book Store. All rights reserved.</div>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-accent transition-colors">Facebook</a>
                        <a href="#" class="hover:text-accent transition-colors">Instagram</a>
                        <a href="#" class="hover:text-accent transition-colors">YouTube</a>
                        <a href="#" class="hover:text-accent transition-colors">Twitter</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    @stack('scripts')
</body>
</html>
