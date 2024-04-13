<li class="blog-page-item">

    <h3 class="blog-page-item__title">{{ $post->post }}</h3>
    <div class="blog-page-item__content">
        <div class="blog-page-item__image">
            @if ($post->image)
                <img src="{{ Storage::url($post->image) }}" alt="" title="" />
            @else
                <img src="/images/default-post-image.jpg" alt="" >
            @endif
        </div>
        <div class="blog-page-item__text">
            <div class="blog-page-item__header">
                <a class="blog-page-item__author" href="#">{{ $post->user->name }}</a>
                <a class="blog-page-item__created-at" href="#">{{ $post->created_at }}</a>
            </div>

            <p class="blog-page-item__description">{{ $post->description }}</p>
            
            <a class="blog-page-item__footer" href="{{ route('post', $post->id) }}">Read more</a>
        </div>
    </div>

</li>