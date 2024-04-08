<li class="post-page-item">

    <h3 class="post-page-item__title">{{ $post->post }}</h3>
    <div class="post-page-item__content">
        <div class="post-page-item__image">
            @if ($post->image)
                <img src="{{ Storage::url($post->image) }}" alt="" title="" />
            @else
                <img src="/images/default-post-image.jpg" alt="" >
            @endif
        </div>
        <div class="post-page-item__text">
            <p class="post-page-item__description">{{ $post->description }}</p>
            <div class="post-page-item__footer">
                <span class="post-page-item__date">{{ $post->timestamp }} {{ $post->user->name }}</span>
                <a href="/">Read more</a>
            </div>
        </div>
    </div>

</li>