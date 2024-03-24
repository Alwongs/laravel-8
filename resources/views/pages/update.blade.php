<x-admin-layout>
    <header class="header">
        <h1>{{ __('Update') }}</h1>
    </header>

    <form class="form" action="{{ route('events.store') }}" method="POST">
        <input type="hidden" name="redirect_url" value="{$pageData['redirect_url']}" />

        <div class="form__input-block">
            <input name="form_data[title]" type="text" placeholder="title" required />
        </div>        
        <div class="form__textarea-block">
            <textarea name="form_data[description]" placeholder="description"></textarea>
        </div>

        <div class="form__input-block input-date-block">
            @include('components.date-picker')                     
        </div>

        <div class="form__input-block input-type-block">
            <select name="form_data[type]" type="text" placeholder="type" required >
                <option value="unique">unique</option>
                <option value="monthly">monthly</option>
                <option value="annual">annual</option>
            </select>
        </div>  

        <div class="form__btn-block">
            <button class="btn">Back</button>
            <button class="btn btn-green">Save</button>
        </div>
    </form>

</x-admin-layout>


