@extends('_layouts.blank')

@push('meta')
<meta property="og:title" content="{{ $page->title }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ $page->getUrl() }}"/>
<meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')

<section class="pb-8 px-4 h-auto md:h-screen flex flex-wrap items-center md:justify-center relative" style="background-image:url({{$page->cover_image}}); background-size:cover;">
    <div class="w-full md:absolute md:pin-l md:pin-t md:pin-r py-4 px-0 md:p-6 menu-container" id="blog-menu">@include('_nav.menu', ['textColor' => 'text-white'])</div>
    @include('_nav.menu-responsive', ['textColor' => 'text-white'])
    <div class="container mx-auto py-16 px-4 md:px-0">
        <p class="text-grey-lightest text-xl mb-2 text-center">
            {{ $page->getDate()->format('F j, Y') }}
        </p>
        <h1 class="text-5xl mt-0 text-center">
            <a
            href="{{ $page->getUrl() }}"
            title="Read more - {{ $page->title }}"
            class="text-white font-extrabold"
            >{{ $page->title }}</a>
        </h1>
    </div>
    <div class="absolute pin-r pin-b p-8">
                <a href="#article" class="text-grey-dark">Jump to post <i class="fa fa-arrow-alt-down ml-2"></i></a>
            </div>
</section>

<div class="max-w-md mx-auto px-4 mt-16 lg:px-0" id="article">
    
    
    {{-- @if ($page->categories)
    @foreach ($page->categories as $i => $category)
    <a
    href="{{ '/blog/categories/' . $category }}"
    title="View posts in {{ $category }}"
    class="inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-grey-darkest uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
    >{{ $category }}</a>
    @endforeach
    @endif --}}
    
    <div class="border-b border-blue-lighter mb-10 pb-4 md-content" v-pre>
        @yield('content')
    </div>
</div>

@endsection
