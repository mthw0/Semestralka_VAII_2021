<div class="karta">
    <div class="">
        <h1 class="nadpis">{{ $post->title }}</h1>
        <hr>
        <p><span class="created">Vytvorené: </span>{{ $post->created_at==null?'Dávno':$post->created_at->diffForHumans() }}</p>
        <p><span class="created">#</span>{{ $post->category }}</p>
        <p>{!! nl2br(e($post->content)) !!}</p>

        @auth
            <form method="post" action="{{ route('posts.destroy', [$post->slug]) }}">
                @csrf @method('delete')
                <a href="{{ route('posts.edit', [$post->slug])}}" class="btn btn-sm btn-outline-primary">✎ Upraviť</a>
                <button type="submit" class="btn btn-sm btn-outline-danger">🗑 Vymazať</button>

            </form>
        @endauth

    </div>

    <script src="{{    URL::asset('js/koment.js') }}"></script>
    <hr>
    <div class="">
        <h4>Komentáre</h4>
        @include('posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
        <hr/>
        <h5>Pridať komentár</h5>
        @guest
            <div class="alert alert-primary" role="alert">
                Komentáre môžu pridávať len prihlásení používatelia!
            </div>
        @endguest
        @auth
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="body"></textarea>
                <input type="hidden" name="post_id" value="{{ $post->id }}" />
            </div>
            <div class="form-group right">
                <input type="submit" class="btn btn-success" value="Pridať komentár" />
            </div>
        </form>
        @endauth
    </div>
</div>
