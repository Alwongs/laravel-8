<x-admin-layout>
    <header class="header">
        <h1>{{ __('Events') }}</h1>
    </header>

    <main class="main">

        <div class="add-btn-group">
            <a class="add-btn btn-icon-add" title="add new post" href="{{ route('events.create') }}"></a>
            <!-- <a class="add-btn btn-icon-delete" title="add new post" href="#"></a> -->
        </div> 

        <ul class="manage-list">
            @foreach($events as $event)
            <li class="manage-list__item">
                <div class="cell__date">{{ $event->timestamp }}</div>

                <div class="cell__title">{{ $event->event }}</div> 

                <div class="cell__type">
                    @if ($event->type == "U")
                        unique
                    @elseif ($event->type == "M")
                        monthly
                    @elseif ($event->type == "A")
                        annual
                    @endif
                </div>

                <a href="{{ route('events.edit', $event->id) }}" class="cell-btn btn-icon-edit"></a>
                <a href="{{ route('events.destroy', $event->id) }}" class="cell-btn btn-icon-delete"></a>      
            </li>        
            @endforeach
        </ul>        

    </main>

</x-admin-layout>
