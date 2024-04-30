<x-site-layout>
    <section class="section-banner">
        <img src="{{ Storage::url('/site/main.jpg') }}" alt="main image" />
        <h2 class="home-title">Profile</h2>
    </section>

    <section class="section">
        <div class="user-info container">
            <h2>{{ $user->name }}</h2>
            <p>{{ $user->email }}</p>
            <div class="btn-block">
                @if($user->id == 1)
                    <a class="btn" href="{{ route('dashboard') }}">Dashboard</a>
                @endif
            </div>
        </div>
    </section>


</x-site-layout>