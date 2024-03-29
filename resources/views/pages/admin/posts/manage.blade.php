<x-admin-layout>
    <header class="header">
        <h1>{{ __('Posts') }}</h1>
    </header>

    <main class="main">

        <div class="add-btn-group">
            <a class="add-btn btn-icon-add" title="add new post" href="{{ route('posts.create') }}?return_url=posts.index"></a>
        </div> 

        <ul class="manage-list">
            @foreach($posts as $post)
            <li class="manage-list__item">
                <div class="manage-list__item-image">
                    <img height="44" src="{{ Storage::url($post->image) ?: '' }}" alt="{{ $post->image }}" />
                </div>  

                <div class="cell__date">{{ date("d.m.Y", strtotime($post->created_at)) }}</div>

                <div class="cell__title">{{ $post->post }}</div> 

                <div class="cell__type">
                    @if ($post->type == "U")
                        unique
                    @elseif ($post->type == "M")
                        monthly
                    @elseif ($post->type == "A")
                        annual
                    @endif
                </div>

                <a href="{{ route('posts.edit', $post->id) }}" class="cell-btn btn-icon-edit"></a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button href="{{ route('posts.destroy', $post->id) }}" class="cell-btn btn-icon-delete"></button> 
                </form>     
            </li>        
            @endforeach
        </ul>        

    </main>

</x-admin-layout>
