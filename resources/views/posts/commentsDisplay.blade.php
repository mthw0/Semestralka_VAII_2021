@foreach($comments as $comment)

    <div class="display-comment card oramovanie_male" @if($comment->parent_id != null) @endif>
        <strong> {{ $comment->user->name ?? '[Deleted]' }} </strong>
        <p>{{ $comment->body }}</p>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            @auth
                <div class="form-group">
                    <a onclick="showComment({{ $comment->id }})" class="btn btn-success"
                       id='koment_answer{{ $comment->id }}'> Odpovedať</a>
                </div>

                <div class="form-group" style="display: none" id='koment_input{{ $comment->id }}'>
                    <input type="text" name="body" class="form-control"/>
                    <input type="hidden" name="post_id" value="{{ $post_id }}"/>
                    <input type="hidden" name="parent_id" value="{{ $comment->id }}"/>
                </div>
                <div class="form-group row row-cols-2">

                    <input style="display: none" id='koment_send{{ $comment->id }}' type="submit"
                       class="btn btn-success" value="Odoslať">

                    <a style="display: none" id='koment_hide{{ $comment->id }}'
                       onclick="hideComment({{ $comment->id }})" class="btn btn-danger">
                        Zrušiť</a>
                </div>
            @endauth
        </form>
        @include('posts.commentsDisplay', ['comments' => $comment->replies])
    </div>

@endforeach
