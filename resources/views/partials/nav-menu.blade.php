{{-- Main navigation items, shared by the desktop and mobile menus. Needs $navCategories. --}}
<li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
<li class="menu-item-has-children mega-menu-wrap {{ request()->routeIs('shop', 'category.show', 'product.show', 'search') ? 'active' : '' }}">
  <a href="{{ route('shop') }}">Shop</a>
  <ul class="mega-menu">
    @foreach ($navCategories as $root)
      <li><a href="{{ route('category.show', $root->slug) }}">{{ $root->name }}</a>
        <ul>
          @foreach ($root->children as $child)
            <li><a href="{{ route('category.show', $child->slug) }}">{{ $child->name }}</a></li>
          @endforeach
        </ul>
      </li>
    @endforeach
  </ul>
</li>
<li><a href="{{ route('shop', ['sort' => 'newest']) }}">New Arrivals</a></li>
<li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
<li class="{{ request()->routeIs('faq') ? 'active' : '' }}"><a href="{{ route('faq') }}">FAQ</a></li>
<li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
