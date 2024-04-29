<x-site-layout>
    <section class="section section-banner">
        <img src="{{ Storage::url('/site/main.jpg') }}" alt="main image" />
        <h2 class="home-title">Blog</h2>
    </section>

    <main class="main blog-page">
        @isset($posts)
            <ul class="blog-list">
                @foreach($posts as $post)
                    @include('pages.site.post-card')  
                @endforeach
            </ul>
        @endisset
    </main>

</x-site-layout>