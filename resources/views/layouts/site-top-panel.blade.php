<header class="top-panel">
    <div class="">
        <a href="/">Главная</a>
    </div>   
    
    <nav class="">
        <a href="/dashboard">Dashboard</a> 
        <a href="/events">Events</a> 
        <a href="/posts">Posts</a> 
    </nav>
    
    <div class="">
        @auth
            <a href="#">auth.name</a>
        @else
            <a href="{{ route('login') }}">Login</a>   
            <a href="{{ route('register') }}" class="">Register</a>
        @endauth
    </div>
</header>