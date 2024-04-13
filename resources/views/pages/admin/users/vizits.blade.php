<x-admin-layout>

    @if(Auth::id() == 1)
        <header class="header">
            <h1>{{ __('Vizits') }}</h1>
        </header>

        <main class="main">

            <div class="notification-block">
                <x-session-status :status="session('status')" :info="session('info')" />
            </div>   
            @if(count($vizits) > 0)
            <div class="btn-block">
                <a class="btn btn-red" title="clear table" href="{{ route('clear-vizits') }}?return_url=vizits">
                    Clear table
                </a>
            </div> 
            @endif
        
            <ul class="manage-list">
                @foreach($vizits as $vizit)
                <li class="manage-list__item"> 

                    <div class="manage-list__item-date-time" title="{{ $vizit->user_agent }}">
                    {{ $vizit->created_at->setTimezone('Europe/Ulyanovsk')->format("d.m.Y H:i") }}
                    </div> 

                    <div class="manage-list__item-ip" title="{{ $vizit->user_agent }}">
                        {{ $vizit->ip_address }}
                    </div>   

                </li>        
                @endforeach
            </ul>          

        </main>
    @endif

</x-admin-layout>
