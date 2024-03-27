<x-admin-layout>
    <header class="header">
        <h1>@isset($event){{ __('Update') }}@else{{ __('posts.new_post') }}@endisset</h1>
    </header>

    <main class="main ">



        @if(isset($post))
            <form class="form" action="{{ route('posts.update', $post) }}" method="POST">
                @method('PUT')
        @else
            <form class="form" action="{{ route('posts.store') }}" method="POST">
        @endif
            @csrf

            <x-auth-session-status class="notification" :status="session('status')" />

            <input type="hidden" name="return_url" value="{{ $return_url }}">

            <div class="form__input-block">
                <input name="form_data[post]" type="text" placeholder="title" value="{{ isset($post) ? $post->post : '' }}" required />
            </div>    

            <div class="form__textarea-block">
                <textarea name="form_data[description]" placeholder="description">{{ isset($post) ? $event->description : '' }}</textarea>
            </div>

            <div class="form__btn-block">
                <button class="btn">Back</button>
                <button type="submit" class="btn btn-green">
                    @if(isset($post))
                        Update
                    @else
                        Save
                    @endif
                </button>
            </div>
        </form>

    </main>

</x-admin-layout>


