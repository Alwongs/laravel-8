@isset($posts)
    <ul class="recent-posts-block">
        @foreach ($posts as $post)
            <li class="post-card">
                <h3 class="post-card__title">{{ $post->post }}</h3>
                <p class="post-card__name">{{ $post->user->name }}</p>
                <p class="post-card__date">{{ $post->created_at }}</p>
                <a class="post-card__image" href="{{ route('post', $post->id) }}">
                    @if ($post->image)
                        <img src="{{ Storage::url($post->image) }}" alt="" title="" />
                    @else
                        <img src="{{ Storage::url('/site/no-picture.jpg') }}" alt="" >
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
@endisset