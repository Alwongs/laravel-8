<header class="top-panel">
    <div class="container container-flex container-header">
        <div class="top-panel__logo">
            <a href="/">Главная</a>
        </div>        
        
        <div class="top-panel__auth auth-block">
            <div class="auth-block__display">
                @auth
                    <a href="/users/profile?return_url={$return_url}">auth.name</a>
                    <div id="auth-btn" class="auth-block__trigger"></div>
                @else
                    <a href="/users/login?return_url={$return_url}">Login</a>            
                @endauth

            </div>

            <nav id="auth-navigation" class="auth-block__navigation">
                <a href="/dashboard">Dashboard</a> 
                <a href="/events">Events</a> 
                <a href="/posts">Posts</a> 
                <a href="/users">Users</a> 
                <a href="/users/logout?return_url={$return_url}">Logout</a>
            </nav>
        </div>
    </div>
</header>