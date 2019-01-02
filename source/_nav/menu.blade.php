@php
    if (!isset($textColor)) {
        $textColor = 'text-grey-dark';
    }
@endphp
<div class="flex">
     <div class="mr-6">
        @unless(isset($hideLogo) && $hideLogo == true)
        <a href="/" title="{{ $page->siteName }} home" class="block">
            <img src="/assets/img/me_anim.png" class="block" alt="Illustration of me" style="max-width: 80px; height: auto;">
        </a>
        @endunless
    </div>
    <nav class="flex items-center justify-start w-full">
        <button title="{{ $page->siteName }} Menu Toggle"  onclick="navMenu.toggle();"
            class="mr-4 inline-block md:mr-6 md:hidden {{$textColor}}">
            <i class="fa fa-bars"></i>
        </button>
        <a title="{{ $page->siteName }} Home" href="/"
            class="hidden md:inline-block mr-4 md:mr-6 {{$textColor}} {{ $page->isActive('/') ? 'active underline' : '' }}">
            About
        </a>
        <a title="{{ $page->siteName }} Blog" href="/blog"
            class="hidden md:inline-block mr-4 md:mr-6 {{$textColor}} {{ $page->isActive('/blog') ? 'active underline' : '' }}">
            Blog
        </a>

        <a title="Work" href="https://blacklabsoftware.co.uk" target="_blank"
            class="hidden md:inline-block mr-4 md:mr-6 {{$textColor}}">
            Work
        </a>
        
        {{-- <a title="{{ $page->siteName }} About" href="/about"
            class="mr-4 md:mr-6 {{$textColor}} {{ $page->isActive('/about') ? 'active underline' : '' }}">
            About
        </a> --}}
        
        <a title="{{ $page->siteName }} Email" href="mailto:dan@danmatthews.me"
            class="hidden md:inline-block mr-4 md:mr-6 {{$textColor}} {{ $page->isActive('/contact') ? 'active underline' : '' }}">
            Email
        </a>
    </nav>
   
</div>