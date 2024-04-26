<aside id="aside" class="website__aside aside">
    <div class="aside__btn-block">
        <button id="aside-btn-close-menu" class="aside__btn-close-menu">
            Close
        </button>
    </div>

    <div class="aside-navigation">
        <h2 class="aside-navigation__title">Navigation</h2>
        <nav class="aside-navigation__body nav-site">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('blog') }}">Blog</a>
            <a style="color:grey;" href="#">Gallery <small style="color:grey;">(not ready yet)</small></a>
        </nav>
    </div>

    @auth
    <div class="aside-navigation">
        <h2 class="aside-navigation__title">Administation</h2>
        <nav class="aside-navigation__body nav-admin">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('events.index') }}">Events</a>
            <a href="{{ route('posts.index') }}">Posts</a>
            <a href="{{ route('vizits') }}">Vizits</a>
            <a href="{{ route('messages') }}">
                <span>Messages </span>
                @if(Session::has('messageCount'))
                    <span style="color:green;fomt-weight:600;">
                        {{ Session::get('messageCount')}}
                    </span>
                @endif
            </a>
        </nav>
    </div>
    @endauth
</aside>