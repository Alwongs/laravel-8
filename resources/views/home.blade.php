<x-site-layout>

    <section class="section-banner">
        <img src="{{ Storage::url('/site/main.jpg') }}" alt="main image" />
        <h2 class="home-title">Ulyanovsk</h2>
    </section>

    <section class="section">
        <div class="container">
            <div class="section__title">
                <h2>Recent posts<h2>
            </div>

            @include('blocks.recent-posts')

            <div class="btn-block">
                <a href="{{ route('blog') }}" class="btn">All posts</a>
            </div>
        </div>
    </section>

</x-site-layout>