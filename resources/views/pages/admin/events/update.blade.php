<x-admin-layout>
    <header class="header">
        <h1>{{ __('Update') }}</h1>
    </header>

    <form class="form" action="{{ route('events.store') }}" method="POST">
        @csrf

        <div class="form__input-block">
            <input name="form_data[event]" type="text" placeholder="title" required />
        </div>    

        <div class="form__textarea-block">
            <textarea name="form_data[description]" placeholder="description"></textarea>
        </div>

        <div class="form__input-block input-date-block">
            @include('components.date-picker')                     
        </div>

        <div class="form__input-block input-type-block">
            <select name="form_data[type]" type="text" placeholder="type" required >
                <option value="U">unique</option>
                <option value="M">monthly</option>
                <option value="A">annual</option>
            </select>
        </div>  

        <div class="form__btn-block">
            <button class="btn">Back</button>
            <button type="submit" class="btn btn-green">Save</button>
        </div>
    </form>

</x-admin-layout>


