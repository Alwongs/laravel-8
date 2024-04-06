<x-site-layout>
    <section class="section section-banner">
        <img src="{{ Storage::url('/site/main.jpg') }}" alt="main image" />
        <h2 class="home-title">Blog</h2>
    </section>

    <main class="main post-page">
        @isset($posts)
            <ul class="blog-list">
                @foreach($posts as $post)
                    <li class="post-page-item">
                        <div class="post-page-item__image">
                            @if ($post->image)
                                <img src="{{ Storage::url($post->image) }}" alt="" title="" />
                            @else
                                <img src="/images/default-post-image.jpg" alt="" >
                            @endif
                        </div>
                        <div class="post-page-item__text">
                            <h3 class="post-page-item__title">{{ $post->post }}</h3>
                            <p class="post-page-item__description">{{ $post->description }}</p>
                            <div class="post-page-item__footer">
                                <span class="post-page-item__date">{{ $post->timestamp }} {{ $post->user_id }}</span>
                                <a href="/">Read more</a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endisset
    </main>

</x-site-layout>