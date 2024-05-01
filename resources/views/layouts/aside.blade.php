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
            <a href="{{ route('gallery') }}">Gallery</a>
        </nav>
    </div>

    @auth
    <div class="aside-navigation">
        <h2 class="aside-navigation__title">Administation</h2>
        <nav class="aside-navigation__body nav-admin">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('events.index') }}">Events</a>
            <a href="{{ route('posts.index') }}">Posts</a>

            <a href="{{ route('vizits') }}">
                <span>Vizits </span>
                @if(Session::has('vizitCount'))
                    <span style="color:green;fomt-weight:600;">
                        {{ Session::get('vizitCount')}}
                    </span>
                @endif
            </a>
            <a href="{{ route('messages') }}">
                <span>Messages </span>
                @if(Session::has('messageCount'))
                    <span style="color:green;fomt-weight:600;">
                        {{ Session::get('messageCount')}}
                    </span>
                @endif
            </a>
            <a href="{{ route('users') }}">
                <span>users </span>
                @if(Session::has('userCount'))
                    <span style="color:green;fomt-weight:600;">
                        {{ Session::get('userCount')}}
                    </span>
                @endif
            </a>
        </nav>
    </div>
    @endauth
</aside>