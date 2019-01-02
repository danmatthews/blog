@extends('_layouts.blank')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->blogDescription }}" />
@endpush


@section('body')
<section class="pb-8 px-4 h-auto md:h-screen flex flex-wrap items-center md:justify-center relative" id="top">
    <div class="w-full md:absolute md:pin-l md:pin-t md:pin-r py-4 px-0 md:p-6 menu-container" id="home-menu">
        @include('_nav.menu')
    </div>
    @include('_nav.menu-responsive')
    <div class="hidden md:block">
        <img src="/assets/img/me_anim_longer.png" class="blog me-main-image" alt="">
    </div>
    <div class="md:ml-8 lg:ml-16">
        <p class="text-3xl text-grey-dark mb-1">Hey, I'm...</p>
        <h1 class="text-5xl mt-0 mb-0">Dan Matthews</h1>
    </div>
    <div class="hidden md:block md:absolute md:pin-r md:pin-b text-center md:text-right mt-8 md:mt-0 md:p-8">
        <a href="#about" class="text-grey-dark">A little about me <i class="fa fa-arrow-alt-down ml-2"></i></a>
    </div>
</section>
<section class="py-8 px-4 h-auto md:h-screen flex items-center md:justify-center relative bg-grey-lighter" id="about">
    <div class="max-w-md">
    <h2 class="text-5xl my-0 text-grey-darker">A little about me</h2>
    <p class="max-w-md mb-2 md:text-xl text-grey-darker leading-normal">I'm a web & software developer living in Carlisle, in the UK. I've a love for movies, games, videography, the outdoors, and dogs.</p>
    <p class="max-w-md mb-2 md:text-xl text-grey-darker leading-normal">This blog is a mish-mash of things ranging between posts about work, code & technology to personal posts about mental health, social issues and more.</p>
    <p class="max-w-md mb-2 md:text-xl text-grey-darker leading-normal">You can find my work by heading over to <a href="https://blacklabsoftware.co.uk">Black Lab Software</a>.</p>
    <div class="hidden md:block md:absolute md:pin-r md:pin-b text-center md:text-right mt-8 md:mt-0 md:p-8">
        <a href="#blog" class="text-grey-dark">Most recent blog post <i class="fa fa-arrow-alt-down ml-2"></i></a>
    </div>
    </div>
</section>

@foreach ($posts->take(1) as $featuredPost)
{{-- <h2>{{  }}</h2> --}}
<section class="px-4 h-auto py-8 md:h-screen flex items-center md:justify-center relative" id="blog" style="background-position:center center;background-image:url({{$featuredPost->cover_image}}); background-size:cover;">
    <div class="max-w-md">
        @include('_components.post-preview-inline', ['post' => $featuredPost])
    </div>
</div>
</section>
@endforeach


        
@endsection
