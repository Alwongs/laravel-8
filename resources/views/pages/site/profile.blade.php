<x-site-layout>

    <section class="section-banner">
        <img src="{{ Storage::url('/site/main.jpg') }}" alt="main image" />
        <h2 class="home-title">Profile</h2>
    </section>

    <section class="section">
        <div class="user-info container">
            <div class="profile-block">
                <h2>{{ $user->name }}</h2>
                <p>{{ $user->email }}</p>
            </div>

            <div class="btn-block">
                @if(Auth::user()->type == 'A')
                    <a class="btn" href="{{ route('dashboard') }}">Dashboard</a>
                @endif
            </div>
        </div>
    </section>

</x-site-layout>