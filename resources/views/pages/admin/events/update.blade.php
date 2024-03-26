<x-admin-layout>
    <header class="header">
        <h1>@isset($event){{ __('Update') }}@else{{ __('New event') }}@endisset</h1>
    </header>

    @if(isset($event))
        <form class="form" action="{{ route('events.update', $event) }}" method="POST">
            @method('PUT')
    @else
        <form class="form" action="{{ route('events.store') }}" method="POST">
    @endif
        @csrf

        <div class="form__input-block">
            <input name="form_data[event]" type="text" placeholder="title" value="{{ isset($event) ? $event->event : '' }}" required />
        </div>    

        <div class="form__textarea-block">
            <textarea name="form_data[description]" placeholder="description">{{ isset($event) ? $event->description : '' }}</textarea>
        </div>

        <div class="form__input-block input-date-block">
            @include('components.date-picker')                     
        </div>

        <div class="form__input-block input-type-block">
            <select name="form_data[type]" type="text" placeholder="type" required >
                @if(isset($event) && $event->type == 'U')<option value="U" selected>unique</option>@else<option value="U">unique</option>@endif                    
                @if(isset($event) && $event->type == 'M')<option value="M" selected>monthly</option>@else<option value="M">monthly</option>@endif
                @if(isset($event) && $event->type == 'A')<option value="A" selected>annual</option>@else<option value="A">annual</option>@endif
            </select>
        </div>  

        <div class="form__btn-block">
            <button class="btn">Back</button>
            <button type="submit" class="btn btn-green">
                @if(isset($event))
                    Update
                @else
                    Save
                @endif
            </button>
        </div>
    </form>

</x-admin-layout>


