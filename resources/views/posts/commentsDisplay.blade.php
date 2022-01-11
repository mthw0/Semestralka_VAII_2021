@foreach($comments as $comment)

    <div class="display-comment card oramovanie_male koment" @if($comment->parent_id != null) @endif>
        <div class="row-cols-2">
            <img src="{{URL::asset('img/img_550783.png')}}" alt="Avatar" class="avatar">
            <strong> {{ $comment->user->name ?? '[Deleted]' }} </strong>
        </div>
        <p class="koment_text">{{ $comment->body }}</p>
        @auth
            <form method="post" action="{{ route('comments.store') }}">
                @csrf
                <div class="form-group right">
                    <a onclick="showComment({{ $comment->id }})" class=""
                       id='koment_answer{{ $comment->id }}'><u> Odpovedať používateľovi
                            <strong> {{ $comment->user->name ?? '[Deleted]' }} </strong></u></a>
                </div>
                <div class="form-group" style="display: none" id='koment_input{{ $comment->id }}'>
                    <input type="text" name="body" class="form-control"/>
                    <input type="hidden" name="post_id" value="{{ $post_id }}"/>
                    <input type="hidden" name="parent_id" value="{{ $comment->id }}"/>
                </div>
                <div class="form-group row row-cols-2">
                    <input style="display: none" id='koment_send{{ $comment->id }}' type="submit"
                           class="btn btn-outline-success" value="Odoslať">
                    <a style="display: none" id='koment_hide{{ $comment->id }}'
                       onclick="hideComment({{ $comment->id }})" class="btn btn-outline-danger">
                        Zrušiť</a>
                </div>

            </form>
            <form method="post" action="{{ route('comments.destroy', $comment->id) }}">
                @csrf @method('delete')
                {{--<a href="" class="btn btn-sm btn-outline-primary">✎ Upraviť</a>--}}
                <button type="submit" class="btn btn-sm btn-outline-danger">🗑 Vymazať</button>
            </form>
        @endauth
        @include('posts.commentsDisplay', ['comments' => $comment->replies])
    </div>

@endforeach
