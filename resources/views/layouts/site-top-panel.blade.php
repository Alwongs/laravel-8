<header class="top-panel">
    <div class="top-panel__logo">
        <a href="/">Главная</a>
    </div>   
    
    <nav class="top-panel__navigation">
        <a href="/dashboard">Dashboard</a> 
        <a href="/events">Events</a> 
        <a href="{{ url('blog') }}">Blog</a> 
    </nav>
    
    <div class="top-panel__auth">
        @auth
            <a href="#">{{ Auth::user()->email }}</a>
        @else
            <a href="{{ route('login') }}">Login</a>   
            <!-- <a href="{{ route('register') }}" class="">Register</a> -->
        @endauth
    </div>
</header>