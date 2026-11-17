<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Admin' }} · Book Store Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap');
    </style>
</head>
<body class="bg-background text-text-primary">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-primary text-white hidden lg:flex flex-col">
            <div class="flex items-center justify-between px-6 py-4 border-b border-surface/5">
                <span class="font-display font-bold text-xl tracking-tight">Book<span class="text-accent">Store</span> Admin</span>
                <button onclick="document.getElementById('sidebarToggle').click()" class="lg:hidden p-2 text-white hover:text-white/80 rounded">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-accent/20 text-accent font-medium transition-colors hover:bg-accent/30">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.products.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-secondary/80 hover:bg-surface/50 hover:text-primary font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v2m4-2v14M7 15v2m4-2v6M11 15v2m4-2v2m-8 0V5m0 0h12M5 5h12a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"></path></svg>
                    Products
                </a>
                <a href="{{ route('admin.categories.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-secondary/80 hover:bg-surface/50 hover:text-primary font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3-10v18m0-3h18m-5.5 0H13m0 0h-1.5M12 3h-1.5m0 0V12m0 0v-1.5m7.5 1.5H21"></path></svg>
                    Categories
                </a>
                <a href="{{ route('admin.authors.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-secondary/80 hover:bg-surface/50 hover:text-primary font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    Authors
                </a>
                <a href="{{ route('admin.publishers.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-secondary/80 hover:bg-surface/50 hover:text-primary font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Publishers
                </a>
                <a href="{{ route('admin.orders.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-secondary/80 hover:bg-surface/50 hover:text-primary font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4a3 3 0 013-3h2a3 3 0 013 3v3a4 4 0 01-4 4H9a4 4 0 01-4-4v-3z"></path></svg>
                    Orders
                </a>
                <a href="{{ route('admin.users.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-secondary/80 hover:bg-surface/50 hover:text-primary font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M43 5H3L3 9c0 5 6 12 12 12s12-7 12-12V5zM9 14l1-2 3 4 3-4 1 2zM12 14l2-4M3 19h18"></path></svg>
                    Users
                </a>
                <a href="{{ route('admin.coupons.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-secondary/80 hover:bg-surface/50 hover:text-primary font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                    Coupons
                </a>
                <a href="{{ route('admin.blog.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-secondary/80 hover:bg-surface/50 hover:text-primary font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    Blog
                </a>
            </nav>
            <div class="px-6 py-4 border-t border-surface/5">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center text-accent font-bold">{{ strtoupper(auth()->user()->name[0] ?? 'A') }}</div>
                    <div>
                        <div class="text-sm font-medium text-white">{{ auth()->user()->name }}</div>
                        <div class="text-xs text-white/70">{{ auth()->user()->email }}</div>
                    </div>
                </div>
                <a href="{{ route('logout') }}" class="mt-3 block px-4 py-2 rounded-lg bg-white/10 text-white text-sm font-medium hover:bg-white/20 transition-colors">
                    Sign out
                </a>
            </div>
        </aside>

        <!-- Main content -->
        <div class="flex-1 flex flex-col overflow-hidden bg-background">
            <!-- Mobile sidebar toggle -->
            <div class="lg:hidden px-4 py-3 border-b border-border bg-surface">
                <button id="sidebarToggle" class="w-full flex items-center gap-2 px-3 py-2 rounded-lg text-text-primary hover:bg-border">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    Menu
                </button>
            </div>

            <header class="flex-1 overflow-y-auto bg-background">
                <div class="sticky top-0 z-20 bg-surface border-b border-border px-6 py-4">
                    <div class="flex items-center justify-between">
                        <h1 class="text-2xl font-display font-bold text-text-primary">{{ $title ?? 'Dashboard' }}</h1>
                        <div class="flex items-center gap-3">
                            <span class="hidden sm:block text-sm text-text-secondary">{{ now()->format('F j, Y') }}</span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    {{ $slot }}
                </div>
            </header>
        </div>
    </div>

    <script>
        document.getElementById('sidebarToggle')?.addEventListener('click', () => {
            document.querySelector('aside')?.classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>
