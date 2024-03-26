
<div class="dashboard-card">
    <h2 class="dashboard-card__title">Dashboard-card</h2>
    @isset($events)
        <ul class="dashboard-card__content-list">
            @foreach($events as $event)
                <li class="dashboard-card__item dashboard-card-item">

                    <a class="dashboard-card-item__title" href="#" title="">{{ $event->event }}</a>

                    <div class="dashboard-card-item__btn-block"> 
                        <a href=""  class="cell-btn btn-icon-edit"></a>

                            <a href="" class="cell-btn btn-icon-delete"></a>

                            <a href="" class="cell-btn btn-icon-postpone"></a>

                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p class="dashboard-card__content-empty">-- cписок пуст --</p>
    @endisset
</div>