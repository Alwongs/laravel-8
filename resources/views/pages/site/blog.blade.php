<x-site-layout>
    <section class="section section-banner">
        <img src="{{ Storage::url('/site/main.jpg') }}" alt="main image" />
        <h2 class="home-title">Ulyanovsk</h2>
    </section>


    <h1>Blog</h1>

    @isset($posts)
        <ul>
            @foreach($posts as $post)
                <li>{{ $post->post }}</li>
            @endforeach
        </ul>
    @endisset

</x-site-layout>