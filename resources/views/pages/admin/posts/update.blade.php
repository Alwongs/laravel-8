<x-admin-layout>
    <header class="header">
        <h1>@isset($post){{ __('Update') }}@else{{ __('posts.new_post') }}@endisset</h1>
    </header>

    <main class="main">

        @if(isset($post))
            <form class="form" action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
        @else
            <form class="form" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @endif
            @csrf

            <x-auth-session-status class="notification" :status="session('status')" />

            <input type="hidden" name="return_url" value="{{ $return_url }}">

            <div class="form__input-block">
                <input name="post" type="text" placeholder="post" value="{{ isset($post) ? $post->post : '' }}" required />
            </div>    

            <div class="form__textarea-block">
                <textarea name="description" placeholder="description">{{ isset($post) ? $post->description : '' }}</textarea>
            </div>

            @isset($post)
            <div class="form__image-block">
                <img src="{{ Storage::url($post->image) ?: '' }}" alt="{{ $post->image }}" />
            </div>
            @endisset

            <div class="form__file-block">
                <input id="input_file" name="image" type="file" />
                <p id="error" style="color: red;"></p>
            </div>  



            <div class="form__btn-block">
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


