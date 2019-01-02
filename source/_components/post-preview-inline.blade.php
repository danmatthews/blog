<div class="flex flex-col max-w-md">
    <p class="text-grey-lightest text-xl mb-2">
        {{ $post->getDate()->format('F j, Y') }}
    </p>
    <h2 class="text-5xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-white font-extrabold"
        >{{ $post->title }}</a>
    </h2>

    

    <p class="mb-4 mt-0 leading-normal text-white">{!! $post->excerpt(200) !!}</p>

    {{-- <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a> --}}
</div>
