@php
    if (!isset($textColor)) {
        $textColor = 'text-grey-dark';
    }
@endphp
<nav id="js-nav-menu" class="w-full hidden lg:hidden">
         <a title="{{ $page->siteName }} Home" href="/"
            class="block pb-4 {{$textColor}} {{ $page->isActive('/') ? 'active underline' : '' }}">
            About
        </a>
        <a title="{{ $page->siteName }} Blog" href="/blog"
            class="block pb-4 {{$textColor}} {{ $page->isActive('/blog') ? 'active underline' : '' }}">
            Blog
        </a>

        <a title="Work" href="https://blacklabsoftware.co.uk" target="_blank"
            class="block pb-4 {{$textColor}}">
            Work
        </a>
        
        {{-- <a title="{{ $page->siteName }} About" href="/about"
            class="block pb-4 {{$textColor}} {{ $page->isActive('/about') ? 'active underline' : '' }}">
            About
        </a> --}}
        
        <a title="{{ $page->siteName }} Email" href="mailto:dan@danmatthews.me"
            class="block pb-4 {{$textColor}} {{ $page->isActive('/contact') ? 'active underline' : '' }}">
            Email
        </a>
    </nav>
</nav>
