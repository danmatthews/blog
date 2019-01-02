---
pagination:
    collection: posts
    perPage: 20
---
@extends('_layouts.blank')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Blog" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="The list of blog posts for {{ $page->siteName }}" />
@endpush

@section('body')
    @foreach ($pagination->items as $post)
    <section class="bg-black pb-8 px-4 h-auto md:h-screen flex flex-wrap items-center justify-center relative" style="background-image:url({{$post->cover_image}}); background-position: center center; background-size:cover;" id="post-{{$loop->index}}">

        @if ($loop->index == 0)
        <div class="md:absolute md:pin-l md:pin-t md:pin-r py-4 px-0 md:p-6 menu-container w-full" id="blog-menu">   
        @include('_nav.menu', ['textColor' => 'text-white'])</div>
        @include('_nav.menu-responsive', ['textColor' => 'text-white'])
        @endif

        @include('_components.post-preview-inline')

        @if ($post != $pagination->items->last())
            <div class="hidden md:block md:absolute md:pin-r md:pin-b text-center md:text-right mt-8 md:mt-0 md:p-8">
                <a href="#post-{{$loop->index+1}}" class="text-grey-dark">Next post <i class="fa fa-arrow-alt-down ml-2"></i></a>
            </div>
        @endif
        
</section>
    @endforeach

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-grey-lighter hover:bg-grey-light rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-grey-lighter hover:bg-grey-light text-blue-darker rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-dark' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-grey-lighter hover:bg-grey-light rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop
