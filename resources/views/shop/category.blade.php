@extends('layouts.ebukz')

@section('title', $category->name)

@section('content')
  <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.png') }}">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">{{ $category->name }}</h1>
        <div class="breadcumb-menu-wrap">
          <div class="breadcumb-menu">
            <span><a href="{{ route('home') }}">Home</a></span>
            <span><a href="{{ route('shop') }}">Shop</a></span>
            @foreach ($breadcrumbs as $crumb)
              @if ($loop->last)
                <span>{{ $crumb->name }}</span>
              @else
                <span><a href="{{ route('category.show', $crumb->slug) }}">{{ $crumb->name }}</a></span>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('shop._listing', [
      'sidebarTitle' => $category->children->isNotEmpty() ? 'Subcategories' : 'Categories',
      'sidebarCategories' => $sidebarCategories,
  ])
@endsection
