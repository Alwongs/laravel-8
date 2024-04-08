<x-site-layout>
    <section class="section section-banner">
        <img src="{{ Storage::url('/site/main.jpg') }}" alt="main image" />
        <h2 class="home-title">Blog</h2>
    </section>
    @include('layouts.site-top-panel')

    <main class="main post-page">
        @isset($posts)
            <ul class="blog-list">
                @foreach($posts as $post)
                    @include('pages.site.post-card')  
                @endforeach
            </ul>
        @endisset
    </main>

</x-site-layout>