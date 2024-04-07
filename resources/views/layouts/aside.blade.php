<aside id="aside" class="website__aside aside">
    <div class="aside__btn-block">
        <button id="aside-btn-close-menu" class="aside__btn-close-menu">
            Close
        </button>

    </div>
    <nav class="aside-navigation">
        <a href="{{ route('home') }}">Site</a>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('events.index') }}">Events</a>
        <a href="{{ route('posts.index') }}">Posts</a>
    </nav>
    @auth
        <hr>
        </br>
        <a href="{{ route('clear-cache') }}">Clear cache</a>
    @endauth
</aside>