<x-site-layout>
    <section class="section section-banner">
        <img src="{{ Storage::url('/site/main.jpg') }}" alt="main image" />
        <h2 class="home-title">Blog</h2>
    </section>
    @include('layouts.site-top-panel')

    <main class="main post-page">
        @isset($post)
            <h1 class="post-page__title">{{ $post->post }}</h1>

            <div class="post-page__image">
                @if ($post->image)
                    <img src="{{ Storage::url($post->image) }}" alt="" title="" />
                @else
                    <img src="/images/default-post-image.jpg" alt="" title="" >
                @endif
            </div>     
                   
            <p class="post-page__description">{{ $post->description }}</h1>
        @endisset
    </main>

</x-site-layout>