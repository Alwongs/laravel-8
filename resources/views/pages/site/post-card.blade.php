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
            <div class="post-page-item__header">
                <a class="post-page-item__author" href="#">{{ $post->user->name }}</a>
                <a class="post-page-item__created-at" href="#">{{ $post->created_at }}</a>
            </div>

            <p class="post-page-item__description">{{ $post->description }}</p>
            
            <a class="post-page-item__footer" href="{{ route('post', $post->id) }}">Read more</a>
        </div>
    </div>

</li>