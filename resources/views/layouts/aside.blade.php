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
    </nav>
</aside>