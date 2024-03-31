<x-site-layout>
    <section class="section section-banner">
        <img src="{{ Storage::url('/site/main.jpg') }}" alt="main image" />
        <h2 class="home-title">Ulyanovsk</h2>
    </section>


    @include('blocks.recent-posts')



</x-site-layout>