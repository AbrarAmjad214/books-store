@extends('layouts.ebukz')

@php $pageTitle = request()->routeIs('search') ? (request('q') ? 'Search: ' . request('q') : 'Search') : 'Shop'; @endphp

@section('title', $pageTitle)

@section('content')
  <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.png') }}">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">{{ $pageTitle }}</h1>
        <div class="breadcumb-menu-wrap">
          <div class="breadcumb-menu">
            <span><a href="{{ route('home') }}">Home</a></span>
            <span>{{ $pageTitle }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('shop._listing', ['sidebarTitle' => 'Categories', 'sidebarCategories' => $categories])
@endsection
