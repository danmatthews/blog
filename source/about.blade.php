@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About</h1>

    <img src="/assets/img/me.jpg"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">
        <p class="text-2xl mb-6">I'm Dan, a developer living and working in Carlisle, in the north of the UK.</p>
        <p class="mb-6">I build things for the web, with tools like Laravel, VueJS, Wordpress, and many more at my company - <a href="https://blacklabsoftware.co.uk">Black Lab Software</a>.</p>
        <p class="mb-6">This blog however, is about more than that - I like to talk about mental health and social issues, both on a national, international, and local scale.</p>
        <p class="mb-6">I also run a YouTube channel called <a href="https://www.youtube.com/channel/UCQy75TUHkO6hayzHhFynAlg">Made In The North</a>, where i talk to the people behind local businesses, artists, issues and more here in the north west and north east.</p>
@endsection
