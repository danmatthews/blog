@extends('_layouts.blank')

@push('meta')
<meta property="og:title" content="{{ $page->title }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ $page->getUrl() }}"/>
<meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')

<section class="pb-8 px-4 flex flex-wrap items-center md:justify-center relative bg-blue-lightest" >
    <div class="w-full  md:pin-l md:pin-t md:pin-r py-4 px-0 md:p-6 menu-container" id="blog-menu">@include('_nav.menu')</div>
    @include('_nav.menu-responsive')
    <div class="container mx-auto py-8 md:py-16 px-4 md:px-0">
        <p class="text-grey-dark text-xl mb-2 text-center">
            {{ $page->getDate()->format('F j, Y') }}
        </p>
        <h1 class="text-2xl md:text-5xl mt-0 text-center">
            <a
            href="{{ $page->getUrl() }}"
            title="Read more - {{ $page->title }}"
            class="text-grey-darkest font-extrabold"
            >{{ $page->title }}</a>
        </h1>
    </div>

</section>

<div class="max-w-lg mx-auto px-4 mt-16 lg:px-0" id="article">
    
    
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
