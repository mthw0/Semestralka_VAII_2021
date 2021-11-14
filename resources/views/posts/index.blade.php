@include('menu')
<script>
    document.title=document.title+" - "+"Novinky";
</script>

<div class="container">
    <h1>Novinky</h1>
    <hr>

    @auth
    <div class="tlacidla">
        <a href="{{ route('posts.create') }}" class="btn btn-outline-success">
            <strong>+</strong>
        </a>
    </div>
    @endauth

    @foreach ($posts  as $post)
        @include('posts.show')
    @endforeach


</div>
