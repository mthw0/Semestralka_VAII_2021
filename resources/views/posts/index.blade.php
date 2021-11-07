@include('menu')
<script>
    document.title=document.title+" - "+"Novinky";
</script>

<div class="container">
    @auth
    <div class="tlacidla">
        <a href="{{ route('posts.create') }}" class="btn btn-success">
            <strong>+</strong>
        </a>
    </div>
    @endauth
    @foreach ($posts  as $post)
        @include('posts.show')
    @endforeach


</div>
