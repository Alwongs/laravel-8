<x-admin-layout>

    @if(Auth::id() == 1)
        <header class="header">
            <h1>{{ __('Vizits') }}</h1>
        </header>

        <main class="main">

            <div class="notification-block">
                <x-session-status :status="session('status')" :info="session('info')" />
            </div>    
        
            <ul class="manage-list">
                @foreach($vizits as $vizit)
                <li class="manage-list__item"> 

                    <div class="manage-list__item-date-time">{{ date("d.m.Y h:s", strtotime($vizit->created_at->setTimezone('Europe/Ulyanovsk'))) }}</div> 

                    <div class="manage-list__item-ip">{{ $vizit->ip_address }}</div> 

                    <div class="manage-list__item-ip">{{ $vizit->user_agent }}</div> 

                    <form action="#" method="POST">
                        @csrf
                        @method('DELETE')
                        <button href="#" class="cell-btn btn-icon-delete"></button> 
                    </form>     
                </li>        
                @endforeach
            </ul>          

        </main>
    @endif

</x-admin-layout>
