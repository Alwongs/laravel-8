<header class="top-panel">
    <a href="/">Главная</a>      
    
    <form class="top-panel__auth" method="POST" action="{{ route('logout') }}">
        @csrf
        <a 
            href="{{ route('logout') }}" 
            onclick="event.preventDefault();this.closest('form').submit();"
        >
            {{ __('Log Out') }}
        </a>
    </form>
</header>