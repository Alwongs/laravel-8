<x-site-layout>
    <section class="section section-banner">
        <img src="{{ Storage::url('/site/main.jpg') }}" alt="main image" />
        <h2 class="home-title">Ulyanovsk</h2>
    </section>

    @include('layouts.site-top-panel')

    @include('blocks.recent-posts')

    <small style="color:bluegrey">{{ $user_timezone }}<small>

</x-site-layout>