@include('menu')
<div class="container">
    @auth
    <div class="tlacidla">
        <a href="{{ route('posts.create') }}" class="btn btn-success">
            <strong>Nový príspevok</strong>
        </a>
    </div>
    @endauth
    @foreach ($posts  as $post)
        @include('posts.show')
    @endforeach


</div>
