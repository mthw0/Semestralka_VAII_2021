<h2>{{ $post->title }}</h2>
<hr>
<p><strong>Vytvorené: </strong>{{ $post->created_at==null?'Dávno':$post->created_at->diffForHumans() }}</p>
<p><strong>#{{ $post->category }}</strong></p>
<p>{!!  nl2br(e($post->content)) !!}</p>

@auth
    <a href="{{ route('posts.edit', [$post])}}" class="btn btn-sm btn-outline-primary">✎ Upraviť</a>
    <a href="" class="btn btn-sm btn-outline-danger deletePost" data-id="{{ $post->id }}">🗑 Vymazať</a>
@endauth

<script src="{{    URL::asset('js/koment.js') }}"></script>
<hr>
<div id="koment_div">
    <h4>Komentáre</h4>
    @include('posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])


    @guest
        <div class="alert alert-primary" role="alert">
            Komentáre môžu pridávať len prihlásení používatelia!
        </div>
    @endguest
    @auth
        <h5>Pridať komentár</h5>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="body"></textarea>
                <input type="hidden" name="post_id" value="{{ $post->id }}"/>
            </div>
            <div class="form-group right">
                <input type="submit" class="btn btn-success" value="Pridať komentár"/>
            </div>
        </form>
    @endauth
</div>
