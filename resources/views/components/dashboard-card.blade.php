<div class="dashboard-card {{ $class  }}">
    <h2 class="dashboard-card__title">{{ $title }}</h2>
    @isset($events)
        <ul class="dashboard-card__content-list">
            @foreach($events as $event)
                <li class="dashboard-card__item dashboard-card-item">

                    <a class="dashboard-card-item__title" href="#" title="">{{ $event->event }}</a>

                    <div class="dashboard-card-item__btn-block"> 
                        <a href="{{ route('events.edit', $event->id) }}"  class="cell-btn btn-icon-edit"></a>
                        @if($event->type == 'U')
                            <a href="{{ route('events.destroy', $event->id) }}" class="cell-btn btn-icon-delete"></a>
                        @else
                            <a href="{{ route('events.postpone', $event->id) }}" class="cell-btn btn-icon-postpone"></a>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p class="dashboard-card__content-empty">-- cписок пуст --</p>
    @endisset
</div>